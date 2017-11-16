<?php
require_once GALAXYTOOL_ROOT."/languages/english_probes.inc.php";
/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*/

class ReportParser extends XMLParserGlobal{

	private $reporttable = "";
	private $galaxytable = "";
	private $unknown_entries_error_object = null;
	private $unknown_entries_found = false;


	private $db_index = array(
	R_METAL => 0,
	R_CRYSTAL => 1,
	R_DEUTERIUM => 2,
	R_ENERGY => 3,

	F_SMALLCARGOSHIP => 4,
	F_LARGECARGOSHIP => 5,
	F_LIGHFIGHTER => 6,
	F_HEAVYFIGHTER => 7,
	F_CRUISER => 8,
	F_BATTLESHIP => 9,
	F_COLONYSHIP => 10,
	F_RECYCLER => 11,
	F_ESPIONAGEPROBE =>12,
	F_BOMBER => 13,
	F_DESTROYER => 14,
	F_DEATHSTAR => 15,
	F_BATTLECRUISER=> 16,
	F_SOLARSATELLITE => 17,

	D_MISSILELAUNCHER => 18,
	D_SMALLLASER => 19,
	D_HEAVYLASER => 20,
	D_IONCANNON => 21,
	D_GAUSSCANNON => 22,
	D_PLASMACANNON => 23,
	D_SMALLSHIELDDOME => 24,
	D_LARGESHILDDOME => 25,
	D_ANTIBALLISTICMISSILE => 26,
	D_INTERPLANETARYMISSILE => 27,

	B_METALMINE => 28,
	B_CRYSTALMINE => 29,
	B_DEUTERIUMSYNTHESIZER => 30,
	B_SOLARPLANT => 31,
	B_FUSIONPLANT => 32,
	B_ROBOTFACTORY => 33,
	B_NANITEFACTORY => 34,
	B_SHIPYARD => 35,
	B_METALSTORAGE => 36,
	B_CRYSTALSTORAGE => 37,
	B_DEUTERIUMTANK => 38,
	B_RESAERCHLAB => 39,
	B_TERRAFORMER => 40,
	B_ALLIANCEDEPOT => 41,
	B_ROCKETSILO => 42,
	B_LUNARBASE => 43,
	B_SENSORPHALANX => 44,
	B_JUMPGATE => 45,

	RS_ESPIONAGE => 46,
	RS_COMPUTER => 47,
	RS_WEAPON => 48,
	RS_SHIELDING => 49,
	RS_ARMOUR => 50,
	RS_ENERGY => 51,
	RS_HYPERSPACE => 52,
	RS_COMBUSTIONENGINE => 53,
	RS_IMPULSEENGINE => 54,
	RS_HYPERSPACEENGINE => 55,
	RS_LASER => 56,
	RS_ION => 57,
	RS_PLASMA => 58,
	RS_IRNETWORK => 59,
	RS_EXPEDITION => 60,
	RS_GRAVITON => 61
	);

	// resources you will lose at fleet
	private $fleet_array = array(
	F_SMALLCARGOSHIP => 4000,
	F_LARGECARGOSHIP => 12000,
	F_LIGHFIGHTER => 4000,
	F_HEAVYFIGHTER => 10000,
	F_CRUISER => 27000,
	F_BATTLESHIP => 60000,
	F_COLONYSHIP => 30000,
	F_RECYCLER => 18000,
	F_ESPIONAGEPROBE => 1000,
	F_BOMBER => 22500,
	F_DESTROYER => 110000,
	F_DEATHSTAR => 9000000,
	F_BATTLECRUISER => 70000,
	F_SOLARSATELLITE => 2000,
	);

	// resources you will lose at def
	private $defence_array = array(
	D_MISSILELAUNCHER => 600,
	D_SMALLLASER => 600,
	D_HEAVYLASER => 2400,
	D_IONCANNON => 2400,
	D_GAUSSCANNON => 10500,
	D_PLASMACANNON => 30000,
	D_SMALLSHIELDDOME => 6000,
	D_LARGESHILDDOME => 30000,
	);

	// attention - this is a copy of the $db_array in general.inc.php! Always adjust both files if needed
	private $db_array = array(
	R_METAL => "metal",
	R_CRYSTAL => "crystal",
	R_DEUTERIUM => "deuterium",
	R_ENERGY => "energy",
	F_SMALLCARGOSHIP => "kt",
	F_LARGECARGOSHIP => "gt",
	F_LIGHFIGHTER => "lj",
	F_HEAVYFIGHTER => "sj",
	F_CRUISER => "krz",
	F_BATTLESHIP => "ss",
	F_COLONYSHIP => "kolo",
	F_RECYCLER => "rec",
	F_ESPIONAGEPROBE => "spio",
	F_BOMBER => "bomb",
	F_DESTROYER => "zerri",
	F_DEATHSTAR => "ds",
	F_BATTLECRUISER=>"skrz",
	F_SOLARSATELLITE => "sat",

	D_MISSILELAUNCHER => "rak",
	D_SMALLLASER => "ll",
	D_HEAVYLASER => "sl",
	D_IONCANNON => "ion",
	D_GAUSSCANNON => "gauss",
	D_PLASMACANNON => "plasma",
	D_SMALLSHIELDDOME => "ksk",
	D_LARGESHILDDOME => "gsk",
	D_ANTIBALLISTICMISSILE => "arak",
	D_INTERPLANETARYMISSILE => "irak",

	B_METALMINE => "memi",
	B_CRYSTALMINE => "krimi",
	B_DEUTERIUMSYNTHESIZER => "deutsyn",
	B_SOLARPLANT => "solar",
	B_FUSIONPLANT => "fusion",
	B_ROBOTFACTORY => "robo",
	B_NANITEFACTORY => "nani",
	B_SHIPYARD => "rawe",
	B_METALSTORAGE => "mesp",
	B_CRYSTALSTORAGE => "krissp",
	B_DEUTERIUMTANK => "deutsp",
	B_RESAERCHLAB => "folab",
	B_TERRAFORMER => "terra",
	B_ALLIANCEDEPOT => "allydep",
	B_ROCKETSILO => "raksilo",
	B_LUNARBASE => "mbase",
	B_SENSORPHALANX => "sensor",
	B_JUMPGATE => "sprungtor",

	RS_ESPIONAGE => "spiolvl",
	RS_COMPUTER => "computech",
	RS_WEAPON => "waffentech",
	RS_SHIELDING => "schildtech",
	RS_ARMOUR => "rpz",
	RS_ENERGY => "energytech",
	RS_HYPERSPACE => "hypertech",
	RS_COMBUSTIONENGINE => "vbt",
	RS_IMPULSEENGINE => "impulse",
	RS_HYPERSPACEENGINE => "hra",
	RS_LASER => "lasertech",
	RS_ION => "iontech",
	RS_PLASMA => "plasmatech",
	RS_IRNETWORK => "forschungsnetz",
	RS_EXPEDITION => "expedition",
	RS_GRAVITON => "gravi"
	);



	function __construct($reporttable,$galaxytable,$playertable,$utablename,$universe) {
		$this->xml_schema = "xml_schema/reports.xsd";
		//  call super constructor
		$result = parent::__construct("DUMMY_TABLE_NAME",$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}

		// local setup
		if (trim($galaxytable) == "") return false;
		if (trim($reporttable) == "") return false;

		$this->galaxytable = $galaxytable;
		$this->reporttable = $reporttable;

		return $this;
	}

	public function insert_data($xml_content) {
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_reports  );
		if ($xdoc === false) {
			return false;
		}

		if ($this->unknown_entries_error_object == null) {
			$this->unknown_entries_error_object = new ErrorObject(ErrorObject::severity_warning , REPORTS_UNKNOWN_ENTRIES);
		}


		$result = $this->insert_report($xdoc,$this->userid);

		if ($result === true && $this->unknown_entries_found === true) {
			$this->error_object = $this->unknown_entries_error_object;
			$result = false;
		}

		// add error or success messages
		$this->check_result2($result);

		return $result;
	}

	private function insert_report($xdoc,$userid) {
		$reports = $xdoc->getElementsByTagName("report");
		$reports_data = array();

		foreach($reports as $report) {
			// extract information from XML file
			$report_data = $this->get_report_data($report);
			// store results
			array_push($reports_data, $report_data);
		}
		unset($reports);
		unset($xdoc);

		if ($this->update_reports_at_database($reports_data,$userid)) {
			return true;
		} else {
			return false;
		}
	}

	private function get_report_data($report_DOMNode) {
		$return_value = array();
		$return_value["playername"] = trim($report_DOMNode->getAttribute("playername"));
		$return_value["planetname"] = trim($report_DOMNode->getAttribute("planetname"));
		$return_value["moon"]       = $report_DOMNode->getAttribute("moon");
		$return_value["galaxy"]     = $report_DOMNode->getAttribute("galaxy");
		$return_value["system"]     = $report_DOMNode->getAttribute("system");
		$return_value["planet"]     = $report_DOMNode->getAttribute("planet");
		$return_value["datetime"]   = $report_DOMNode->getAttribute("datetime");
		$return_value["scandepth"]  = $report_DOMNode->getAttribute("scandepth");

		switch ($return_value["scandepth"]) {
			case "fleet": $return_value["scandepth"] = 2; break;
			case "defence": $return_value["scandepth"] = 3; break;
			case "buildings": $return_value["scandepth"] = 4; break;
			case "research": $return_value["scandepth"] = 5; break;
			default: $return_value["scandepth"] = 1; break;
		}

		if ($report_DOMNode->hasAttribute("msg_id")) {
			$return_value["msg_id"]     = $report_DOMNode->getAttribute("msg_id");
		} else {
			$return_value["msg_id"]     = null;
		}

		$return_value["entries"]    = array();

		$report_entries_DOMNode = $report_DOMNode->getElementsByTagName("entry");
		foreach ($report_entries_DOMNode as $entry_DOMNode) {
			array_push($return_value["entries"], array(
			"name" => $entry_DOMNode->getAttribute("name"),
			"amount" => $entry_DOMNode->getAttribute("amount")
			));
		}

		return $return_value;
	}

	private function delete_existing_reports_from_array(array &$reports) {

		$report_ids = array();
		foreach ($reports as $report) {
			if ($report['msg_id'] != null) 	array_push($report_ids,$report['msg_id']);
		}

		// check which IDs exist on DB level
		$query = "SELECT msg_id FROM $this->reporttable WHERE msg_id IN ('".implode("','",$report_ids)."')";
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while checking for existing reports");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		$existing_reports = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$existing_reports[$line->msg_id] = "";
		}
		unset($res);
		unset($line);
		unset($report_ids);


		foreach ($reports as $key => &$report) {
			if (isset($existing_reports[$report['msg_id']])) {
				// delete message from array
				unset($reports[$key]);
			}
		}

	}

	private function update_reports_at_database(array $reports,$userid) {
		$this->delete_existing_reports_from_array($reports);

		if (count($reports) == 0) return true;

		$query = "INSERT INTO $this->reporttable (".
		"galaxy,system,planet,planetname,moon,msg_id,".
		"metal,crystal,deuterium,energy,".
		"kt,gt,lj,sj,krz,ss,kolo,rec,spio,bomb,zerri,ds,skrz,sat,".
		"rak,ll,sl,ion,gauss,plasma,ksk,gsk,arak,irak,".
		"memi,krimi,deutsyn,solar,fusion,robo,nani,rawe,mesp,krissp,deutsp,folab,terra,allydep,raksilo,mbase,sensor,sprungtor,".
		"spiolvl,computech,waffentech,schildtech,rpz,energytech,hypertech,vbt,impulse,hra,lasertech,iontech,plasmatech,forschungsnetz,expedition,gravi,".
		"fleet_resis,defence_resis,".
		"scantime,user_id,scanned,".
		"min_phalanx,max_phalanx,min_rak,max_rak".
		") VALUES ";


		foreach ($reports as $report) {
			$unknown_entries_occured = false;

			// initialize entries array
			$entries_array = array();
			for ($i=0;$i<count($this->db_index);$i++) {
				$entries_array[$i] = 0;
			}
			$fleet_df   = 0;
			$defence_df = 0;

			// use all english texts to determine the position in the entries array where to store the amount
			$unknown_entries = new ErrorObject(ErrorObject::severity_warning , REPORTS_UNKNOWN_ENTRIES." ".$report["galaxy"].":".$report["system"].":".$report["planet"]);
			foreach ($report["entries"] as $entry) {
				if (isset($this->db_index[$entry["name"]])) {
					$entries_array[$this->db_index[$entry["name"]]] = intval($entry["amount"]);

					// calculate fleet debris
					if (isset($this->fleet_array[$entry["name"]])) {
						$fleet_df += ($this->fleet_array[$entry["name"]] * $entry["amount"]);
					}
					// calculate defense debris
					if (isset($this->defence_array[$entry["name"]])) {
						$defence_df += ($this->defence_array[$entry["name"]] * $entry["amount"]);
					}
				} else {
					// unknown entries
					$unknown_entries->add_child_message(new ErrorObject(ErrorObject::severity_warning , $entry["name"]));
					$unknown_entries_occured = true;
				}
			}

			// second moon detection (Lunarbase, sensorphalanx or jumpgate exist)
			$moon = $report["moon"];
			if ($entries_array[43] > 0 || $entries_array[44] > 0 || $entries_array[45] > 0) {
				$moon = "true";
			}


			// start building the query information
			$entry_query = "(";
			$entry_query .= intval($report["galaxy"]).",";
			$entry_query .= intval($report["system"]).",";
			$entry_query .= intval($report["planet"]).",";
			$entry_query .= DB::getDB()->quote($report["planetname"]).",";
			$entry_query .= DB::getDB()->quote($moon).",";
			$entry_query .= intval($report["msg_id"]).",";

			$entry_query .= implode(",",$entries_array).",";

			// set fleet and defense debris
			$entry_query .= intval($fleet_df).",";
			$entry_query .= intval($defence_df).",";

			// scantime, user_id, scanned
			$entry_query .= DB::getDB()->quote(str_replace(".","-",$report["datetime"])).",";
			$entry_query .= $userid.",";
			$entry_query .= "'".$report["scandepth"]."',";

			// calculate max range for phalanx
			if ($entries_array[44] > 0) {
				$min_phalanx = ($report["system"] - (($entries_array[44]*$entries_array[44])-1));
				if ($min_phalanx < 0) $min_phalanx = 0;
				$entry_query .= "".$min_phalanx.",".($report["system"] + (($entries_array[44]*$entries_array[44])-1)).", ";
			} else {
				$entry_query .= "0,0,";
			}

			// calculate max range for rockets
			if ($entries_array[42] > 3 && $entries_array[54] > 0) { // rocket silo and impulse tech
				$min_rak = ($report["system"] - (($entries_array[54]*5)-1));
				if ($min_rak < 0) $min_rak = 0; // to avoid problems with mysql unsigned data type
				$entry_query .= $min_rak.",".($report["system"] + (($entries_array[54]*5)-1))." "; // attention: no comma at the end as this is the last entry in the query
			} else {
				$entry_query .= "0,0"; // attention: no comma at the end as this is the last entry in the query
			}

			// store all unknown entries of this report
			if ($unknown_entries_occured === true) {
				$this->unknown_entries_error_object->add_child_message($unknown_entries);
				$this->unknown_entries_found = true;
			}

			$entry_query .= "),";
			// add complete entry to global query
			$query .= $entry_query;
		}

		// remove comma behind last VALUES part
		$query = substr($query,0,strlen($query)-1);
		$query .= " ON DUPLICATE KEY UPDATE ".

		"planetname=VALUES(planetname), msg_id=VALUES(msg_id),".
		"metal=VALUES(metal),crystal=VALUES(crystal),deuterium=VALUES(deuterium),energy=VALUES(energy),".

		"kt=VALUES(kt),gt=VALUES(gt),lj=VALUES(lj),sj=VALUES(sj),krz=VALUES(krz),ss=VALUES(ss),kolo=VALUES(kolo),rec=VALUES(rec),".
		"spio=VALUES(spio),bomb=VALUES(bomb),zerri=VALUES(zerri),ds=VALUES(ds),skrz=VALUES(skrz),sat=VALUES(sat),".

		"rak=VALUES(rak),ll=VALUES(ll),sl=VALUES(sl),ion=VALUES(ion),gauss=VALUES(gauss),plasma=VALUES(plasma),".
		"ksk=VALUES(ksk),gsk=VALUES(gsk),arak=VALUES(arak),irak=VALUES(irak),".

		"memi=VALUES(memi),krimi=VALUES(krimi),deutsyn=VALUES(deutsyn),solar=VALUES(solar),fusion=VALUES(fusion),robo=VALUES(robo),".
		"nani=VALUES(nani),rawe=VALUES(rawe),mesp=VALUES(mesp),krissp=VALUES(krissp),deutsp=VALUES(deutsp),folab=VALUES(folab),".
		"terra=VALUES(terra),allydep=VALUES(allydep),raksilo=VALUES(raksilo),mbase=VALUES(mbase),sensor=VALUES(sensor),sprungtor=VALUES(sprungtor),".

		"spiolvl=VALUES(spiolvl),computech=VALUES(computech),waffentech=VALUES(waffentech),schildtech=VALUES(schildtech),rpz=VALUES(rpz),energytech=VALUES(energytech),".
		"hypertech=VALUES(hypertech),vbt=VALUES(vbt),impulse=VALUES(impulse),hra=VALUES(hra),lasertech=VALUES(lasertech),iontech=VALUES(iontech),".
		"plasmatech=VALUES(plasmatech),forschungsnetz=VALUES(forschungsnetz),expedition=VALUES(expedition),gravi=VALUES(gravi),".

		"fleet_resis=VALUES(fleet_resis),defence_resis=VALUES(defence_resis),".
		"scantime=VALUES(scantime),user_id=VALUES(user_id),scanned=VALUES(scanned),".
		"min_phalanx=VALUES(min_phalanx),max_phalanx=VALUES(max_phalanx),min_rak=VALUES(min_rak),max_rak=VALUES(max_rak)";

		$res = $this->exec($query);
		if ($res === false) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating reports");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		return true;
	}

}