<?php
/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*
* Software specification
*
* - check existing data first to avoid DB updates / inserts if not needed
* - use mass insert / update
* - insert players using their ogame_playerid as unique identifier to detect renamings
*
*/
class GalaxyParser extends XMLParserGlobal{

	private $galaxytable = "";
	private $systemtable = "";

	private $alliance_names_2_ids = array();
	private $player_names_2_ids   = array();

	private $collected_playernames = array();
	private $collected_allynames = array();
	private $allyid_2_dipl_status = array();

	private $activity_parser = null;

	function __construct($galaxytable,$systemtable,$allytable,$playertable,$utablename,$player_activitytable,$universe) {

		$this->xml_schema = GALAXYTOOL_ROOT."/secret/xml_schema/galaxyview.xsd";
		//  call super constructor
		$result = parent::__construct($allytable,$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}
		if (trim($galaxytable) == "") return false;

		// local setup
		$this->galaxytable = $galaxytable;
		$this->systemtable = $systemtable;

		// create object to track player activities
		$this->activity_parser = new ActivityParser($player_activitytable,$playertable,$utablename,$universe);
		if ($this->activity_parser === false) return false;

		return $this;
	}

	public function insert_data($xml_content) {
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_galaxyview);
		if ($xdoc === false) {
			return false;
		}

		$galaxyviews_items = $xdoc->getElementsByTagName("galaxyview"); // at least one
		$galaxyview_data = array();
		foreach($galaxyviews_items as $galaxyviews_item) {
			// extract information from XML file
			$system_data = $this->get_system_data($galaxyviews_item);
			// store results
			array_push($galaxyview_data, $system_data);
		}
		unset($galaxyviews_items);
		unset($xdoc);

		// parse data
		$result = $this->update_database($galaxyview_data,$this->userid);
		// add error or success messages
		$this->check_result($result);

		return $result;
	}

	private function get_system_data($galxyview_DOMNode) {
		$return_value = array();
		$return_value["galaxy"] = $galxyview_DOMNode->getAttribute("galaxy");
		$return_value["system"] = $galxyview_DOMNode->getAttribute("system");
		$return_value["data"] = array();

		$position_items = $galxyview_DOMNode->getElementsByTagName("position"); // 15
		foreach($position_items as $position_item) {
			// extract information for each planet position
			$position_data = $this->get_position_data($position_item);
			array_push($return_value["data"],$position_data);
		}
		return $return_value;
	}

	private function get_position_data($position_DOMNode) {
		$return_value = array();

		$return_value["position"] = $position_DOMNode->getAttribute("pos");
		if ($position_DOMNode->hasChildNodes() === false) {
			// no information at this node (not even a debris field)
			return $return_value;
		}

		$activity = $position_DOMNode->getElementsByTagName("activity"); // 0..2
		if ($activity->length != 0) {
			$return_value["activity"] = $activity->item(0);
		}
		if ($activity->length > 1) {
			$return_value["activity2"] = $activity->item(1);
		}

		$return_value["planetname"] = trim($this->get_planetname($position_DOMNode));
		$return_value["moonsize"]   = $this->get_moonsize($position_DOMNode);
		$return_value = array_merge($return_value, $this->get_debris($position_DOMNode));
		$player_data  = $this->get_player_data($position_DOMNode);
		$return_value = array_merge($return_value, $player_data);
		$ally_data    = $this->get_ally_data($position_DOMNode);
		$return_value = array_merge($return_value, $ally_data);


		if ($player_data["playername"] != "") {
			// store alliance name to player name
			$this->collected_playernames[$player_data["playername"]]["allyid"]   = $ally_data["allyid"];
		}
		return $return_value;
	}


	private function get_planetname($position_DOMNode) {
		$planetname = $position_DOMNode->getElementsByTagName("planetname"); // at max one
		if ($planetname->length == 0) {
			return "";
		} else {
			return $planetname->item(0)->nodeValue;
		}
	}

	private function get_moonsize($position_DOMNode) {
		$moon = $position_DOMNode->getElementsByTagName("moon"); // at max one
		if ($moon->length == 0) {
			return 0;
		} else {
			return $moon->item(0)->getAttribute("size");
		}
	}

	private function get_debris($position_DOMNode) {
		$return_value = array();

		$debris = $position_DOMNode->getElementsByTagName("debris"); // at max one
		if ($debris->length == 0) {
			$return_value["metal"]   = 0;
			$return_value["crystal"] = 0;
			return $return_value;
		} else {
			// required
			$return_value["metal"]   = $debris->item(0)->getAttribute("metal");
			$return_value["crystal"] = $debris->item(0)->getAttribute("crystal");
			return $return_value;
		}
	}

	private function get_player_data($position_DOMNode) {
		$return_value = array();

		$player = $position_DOMNode->getElementsByTagName("player"); // at max one
		if ($player->length == 0) {
			$return_value["playername"] = "";
			$return_value["rank"]       = 0;
			$return_value["playerid"]   = 0;
			$return_value["status"]     = "";
			return $return_value;
		} else {
			// required
			$return_value["playername"] = trim($player->item(0)->getAttribute("playername"));
			$return_value["rank"]       = $player->item(0)->getAttribute("rank");
			$return_value["playerid"] = $player->item(0)->getAttribute("playerid");
			// optional
			if ($player->item(0)->hasAttribute("status")) {
				$return_value["status"] = $player->item(0)->getAttribute("status");
			} else {
				$return_value["status"] = "";
			}

			// collect player information
			if (!isset($this->collected_playernames[$return_value["playername"]])) {
				$this->collected_playernames[$return_value["playername"]]["rank"]     = $return_value["rank"];
				$this->collected_playernames[$return_value["playername"]]["playerid"] = $return_value["playerid"];
				$this->collected_playernames[$return_value["playername"]]["status"]   = $return_value["status"];
			}

			return $return_value;
		}
	}

	private function get_ally_data($position_DOMNode) {
		$return_value = array();

		$alliance = $position_DOMNode->getElementsByTagName("alliance"); // at max one
		if ($alliance->length == 0) {
			$return_value["allyname"] = "";
			$return_value["allyid"]   = 0;
			$return_value["rank"]     = 0;
			$return_value["member"]   = "";
			return $return_value;
		} else {
			// required
			$return_value["allyname"] = trim($alliance->item(0)->getAttribute("allyname"));
			$return_value["allyid"]   = $alliance->item(0)->getAttribute("allyid");
			$return_value["rank"]     = $alliance->item(0)->getAttribute("rank");
			$return_value["member"]   = $alliance->item(0)->getAttribute("member");
			// none optional

			// collect alliance information
			if (!isset($this->collected_allynames[$return_value["allyname"]])) {
				$this->collected_allynames[$return_value["allyname"]]["allyid"] = $return_value["allyid"];
				$this->collected_allynames[$return_value["allyname"]]["rank"]   = $return_value["rank"];
				$this->collected_allynames[$return_value["allyname"]]["member"] = $return_value["member"];
			}

			return $return_value;
		}
	}


	private function construct_players_updatequery($playername,$playerattributes,$alliance_data) {
		$query = "playername=".DB::getDB()->quote($playername).",";  	// playername
		$query .= "rank='".intval($playerattributes["rank"])."',";										// rank

		if ($playerattributes["allyname"] != "") {
			$query .= "alliance_id='".$alliance_data[$playerattributes["allyname"]]["id"]."',"; 	// AllyID
		} else {
			$query .= "alliance_id=NULL,"; 	// AllyID
		}

		if (strpos($playerattributes["status"],"n")  !== false) {								// noob
			$query .= "noob='true',";
		} else {
			$query .= "noob='false',";
		}
		if (strpos($playerattributes["status"],"v")  !== false) {								// vacation
			$query .= "vacation='true',";
		} else {
			$query .= "vacation='false',";
		}
		if (strpos($playerattributes["status"],"b")  !== false) {								// banned
			$query .= "banned='true',";
		} else {
			$query .= "banned='false',";
		}
		if (strpos($playerattributes["status"],"i")  !== false) {								// inactive
			$query .= "inactive='true',";
		} else {
			$query .= "inactive='false',";
		}
		if (strpos($playerattributes["status"],"I")  !== false) {								// long inactive
			$query .= "long_inactive='true',";
		} else {
			$query .= "long_inactive='false',";
		}
		if (strpos($playerattributes["status"],"o")  !== false) {								// outlaw
			$query .= "outlaw='true',";
		} else {
			$query .= "outlaw='false',";
		}

		if ($playerattributes["allyname"] != "") {
			$query .= "diplomatic_status='".$alliance_data[$playerattributes["allyname"]]["diplomatic_status"]."'"; 	// Ally diplomatic status
		} else {
			$query .= "diplomatic_status='nothing'"; 	// Ally diplomatic status
		}

		return $query;
	}

	private function construct_players_query($playername,$playerattributes,$ally_id) {
		$query = "(";
		$query .= DB::getDB()->quote($playername).",";  		// playername
		$query .= "'".intval($playerattributes["playerid"])."',";								// ogame player id
		$query .= "'".intval($playerattributes["rank"])."',";									// rank

		$query .= "'".$ally_id."',"; 															// AllyID

		if (strpos($playerattributes["status"],"n") !== false) {								// noob
			$query .= "'true',";
		} else {
			$query .= "'false',";
		}
		if (strpos($playerattributes["status"],"v") !== false) {								// vacation
			$query .= "'true',";
		} else {
			$query .= "'false',";
		}
		if (strpos($playerattributes["status"],"b") !== false) {								// banned
			$query .= "'true',";
		} else {
			$query .= "'false',";
		}
		if (strpos($playerattributes["status"],"i") !== false) {								// inactive
			$query .= "'true',";
		} else {
			$query .= "'false',";
		}
		if (strpos($playerattributes["status"],"I") !== false) {								// long inactive
			$query .= "'true',";
		} else {
			$query .= "'false',";
		}
		if (strpos($playerattributes["status"],"o") !== false) {								// outlaw
			$query .= "'true',";
		} else {
			$query .= "'false',";
		}

		if (isset($this->allyid_2_dipl_status[$ally_id])) {
			$query .= "'".$this->allyid_2_dipl_status[$ally_id]."'"; 							// Ally diplomatic status
		} else {
			$query .= "'nothing'"; 	// default Ally diplomatic status (no alliance)
		}
		$query .= "),";

		return $query;
	}

	private function check_if_playerupdate_required($playertable_object, $playername, $playerattributes, $alliance_id) {
		if ($playertable_object->rank != $playerattributes["rank"]) {
			return true;
		}
		if ($playertable_object->alliance_id != $alliance_id) {
			// player changed alliance (or left it)
			return true;
		}
		if ($playertable_object->playername != $playername) {
			return true;
		}
		if ($playertable_object->ogame_playerid != $playerattributes["playerid"] && $playerattributes["playerid"] > 0) {
			return true;
		}
		if ($playertable_object->noob == 'true' && (strpos($playerattributes["status"],"n") === false)) {
			return true;
		}
		if ($playertable_object->vacation == 'true' && (strpos($playerattributes["status"],"v") === false)) {
			return true;
		}
		if ($playertable_object->banned == 'true' && (strpos($playerattributes["status"],"b") === false)) {
			return true;
		}
		if ($playertable_object->inactive == 'true' && (strpos($playerattributes["status"],"i") === false)) {
			return true;
		}
		if ($playertable_object->long_inactive == 'true' && (strpos($playerattributes["status"],"I") === false)) {
			return true;
		}
		if ($playertable_object->outlaw == 'true' && (strpos($playerattributes["status"],"o") === false)) {
			return true;
		}

		if ($playertable_object->noob == 'false' && (strpos($playerattributes["status"],"n") !== false)) {
			return true;
		}
		if ($playertable_object->vacation == 'false' && (strpos($playerattributes["status"],"v") !== false)) {
			return true;
		}
		if ($playertable_object->banned == 'false' && (strpos($playerattributes["status"],"b") !== false)) {
			return true;
		}
		if ($playertable_object->inactive == 'false' && (strpos($playerattributes["status"],"i") !== false)) {
			return true;
		}
		if ($playertable_object->long_inactive == 'false' && (strpos($playerattributes["status"],"I") !== false)) {
			return true;
		}
		if ($playertable_object->outlaw == 'false' && (strpos($playerattributes["status"],"o") !== false)) {
			return true;
		}
		return false;
	}


	private function insert_allynames() {
		//  Read alliancenames first (in most cases no update should be needed or only very few)
		if (count($this->collected_allynames) == 0) {
			return true;
		}

		// get existing alliances first
		$ally_id_to_ally = array();
		$query = "SELECT allyname,diplomatic_status,ogame_allyid FROM $this->allytable WHERE ogame_allyid IN (";
		foreach ($this->collected_allynames as $allyname => $allydetails) {
			$query .= "'".intval($allydetails["allyid"])."',";
			$ally_id_to_ally[intval($allydetails["allyid"])] = $allyname;
		}
		$query = substr($query,0,strlen($query)-1).")"; // remove comma
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while selecting alliances by OGame allyid");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		// check if update on allyname is needed
		$no_update_needed = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$this->allyid_2_dipl_status[$line->ogame_allyid] = $line->diplomatic_status;

			if ($ally_id_to_ally[$line->ogame_allyid] == $line->allyname) {
				// no update needed
				$no_update_needed[$line->ogame_allyid] = true;
			}
		}

		// get remaining alliances
		$ally_update_required = array();
		foreach ($this->collected_allynames as $allyname => $allydetails) {
			if (!isset($no_update_needed[$allydetails["allyid"]])) {
				$ally_update_required[$allyname] = $allydetails["allyid"];
			}
		}
		unset($no_update_needed);

		if (count($ally_update_required) == 0) {
			return true;
		}

		// insert or update all those alliances
		$allyname_not_at_db = array();
		$allyinserts = "INSERT INTO $this->allytable (allyname, ogame_allyid) VALUES ";
		foreach ($ally_update_required as $allyname => $allyid) {
			$allyinserts .= "(".DB::getDB()->quote($allyname).",$allyid),";
		}
		// remove last comma
		$allyinserts = substr($allyinserts,0,strlen($allyinserts)-1);
		$allyinserts .= " ON DUPLICATE KEY UPDATE allyname=VALUES(allyname)";
		$stmt = $this->query($allyinserts);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating alliances");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		return true;
	}

	private function insert_players() {
		$db_ogame_playerdata      = array();

		if (count($this->collected_playernames) == 0) {
			// nothing to do
			return true;
		}

		$query  = "SELECT id,playername,ogame_playerid,rank,alliance_id,noob,vacation,banned,inactive,long_inactive,outlaw,diplomatic_status ";
		$query .= "FROM $this->playertable WHERE ogame_playerid IN (";
		$allyquery = "SELECT id, ogame_allyid FROM $this->allytable WHERE ogame_allyid IN(";
		$execute_allysearch = false;
		foreach($this->collected_playernames as $playername => $playerattributes) {
			$query .= "'".intval($playerattributes["playerid"])."',";

			if ($playerattributes["allyid"] != 0) {
				$execute_allysearch = true;
				$allyquery .= "'".intval($playerattributes["allyid"])."',";
			}
		}
		$query = substr($query, 0 ,strlen($query)-1).")"; // remove comma
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while reading players by ogame player id");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$db_ogame_playerdata[$line->ogame_playerid] = $line; // store complete object
		}

		// get ally ids
		$db_ogame_allydata = array();
		if ($execute_allysearch) {
			$allyquery = substr($allyquery, 0 ,strlen($allyquery)-1).")"; // remove comma
			$stmt = $this->query($allyquery);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while reading alliances ogame ally id");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}

			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$db_ogame_allydata[$line->ogame_allyid] = $line->id; // store id mapping
			}
		}
		// ensure that ogame allyid 0 exists (no ally available)
		$db_ogame_allydata[0] = 0;


		// check if existing entries need an update
		$update_required   = false;
		$remaining_players = array();
		$query = "INSERT INTO $this->playertable (playername, ogame_playerid, rank, alliance_id, noob,vacation,banned,inactive,long_inactive,outlaw,diplomatic_status) VALUES ";
		foreach($this->collected_playernames as $playername => $playerattributes) {
			if (!isset($db_ogame_playerdata[$playerattributes["playerid"]])) {
				$remaining_players[$playername] = $playerattributes;
			} else {
				if ($this->check_if_playerupdate_required($db_ogame_playerdata[$playerattributes["playerid"]], $playername, $playerattributes, $db_ogame_allydata[$playerattributes["allyid"]] )) {
					$update_required = true;
					$query .= $this->construct_players_query($playername,$playerattributes,$db_ogame_allydata[$playerattributes["allyid"]]);
				}

			}
		}
		unset($db_ogame_playerdata);

		// check for entries which need to be inserted or updated
		if (count($remaining_players) == 0 && $update_required === false) {
			return true;
		}

		// insert the rest
		foreach($remaining_players as $playername => $playerattributes) {
			$query .= $this->construct_players_query($playername,$playerattributes,$db_ogame_allydata[$playerattributes["allyid"]]);
		}
		$query = substr($query,0,strlen($query)-1);
		if ($update_required == true) {
			$query .= " ON DUPLICATE KEY UPDATE playername=VALUES(playername), alliance_id=VALUES(alliance_id), noob=VALUES(noob), vacation=VALUES(vacation), banned=VALUES(banned), inactive=VALUES(inactive), long_inactive=VALUES(long_inactive), outlaw=VALUES(outlaw) ";
		} // else: no duplicate key expected
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting and updating players");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		return true;
	}

	private function update_database($content,$userid) {
		// handle all alliances
		$result = $this->insert_allynames();
		if ($result === false) return false;

		// handle all players
		$result = $this->insert_players();
		if ($result === false) return false;

		// check what exists already
		$query  = "SELECT galaxy, system, planet, ogame_playerid, moon, moonsize, metal ,crystal, planetname FROM $this->galaxytable WHERE ";
		$systems = "INSERT INTO ".$this->systemtable." (galaxy, system, last_update, user_id) VALUES ";
		$wheres = array();
		foreach ($content as $system_data) {
			$galaxy = $system_data["galaxy"];
			$system = $system_data["system"];

			$query .= "(galaxy=$galaxy AND system=$system) OR ";

			$systems .= "('$galaxy', '$system', NOW(), '$userid'),";
		}
		// update system information
		$systems = substr($systems, 0, strlen($systems) - 1); // remove last comma
		$systems .= " ON DUPLICATE KEY UPDATE last_update=VALUES(last_update), user_id=VALUES(user_id)";

		$stmt = $this->query($systems);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while updating system data");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		// fetch existing planets
		$query = substr($query, 0, strlen($query) - 4); // remove last " OR "
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while reading galaxyview planet data");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}
		$existing_planets = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$existing_planets[ $line['galaxy'].":".$line['system'].":".$line['planet'] ] = $line;
		}

		// now insert all planets or delete empty positions
		$query_collection = "INSERT INTO $this->galaxytable (galaxy,system,planet,moon,moonsize,planetname,metal,crystal,ogame_playerid) VALUES ";
		$delete_collection = "DELETE FROM $this->galaxytable WHERE ";
		$run_update     = false;
		$run_deletion   = false;
		$run_activities = false;
		foreach ($content as $system_data) {
			$galaxy = $system_data["galaxy"];
			$system = $system_data["system"];

			foreach ($system_data["data"] as $position) {
				$pos = $position["position"];

				if (isset($position["moonsize"]) && $position["moonsize"] > 0) {
					$moon     = "true";
					$moonsize = $position["moonsize"];
				} else {
					$moon     = "false";
					$moonsize = 0;
				}


				$planetname = (isset($position["planetname"])) ? $position["planetname"] : "";
				$metal      = (isset($position["metal"]))      ? $position["metal"]      : "0";
				$crystal    = (isset($position["crystal"]))    ? $position["crystal"]    : "0";
				$player_id  = (isset($position["playerid"]))   ? $position["playerid"]   : "0";
				$playername = (isset($position["playername"])) ? $position["playername"] : "";

				if ($player_id != "0") {
					// inform activity parser
					$run_activities = true;
					if (isset($position['activity']) && $position['activity'] != null) {
						$result = $this->activity_parser->collect_activity($position['activity'],null, ActivityParser::type_galaxyview,$player_id);
						if (!$result) {
							$this->error_object = new ErrorObject(ErrorObject::severity_error , "Error during activity insert");
							return false;
						}
					}
					if (isset($position['activity2']) && $position['activity2'] != null) {
						$result = $this->activity_parser->collect_activity($position['activity2'],null, ActivityParser::type_galaxyview,$player_id);
						if (!$result) {
							$this->error_object = new ErrorObject(ErrorObject::severity_error , "Error during activity insert");
							return false;
						}
					}
				}

				$coordinates = $galaxy.":".$system.":".$pos;

				if ($planetname != "" || $metal != "0" || $crystal != "0") {
					// update required?

					if (isset($existing_planets[$coordinates])) {
						if (
							$existing_planets[$coordinates]["moon"] == $moon &&
							$existing_planets[$coordinates]["moonsize"] == $moonsize &&
							$existing_planets[$coordinates]["metal"] == $metal &&
							$existing_planets[$coordinates]["crystal"] == $crystal &&
							$existing_planets[$coordinates]["planetname"] == $planetname &&
							$existing_planets[$coordinates]["ogame_playerid"] == $player_id
						) {
							// nothing changed - check next planet
							continue;
						}
					}

					$run_update = true;

					// insert row into database if there are any changes (do not check player activity in detail but always update them)
					$query_collection .= " (";
					$query_collection .= "'$galaxy', ";
					$query_collection .= "'$system', ";
					$query_collection .= "'$pos', ";

					$query_collection .= "'$moon', "; // moon
					$query_collection .= "'$moonsize', "; // moonsize
					$query_collection .= "'$planetname', "; // planetname
					$query_collection .= "'$metal', "; // metal
					$query_collection .= "'$crystal', "; // crystal
					$query_collection .= "'$player_id' "; // ogame playerid

					$query_collection .= "), ";

				} else {
					// check if the empty position exists at DB to delete it
					if (isset($existing_planets[$coordinates])) {
						$run_deletion = true;
						$delete_collection .= "(galaxy='$galaxy' AND system='$system' AND planet='$pos') OR ";
					}
				}
			}
		}

		if ($run_deletion) {
			// remove " OR "
			$delete_collection = substr($delete_collection,0,strlen($delete_collection)-4);
			$stmt = $this->query($delete_collection);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while deleting planets");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
		}

		if ($run_update) {
			// remove comma
			$query_collection = substr($query_collection,0,strlen($query_collection)-2);
			$query_collection .= " ON DUPLICATE KEY UPDATE moon=VALUES(moon), moonsize=VALUES(moonsize),planetname=VALUES(planetname),metal=VALUES(metal), crystal=VALUES(crystal),ogame_playerid=VALUES(ogame_playerid)";
			$stmt = $this->query($query_collection);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting and updating galaxyview");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
		}

		if ($run_activities) {
			// update activity table too
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

?>