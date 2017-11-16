<?php
require_once GALAXYTOOL_ROOT."/languages/english_probes.inc.php";
/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*/

class FleetMovementParser extends XMLParserGlobal{

	private $fleetmovetable = "";
	private $unknown_entries_error_object = null;
	private $unknown_entries_found = false;


	private $db_index = array(
	R_METAL => 0,
	R_CRYSTAL => 1,
	R_DEUTERIUM => 2,

	F_SMALLCARGOSHIP => 3,
	F_LARGECARGOSHIP => 4,
	F_LIGHFIGHTER => 5,
	F_HEAVYFIGHTER => 6,
	F_CRUISER => 7,
	F_BATTLESHIP => 8,
	F_COLONYSHIP => 9,
	F_RECYCLER => 10,
	F_ESPIONAGEPROBE =>11,
	F_BOMBER => 12,
	F_DESTROYER => 13,
	F_DEATHSTAR => 14,
	F_BATTLECRUISER=> 15,
	D_INTERPLANETARYMISSILE=>16
	);

	private $db_fieldnames = array(	"metal","crystal","deuterium","kt","gt","lj","sj","krz","ss","kolo","rec","spio","bomb","zerri","ds","skrz","irak");

	function __construct($fleetmovetable,$utablename,$universe) {
		$this->xml_schema = "xml_schema/fleet_movement.xsd";
		//  call super constructor
		$result = parent::__construct("DUMMY_TABLE_NAME","DUMMY_TABLE_NAME",$utablename,$universe);
		if ($result === false) {
			return false;
		}

		// local setup
		if (trim($fleetmovetable) == "") return false;

		$this->fleetmovetable = $fleetmovetable;

		return $this;
	}

	public function insert_data($xml_content) {
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_fleet_movement);
		if ($xdoc === false) {
			return false;
		}

		if ($this->unknown_entries_error_object == null) {
			$this->unknown_entries_error_object = new ErrorObject(ErrorObject::severity_warning , REPORTS_UNKNOWN_ENTRIES);
		}

		$result = $this->insert_fleetmovement($xdoc,$this->userid);

		if ($result === true && $this->unknown_entries_found === true) {
			$this->error_object = $this->unknown_entries_error_object;
			$result = true;
		}

		// add error or success messages
		$this->check_result2($result);

		return $result;
	}

	private function insert_fleetmovement($xdoc,$userid) {
		$fleets = $xdoc->getElementsByTagName("fleet");
		$fleets_data = array();

		foreach ($fleets as $fleet) {
			// extract information from XML file
			$fleet_data = $this->get_fleetmovement_data($fleet);
			if ($fleet_data === false) {
				return false;
			}
			// store results
			array_push($fleets_data, $fleet_data);
		}
		unset($fleets);
		unset($xdoc);

		if ($this->update_fleetmovement_at_database($fleets_data,$userid)) {
			return true;
		} else {
			return false;
		}

	}

	private function get_coordinates_data($fleet_DOMNode,$coordinates_tag) {
		$coordinates_DOMNode = $fleet_DOMNode->getElementsByTagName($coordinates_tag);

		foreach ($coordinates_DOMNode as $coordinate_DOMNode) {

			$return_value["galaxy"] = intval($coordinate_DOMNode->getAttribute("galaxy"));
			$return_value["system"] = intval($coordinate_DOMNode->getAttribute("system"));
			$return_value["planet"] = intval($coordinate_DOMNode->getAttribute("planet"));
			$return_value["moon"]   = $coordinate_DOMNode->getAttribute("moon");

			$planetname_DOMNode = $coordinate_DOMNode->getElementsByTagName("planetname"); // only one
			if ($planetname_DOMNode->length == 0) {
				$return_value["planetname"] = "";
			} else {
				$return_value["planetname"] = $planetname_DOMNode->item(0)->nodeValue;
			}

			return $return_value; // there is only one origin or destination
		}
	}

	private function get_fleetmovement_data($fleet_DOMNode) {
		$return_value                 = array();
		$return_value["fleet_id"]     = trim($fleet_DOMNode->getAttribute("fleet_id"));
		// optional
		if ($fleet_DOMNode->hasAttribute("sub_fleet_id")) {
			$return_value["sub_fleet_id"] = $fleet_DOMNode->getAttribute("sub_fleet_id");
		} else {
			$return_value["sub_fleet_id"] = 0;
		}
		$return_value["mission"]      = trim($fleet_DOMNode->getAttribute("mission"));
		$return_value["arrival_time"] = str_replace(".","-",$fleet_DOMNode->getAttribute("arrival_time")); // DB times use "-" between date
		$return_value["scantime"]     = str_replace(".","-",$fleet_DOMNode->getAttribute("scantime"));
		$return_value["returning"]    = $fleet_DOMNode->getAttribute("returning");
		$return_value["origin"]       = $this->get_coordinates_data($fleet_DOMNode,"origin");
		$return_value["destination"]  = $this->get_coordinates_data($fleet_DOMNode,"destination");

		// entries
		$return_value["entries"]      = array();
		$fleet_entries_DOMNode = $fleet_DOMNode->getElementsByTagName("entry");
		foreach ($fleet_entries_DOMNode as $entry_DOMNode) {
			array_push($return_value["entries"], array(
			"name" => $entry_DOMNode->getAttribute("name"),
			"amount" => $entry_DOMNode->getAttribute("amount")
			));
		}

		if ($return_value["fleet_id"] == "") {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "No Fleet ID provided");
			return false;
		}

		return $return_value;
	}

	/**
	 * Delete entries from DB where arrival time < scantime of current XML
	 *
	 * @param Fleet array $fleets_data
	 * @return boolean
	 */
	private function delete_fleetmovement_at_database(array $fleets_data) {
		if (count($fleets_data) == 0) return true;

		// delete outdated fleet information
		// get scantime
		$fleet    = $fleets_data[0];
		$scantime = $fleet["scantime"];

		$query = "DELETE FROM $this->fleetmovetable WHERE arrival_time < :scantime";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam("scantime", $scantime);
		$res = $this->execute($stmt);
		if (!$res) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while deleting existing fleet movements");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		return true;
	}

	/**
	 * Insert fleet data into database
	 *
	 * @param Fleet array $fleets_data
	 * @param int $userid UserID at galaxytool
	 * @return boolean
	 */
	private function update_fleetmovement_at_database(array $fleets_data,$userid) {

		if ($this->delete_fleetmovement_at_database($fleets_data) === false) return false;

		$query = "INSERT INTO $this->fleetmovetable (".
		"fleet_id,sub_fleet_id,mission,arrival_time,returning,origin_galaxy,origin_system,origin_planet,origin_planetname,origin_moon,".
		"destination_galaxy,destination_system,destination_planet,destination_planetname,destination_moon,scantime,user_id,".
		"metal,crystal,deuterium,".
		"kt,gt,lj,sj,krz,ss,kolo,rec,spio,bomb,zerri,ds,skrz,irak".
		") VALUES ";

		foreach ($fleets_data as $fleet) {
			$unknown_entries_occured = false;

			// initialize entries array
			$entries_array = array();
			for ($i=0;$i<count($this->db_index);$i++) {
				$entries_array[$i] = 0; // use 0 for non existing entries
			}

			// use all english texts to determine the position in the entries array where to store the amount
			$message_text = REPORTS_UNKNOWN_ENTRIES." ".$fleet["origin"]["galaxy"].":".$fleet["origin"]["system"].":".$fleet["origin"]["planet"]." - ".
			$fleet["destination"]["galaxy"].":".$fleet["destination"]["system"].":".$fleet["destination"]["planet"];
			$unknown_entries = new ErrorObject(ErrorObject::severity_warning , $message_text);
			$entry_block_initialized = false;

			foreach ($fleet["entries"] as $entry) {
				if (isset($this->db_index[$entry["name"]])) {
					// get amount
					$entries_array[$this->db_index[$entry["name"]]] = intval($entry["amount"]);

				} else {
					// unknown entries
					$unknown_entries->add_child_message(new ErrorObject(ErrorObject::severity_warning , $entry["name"]));
					$unknown_entries_occured = true;
				}
			}
			// start building the query information
			$entry_query = "(";
			$entry_query .= intval($fleet["fleet_id"]).",";
			if ($fleet["sub_fleet_id"] == 0) {
				$entry_query .= "0,";
			} else {
				$entry_query .= intval($fleet["sub_fleet_id"]).","; // only filled for ACS attack
			}
			$entry_query .= DB::getDB()->quote($fleet["mission"]).",";
			$entry_query .= DB::getDB()->quote($fleet["arrival_time"]).",";
			$entry_query .= DB::getDB()->quote($fleet["returning"]).",";
			$entry_query .= DB::getDB()->quote($fleet["origin"]["galaxy"]).",";
			$entry_query .= DB::getDB()->quote($fleet["origin"]["system"]).",";
			$entry_query .= DB::getDB()->quote($fleet["origin"]["planet"]).",";
			$entry_query .= DB::getDB()->quote($fleet["origin"]["planetname"]).",";
			$entry_query .= DB::getDB()->quote($fleet["origin"]["moon"]).",";
			$entry_query .= DB::getDB()->quote($fleet["destination"]["galaxy"]).",";
			$entry_query .= DB::getDB()->quote($fleet["destination"]["system"]).",";
			$entry_query .= DB::getDB()->quote($fleet["destination"]["planet"]).",";
			$entry_query .= DB::getDB()->quote($fleet["destination"]["planetname"]).",";
			$entry_query .= DB::getDB()->quote($fleet["destination"]["moon"]).",";
			$entry_query .= DB::getDB()->quote($fleet["scantime"]).",";
			$entry_query .= $this->userid.",";

			// add all entries to query
			$entry_query .= implode(",",$entries_array).",";

			// store all unknown entries of this fleet movement
			if ($unknown_entries_occured === true) {
				$this->unknown_entries_error_object->add_child_message($unknown_entries);
				$this->unknown_entries_found = true;
			}

			// remove last comma
			$entry_query = substr($entry_query,0,strlen($entry_query)-1);

			$entry_query .= "),";
			// add complete entry to global query
			$query .= $entry_query;
		}

		// remove comma behind last VALUES part
		$query = substr($query,0,strlen($query)-1);
		$query .= " ON DUPLICATE KEY UPDATE ".
		"mission=VALUES(mission),arrival_time=VALUES(arrival_time),returning=VALUES(returning),origin_galaxy=VALUES(origin_galaxy),".
		"origin_system=VALUES(origin_system),origin_planet=VALUES(origin_planet),origin_planetname=VALUES(origin_planetname),origin_moon=VALUES(origin_moon),".
		"destination_galaxy=VALUES(destination_galaxy),destination_system=VALUES(destination_system),destination_planet=VALUES(destination_planet),".
		"destination_planetname=VALUES(destination_planetname),destination_moon=VALUES(destination_moon),scantime=VALUES(scantime),user_id=VALUES(user_id),".
		"metal=VALUES(metal),crystal=VALUES(crystal),deuterium=VALUES(deuterium),".
		"kt=VALUES(kt),gt=VALUES(gt),lj=VALUES(lj),sj=VALUES(sj),krz=VALUES(krz),".
		"ss=VALUES(ss),kolo=VALUES(kolo),rec=VALUES(rec),spio=VALUES(spio),bomb=VALUES(bomb),".
		"zerri=VALUES(zerri),ds=VALUES(ds),skrz=VALUES(skrz),irak=VALUES(irak)";

		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting fleet movements");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		return true;

	}

}