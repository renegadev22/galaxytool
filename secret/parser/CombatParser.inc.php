<?php
require_once GALAXYTOOL_ROOT."/languages/english_probes.inc.php";

/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*/
class CombatParser extends XMLParserGlobal{

	private $combattable     = "";
	private $combatparty     = "";
	private $galaxytable     = "";
	private $systemtablename = "";

	private $activity_parser     = null;
	private $oudated_views       = null;
	private $oudated_views_found = false;

	function __construct($combattable,$combatparty,$utablename,$galaxytable,$systemtablename,$playertable,$player_activitytable,$universe) {
		$this->xml_schema = "xml_schema/combat_report.xsd";
		//  call super constructor
		$result = parent::__construct("DUMMY_TABLE_NAME",$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}
		if (trim($combattable) == "") return false;
		if (trim($combatparty) == "") return false;
		if (trim($galaxytable) == "") return false;
		if (trim($systemtablename) == "") return false;

		// local setup
		$this->combattable     = $combattable;
		$this->combatparty     = $combatparty;
		$this->galaxytable     = $galaxytable;
		$this->systemtablename = $systemtablename;

		// create object to track player activities
		$this->activity_parser = new ActivityParser($player_activitytable,$playertable,$utablename,$universe);
		if ($this->activity_parser === false) return false;

		return $this;
	}

	/**
	 * Insert XML content into database
	 *
	 * @param string $xml_content
	 * @return boolean
	 */
	public function insert_data($xml_content) {
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_combat_report);
		if ($xdoc === false) {
			return false;
		}

		// prepare message log
		if ($this->oudated_views == null) {
			$this->oudated_views = new ErrorObject(ErrorObject::severity_warning , COMBAT_REPORT_OUDATED_GALAXYVIEW);
		}


		$result = $this->insert_combat_report($xdoc,$this->userid);

		if ($result === false && $this->oudated_views_found === true) {
			$this->error_object = $this->oudated_views;
		}

		// add error or success messages
		$this->check_result2($result);

		return $result;
	}

	/**
	 * Insert all combat reports by collecting all entries from XML doc
	 *
	 * @param unknown_type $xdoc
	 * @param int $userid
	 * @return boolean
	 */
	private function insert_combat_report($xdoc,$userid) {
		$combat_reports = $xdoc->getElementsByTagName("combat_report");
		$combat_reports_data = array();

		foreach ($combat_reports as $combat) {
			// extract information from XML file
			$combat_data = $this->get_combat_data($combat);
			if ($combat_data !== false) {
				// store results
				array_push($combat_reports_data, $combat_data);
			}
		}
		if (count($combat_reports_data) == 0) return false;
		unset($combat_reports);
		unset($xdoc);

		if ($this->update_combats_at_database($combat_reports_data,$userid)) {
			return true;
		} else {
			return false;
		}

	}


	/**
	 * Get all information from combat XML tag
	 *
	 * @param DOMNode $combat_DOMNode
	 * @return array with messages details
	 */
	private function get_combat_data($combat_DOMNode) {
		$return_value                 = array();
		$return_value["msg_id"]       = intval(trim($combat_DOMNode->getAttribute("msg_id")));

		$result = $combat_DOMNode->getElementsByTagName("combat_result"); // exactly one
		$return_value["datetime"] = $result->item(0)->getAttribute("datetime");
		$return_value["winner"]   = $result->item(0)->getAttribute("winner");
		$return_value["galaxy"]   = $result->item(0)->getAttribute("galaxy");
		$return_value["system"]   = $result->item(0)->getAttribute("system");
		$return_value["planet"]   = $result->item(0)->getAttribute("planet");

		$loot = $result->item(0)->getElementsByTagName("loot");
		$return_value["loot"]["metal"]     = intval($loot->item(0)->getAttribute("metal"));
		$return_value["loot"]["crystal"]   = intval($loot->item(0)->getAttribute("crystal"));
		$return_value["loot"]["deuterium"] = intval($loot->item(0)->getAttribute("deuterium"));
		unset($loot);

		$debris = $result->item(0)->getElementsByTagName("debris");
		$return_value["debris"]["metal"]   = intval($debris->item(0)->getAttribute("metal"));
		$return_value["debris"]["crystal"] = intval($debris->item(0)->getAttribute("crystal"));
		unset($debris);
		unset($result);

		$combat_parties = $combat_DOMNode->getElementsByTagName("combat_party"); // 2-16
		$return_value["combat_parties"] = array();
		
		//determine the number of defenders and attackers
		$return_value["defender"] = 0;
		$return_value["attacker"] = 0;
		
		foreach($combat_parties as $combat_party) {
			// extract information for party
			$party_data = $this->get_party_data($combat_party);
			if ($party_data['galaxy'] == $return_value["galaxy"] && $party_data['system'] == $return_value["system"] && $party_data['planet'] == $return_value["planet"]) {
				// mark party as location where the attack took place
				$party_data['attack_location'] = "true";
			} else {
				$party_data['attack_location'] = "false";
			}
			
			$return_value[$party_data['type']]++;
			
			array_push($return_value["combat_parties"],$party_data);
		}
		
		// enrich party data with player_id
		$result = $this->get_galaxytool_party_data($return_value["combat_parties"]); // pass array by reference and add values directly
		if ($result === false) return false;

		// get activities and forward to activity parser
		foreach($return_value["combat_parties"] as &$party) {
			if (isset($party['activity'])) {
				$this->activity_parser->collect_activity( $party['activity'], $party['player_id'], ActivityParser::type_combat_report );
				unset($party['activity']); // is no longer needed
			}
		}

		return $return_value;
	}

	/**
	 * Return data for party tag
	 *
	 * @param DOMNode $combat_party_DOMNode
	 * @return array
	 */
	private function get_party_data($combat_party_DOMNode) {
		$return_value = array();

		$return_value["type"]       = $combat_party_DOMNode->getAttribute("type");
		$return_value["galaxy"]     = intval($combat_party_DOMNode->getAttribute("galaxy"));
		$return_value["system"]     = intval($combat_party_DOMNode->getAttribute("system"));
		$return_value["planet"]     = intval($combat_party_DOMNode->getAttribute("planet"));
		$return_value["weapon"]     = intval($combat_party_DOMNode->getAttribute("weapon"));
		$return_value["shield"]     = intval($combat_party_DOMNode->getAttribute("shield"));
		$return_value["armor"]      = intval($combat_party_DOMNode->getAttribute("armor"));
		if ($combat_party_DOMNode->hasAttribute("lost_units")) {
			$return_value["lost_units"] = intval($combat_party_DOMNode->getAttribute("lost_units"));
		} else {
			$return_value["lost_units"] = "NULL";
		}


		if ($combat_party_DOMNode->hasChildNodes() !== false) {
			$return_value["activity"] = $combat_party_DOMNode->getElementsByTagName("activity")->item(0); // at max one
		}

		return $return_value;
	}



	/**
	 * This method will try to enrich the party data provided with player_id from corresponding
	 * Galaxytool galaxy view if the view is available and not older than one week. If this is
	 * not possible, the method will return false and add a warning message to the error_object
	 * which collects all failed insertions.
	 *
	 * @param Array $parties_data
	 * @return array or boolean
	 */
	private function get_galaxytool_party_data(&$parties_data) {
		if (count($parties_data) < 2) return false;

		$query = "SELECT g.galaxy, g.system, g.planet, p.id as player_id, s.last_update ".
		"FROM $this->galaxytable g, $this->systemtablename s, $this->playertable p ".
		"WHERE g.galaxy=s.galaxy AND g.system=s.system AND p.ogame_playerid = g.ogame_playerid AND (";
		foreach ($parties_data as $party) {
			$query .= "g.galaxy=".$party['galaxy']." AND g.system=".$party['system']." AND g.planet=".$party['planet']." OR ";

			$coordinates[ $party['galaxy'].":".$party['system'].":".$party['planet'] ] = false; // coordinates must fail
		}
		// remove " OR "
		$query = substr($query,0,strlen($query)-4).")";

		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while collecting galaxy views");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->last_update > date("Y-m-d H:i:s",time() - 86400 * 7)) {
				// entry is not older than one week
				$coordinates[ $line->galaxy.":".$line->system.":".$line->planet ] = $line->player_id; // coordinates are okay
			}
		}

		// throw warnings for party related problems
		$errors = false;
		foreach ($coordinates as $coords => $player_id) {
			if ($player_id === false) {
				$this->oudated_views_found = true;
				$this->oudated_views->add_child_message(new ErrorObject(ErrorObject::severity_warning , $coords));
				$errors = true;
			}
		}
		if ($errors) return false;

		// add player_id to array
		foreach ($parties_data as &$party) {
			$party['player_id'] = $coordinates[ $party['galaxy'].":".$party['system'].":".$party['planet'] ];
		}

		return true;
	}

	private function delete_existing_combats_from_array(array &$combats_data) {
		$message_ids = array();
		foreach ($combats_data as $combat) {
			array_push($message_ids,$combat['msg_id']);
		}

		// check which IDs exist on DB level
		$query = "SELECT msg_id FROM $this->combattable WHERE msg_id IN ('".implode("','",$message_ids)."')";
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while checking for existing combat reports");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		$existing_combats = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$existing_combats[$line->msg_id] = "";
		}
		unset($res);
		unset($line);
		unset($message_ids);


		foreach ($combats_data as $key => &$combat) {
			if (isset($existing_combats[$combat['msg_id']])) {
				// delete message from array
				unset($combats_data[$key]);
			}
		}

	}

	/**
	 * Insert combat reports and activities into database
	 *
	 * @param Combat data array $combats_data
	 * @param int $userid UserID at galaxytool
	 * @return boolean
	 */
	private function update_combats_at_database(array $combats_data, $userid) {
		// remove entries from array which are already known
		$this->delete_existing_combats_from_array($combats_data);

		if (count($combats_data) == 0) return true;

		$query = "INSERT INTO $this->combattable (msg_id, combattime, winner, loot_metal, loot_crystal, loot_deuterium, debris_metal, debris_crystal, public, userid) VALUES ";
		$message_ids = array();
		foreach ($combats_data as $combat) {
			$query .= "(".$combat['msg_id'].",";
			$query .= DB::getDB()->quote($combat['datetime']).",";
			$query .= DB::getDB()->quote($combat['winner']).",";
			$query .= $combat['loot']['metal'].",";
			$query .= $combat['loot']['crystal'].",";
			$query .= $combat['loot']['deuterium'].",";
			$query .= $combat['debris']['metal'].",";
			$query .= $combat['debris']['crystal'].",";
			$query .= "'false',";
			$query .= $userid."),";

			array_push($message_ids, $combat['msg_id']);
		}
		// remove comma
		$query = substr($query,0,strlen($query)-1);

		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting combat reports");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		// get combat report ids
		$query = "SELECT id, msg_id FROM $this->combattable WHERE msg_id IN ('".implode("','",$message_ids)."')";
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting combat reports");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		$message_id_to_db_id = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$message_id_to_db_id[$line->msg_id] = $line->id;
		}

		$query = "INSERT INTO $this->combatparty (combat_id, combat_type, player_id, galaxy, system, planet, waffentech, schildtech, rpz, lost_units, attack_location) VALUES ";
		$message_ids = array();
		foreach ($combats_data as $combat) {
			$combat_id = $message_id_to_db_id[$combat['msg_id']];

			foreach ($combat['combat_parties'] as $party) {
				$query .= "(";
				$query .= $combat_id.",";
				$query .= DB::getDB()->quote($party['type']).",";
				$query .= $party['player_id'].",";
				$query .= $party['galaxy'].",";
				$query .= $party['system'].",";
				$query .= $party['planet'].",";
				$query .= $party['weapon'].",";
				$query .= $party['shield'].",";
				$query .= $party['armor'].",";
				$query .= $party['lost_units'].",";
				$query .= "'".$party['attack_location']."'";
				$query .= "),";
				
				// only update in case we have a single attacker/defender
				if ($combat[$party['type']] == 1) {
					$coordinates = array(
							'galaxy' => $party['galaxy'],
							'system' => $party['system'],
							'planet' => $party['planet']);
					$techs = array(
							'weapon' => $party['weapon'] / 10,
							'shield' => $party['shield'] / 10,
							'armor'  => $party['armor'] / 10);
					$this->updatePlayerTechs($coordinates, $techs);
				}
			}
		}
		// remove comma
		$query = substr($query,0,strlen($query)-1);
		// insert parties
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting combat parties");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}


		// update activity table
		$result = $this->activity_parser->insert_into_database();

		if ($result === true) {
			return true;
		} else {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "Error while updating player activities");
			$this->error_object->add_child_message($this->activity_parser->get_error_object());
			return false;
		}
	}

	private function updatePlayerTechs(array $coordinates, array $techs) {
		$query = "SELECT p.id FROM ".$this->playertable."p
							LEFT JOIN ".$this->galaxytable." g
							ON p.ogame_playerid = g.ogame_playerid
							WHERE g.galaxy = ".intval($coordinates['galaxy'])."
							AND g.system = ".intval($coordinates['system'])."
							AND g.planet = ".intval($coordinates['planet']);
		$stmt = $this->query($query);
		if ($stmt === false || $stmt->rowCount() != 1) return;
		$line = $stmt->fetch(PDO::FETCH_OBJ);

		$query = "UPDATE ".$this->playertable." SET waffentech=:wtech, schildtech:shield, rpz=:armor WHERE id=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":wtech", $techs['weapon']);
		$stmt->bindParam(":shield", $techs['shield']);
		$stmt->bindParam(":armor", $techs['armor']);
		$stmt->bindParam(":id", $line->id);
		$stmt->execute();
	}
}