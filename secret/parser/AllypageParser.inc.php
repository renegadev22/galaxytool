<?php
class AllypageParser extends XMLParserGlobal{

	private $activity_parser       = null;

	function __construct($allytable,$playertable,$utablename,$player_activitytable,$universe) {
		$this->xml_schema = "xml_schema/allypage.xsd";
		//  call super constructor
		$result = parent::__construct($allytable,$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}
		// create object to track player activities
		$this->activity_parser = new ActivityParser($player_activitytable,$playertable,$utablename,$universe);
		if ($this->activity_parser === false) return false;

		return $this;
	}

	public function insert_data($xml_content) {
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_allypage);
		if ($xdoc === false) {
			return false;
		}

		// allypage header attribute(s)
		$stats_header = $xdoc->getElementsByTagName("allypage_header"); // there is exactly one
		$allyname     = trim($stats_header->item(0)->getAttribute("name"));
		$allyid       = intval(trim($stats_header->item(0)->getAttribute("allyid")));
		unset($stats_header);

		// check allyname is not initial
		if (trim($allyname) == "") {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"632");
			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error ,"Allyname missing"));

			$this->check_result(false);
			return false;
		}

		// parse data
		$result = $this->insert_allypage_data($xdoc,$allyname, $allyid,$this->userid);
		// add error or success messages
		$this->check_result($result);

		return $result;
	}


	private function insert_allypage_data($xdoc,$allyname,$allyid,$userid) {
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

		if ($this->update_players_at_database($players_data,$allyname,$allyid,$userid)) {
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
		$return_value["planet"]     = $player_DOMNode->getAttribute("planet");
		$return_value["score"]      = $player_DOMNode->getAttribute("score");

		$activity = $player_DOMNode->getElementsByTagName("activity"); // at max one
		if ($activity->length != 0) {
			$return_value["activity"] = $activity->item(0);
		}
		return $return_value;
	}


	private function update_players_at_database(array $players_data, $allyname, $allyid, $userid) {
		// check if alliance exists
		$query = "SELECT id, allyname FROM $this->allytable WHERE ogame_allyid = ".DB::getDB()->quote($allyid);
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting and updating allyname");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		if ($stmt->rowCount() > 0) {
			$line        = $stmt->fetch(PDO::FETCH_OBJ);
			$alliance_id = $line->id;
		}
		if (!isset($line) || $line->allyname != $allyname) {
			// insert or update alliance first
			$query = "INSERT INTO $this->allytable (user_id, last_update, allyname, ogame_allyid) ".
			"VALUES (".DB::getDB()->quote($userid).",NOW(),".DB::getDB()->quote($allyname).",".DB::getDB()->quote($allyid).") ON DUPLICATE KEY UPDATE last_update=VALUES(last_update), allyname=VALUES(allyname)";

			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting and updating allyname");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}

			$alliance_id = DB::getDB()->lastInsertId();
		}

		// determine all players which are at the database and have an ogame playerid
		$run_query = false;
		$query = "SELECT id,playername,ogame_playerid FROM $this->playertable WHERE ogame_playerid IN (";
		for ($i=0; $i<count($players_data); $i++) {
			if ($players_data[$i]['playerid'] < 1) {
				throw new Exception("invalid playerid value"); // must not happen - how did we pass the XSD validation
			}
			$query .= DB::getDB()->quote($players_data[$i]['playerid']).",";
			$run_query = true;
		}
		if ($run_query) {
			// remove the , behind the last query part
			$query = substr($query,0,strlen($query)-1);
			$query .= ")";

			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while collecting players with ogame playerid");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$player_names_2_ids[strtolower($line->playername)]["id"]       = $line->id;
				$player_names_2_ids[strtolower($line->playername)]["ogame_id"] = $line->ogame_playerid;

				// the playername might have changed meanwhile
				$ogame_playerid_2_galaxytool_id[$line->ogame_playerid] = $line->id;
			}
		}

		// insert player data
		$query_collection = "INSERT INTO $this->playertable (id,user_id,rank,alliance_id,points,last_stats_update,playername,homegalaxy,homesystem,homeplanet,ogame_playerid) VALUES ";

		$activity_players = array();
		for ($i=0; $i<count($players_data); $i++) {
			if (empty($players_data[$i]['playerid'])) {
				throw new Exception("invalid playerid value"); // must not happen - how did we pass the XSD validation
			}

			if (isset($players_data[$i]['activity'])) {
				array_push($activity_players,$players_data[$i]['playerid']);
			}

			// add query data (id,rank,alliance_id,points,last_stats_update,playername,ogame_playerid)
			if (isset($player_names_2_ids[strtolower($players_data[$i]['playername'])]["ogame_id"])) {
				// database contains that player with ogame playerid
				$query_collection .= " (".$player_names_2_ids[strtolower($players_data[$i]['playername'])]["id"].", $userid, ".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_id).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']).",".intval($players_data[$i]['playerid'])."), ";
			} elseif (isset($ogame_playerid_2_galaxytool_id[$players_data[$i]['playerid']])) {
				//playername changed
				$query_collection .= " (".$ogame_playerid_2_galaxytool_id[$players_data[$i]['playerid']].", $userid, ".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_id).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']).",".intval($players_data[$i]['playerid'])."), ";
			} else {
				// player new to database
				$query_1 = true;
				$query_collection .= " (NULL,$userid,".DB::getDB()->quote($players_data[$i]['rank']).",".DB::getDB()->quote($alliance_id).",".DB::getDB()->quote($players_data[$i]['score']).",NOW(),".DB::getDB()->quote($players_data[$i]['playername']).", ".DB::getDB()->quote($players_data[$i]['galaxy']).", ".DB::getDB()->quote($players_data[$i]['system']).", ".DB::getDB()->quote($players_data[$i]['planet']).",".intval($players_data[$i]['playerid'])."), ";
			}

		}

		// remove last "," at the queries
		$query_collection = substr($query_collection,0,strlen($query_collection)-2);
		$query_collection .= " ON DUPLICATE KEY UPDATE user_id=VALUES(user_id), rank=VALUES(rank), alliance_id=VALUES(alliance_id), points=VALUES(points), last_stats_update=NOW(), playername=VALUES(playername), homegalaxy=VALUES(homegalaxy), homesystem=VALUES(homesystem), homeplanet=VALUES(homeplanet), ogame_playerid=VALUES(ogame_playerid) ";

		$stmt = $this->query($query_collection);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating players with ogame playerid");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		// inform activity parser about player activities
		if (count($activity_players) > 0) {
			// get player ids for all players first
			$query = "SELECT id, ogame_playerid FROM $this->playertable WHERE ogame_playerid IN ('".implode("','",$activity_players)."')";
			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while selecting activity relevant players");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}

			$ogame_ids_2_ids = array();
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$ogame_ids_2_ids[$line->ogame_playerid] = $line->id;
			}

			// inform activity parser about players data
			for ($i=0; $i<count($players_data); $i++) {
				if (isset($players_data[$i]['activity'])) {
					$this->activity_parser->collect_activity($players_data[$i]['activity'],$ogame_ids_2_ids[$players_data[$i]['playerid']], ActivityParser::type_allypage);
				}
			}

			// save activity data
			$result = $this->activity_parser->insert_into_database();

			if ($result === true) {
				return true;
			} else {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "Error while updating player activities");
				$this->error_object->add_child_message($this->activity_parser->get_error_object());
				return false;
			}

		}

		return true;
	}

}





