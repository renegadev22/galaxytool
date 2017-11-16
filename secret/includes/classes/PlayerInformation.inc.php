<?php
/**
 * This class returns player specific information.
 * @author eX0du5
 *
 */
class PlayerInformation extends PlayerAllyInformation {

	private $playertable;
	private $allytable;
	private $noticetable;
	private $playerhistory;
    private $reporttable;

	function __construct($playertable, $allytable, $noticetable, $playerhistory, $reporttable) {
		parent::__construct();

		if ($playertable == "") throw new InvalidArgumentException("Tablename missing for playertable");
		$this->playertable = $playertable;
		if ($allytable == "") throw new InvalidArgumentException("Tablename missing for alliances");
		$this->allytable = $allytable;
		if ($noticetable == "") throw new InvalidArgumentException("Tablename missing for notices");
		$this->noticetable = $noticetable;
		if ($reporttable == "") throw new InvalidArgumentException("Tablename missing for reports");
		$this->reporttable = $reporttable;
		// do not check for empty table - history might be inactive
		$this->playerhistory = $playerhistory;
	}





	/**
	 * Get a list of players as JSON format to be used at autocomplete textfields.
	 * @param boolean $ogame_playerid returns ID as OGame Playerid or internal player id
	 * @return boolean|JSON
	 */
	public function get_players_as_JSON($ogame_playerid) {
		if ($ogame_playerid !== true) $ogame_playerid = false;
		$query = "SELECT id,ogame_playerid,playername FROM $this->playertable";
		$stmt   = $this->query($query);
		if (!$stmt) return false;

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: [ \n";
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$id = ($ogame_playerid) ? $line->ogame_playerid : $line->id;
			$return_value .= "{ ".
			    " id:'$id',".
				" player: ".json_encode($line->playername).
				" },\n";
		}
		$return_value = substr($return_value,0,strlen($return_value)-2); // remove ,\n
		$return_value .= "]}\n";

		return $return_value;
	}

	/**
	 * Returns the internal ID for a given playername. If there are several players available with that name, only the first hit
	 * is returned!
	 * @param String $name Playername
	 * @return boolean|NULL|integer
	 */
	public function get_playerid_for_playername($name) {
		$query = "SELECT id FROM $this->playertable WHERE playername=:playername LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":playername", $name);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) return null;
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		return $line->id;
	}

	/**
	 * Returns the ogame playerid ID for a given playername. If there are several players available with that name, only the first hit
	 * is returned!
	 * @param String $name Playername
	 * @return boolean|NULL|integer
	 */
	public function get_ogame_playerid_for_playername($name) {
		$query = "SELECT ogame_playerid FROM $this->playertable WHERE playername=:playername LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":playername", $name);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) return null;
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		return $line->ogame_playerid;
	}

	/**
	 * Returns an associative array with player specific information and some alliance and notices information.
	 * @param Int $playerid
	 * @return boolean|array
	 */
	public function get_basic_player_information($playerid) {
		if (!is_numeric($playerid) || $playerid < 1) return false;
		$playerid = intval($playerid);

		$query = "SELECT p.*,allyname,members,a.diplomatic_status as a_dipl_status, ".
		         "alliance_id, noticetext ".
		         "FROM $this->playertable p LEFT JOIN $this->allytable a ON (p.alliance_id=a.id) ".
		         "LEFT JOIN $this->noticetable n ON (n.player_id = p.id) ".
		         "WHERE p.id=:playerid LIMIT 1";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":playerid", $playerid);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() != 1) return false;

		$player_information = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($player_information['banned'] == 'true') {
			$player_information['rank'] = 0;
			$player_information['frank'] = 0;
			$player_information['rrank'] = 0;
		}

		return $player_information;
	}

	/**
	 * Return an array of previous alliances of the player. The array has alliance id as key and alliance name as value.
	 * @param Int $playerid
	 * @return array|boolean
	 */
	public function get_previous_alliances($playerid) {
		if (empty($this->playerhistory)) return array();

		if (!is_numeric($playerid) || $playerid < 1) return false;
		$playerid = intval($playerid);

		$query = "SELECT distinct(a.allyname), a.id ".
	             "FROM $this->playerhistory p LEFT JOIN $this->allytable a ON p.alliance_id = a.id ".
	             "WHERE p.player_id=:playerid AND p.alliance_id > 0";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":playerid", $playerid);
		$res = $this->execute($stmt);
		if (!$res) return false;
		$alliances = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$alliances[$line->id] = $line->allyname;
		}
		return $alliances;
	}

	/**
	 * Returns the internal Galaxytool player id for a give ogame player id.
	 * @param Int $ogame_id
	 * @return boolean|Int
	 */
	public function get_playerid_for_ogame_id($ogame_id) {
		if (!is_numeric($ogame_id) || $ogame_id < 1) return false;
		$ogame_id = intval($ogame_id);

		$query = "SELECT id FROM $this->playertable WHERE ogame_playerid=:ogame_playerid LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":ogame_playerid", $ogame_id);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() > 0) {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			return $line->id;
		} else return false;
	}


	/**
	 * Return an array with coordinates that contain information if a report or moon exists for that coordinates.
	 * @param Int $playerid
	 * @return boolean|array
	 */
	public function get_player_coordinates($playerid) {
		return $this->get_coordinates($playerid);
	}

	public function get_report_data_as_json(array $flipped_probe_array, array $flipped_top_array, $playerid, $moon) {
		if (!is_numeric($playerid)) return false;
		if (!array_key_exists($playerid, $this->buffer_reports)) return "{}";
		if (!defined("R_METAL")) return false; // language file not loaded
		if (!isset($flipped_probe_array[R_METAL])) return false;
		if (!isset($flipped_top_array[F_FLEET])) return false;

		$results = $this->get_initial_results_array($flipped_probe_array, $flipped_top_array, $moon);
		$moon_value = ($moon) ? "true" : "false";
		foreach ($this->buffer_reports[$playerid] as $report) {
			if ($report['moon'] != $moon_value) {
				continue;
			}
			$counter = count($results['scantime']);
			foreach ($results as $key => $content_array) {
				if (!isset($report[$key])) {
					$results[$key][$counter] = "";
				} else {
					$results[$key][$counter] = $report[$key];
				}
			}

			$results['h1'][$counter] = "no";
			$results['h3'][$counter] = "no";
			$results['h4'][$counter] = "no";
			switch ($report["scanned"]) {
				case "1":
					$results['h1'][$counter] = "ok";
					 break;
				case "3":
					$results['h1'][$counter] = "ok";
					$results['h3'][$counter] = "ok";
					 break;
				case "4":
				case "5":
					$results['h1'][$counter] = "ok";
					$results['h3'][$counter] = "ok";
					$results['h4'][$counter] = "ok";
					 break;
				default: break;
			}

			$results['res_sum'][$counter] = $results['metal'][$counter] + $results['crystal'][$counter] + $results['deuterium'][$counter];

			$results['def_sum'][$counter] = $results['rak'][$counter] + $results['ll'][$counter] + $results['sl'][$counter];
			$results['def_sum'][$counter] += $results['ion'][$counter] + $results['gauss'][$counter] + $results['plasma'][$counter];
			$results['def_sum'][$counter] += $results['ksk'][$counter] + $results['gsk'][$counter] + $results['arak'][$counter];
			$results['def_sum'][$counter] += $results['irak'][$counter];

			$results['coordinates'][$counter] = $report['galaxy'].":".$report['system'].":".$report['planet'];
			$results['coordinates2'][$counter] = $results['coordinates'][$counter];

		}

		$return_value =
		"{ \"identifier\": \"id\",\n".
		"\"label\": \"id\",\n".
		"\"items\": [";

		$first_entry = true;
		$id = 1;
		foreach ($results as $key => $content) {
			if ($first_entry) {
				$first_entry = false;
			} else {
				$return_value .= ",";
			}
			$return_value .= "{ ";
			$return_value .= "\"c0\":".json_encode($content[0]).","; // details (names)
			$contentCount = count($content);
			for ($i=1; $i<=$contentCount-1; $i++) {
				if (is_numeric($content[$i]))
					$return_value .= "\"c".($i)."\":".$content[$i].",";
				else
					$return_value .= "\"c".($i)."\":".json_encode($content[$i]).",";
			}
			$return_value .= "\"id\": $id, \"key\": ".json_encode($key)." }\n";

			$id++;
		}
		$return_value .= "]}\n";

		return $return_value;
	}

	/**
	 * Provide an associative array fetched with reports.inc.php method get_reports_for_player().
	 * @param Int $playerid
	 * @param array $reports
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function set_player_reports($playerid, array $reports) {
		$this->set_reports($playerid, $reports);
		return;
	}

	private function get_initial_results_array(array $flipped_probe_array, array $flipped_top_array, $moon) {
		$results = array();

		$results['coordinates'][0] = REPORT_ARCHIVE_DETAILS;
		$results['coordinates2'][0] = REPORT_ARCHIVE_COORDINATES;
		$results['planetname'][0] = DETAILEDINFO_PLANETNAME;
		$results['scantime'][0] = REPORT_ARCHIVE_SCANTIME;
		$results['h1'][0] = REPORT_ARCHIVE_HEADER_RESOURCES;
		$results['metal'][0] = $flipped_probe_array[R_METAL];
		$results['crystal'][0] = $flipped_probe_array[R_CRYSTAL];
		$results['deuterium'][0] = $flipped_probe_array[R_DEUTERIUM];
		$results['energy'][0] = $flipped_probe_array[R_ENERGY];
		$results['res_sum'][0] = REPORT_ARCHIVE_RESOURCES;

		$results['h4'][0] = $flipped_top_array[B_BUILDINGS];
		if ($moon == false) {
			$results['memi'][0] = $flipped_probe_array[B_METALMINE];
			$results['krimi'][0] = $flipped_probe_array[B_CRYSTALMINE];
			$results['deutsyn'][0] = $flipped_probe_array[B_DEUTERIUMSYNTHESIZER];
			$results['solar'][0] = $flipped_probe_array[B_SOLARPLANT];
			$results['fusion'][0] = $flipped_probe_array[B_FUSIONPLANT];
			$results['robo'][0] = $flipped_probe_array[B_ROBOTFACTORY];
			$results['nani'][0] = $flipped_probe_array[B_NANITEFACTORY];
			$results['rawe'][0] = $flipped_probe_array[B_SHIPYARD];
			$results['mesp'][0] = $flipped_probe_array[B_METALSTORAGE];
			$results['krissp'][0] = $flipped_probe_array[B_CRYSTALSTORAGE];
			$results['deutsp'][0] = $flipped_probe_array[B_DEUTERIUMTANK];
			$results['folab'][0] = $flipped_probe_array[B_RESAERCHLAB];
			$results['terra'][0] = $flipped_probe_array[B_TERRAFORMER];
			$results['allydep'][0] = $flipped_probe_array[B_ALLIANCEDEPOT];
			$results['raksilo'][0] = $flipped_probe_array[B_ROCKETSILO];
		} else {
			$results['robo'][0] = $flipped_probe_array[B_ROBOTFACTORY];
			$results['rawe'][0] = $flipped_probe_array[B_SHIPYARD];
			$results['mesp'][0] = $flipped_probe_array[B_METALSTORAGE];
			$results['krissp'][0] = $flipped_probe_array[B_CRYSTALSTORAGE];
			$results['deutsp'][0] = $flipped_probe_array[B_DEUTERIUMTANK];
			$results['mbase'][0] = $flipped_probe_array[B_LUNARBASE];
			$results['sensor'][0] = $flipped_probe_array[B_SENSORPHALANX];
			$results['sprungtor'][0] = $flipped_probe_array[B_JUMPGATE];
		}

		$results['h3'][0] = $flipped_top_array[D_DEFENCE];
		$results['rak'][0] = $flipped_probe_array[D_MISSILELAUNCHER];
		$results['ll'][0] = $flipped_probe_array[D_SMALLLASER];
		$results['sl'][0] = $flipped_probe_array[D_HEAVYLASER];
		$results['ion'][0] = $flipped_probe_array[D_IONCANNON];
		$results['gauss'][0] = $flipped_probe_array[D_GAUSSCANNON];
		$results['plasma'][0] = $flipped_probe_array[D_PLASMACANNON];
		$results['ksk'][0] = $flipped_probe_array[D_SMALLSHIELDDOME];
		$results['gsk'][0] = $flipped_probe_array[D_LARGESHILDDOME];
		$results['arak'][0] = $flipped_probe_array[D_ANTIBALLISTICMISSILE];
		$results['irak'][0] = $flipped_probe_array[D_INTERPLANETARYMISSILE];
		$results['def_sum'][0] = $results['h3'][0];

		return $results;
	}

	/**
	 * Try to find a report with planet information.
	 * @param Int $playerid
	 * @return boolean
	 */
	public function player_has_planet_info($playerid) {
		if (!is_numeric($playerid)) return false;
		if (!array_key_exists($playerid, $this->buffer_reports)) return false;

		foreach ($this->buffer_reports[$playerid] as $report) {
			$report_exists = ($report['galaxy'] != null) ? true : false;
			if ($report_exists == true && $report['moon'] == "false") return true;
		}
		return false;

	}

	/**
	 * Try to find a report with moon information.
	 * @param Int $playerid
	 * @return boolean
	 */
	public function player_has_moon_info($playerid) {
		if (!is_numeric($playerid)) return false;
		if (!array_key_exists($playerid, $this->buffer_reports)) return false;

		foreach ($this->buffer_reports[$playerid] as $report) {
			$report_exists = ($report['galaxy'] != null) ? true : false;
			if ($report_exists == true && $report['moon'] == "true") return true;
		}
	}

}