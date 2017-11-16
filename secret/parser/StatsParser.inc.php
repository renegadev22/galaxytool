<?php
/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*/

class StatsParser extends XMLParserGlobal{

	private $alliance_names_2_ids  = array();
	private $player_names_2_ids    = array();
	private $collected_playernames = array();
	private $collected_allynames   = array();

	function __construct($allytable,$playertable,$utablename,$universe) {
		$this->xml_schema = "xml_schema/stats.xsd";
		//  call super constructor
		$result = parent::__construct($allytable,$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}

		return $this;
	}

	public function insert_data($xml_content) {
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_stats );
		if ($xdoc === false) {
			return false;
		}

		// stats header attribute(s)
		$stats_header = $xdoc->getElementsByTagName("stats_header"); // there is exactly one
		$stats_type   = $stats_header->item(0)->getAttribute("type");
		unset($stats_header);

		if ($this->userid == "" || $this->userid == 0) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, "Userid not determined - should not happen");
			return false;
		}

		if ($this->content_type == XMLParserGlobal::content_type_player_stats ||
			$this->content_type == XMLParserGlobal::content_type_player_highscore ) {
			$result = $this->insert_player_stats($xdoc,$stats_type,$this->userid);
		} else {
			$result = $this->insert_ally_stats($xdoc,$stats_type,$this->userid);
		}

		// add error or success messages
		$this->check_result($result);

		return $result;
	}

	private function insert_player_stats($xdoc,$stats_type,$userid) {
		$players = $xdoc->getElementsByTagName("player");
		$players_data = array();

		foreach($players as $player) {
			// extract information from XML file
			$player_data = $this->get_player_data($player);
			// store results
			array_push($players_data, $player_data);
		}
		unset($players);
		unset($xdoc);

		if ($this->update_players_at_database($players_data,$stats_type,$userid)) {
			return true;
		} else {
			return false;
		}
	}

	private function insert_ally_stats($xdoc,$stats_type,$userid) {
		$allies = $xdoc->getElementsByTagName("ally");
		$allies_data = array();
		foreach($allies as $ally) {
			// extract information from XML file
			$ally_data = $this->get_ally_data($ally);
			// store results
			array_push($allies_data, $ally_data);
		}
		unset($allies);
		unset($xdoc);

		if ($this->update_alliances_at_database($allies_data,$stats_type,$userid)) {
			return true;
		} else {
			return false;
		}
	}


	private function get_player_data($player_DOMNode) {
		$return_value = array();
		$return_value["rank"]       = $player_DOMNode->getAttribute("rank");
		$return_value["playername"] = trim($player_DOMNode->getAttribute("playername"));
		$return_value["playerid"]   = $player_DOMNode->getAttribute("playerid");
		$return_value["galaxy"]     = $player_DOMNode->getAttribute("galaxy");
		$return_value["system"]     = $player_DOMNode->getAttribute("system");
		$return_value["planet"]     = trim($player_DOMNode->getAttribute("planet"));
		$return_value["allyname"]   = trim($player_DOMNode->getAttribute("allyname"));
		$return_value["allyid"]     = $player_DOMNode->getAttribute("allyid");
		$return_value["score"]      = $player_DOMNode->getAttribute("score");
		$return_value["ships"]      = $player_DOMNode->getAttribute("ships");

		return $return_value;
	}

	private function get_ally_data($ally_xml) {
		$return_value = array();
		$return_value["rank"]       = $ally_xml->getAttribute("rank");
		$return_value["allyname"]   = trim($ally_xml->getAttribute("allyname"));
		$return_value["member"]     = $ally_xml->getAttribute("member");
		$return_value["allyid"]     = $ally_xml->getAttribute("allyid");
		$return_value["score"]      = $ally_xml->getAttribute("score");

		return $return_value;
	}

	private function update_players_at_database(array $players_data,$stats_type,$userid) {
		$existing_alliances = $this->get_existing_ally_names_and_ids($players_data);
		// insert or update alliances first
		$query_collection = "INSERT INTO $this->allytable (id, user_id, last_update, allyname, ogame_allyid) VALUES ";
		$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), last_update=VALUES(last_update), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";

		$run_query = false;
		for ($i=0; $i<count($players_data); $i++) {
			$allyname     = trim($players_data[$i]['allyname']);
			$ogame_allyid = trim($players_data[$i]['allyid']);
			if (!empty($allyname)) {
				$run_query = true;

				// check if entry exists at database
				if (!empty($players_data[$i]['allyid']) && intval($players_data[$i]['allyid']) > 0) {
					if (isset($existing_alliances["allyid_to_id"][$players_data[$i]['allyid']])) {
						// ogame ally_id already present at galaxytool
						$galaxytool_id = $existing_alliances["allyid_to_id"][$players_data[$i]['allyid']];
					} else {
						// ogame ally_id provided but onknown to galaxytool
						if (isset($existing_alliances["allyname_to_id"][$players_data[$i]['allyname']])) {
							// at least allyname was known to DB - update with ogame alliance ID but keep existing galaxytool ID
							$galaxytool_id = $existing_alliances["allyname_to_id"][$players_data[$i]['allyname']];
						} else {
							// neither ally_id nor allyname known at galaxytool
							$galaxytool_id = "NULL";
						}
					}
				} else {
					// ogame_allyid not provided - ally with equal name exists?
					if (isset($existing_alliances["allyname_to_id"][$players_data[$i]['allyname']])) {
						// allyname was known to DB - update with ogame alliance ID but keep existing galaxytool ID
						$galaxytool_id = $existing_alliances["allyname_to_id"][$players_data[$i]['allyname']];
					} else {
						// allyname not known at galaxytool
						$galaxytool_id = "NULL";
					}
				}

				// handle ogame ally_id
				if (!empty($players_data[$i]['allyid']) && intval($players_data[$i]['allyid']) > 0) {
					$ogame_allyid = DB::getDB()->quote($players_data[$i]['allyid']); // ogame_allyid
				} else {
					$ogame_allyid = "NULL"; // no ogame_allyid -> own alliance
				}

				$query_collection .= "(".$galaxytool_id.", ";  						// galaxytool id
				$query_collection .= DB::getDB()->quote($userid).", ";    // user id
				$query_collection .= "NOW(), ";                                     // last_update
				$query_collection .= DB::getDB()->quote($allyname).", "; // allyname
				$query_collection .= $ogame_allyid."),"; 						    // ogame_allyid

			}
		}

		if ($run_query === true) {
			$query_collection = substr($query_collection,0,strlen($query_collection)-1);
			$res = $this->exec($query_collection.$query_end);
			if ($res === false) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting and updating allynames");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
		}

		// determine all galaxytool alliance IDs
		$alliance_names_2_ids = array();
		$query = "SELECT id, allyname FROM $this->allytable WHERE allyname IN (";
		$run_query = false;
		for ($i=0; $i<count($players_data); $i++) {
			$allyname = trim($players_data[$i]['allyname']);
			if (!empty($allyname)) {
				$query .= DB::getDB()->quote($allyname).", ";
				$alliance_names_2_ids[$allyname] = "";
				$run_query = true;
			}
		}

		if ($run_query === true) {
			$query = substr($query,0,strlen($query)-2).")";
			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while collecting allynames");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$alliance_names_2_ids[$line->allyname] = $line->id;
			}
		}

		// default for empty alliance name
		$alliance_names_2_ids[""] = 0;

		// determine all players which are at the database and have an ogame playerid
		$query = "SELECT id,playername,ogame_playerid FROM $this->playertable WHERE (ogame_playerid IS NOT NULL OR ogame_playerid != 0) AND ogame_playerid IN (";
		$players_query = "";
		for ($i=0; $i<count($players_data); $i++) {
			if ($players_data[$i]['playerid'] > 0) {
				$query .= DB::getDB()->quote($players_data[$i]['playerid']).",";
			}

			if ($players_data[$i]['playername'] != "") {
				$players_query .= DB::getDB()->quote($players_data[$i]['playername']).",";
			}
		}
		// remove the , behind the last query part
		$query         = substr($query,0,strlen($query)-1);
		$players_query = substr($players_query,0,strlen($players_query)-1);
		// combine to one query selection
		$query .= ") OR playername IN (".$players_query.")";


		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while collecting players with ogame playerid");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$player_names_2_ids[$line->playername]["id"] = $line->id;
			$player_names_2_ids[$line->playername]["ogame_id"] = $line->ogame_playerid;

			// the playername might have changed meanwhile
			$ogame_playerid_2_galaxytool_id[$line->ogame_playerid] = $line->id;
		}


		// determine the player itself as he might have no ogame playerid at stats (but possibly at the galaxytool)
		$query = "SELECT id,playername,ogame_playerid FROM $this->playertable WHERE playername IN (";
		$j = 0;
		for ($i=0; $i<count($players_data); $i++) {
			$players_data[$i]['playername'] = trim($players_data[$i]['playername']);
			if ($players_data[$i]['playerid'] == 0) {
				$query .= DB::getDB()->quote($players_data[$i]['playername']).",";
				$j++;
			}
		}
		if ($j > 0) {
			// remove the , behind the last query part
			$query = substr($query,0,strlen($query)-1);
			$query .= ")";

			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while collecting player without ogame playerid");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$player_names_2_ids[$line->playername]["id"] = $line->id;
				$player_names_2_ids[$line->playername]["ogame_id"] = $line->ogame_playerid;
			}
		}

		$query_1 = false;
		$query_2 = false;

		switch ($stats_type) {
			case 'score':
			case 'points':
				$query_collection = "INSERT INTO $this->playertable (id,user_id,rank,alliance_id,points,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,rank,alliance_id,points,last_stats_update,playername,homegalaxy,homesystem,homeplanet) VALUES ";
				break;
			case 'fleet': // has also SHIPS as attribute!
				$query_collection = "INSERT INTO $this->playertable (id,user_id,frank,alliance_id,fpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid,ships) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,frank,alliance_id,fpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ships) VALUES ";
				break;
			case 'research':
				$query_collection = "INSERT INTO $this->playertable (id,user_id,rrank,alliance_id,rpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,rrank,alliance_id,rpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet) VALUES ";
				break;
			case 'economy':
				$query_collection = "INSERT INTO $this->playertable (id,user_id,erank,alliance_id,epoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,erank,alliance_id,epoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet) VALUES ";
				break;
			case 'fleet_lost':
				$query_collection = "INSERT INTO $this->playertable (id,user_id,flrank,alliance_id,flpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,flrank,alliance_id,flpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet) VALUES ";
				break;
			case 'fleet_built':
				$query_collection = "INSERT INTO $this->playertable (id,user_id,fbrank,alliance_id,fbpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,fbrank,alliance_id,fbpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet) VALUES ";
				break;
			case 'fleet_destroyed':
				$query_collection = "INSERT INTO $this->playertable (id,user_id,fdrank,alliance_id,fdpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,fdrank,alliance_id,fdpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet) VALUES ";
				break;
			case 'honor_points':
				$query_collection = "INSERT INTO $this->playertable (id,user_id,hrank,alliance_id,hpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";
				$query_collection2 = "INSERT INTO $this->playertable (id,user_id,hrank,alliance_id,hpoints,last_stats_update,playername,homegalaxy,homesystem,homeplanet) VALUES ";
				break;
		}

		for ($i=0; $i<count($players_data); $i++) {
			$allyname = trim($players_data[$i]['allyname']);

			if ($stats_type != 'honor_points' && $players_data[$i]['score'] < 0) {
				// ensure non-negative values for all stats except honor points
				$players_data[$i]['score'] = 0;
			}

			if (empty($players_data[$i]['playerid']) && $this->own_ogame_playerid > 0) {
				$players_data[$i]['playerid'] = $this->own_ogame_playerid;
			}

			// add query data (id,(x)rank,alliance_id,(x)points,last_stats_update,playername,ogame_playerid)
			if (!empty($players_data[$i]['playerid'])) {
				//echo "Ogame player ID: ".$players_data[$i]['playerid']." ";
				// ogame playerid known here
				if (isset($player_names_2_ids[$players_data[$i]['playername']]["ogame_id"])) {
					//echo " |".$player_names_2_ids[$players_data[$i]['playername']]["ogame_id"]."| ";
					// database contains that player with ogame playerid
					//echo "database contains that player with ogame playerid ".$players_data[$i]['playerid']."\n";
					$query_2 = true;
					$query_collection2 .= " (".$player_names_2_ids[$players_data[$i]['playername']]["id"].", $userid, ".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_names_2_ids[$allyname]).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']);
					if ($stats_type == 'fleet') {
						$query_collection2 .= ",".DB::getDB()->quote($players_data[$i]['ships'])."), ";
					} else {
						$query_collection2 .= "), ";
					}
				} elseif (isset($ogame_playerid_2_galaxytool_id[$players_data[$i]['playerid']])) {
					//echo "playername changed\n";

					$query_2 = true;
					$query_collection2 .= " (".$ogame_playerid_2_galaxytool_id[$players_data[$i]['playerid']].", $userid, ".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_names_2_ids[$allyname]).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']);
					if ($stats_type == 'fleet') {
						$query_collection2 .= ",".DB::getDB()->quote($players_data[$i]['ships'])."), ";
					} else {
						$query_collection2 .= "), ";
					}

				} elseif (isset($player_names_2_ids[$players_data[$i]['playername']]["id"])) {
					// player is included without ogame playerid
					//echo "player ".$player_names_2_ids[$players_data[$i]['playername']]["id"]." is included without ogame playerid\n";
					$query_1 = true;
					$query_collection .= " (".$player_names_2_ids[$players_data[$i]['playername']]["id"].",$userid,".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_names_2_ids[$allyname]).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']).",'".intval($players_data[$i]['playerid'])."'";
					if ($stats_type == 'fleet') {
						$query_collection .= ",".DB::getDB()->quote($players_data[$i]['ships'])."), ";
					} else {
						$query_collection .= "), ";
					}
				} else {
					// player new to database
					//echo "player new to database\n";
					$query_1 = true;
					$query_collection .= " (NULL,$userid,".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_names_2_ids[$allyname]).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']).",'".intval($players_data[$i]['playerid'])."'";
					if ($stats_type == 'fleet') {
						$query_collection .= ",".DB::getDB()->quote($players_data[$i]['ships'])."), ";
					} else {
						$query_collection .= "), ";
					}
				}
			} else {
				// ogame playerid unknown (player itself)
				if (isset($player_names_2_ids[$players_data[$i]['playername']]["id"])) {
					// player already at database
					//echo "player already at database\n";
					$query_2 = true;
					$query_collection2 .= " (".$player_names_2_ids[$players_data[$i]['playername']]["id"].",$userid, ".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_names_2_ids[$allyname]).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']);
					if ($stats_type == 'fleet') {
						$query_collection2 .= ",".DB::getDB()->quote($players_data[$i]['ships'])."), ";
					} else {
						$query_collection2 .= "), ";
					}
				}
			}
		}

		// remove last "," at the queries
		$query_collection = substr($query_collection,0,strlen($query_collection)-2);
		$query_collection2 = substr($query_collection2,0,strlen($query_collection2)-2);

		switch ($stats_type) {
			case 'score':
			case 'points':
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), rank=VALUES(rank), alliance_id=VALUES(alliance_id), points=VALUES(points), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), rank=VALUES(rank), alliance_id=VALUES(alliance_id), points=VALUES(points), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet) ";
				break;
			case 'fleet': // has also SHIPS as attribute!
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),frank=VALUES(frank), alliance_id=VALUES(alliance_id), fpoints=VALUES(fpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid), ships=VALUES(ships) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),frank=VALUES(frank), alliance_id=VALUES(alliance_id), fpoints=VALUES(fpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ships=VALUES(ships) ";
				break;
			case 'research':
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),rrank=VALUES(rrank), alliance_id=VALUES(alliance_id), rpoints=VALUES(rpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),rrank=VALUES(rrank), alliance_id=VALUES(alliance_id), rpoints=VALUES(rpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet) ";
				break;
			case 'economy':
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),erank=VALUES(erank), alliance_id=VALUES(alliance_id), epoints=VALUES(epoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),erank=VALUES(erank), alliance_id=VALUES(alliance_id), epoints=VALUES(epoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet) ";
				break;
			case 'fleet_lost':
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),flrank=VALUES(flrank), alliance_id=VALUES(alliance_id), flpoints=VALUES(flpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),flrank=VALUES(flrank), alliance_id=VALUES(alliance_id), flpoints=VALUES(flpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet) ";
				break;
			case 'fleet_built':
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),fbrank=VALUES(fbrank), alliance_id=VALUES(alliance_id), fbpoints=VALUES(fbpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),fbrank=VALUES(fbrank), alliance_id=VALUES(alliance_id), fbpoints=VALUES(fbpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet) ";
				break;
			case 'fleet_destroyed':
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),fdrank=VALUES(fdrank), alliance_id=VALUES(alliance_id), fdpoints=VALUES(fdpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),fdrank=VALUES(fdrank), alliance_id=VALUES(alliance_id), fdpoints=VALUES(fdpoints),last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet) ";
				break;
			case 'honor_points':
				$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),hrank=VALUES(hrank), alliance_id=VALUES(alliance_id), hpoints=VALUES(hpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";
				$query_collection2 .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),hrank=VALUES(hrank), alliance_id=VALUES(alliance_id), hpoints=VALUES(hpoints), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet) ";
				break;
		}

		if ($query_1 === true) {
			$res = $this->exec($query_collection);
			if ($res === false) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating players with ogame playerid");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
		}

		if ($query_2 === true) {
			$res = $this->exec($query_collection2);
			if ($res === false) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating players without ogame playerid");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
		}

		/*
		// Player history will be updated automatically via trigger (see install.php)
		*/

		return true;
	}

	private function update_alliances_at_database(array $allies_data,$stats_type,$userid) {
		$existing_alliances = $this->get_existing_ally_names_and_ids($allies_data);

		switch ($stats_type) {
			case 'score':
			case 'points':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,rank, points, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), rank=VALUES(rank), points=VALUES(points), last_update=VALUES(last_update), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
			case 'fleet':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,frank, fpoints, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), frank=VALUES(frank), fpoints=VALUES(fpoints), last_update=NOW(), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
			case 'research':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,rrank, rpoints, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), rrank=VALUES(rrank), rpoints=VALUES(rpoints), last_update=NOW(), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
			case 'economy':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,erank, epoints, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), erank=VALUES(erank), epoints=VALUES(epoints), last_update=NOW(), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
			case 'fleet_lost':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,flrank, flpoints, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), flrank=VALUES(flrank), flpoints=VALUES(flpoints), last_update=NOW(), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
			case 'fleet_built':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,fbrank, fbpoints, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), fbrank=VALUES(fbrank), fbpoints=VALUES(fbpoints), last_update=NOW(), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
			case 'fleet_destroyed':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,fdrank, fdpoints, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), fdrank=VALUES(fdrank), fdpoints=VALUES(fdpoints), last_update=NOW(), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
			case 'honor_points':
				$query_collection = "INSERT INTO $this->allytable (id,user_id,hrank, hpoints, members, last_update, allyname, ogame_allyid) VALUES ";
				$query_end = " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), hrank=VALUES(hrank), hpoints=VALUES(hpoints), last_update=NOW(), members=VALUES(members), allyname=VALUES(allyname), ogame_allyid=VALUES(ogame_allyid)";
				break;
		}
		$alliances_added = 0;
		for ($i=0; $i < count($allies_data); $i++) {
			if (is_numeric($allies_data[$i]['rank'])) {
				$alliances_added++;

				// check if entry exists at database
				if (!empty($allies_data[$i]['allyid']) && intval($allies_data[$i]['allyid']) > 0) {
					if (isset($existing_alliances["allyid_to_id"][$allies_data[$i]['allyid']])) {
						// ogame ally_id already present at galaxytool
						$galaxytool_id = $existing_alliances["allyid_to_id"][$allies_data[$i]['allyid']];
					} else {
						// ogame ally_id provided but onknown to galaxytool
						if (isset($existing_alliances["allyname_to_id"][$allies_data[$i]['allyname']])) {
							// at least allyname was known to DB - update with ogame alliance ID but keep existing galaxytool ID
							$galaxytool_id = $existing_alliances["allyname_to_id"][$allies_data[$i]['allyname']];
						} else {
							// neither ally_id nor allyname known at galaxytool
							$galaxytool_id = "NULL";
						}
					}
				} else {
					// ogame_allyid not provided - ally with equal name exists?
					if (isset($existing_alliances["allyname_to_id"][$allies_data[$i]['allyname']])) {
						// allyname was known to DB - update with ogame alliance ID but keep existing galaxytool ID
						$galaxytool_id = $existing_alliances["allyname_to_id"][$allies_data[$i]['allyname']];
					} else {
						// allyname not known at galaxytool
						$galaxytool_id = "NULL";
					}
				}

				// handle ogame ally_id
				if (!empty($allies_data[$i]['allyid']) && intval($allies_data[$i]['allyid']) > 0) {
					$ogame_allyid = DB::getDB()->quote($allies_data[$i]['allyid']); // ogame_allyid
				} else {
					$ogame_allyid = "NULL"; // no ogame_allyid -> own alliance
				}

				$query_collection .= "($galaxytool_id,'$userid',".DB::getDB()->quote($allies_data[$i]['rank']).", ".DB::getDB()->quote($allies_data[$i]['score']).", ".DB::getDB()->quote($allies_data[$i]['member']).", NOW(), ".DB::getDB()->quote($allies_data[$i]['allyname']).", $ogame_allyid  ), ";
			}
		}


		if ($alliances_added > 0) {
			$query_collection = substr($query_collection,0,strlen($query_collection)-2);
			$query_collection .= $query_end;

			$res = $this->exec($query_collection);
			if ($res === false) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating alliance data");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
		}

		/*
		// Alliance history will be updated automatically via trigger (see install.php)
		*/

		return true;
	}

	private function get_existing_ally_names_and_ids(array $allies_data) {

		$ogame_allyids   = array();
		$ogame_allynames = array();

		for ($i=0; $i < count($allies_data); $i++) {
			if (is_numeric($allies_data[$i]['rank'])) {
				if (!empty($allies_data[$i]['allyid']) && intval($allies_data[$i]['allyid']) > 0) {
					// ogame ally_id provided
					array_push($ogame_allyids, DB::getDB()->quote($allies_data[$i]['allyid']));
					array_push($ogame_allynames, DB::getDB()->quote($allies_data[$i]['allyname']));
				} else {
					// no ogame ally_id
					array_push($ogame_allynames, DB::getDB()->quote($allies_data[$i]['allyname']));
				}
			}
		}

		$query_collection = "SELECT id, allyname, ogame_allyid FROM $this->allytable WHERE allyname IN (".implode(",",$ogame_allynames).")";
		if (count($ogame_allyids) > 0) {
			$query_collection .= " OR ogame_allyid IN (".implode(",",$ogame_allyids).")";
		}

		$stmt = $this->query($query_collection);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while collecting existing alliance data");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		$alliances["allyid_to_id"] = array();
		$alliances["allyname_to_id"] = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->ogame_allyid != null) $alliances["allyid_to_id"][$line->ogame_allyid] = $line->id;
			$alliances["allyname_to_id"][$line->allyname] = $line->id;
		}

		return $alliances;
	}

}