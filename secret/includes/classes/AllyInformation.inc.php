<?php
/**
 * This class returns alliance specific information.
 * @author eX0du5
 *
 */
class AllyInformation extends PlayerAllyInformation {

	private $playertable;
	private $allytable;
    private $reporttable;

	private $ally_data  = array();        // internal buffer to store player table data
	private $tech_array = array("spiolvl","computech","waffentech","schildtech","rpz","energytech","hypertech","vbt","impulse","hra","lasertech","iontech","plasmatech","forschungsnetz","expedition","gravi");

	/** Constructor
	 * @param String $playertable
	 * @param String $allytable
	 * @param String $reporttable
	 * @throws InvalidArgumentException
	 */
	function __construct($playertable, $allytable, $reporttable) {
		parent::__construct();

		if ($playertable == "") throw new InvalidArgumentException("Tablename missing for playertable");
		$this->playertable = $playertable;
		if ($allytable == "") throw new InvalidArgumentException("Tablename missing for alliances");
		$this->allytable = $allytable;
		if ($reporttable == "") throw new InvalidArgumentException("Tablename missing for reports");
		$this->reporttable = $reporttable;
	}

	/**
	 * Get a list of alliances as JSON format to be used at autocomplete textfields.
	 * @param boolean $ogame_allyid returns ID as OGame Allyid or internal alliance id
	 * @return false|JSON
	 */
	public function get_alliances_as_JSON($ogame_allyid) {
		if ($ogame_allyid !== true) $ogame_allyid = false;
		$query = "SELECT id,ogame_allyid,allyname FROM $this->allytable";
		if ($ogame_allyid === true) {
			// otherwise we will have duplicate IDs: ""
			$query .= " WHERE ogame_allyid IS NOT NULL OR ogame_allyid > 0";
		}
		$stmt   = $this->query($query);
		if (!$stmt) return false;

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: [ \n";
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$id = ($ogame_allyid) ? $line->ogame_allyid : $line->id;
			$return_value .= "{ ".
			    " id:'$id',".
				" allyname: ".json_encode($line->allyname).
				" },\n";
		}
		$return_value = substr($return_value,0,strlen($return_value)-2); // remove ,\n
		$return_value .= "]}\n";

		return $return_value;
	}

	/**
	 * Returns the internal alliance id for given alliance name. If there are multiple alliances with that name,
	 * only the first hit is returned!
	 * @param String $name
	 * @return boolean|NULL|integer
	 */
	public function get_allianceid_for_name($name) {
		$query = "SELECT id FROM $this->allytable WHERE allyname=:name LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":name", $name);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) return null;
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		return $line->id;
	}

	/**
	 * Returns an associative array with alliance specific information.
	 * @param Int $allianceid
	 * @return boolean|array
	 */
	public function get_basic_ally_information($allianceid) {
		if (!is_numeric($allianceid) || $allianceid < 1) return false;
		$allianceid = intval($allianceid);

		$query = "SELECT p.*,ogame_allyid, allyname,members, a.diplomatic_status as a_dipl_status, ".
			"a.rank,a.points,a.frank,a.fpoints,a.rrank,a.rpoints,a.hrank,a.hpoints, ".
			"a.erank,a.epoints,a.fdrank,a.fdpoints,a.fbrank,a.fbpoints,a.flrank,a.flpoints,  p.id as player_id, ".
			"p.points as ppoints, p.epoints as pepoints, p.fpoints as pfpoints, p.rpoints as prpoints ".
			"FROM $this->playertable p LEFT JOIN $this->allytable a ON (p.alliance_id=a.id) ".
			"WHERE a.id=:allianceid ";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":allianceid", $allianceid);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() < 1) return false;

		$ally_data = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			if (!isset($export)) {
				// extract information needed to export
				$export = array();
				$export["allyname"]     = $row["allyname"];
				$export["ogame_allyid"] = $row["ogame_allyid"];
				$export["members"]      = $row["members"];
				$export["dipl_status"]  = $row["a_dipl_status"];
				$export["rank"]         = $row["rank"];
				$export["points"  ]     = $row["points"];
				$export["frank"]        = $row["frank"];
				$export["fpoints"]      = $row["fpoints"];
				$export["rrank"]        = $row["rrank"];
				$export["rpoints"]      = $row["rpoints"];
				$export["hrank"]        = $row["hrank"];
				$export["hpoints"]      = $row["hpoints"];
				$export["erank"]        = $row["erank"];
				$export["epoints"]      = $row["epoints"];
				$export["fdrank"]       = $row["fdrank"];
				$export["fdpoints"]     = $row["fdpoints"];
				$export["fbrank"]       = $row["fbrank"];
				$export["fbpoints"]     = $row["fbpoints"];
				$export["flrank"]       = $row["flrank"];
				$export["flpoints"]     = $row["flpoints"];
			}

			$ally_data[$row['player_id']]['player_id']   = $row['player_id'];
			$ally_data[$row['player_id']]['name']        = $row['playername'];
			$ally_data[$row['player_id']]['status']      = Layout::get_player_status_string($row['banned'],$row['vacation'],$row['noob'],$row['inactive'],$row['long_inactive'],$row['outlaw']);
			$ally_data[$row['player_id']]['dipl_status'] = $row['diplomatic_status'];
			$ally_data[$row['player_id']]['score']       = $row['ppoints'];
			$ally_data[$row['player_id']]['economy']     = $row['pepoints'];
			$ally_data[$row['player_id']]['fleet']       = $row['pfpoints'];
			$ally_data[$row['player_id']]['research']    = $row['prpoints'];

			foreach ($this->tech_array as $key) {
				$ally_data[$row['player_id']][$key]    = $row[$key];
			}
		}

		$this->ally_data[$allianceid] = $ally_data;

		return $export;
	}

	/**
	 * Returns a list of players for the alliance with predefined attributes for each player.
	 * @param Int $allianceid
	 * @return boolean|string
	 */
	public function get_ally_member_as_json($allianceid) {
		if (!is_numeric($allianceid) || $allianceid < 1) return false;
		$allianceid = intval($allianceid);
		if (!array_key_exists($allianceid, $this->ally_data)) return "{}";

		$content =  "{\n".
	                "identifier: 'player_id',\n".
	                "label: 'playername',\n".
	                "items: [\n";

		$first_item = true;
		foreach ($this->ally_data[$allianceid] as $data) {
			if ($first_item === true) {
				$first_item = false;
			} else {
				$content .= ",";
			}
			$content .= '{
                    playername: '.json_encode($data["name"]).',
                    player_id: '.json_encode($data["player_id"]).',
                    status: '.json_encode($data["status"]).',
                    dipl_status: '.json_encode($data["dipl_status"]).',
                    score: '.json_encode($data["score"]).',
                    economy: '.json_encode($data["economy"]).',
                    fleet: '.json_encode($data["fleet"]).',
                    research: '.json_encode($data["research"]).'
                }';
		}
        $content .= "]}\n";

        return $content;
	}

	/**
	 * Return an array with coordinates that contain information if a report or moon exists for that coordinates.
	 * @param Int $allianceid Galaxytool Alliance ID
	 * @return boolean|array
	 */
	public function get_ally_coordinates($allianceid) {
		return $this->get_coordinates($allianceid);
	}

	/**
	 * Calculates the average technology values for an alliance
	 * @param Int $allianceid Galaxytool Alliance ID
	 * @return boolean|multitype:|multitype:number Array with technology key and average value 
	 */
	public function get_tech_info($allianceid) {
		if (!is_numeric($allianceid) || $allianceid < 1) return false;
		$allianceid = intval($allianceid);
		if (!array_key_exists($allianceid, $this->ally_data)) return array();

		$techs = array();
		foreach ($this->tech_array as $key) {
			$techs[$key] = 0;
		}
		$players_with_tech = 0;
		foreach ($this->ally_data[$allianceid] as $data) {
			if ($data['spiolvl'] > 0) $players_with_tech++;
			foreach ($this->tech_array as $key) {
				$techs[$key] += $data[$key];
			}
		}
		if ($players_with_tech > 0) {
			foreach ($this->tech_array as $key) {
				if ($techs[$key] > 0) $techs[$key] /= $players_with_tech;
			}
		}
        return $techs;
	}


	/**
	 * Provide an associative array fetched with reports.inc.php method get_reports_for_alliance().
	 * @param Int $allianceid
	 * @param array $reports
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function set_ally_reports($allianceid, array $reports) {
		return $this->set_reports($allianceid, $reports);
	}

}