<?php
require_once GALAXYTOOL_ROOT."/languages/english_probes.inc.php";

/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*/

class EspionageParser extends XMLParserGlobal{

	private $galaxytable = "";
	private $systemtable = "";

	function __construct($galaxytable,$systemtablename,$utablename,$playertable,$player_activitytable,$universe) {
		$this->xml_schema = "xml_schema/espionage.xsd";
		//  call super constructor
		$result = parent::__construct("DUMMY_TABLE_NAME",$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}
		if (trim($galaxytable) == "") return false;

		// local setup
		$this->galaxytable = $galaxytable;
		$this->systemtable = $systemtablename;

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
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_espionage);
		if ($xdoc === false) {
			return false;
		}

		$result = $this->insert_espionage($xdoc,$this->userid);

		// add error or success messages
		$this->check_result($result);

		return $result;
	}

	/**
	 * Insert all espionage actions by collecting all entries from XML doc
	 *
	 * @param unknown_type $xdoc
	 * @param int $userid
	 * @return boolean
	 */
	private function insert_espionage($xdoc,$userid) {
		$spios = $xdoc->getElementsByTagName("espionage");
		$spios_data = array();

		foreach ($spios as $spio) {
			// extract information from XML file
			$spio_data = $this->get_spio_data($spio);
			if ($spio_data === false) {
				return false;
			}
			// store results
			array_push($spios_data, $spio_data);
		}
		unset($spios);
		unset($xdoc);

		if ($this->update_espionage_at_database($spios_data,$userid)) {
			return true;
		} else {
			return false;
		}

	}

	/**
	 * Collect coordinates from XML DOM node
	 *
	 * @param DomNode $espionage_DOMNode
	 * @param String $coordinates_tag
	 * @return array of coordinates
	 */
	private function get_coordinates_data($espionage_DOMNode,$coordinates_tag) {
		$coordinates_DOMNode = $espionage_DOMNode->getElementsByTagName($coordinates_tag);

		foreach ($coordinates_DOMNode as $coordinate_DOMNode) {

			$return_value["galaxy"] = intval($coordinate_DOMNode->getAttribute("galaxy"));
			$return_value["system"] = intval($coordinate_DOMNode->getAttribute("system"));
			$return_value["planet"] = intval($coordinate_DOMNode->getAttribute("planet"));

			return $return_value; // there is only one source or target
		}
	}

	/**
	 * Get all information from ESPIONAGE XML tag
	 *
	 * @param DOMNode $espionage_DOMNode
	 * @return array with espionage details
	 */
	private function get_spio_data($espionage_DOMNode) {
		$return_value                 = array();
		$return_value["msg_id"]       = trim($espionage_DOMNode->getAttribute("msg_id"));

		$activity = $espionage_DOMNode->getElementsByTagName("activity"); // at max one
		if ($activity->length != 0) {
			$return_value["activity"] = $activity->item(0);
		}
		$return_value["source"]       = $this->get_coordinates_data($espionage_DOMNode,"source");
		$return_value["target"]       = $this->get_coordinates_data($espionage_DOMNode,"target");

		return $return_value;
	}


	/**
	 * collect source coordinates to determine player_id (if not older than one week)
	 *
	 * @param array $spios_data
	 * @return array with coordinates as key and playerid as value
	 */
	private function get_players_for_coordinates($spios_data) {
		$return_value = array();

		$query = "SELECT ogame_playerid, g.galaxy, g.system, g.planet FROM $this->galaxytable g, $this->systemtable s WHERE g.galaxy=s.galaxy AND g.system=s.system AND (";
		foreach ($spios_data as $spio) {
			$query .= "(g.galaxy=".intval($spio['source']['galaxy'])." AND g.system=".intval($spio['source']['system'])." AND g.planet=".intval($spio['source']['planet']).") OR ";
		}
		// remove last three characters " OR "
		$query = substr($query,0,strlen($query)-4);
		$query .= ") AND s.last_update > '".date("Y-m-d H:i:s",(time()-86400*7))."'";
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while collecting players from galaxy table");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->ogame_playerid > 0) {
				$return_value[$line->galaxy.":".$line->system.":".$line->planet] = $line->ogame_playerid;
			}
		}

		return $return_value;
	}

	/**
	 * Insert espionage data into database - currently only activities are stored
	 *
	 * @param Espionage array $spios_data
	 * @param int $userid UserID at galaxytool
	 * @return boolean
	 */
	private function update_espionage_at_database(array $spios_data, $userid) {

		$playerids_for_coordinates = $this->get_players_for_coordinates($spios_data);
		if ($playerids_for_coordinates === false) return false;

		foreach ($spios_data as $spio) {
			// inform activity parser
			if (isset($spio['activity']) && $spio['activity'] != null) {
				if (isset($playerids_for_coordinates[$spio['source']['galaxy'].":".$spio['source']['system'].":".$spio['source']['planet']])) {
					$this->activity_parser->collect_activity($spio['activity'], null, ActivityParser::type_scan, $playerids_for_coordinates[$spio['source']['galaxy'].":".$spio['source']['system'].":".$spio['source']['planet']] );
				}
			}
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

}