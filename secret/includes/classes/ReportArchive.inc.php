<?php
class ReportArchive extends GenericSuperclass {

	private $reportarchive;					// database table name for report archive
	private $playertable;					// database table name for players

	function __construct($reportarchive, $playertable) {
		parent::__construct();

		if ($reportarchive == "") throw new InvalidArgumentException("Tablename missing for report archive");
		$this->reportarchive = $reportarchive;

		if ($playertable == "") throw new InvalidArgumentException("Tablename missing for playertable");
		$this->playertable = $playertable;
	}

	public function get_empty() {
		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: []\n".
		"}";

		return $return_value;
	}

	public function get_coordinates($coordinates, $moon, $flipped_probe_array, $flipped_top_array) {

		if (!defined("REPORT_ARCHIVE_SCANTIME")) return false; // language file
		if (!defined("R_METAL")) return false; // report language file

		$coordinates = explode(":", $coordinates);
		if (count($coordinates) != 3) return false;
		for ($i=0;$i<3;$i++) {
			$coordinates[$i] = intval($coordinates[$i]);
		}
		$moon = ($moon == "true") ? "true" : "false";

		$query = "SELECT * FROM $this->reportarchive ".
		" WHERE galaxy=:galaxy AND system=:system AND planet=:planet AND moon=:moon ";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $coordinates[0]);
		$stmt->bindParam(":system", $coordinates[1]);
		$stmt->bindParam(":planet", $coordinates[2]);
		$stmt->bindParam(":moon", $moon);
		
		$res = $this->execute($stmt);
		if (!$res) return false;
		$db_result = array();
		while($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$db_result[$line['scantime']] = $line;
		}
		unset($res);
		unset($line);

		// sort results by scantime ASC (no DB index -> filesort); we need the data in RAM anyway at once; do sorting here
		uksort( $db_result, 'strnatcmp');

		$results = array();

		$results['msg_id'][0] = REPORT_ARCHIVE_DETAILS;
		$results['details'][0] = ""; // filled below
		$results['scantime'][0] = REPORT_ARCHIVE_SCANTIME;
		$results['h1'][0] = REPORT_ARCHIVE_HEADER_RESOURCES;
		$results['metal'][0] = $flipped_probe_array[R_METAL];
		$results['crystal'][0] = $flipped_probe_array[R_CRYSTAL];
		$results['deuterium'][0] = $flipped_probe_array[R_DEUTERIUM];
		$results['energy'][0] = $flipped_probe_array[R_ENERGY];
		$results['res_sum'][0] = REPORT_ARCHIVE_RESOURCES;

		$results['h2'][0] = $flipped_top_array[F_FLEET];
		$results['kt'][0] = $flipped_probe_array[F_SMALLCARGOSHIP];
		$results['gt'][0] = $flipped_probe_array[F_LARGECARGOSHIP];
		$results['lj'][0] = $flipped_probe_array[F_LIGHFIGHTER];
		$results['sj'][0] = $flipped_probe_array[F_HEAVYFIGHTER];
		$results['krz'][0] = $flipped_probe_array[F_CRUISER];
		$results['ss'][0] = $flipped_probe_array[F_BATTLESHIP];
		$results['kolo'][0] = $flipped_probe_array[F_COLONYSHIP];
		$results['rec'][0] = $flipped_probe_array[F_RECYCLER];
		$results['spio'][0] = $flipped_probe_array[F_ESPIONAGEPROBE];
		$results['bomb'][0] = $flipped_probe_array[F_BOMBER];
		$results['zerri'][0] = $flipped_probe_array[F_DESTROYER];
		$results['ds'][0] = $flipped_probe_array[F_DEATHSTAR];
		$results['skrz'][0] = $flipped_probe_array[F_BATTLECRUISER];
		$results['sat'][0] = $flipped_probe_array[F_SOLARSATELLITE];
		$results['fleet_sum'][0] = $results['h2'][0];

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

		$results['h4'][0] = $flipped_top_array[B_BUILDINGS];
		if ($moon == "false") {
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

		$results['h5'][0] = $flipped_top_array[RS_RESEARCH];
		$results['spiolvl'][0] = $flipped_probe_array[RS_ESPIONAGE];
		$results['computech'][0] = $flipped_probe_array[RS_COMPUTER];
		$results['waffentech'][0] = $flipped_probe_array[RS_WEAPON];
		$results['schildtech'][0] = $flipped_probe_array[RS_SHIELDING];
		$results['rpz'][0] = $flipped_probe_array[RS_ARMOUR];
		$results['energytech'][0] = $flipped_probe_array[RS_ENERGY];
		$results['hypertech'][0] = $flipped_probe_array[RS_HYPERSPACE];
		$results['vbt'][0] = $flipped_probe_array[RS_COMBUSTIONENGINE];
		$results['impulse'][0] = $flipped_probe_array[RS_IMPULSEENGINE];
		$results['hra'][0] = $flipped_probe_array[RS_HYPERSPACEENGINE];
		$results['lasertech'][0] = $flipped_probe_array[RS_LASER];
		$results['iontech'][0] = $flipped_probe_array[RS_ION];
		$results['plasmatech'][0] = $flipped_probe_array[RS_PLASMA];
		$results['forschungsnetz'][0] = $flipped_probe_array[RS_IRNETWORK];
		$results['expedition'][0] = $flipped_probe_array[RS_EXPEDITION];
		$results['gravi'][0] = $flipped_probe_array[RS_GRAVITON];

		foreach ($db_result as $date => $line) {
			$counter = count($results['scantime']);
			foreach ($results as $key => $content_array) {
				if (!isset($line[$key])) {
					$results[$key][$counter] = "";
				} else {
					$results[$key][$counter] = $line[$key];
				}
			}
			$results['details'] = $results['msg_id'];
			$results['details'][0] = "";

			$results['h1'][$counter] = "no";
			$results['h2'][$counter] = "no";
			$results['h3'][$counter] = "no";
			$results['h4'][$counter] = "no";
			$results['h5'][$counter] = "no";
			switch ($db_result[$date]["scanned"]) {
				case "1":
					$results['h1'][$counter] = "ok";
					 break;
				case "2":
					$results['h1'][$counter] = "ok";
					$results['h2'][$counter] = "ok";
					 break;
				case "3":
					$results['h1'][$counter] = "ok";
					$results['h2'][$counter] = "ok";
					$results['h3'][$counter] = "ok";
					 break;
				case "4":
					$results['h1'][$counter] = "ok";
					$results['h2'][$counter] = "ok";
					$results['h3'][$counter] = "ok";
					$results['h4'][$counter] = "ok";
					 break;
				case "5":
					$results['h1'][$counter] = "ok";
					$results['h2'][$counter] = "ok";
					$results['h3'][$counter] = "ok";
					$results['h4'][$counter] = "ok";
					$results['h5'][$counter] = "ok";
					break;
				default: throw new InvalidArgumentException();
			}

			$results['res_sum'][$counter] = $results['metal'][$counter] + $results['crystal'][$counter] + $results['deuterium'][$counter];

			$results['fleet_sum'][$counter] = $results['kt'][$counter] + $results['gt'][$counter] + $results['lj'][$counter];
			$results['fleet_sum'][$counter] += $results['sj'][$counter] + $results['krz'][$counter] + $results['ss'][$counter];
			$results['fleet_sum'][$counter] += $results['kolo'][$counter] + $results['rec'][$counter] + $results['spio'][$counter];
			$results['fleet_sum'][$counter] += $results['bomb'][$counter] + $results['zerri'][$counter] + $results['ds'][$counter];
			$results['fleet_sum'][$counter] += $results['skrz'][$counter] + $results['sat'][$counter];

			$results['def_sum'][$counter] = $results['rak'][$counter] + $results['ll'][$counter] + $results['sl'][$counter];
			$results['def_sum'][$counter] += $results['ion'][$counter] + $results['gauss'][$counter] + $results['plasma'][$counter];
			$results['def_sum'][$counter] += $results['ksk'][$counter] + $results['gsk'][$counter] + $results['arak'][$counter];
			$results['def_sum'][$counter] += $results['irak'][$counter];

		}

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: [";

		$first_entry = true;
		$id = 1;
		foreach ($results as $key => $content) {
			if ($first_entry) {
				$first_entry = false;
			} else {
				$return_value .= ",";
			}
			$return_value .= "{ ";
			$return_value .= "c0:".json_encode($content[0]).","; // details (names)
			$contentCount = count($content); 
			for ($i=$contentCount-1; $i>0; $i--) {  // reverse order (newest date first)
				$return_value .= "c".(count($content)-$i).":".json_encode($content[$i]).",";
			}
			$return_value .= "id: $id, key: '$key' }\n";

			$id++;
		}
		$return_value .= "]}\n";

		return $return_value;
	}

	public function delete_reports(array $msg_ids) {
		$trusted_ids = array();
		foreach ($msg_ids as $msg_id) {
			if (is_numeric($msg_id) && intval($msg_id) == $msg_id) {
				array_push($trusted_ids , $msg_id);
			}
		}

		if (count($trusted_ids) < 1) return false;
		$query = "DELETE FROM $this->reportarchive WHERE msg_id IN ('".implode("','", $trusted_ids)."')";
		$res = $this->exec($query);
		return $res;
	}
}

?>