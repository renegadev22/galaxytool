<?php
require_once GALAXYTOOL_ROOT."/languages/english_probes.inc.php";
/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*/

class PlanetinfoParser extends XMLParserGlobal{

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

	private $db_fieldnames = array(
	"metal","crystal","deuterium","energy", // 0-3
	"kt","gt","lj","sj","krz","ss","kolo","rec","spio","bomb","zerri","ds","skrz","sat", // 4-17
	"rak","ll","sl","ion","gauss","plasma","ksk","gsk","arak","irak", // 18-27
	"memi","krimi","deutsyn","solar","fusion","robo","nani","rawe","mesp","krissp","deutsp","folab","terra","allydep","raksilo","mbase","sensor","sprungtor", // 28-45
	"spiolvl","computech","waffentech","schildtech","rpz","energytech","hypertech","vbt","impulse","hra","lasertech","iontech","plasmatech","forschungsnetz","expedition","gravi" // 46-61
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

	function __construct($reporttable,$galaxytable,$playertable,$utablename,$universe) {
		$this->xml_schema = "xml_schema/planetinfo.xsd";
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
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_planetinfo);
		if ($xdoc === false) {
			return false;
		}

		if ($this->unknown_entries_error_object == null) {
			$this->unknown_entries_error_object = new ErrorObject(ErrorObject::severity_warning , REPORTS_UNKNOWN_ENTRIES);
		}

		$result = $this->insert_planetinfo($xdoc,$this->userid);

		if ($result === true && $this->unknown_entries_found === true) {
			$this->error_object = $this->unknown_entries_error_object;
			$result = false;
		}

		// add error or success messages
		$this->check_result2($result);

		return $result;
	}

	private function insert_planetinfo($xdoc,$userid) {
		$planetinformation = $xdoc->getElementsByTagName("planetinfo");
		$planetinformation_data = array();

		foreach ($planetinformation as $planetinfo) {
			// extract information from XML file
			$planetinfo_data = $this->get_planetinfo_data($planetinfo);
			// store results
			array_push($planetinformation_data, $planetinfo_data);
		}
		unset($planetinformation);
		unset($xdoc);

		if ($this->update_planetinfo_at_database($planetinformation_data,$userid)) {
			return true;
		} else {
			return false;
		}

	}

	private function get_planetinfo_data($planetinfo_DOMNode) {
		$return_value = array();
		$return_value["playername"] = trim($planetinfo_DOMNode->getAttribute("playername"));
		$return_value["planetname"] = trim($planetinfo_DOMNode->getAttribute("planetname"));
		$return_value["moon"]       = $planetinfo_DOMNode->getAttribute("moon");
		$return_value["galaxy"]     = $planetinfo_DOMNode->getAttribute("galaxy");
		$return_value["system"]     = $planetinfo_DOMNode->getAttribute("system");
		$return_value["planet"]     = $planetinfo_DOMNode->getAttribute("planet");
		$return_value["playerid"]   = intval($planetinfo_DOMNode->getAttribute("playerid"));

		$return_value["entries"]    = array();

		$planetinfo_entries_DOMNode = $planetinfo_DOMNode->getElementsByTagName("entry");
		foreach ($planetinfo_entries_DOMNode as $entry_DOMNode) {
			array_push($return_value["entries"], array(
			"name" => $entry_DOMNode->getAttribute("name"),
			"amount" => $entry_DOMNode->getAttribute("amount")
			));
		}

		return $return_value;
	}

	private function update_planetinfo_at_database(array $planetinformation,$userid) {

		$query = "INSERT INTO $this->reporttable (".
		"galaxy,system,planet,planetname,moon,".
		"metal,crystal,deuterium,energy,".
		"kt,gt,lj,sj,krz,ss,kolo,rec,spio,bomb,zerri,ds,skrz,sat,".
		"rak,ll,sl,ion,gauss,plasma,ksk,gsk,arak,irak,".
		"memi,krimi,deutsyn,solar,fusion,robo,nani,rawe,mesp,krissp,deutsp,folab,terra,allydep,raksilo,mbase,sensor,sprungtor,".
		"spiolvl,computech,waffentech,schildtech,rpz,energytech,hypertech,vbt,impulse,hra,lasertech,iontech,plasmatech,forschungsnetz,expedition,gravi,".
		"fleet_resis,defence_resis,".
		"scantime,user_id,scanned,".
		"min_phalanx,max_phalanx,min_rak,max_rak".
		") VALUES ";

		foreach ($planetinformation as $report) {
			$unknown_entries_occured = false;

			// initialize entries array
			$entries_array = array();
			for ($i=0;$i<count($this->db_index);$i++) {
				$entries_array[$i] = $this->db_fieldnames[$i]; // do not overwrite entries which are not sent
			}
			$fleet_df   = 0;
			$defence_df = 0;

			// use all english texts to determine the position in the entries array where to store the amount
			$unknown_entries = new ErrorObject(ErrorObject::severity_warning , REPORTS_UNKNOWN_ENTRIES." ".$report["galaxy"].":".$report["system"].":".$report["planet"]);
			$entry_block_initialized = false;
			$planetinfo_type = "";
			$sats_found = false;
			foreach ($report["entries"] as $entry) {
				if (isset($this->db_index[$entry["name"]])) {
					$db_index = $this->db_index[$entry["name"]];
					// we have to initialize all fleets or defence or ... with zeroes which are currently to be updated
					if ($db_index > 3 && $entry_block_initialized === false) { // any entry != metal,crystal, deuterium and energy
						$entry_block_initialized = true;
						// determine current planetinformation (fleet, def, facilities, buildings, research)
						if ($db_index > 45) {
							// research
							$planetinfo_type = "research";
							for ($i=46;$i<count($this->db_index);$i++) {
								$entries_array[$i] = 0; // overwrite with 0
							}
						} elseif ($db_index > 27) { // buildings
							if (($db_index < 32) || (($db_index > 35) && ($db_index < 39))) {
								// buildings
								$planetinfo_type = "buildings";
								$entries_array[17] = 0; // overwrite solar sats with 0
								$entries_array[28] = 0; // overwrite memi with 0
								$entries_array[29] = 0; // overwrite krimi with 0
								$entries_array[30] = 0; // overwrite deutsyn with 0
								$entries_array[31] = 0; // overwrite solar with 0
								$entries_array[32] = 0; // overwrite fusion with 0
								$entries_array[36] = 0; // overwrite mesp with 0
								$entries_array[37] = 0; // overwrite krissp with 0
								$entries_array[38] = 0; // overwrite deutsp with 0

							} else {
								// facilities
								$planetinfo_type = "facilities";
								$entries_array[33] = 0; // overwrite robo with 0
								$entries_array[34] = 0; // overwrite nani with 0
								$entries_array[35] = 0; // overwrite rawe with 0

								for ($i=39;$i<=45;$i++) {
									$entries_array[$i] = 0; // overwrite rest with 0
								}

							}

						} elseif ($db_index > 17) { // defence
							$planetinfo_type = "defence";
							for ($i=18;$i<=27;$i++) {
								$entries_array[$i] = 0; // overwrite with 0
							}
						} elseif ($db_index > 3 && $db_index < 17) { // fleet
							$planetinfo_type = "fleet";
							for ($i=4;$i<17;$i++) { // do not overwrite solar sats for fleet as fleet is beeing used for shipyard and fleet overview (does not contain sats)
								$entries_array[$i] = 0; // overwrite with 0
							}
						} elseif($db_index == 17) {
							$entry_block_initialized = false; // we cannot be sure which block we got, check with next entry (if there is one)
							$sats_found = true;
						}
					}
					// add entry to entry array which will become part of the query
					$entries_array[$this->db_index[$entry["name"]]] = intval($entry["amount"]);


					if (isset($this->fleet_array[$entry["name"]])) {
						// calculate fleet debris
						$fleet_df += ($this->fleet_array[$entry["name"]] * $entry["amount"]);
					} elseif (isset($this->defence_array[$entry["name"]])) {
						// calculate defense debris
						$defence_df += ($this->defence_array[$entry["name"]] * $entry["amount"]);
					}
				} else {
					// unknown entries
					$unknown_entries->add_child_message(new ErrorObject(ErrorObject::severity_warning , $entry["name"]));
					$unknown_entries_occured = true;
				}
			}

			$moon = $report["moon"];
			// second moon detection (Lunarbase, sensorphalanx or jumpgate exist)
			if ($planetinfo_type == "facilities" && ($entries_array[43] > 0 || $entries_array[44] > 0 || $entries_array[45] > 0)) {
				$moon = "true";
			}

			// start building the query information
			$entry_query = "(";
			$entry_query .= DB::getDB()->quote($report["galaxy"]).",";
			$entry_query .= DB::getDB()->quote($report["system"]).",";
			$entry_query .= DB::getDB()->quote($report["planet"]).",";
			$entry_query .= DB::getDB()->quote($report["planetname"]).",";
			$entry_query .= DB::getDB()->quote($moon).",";

			// add all entries to query
			$entry_query .= implode(",",$entries_array).",";

			// set fleet and defense debris
			if ($planetinfo_type == "fleet" || $planetinfo_type == "buildings") {
				$entry_query .= intval($fleet_df).",";
			} else {
				$entry_query .= "fleet_resis,"; // do not overwrite existing data
			}
			if ($planetinfo_type == "defence") {
				$entry_query .= intval($defence_df).",";
			} else {
				$entry_query .= "defence_resis,"; // do not overwrite existing data
			}


			// scantime, user_id, scanned
			$entry_query .= DB::getDB()->quote(date("Y-m-d")." 12:00:00").",";
			$entry_query .= $userid.",";
			$entry_query .= "'1',";

			// calculate max range for phalanx
			if ($entries_array[44] != "sensor" && $entries_array[44] > 0) {
				$min_phalanx = ($report["system"] - (($entries_array[44]*$entries_array[44])-1));
				if ($min_phalanx < 0) $min_phalanx = 0;
				$entry_query .= "".$min_phalanx.",".($report["system"] + (($entries_array[44]*$entries_array[44])-1)).", ";
			} elseif ($entries_array[44] != "sensor") {
				$entry_query .= "0,0,";
			} else {
				$entry_query .= "min_phalanx,max_phalanx,"; // keep old values
			}

			// calculate range for rockets
			if ($entries_array[42] != "raksilo" && $entries_array[42] > 3 && $report["playerid"] > 0) {
				// try to find player at database
				$playertech_query = "SELECT impulse FROM $this->playertable WHERE ogame_playerid=:ogame_playerid LIMIT 1";
				$stmt = DB::getDB()->prepare($playertech_query);
				$stmt->bindParam(":ogame_playerid", $report["playerid"]);
				$playertech_res = $this->execute($stmt);
				if (!$playertech_res || $stmt->rowCount() == 0) {
					// use old values
					$entry_query .= "min_rak,max_rak"; // attention: no comma at the end as this is the last entry in the query
				} else {
					$techs = $stmt->fetch(PDO::FETCH_OBJ);
					$impulsetech = $techs->impulse;
					if ($impulsetech > 0) {
						$min_rak = ($report["system"] - (($impulsetech*5)-1));
						if ($min_rak < 0) $min_rak = 0; // to avoid problems with mysql unsigned data type
						$max_rak = ($report["system"] + (($impulsetech*5)-1)); // as we may have universes with less then 499 systems, we do no change it to a max value
						$entry_query .= "$min_rak,$max_rak"; // attention: no comma at the end as this is the last entry in the query
					} else {
						// use old values
						$entry_query .= "min_rak,max_rak"; // attention: no comma at the end as this is the last entry in the query
					}
				}
			} else {
				// cannot calculate max range for rockets because we would need techs + facilities --> keep old values
				$entry_query .= "min_rak,max_rak"; // attention: no comma at the end as this is the last entry in the query
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

		"planetname=VALUES(planetname),".
		"metal=VALUES(metal),crystal=VALUES(crystal),deuterium=VALUES(deuterium),energy=VALUES(energy),";

		if ($planetinfo_type == "fleet") {
			$query .= "kt=VALUES(kt),gt=VALUES(gt),lj=VALUES(lj),sj=VALUES(sj),krz=VALUES(krz),ss=VALUES(ss),kolo=VALUES(kolo),rec=VALUES(rec),".
			"spio=VALUES(spio),bomb=VALUES(bomb),zerri=VALUES(zerri),ds=VALUES(ds),skrz=VALUES(skrz),";

			// calculate fleet resis (cannot be done above as solar sats can be on buildings or fleet pages)
			if ($sats_found) {
				$query .= "sat=VALUES(sat),";

				$query .= "fleet_resis=".
				"VALUES(sat)*".$this->fleet_array[F_SOLARSATELLITE]."+".// <-- main difference to below
				"VALUES(kt)*".$this->fleet_array[F_SMALLCARGOSHIP]."+".
				"VALUES(gt)*".$this->fleet_array[F_LARGECARGOSHIP]."+".
				"VALUES(lj)*".$this->fleet_array[F_LIGHFIGHTER]."+".
				"VALUES(sj)*".$this->fleet_array[F_HEAVYFIGHTER]."+".
				"VALUES(krz)*".$this->fleet_array[F_CRUISER]."+".
				"VALUES(ss)*".$this->fleet_array[F_BATTLESHIP]."+".
				"VALUES(kolo)*".$this->fleet_array[F_COLONYSHIP]."+".
				"VALUES(rec)*".$this->fleet_array[F_RECYCLER]."+".
				"VALUES(spio)*".$this->fleet_array[F_ESPIONAGEPROBE]."+".
				"VALUES(bomb)*".$this->fleet_array[F_BOMBER]."+".
				"VALUES(zerri)*".$this->fleet_array[F_DESTROYER]."+".
				"VALUES(ds)*".$this->fleet_array[F_DEATHSTAR]."+".
				"VALUES(skrz)*".$this->fleet_array[F_BATTLECRUISER].",";
			} else {
				// do not update sats if not provided
				$query .= "fleet_resis=".
				"sat*".$this->fleet_array[F_SOLARSATELLITE]."+".
				"VALUES(kt)*".$this->fleet_array[F_SMALLCARGOSHIP]."+".
				"VALUES(gt)*".$this->fleet_array[F_LARGECARGOSHIP]."+".
				"VALUES(lj)*".$this->fleet_array[F_LIGHFIGHTER]."+".
				"VALUES(sj)*".$this->fleet_array[F_HEAVYFIGHTER]."+".
				"VALUES(krz)*".$this->fleet_array[F_CRUISER]."+".
				"VALUES(ss)*".$this->fleet_array[F_BATTLESHIP]."+".
				"VALUES(kolo)*".$this->fleet_array[F_COLONYSHIP]."+".
				"VALUES(rec)*".$this->fleet_array[F_RECYCLER]."+".
				"VALUES(spio)*".$this->fleet_array[F_ESPIONAGEPROBE]."+".
				"VALUES(bomb)*".$this->fleet_array[F_BOMBER]."+".
				"VALUES(zerri)*".$this->fleet_array[F_DESTROYER]."+".
				"VALUES(ds)*".$this->fleet_array[F_DEATHSTAR]."+".
				"VALUES(skrz)*".$this->fleet_array[F_BATTLECRUISER].",";
			}
		}

		if ($planetinfo_type == "defence") {
			$query .= "rak=VALUES(rak),ll=VALUES(ll),sl=VALUES(sl),ion=VALUES(ion),gauss=VALUES(gauss),plasma=VALUES(plasma),".
			"ksk=VALUES(ksk),gsk=VALUES(gsk),arak=VALUES(arak),irak=VALUES(irak),defence_resis=VALUES(defence_resis),";
		}

		if ($planetinfo_type == "buildings") {
			$query .= "memi=VALUES(memi),krimi=VALUES(krimi),deutsyn=VALUES(deutsyn),solar=VALUES(solar),fusion=VALUES(fusion),".
			"mesp=VALUES(mesp),krissp=VALUES(krissp),deutsp=VALUES(deutsp),sat=VALUES(sat),";

			$query .= "fleet_resis=".
			"VALUES(sat)*".$this->fleet_array[F_SOLARSATELLITE]."+".
			"kt*".$this->fleet_array[F_SMALLCARGOSHIP]."+".
			"gt*".$this->fleet_array[F_LARGECARGOSHIP]."+".
			"lj*".$this->fleet_array[F_LIGHFIGHTER]."+".
			"sj*".$this->fleet_array[F_HEAVYFIGHTER]."+".
			"krz*".$this->fleet_array[F_CRUISER]."+".
			"ss*".$this->fleet_array[F_BATTLESHIP]."+".
			"kolo*".$this->fleet_array[F_COLONYSHIP]."+".
			"rec*".$this->fleet_array[F_RECYCLER]."+".
			"spio*".$this->fleet_array[F_ESPIONAGEPROBE]."+".
			"bomb*".$this->fleet_array[F_BOMBER]."+".
			"zerri*".$this->fleet_array[F_DESTROYER]."+".
			"ds*".$this->fleet_array[F_DEATHSTAR]."+".
			"skrz*".$this->fleet_array[F_BATTLECRUISER].",";

		}

		if ($planetinfo_type == "facilities") {
			$query .= "robo=VALUES(robo),nani=VALUES(nani),rawe=VALUES(rawe),folab=VALUES(folab),".
			"terra=VALUES(terra),allydep=VALUES(allydep),raksilo=VALUES(raksilo),mbase=VALUES(mbase),sensor=VALUES(sensor),sprungtor=VALUES(sprungtor),".
			"min_phalanx=VALUES(min_phalanx),max_phalanx=VALUES(max_phalanx),min_rak=VALUES(min_rak),max_rak=VALUES(max_rak),";
		}

		if ($planetinfo_type == "research") {
			$query .= "spiolvl=VALUES(spiolvl),computech=VALUES(computech),waffentech=VALUES(waffentech),schildtech=VALUES(schildtech),rpz=VALUES(rpz),energytech=VALUES(energytech),".
			"hypertech=VALUES(hypertech),vbt=VALUES(vbt),impulse=VALUES(impulse),hra=VALUES(hra),lasertech=VALUES(lasertech),iontech=VALUES(iontech),".
			"plasmatech=VALUES(plasmatech),forschungsnetz=VALUES(forschungsnetz),expedition=VALUES(expedition),gravi=VALUES(gravi),";
		}

		$query .= "scantime=VALUES(scantime),user_id=VALUES(user_id),scanned=VALUES(scanned)";

		$res = $this->exec($query);
		if ($res === false) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating reports");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		// update player techs if needed
		if ($planetinfo_type == "research") {

			$galaxy     = DB::getDB()->quote($report["galaxy"]);
			$system     = DB::getDB()->quote($report["system"]);
			$planet     = DB::getDB()->quote($report["planet"]);
			$planetname = DB::getDB()->quote($report["planetname"]);

			// $entries_array[46]  - $entries_array[61] = techs
			$player_tech_update_query = "UPDATE $this->playertable SET ".
			"spiolvl='".$entries_array[46]."',
			computech='".$entries_array[47]."',
			waffentech='".$entries_array[48]."',
			schildtech='".$entries_array[49]."',
			rpz='".$entries_array[50]."',
			energytech='".$entries_array[51]."',
			hypertech='".$entries_array[52]."',
			vbt='".$entries_array[53]."',
			impulse='".$entries_array[54]."',
			hra='".$entries_array[55]."',
			lasertech='".$entries_array[56]."',
			iontech='".$entries_array[57]."',
			plasmatech='".$entries_array[58]."',
			forschungsnetz='".$entries_array[59]."',
			expedition='".$entries_array[60]."',
			gravi='".$entries_array[61]."'
			WHERE ogame_playerid = (SELECT g.ogame_playerid FROM $this->galaxytable g WHERE g.galaxy=$galaxy AND g.system=$system AND g.planet=$planet AND g.planetname=$planetname LIMIT 1)";

			$res = $this->exec($player_tech_update_query);
			if ($res === false) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting or updating reports");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}

		}

		return true;
	}

}