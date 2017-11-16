<?php
/**
 * Report handling like search, read or deletion of reports.
 * @author eX0du5
 *
 */
class Reports extends GenericSuperclass {

	private $reporttable;					// database table name for reports
	private $playertable;					// database table name for players
	private $allytable;		   			    // database table name for alliances
	private $utablename;                    // database table name for users
	private $dbtablename;
	private $db_array;
	private $probe_array;
	private $top_array;

	function __construct(array $db_array, array $flipped_probe_array, array $flipped_top_array, $reporttable, $playertable, $allytable, $dbtablename, $utablename) {
		parent::__construct();

		if ($reporttable == "") throw new InvalidArgumentException("Tablename missing for reports");
		$this->reporttable = $reporttable;
		if ($playertable == "") throw new InvalidArgumentException("Tablename missing for playertable");
		$this->playertable = $playertable;
		if ($allytable == "") throw new InvalidArgumentException("Tablename missing for allytable");
		$this->allytable = $allytable;
		if ($dbtablename == "") throw new InvalidArgumentException("Tablename missing for galaxy");
		$this->dbtablename = $dbtablename;
		if ($utablename == "") throw new InvalidArgumentException("Tablename missing for users");
		$this->utablename = $utablename;

		$this->db_array    = $db_array;
		$this->probe_array = $flipped_probe_array;
		$this->top_array   = $flipped_top_array;

	}

	/**
	 * Get a single report for given coordinates
	 * @param String $coordinates Coordinates as "1:2:3" format
	 * @param boolean $moon
	 * @throws InvalidArgumentException
	 * @return boolean|string as JSON
	 */
	public function get_coordinates($coordinates, $moon) {
		if (preg_replace("/\d+\:\d+\:\d+/","",$coordinates) != "") throw new InvalidArgumentException("Wrong coordinates: $coordinates");
		$coordinates = explode(":", $coordinates);
		if (count($coordinates) != 3) throw new InvalidArgumentException("Wrong coordinates");
		for ($i=0;$i<3;$i++) {
			$coordinates[$i] = intval($coordinates[$i]);
		}
		$moon = ($moon === true) ? "true" : "false";

		$query = "SELECT r.*, u.username as username, ".
                 "p.spiolvl as pspiolvl, p.computech as pcomputech, p.waffentech as pwaffentech, ".
                 "p.schildtech as pschildtech, p.rpz as prpz, p.energytech as penergytech, p.hypertech as phypertech,".
                 "p.vbt as pvbt, p.impulse as pimpulse, p.hra as phra, p.lasertech as plasertech, ".
                 "p.iontech as piontech, p.plasmatech as pplasmatech, p.forschungsnetz as pforschungsnetz, ".
                 "p.expedition as pexpedition, p.gravi as pgravi, p.playername, p.bandit ".		
                 "FROM $this->dbtablename g ".
                 "LEFT JOIN $this->reporttable r ON (g.galaxy=r.galaxy AND g.system=r.system AND g.planet=r.planet) ".
                 "LEFT JOIN $this->playertable p ON (p.ogame_playerid=g.ogame_playerid) ".
				 "LEFT JOIN $this->utablename u ON (r.user_id = u.id)".
				 " WHERE r.galaxy=:galaxy AND r.system=:system AND r.planet=:planet AND r.moon=:moon LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $coordinates[0]);
		$stmt->bindParam(":system", $coordinates[1]);
		$stmt->bindParam(":planet", $coordinates[2]);
		$stmt->bindParam(":moon", $moon);
		
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) return false;
		$db_result = $stmt->fetch(PDO::FETCH_ASSOC);
        $db_result = $this->copy_attributes($db_result);
		return $this->get_report_as_JSON($db_result);
	}

	/**
	 * Return an array with a list of reports for the given player based on playerid and derived coordinates.
	 * @param Int $ogame_playerid
	 * @return boolean|multitype:
	 */
	public function get_reports_for_player($ogame_playerid) {
		if (!is_numeric($ogame_playerid) || $ogame_playerid < 1) return false;
		$ogame_playerid = intval($ogame_playerid);

		$query = "SELECT g.galaxy as g_galaxy, g.system as g_system, g.planet as g_planet, g.moon as g_moon, p.plasmatech as playerplasmatech, r.* ".
		         "FROM $this->dbtablename g ".
		         "LEFT JOIN $this->reporttable r ON (g.galaxy=r.galaxy AND g.system=r.system AND g.planet=r.planet) ".
		         "LEFT JOIN $this->playertable p ON (p.ogame_playerid=g.ogame_playerid) ".
		         "WHERE g.ogame_playerid=:ogame_playerid ".
		         "ORDER BY g.galaxy ASC, g.system ASC, g.planet ASC";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":ogame_playerid", $ogame_playerid);
		
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) return array();

		$result = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			array_push($result, $line);
		}

		return $result;
	}

	/**
	 * Return an array with a list of reports for the given alliance based on playerid and derived coordinates.
	 * @param Int $ogame_allyid
	 * @return boolean|multitype:
	 */
	public function get_reports_for_alliance($ogame_allyid) {
		if (!is_numeric($ogame_allyid) || $ogame_allyid < 1) return false;
		$ogame_allyid = intval($ogame_allyid);

		$query = "SELECT g.galaxy as g_galaxy, g.system as g_system, g.planet as g_planet, g.moon as g_moon, p.plasmatech as playerplasmatech, r.* ".
		         "FROM $this->dbtablename g ".
		         "LEFT JOIN $this->reporttable r ON (g.galaxy=r.galaxy AND g.system=r.system AND g.planet=r.planet) ".
		         "LEFT JOIN $this->playertable p ON (p.ogame_playerid=g.ogame_playerid) ".
		         "LEFT JOIN $this->allytable a ON (a.id=p.alliance_id) ".
		         "WHERE a.ogame_allyid=:ogame_allyid ".
		         "ORDER BY g.galaxy,g.system,g.planet";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":ogame_allyid", $ogame_allyid);
		
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) return array();

		$result = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			array_push($result, $line);
		}

		return $result;
	}


	/**
	 * Search for reports based on search parameter.
	 * @param Array $param POST array content of search request via form
	 * @return JSON data or false
	 */
	public function search_for_reports($param) {
		$param = $this->convert_search_parameter($param);

		$whereclause = $this->get_search_where_statement($param);

		$from_part = "FROM $this->reporttable r
				   		LEFT JOIN $this->dbtablename g ON (r.galaxy = g.galaxy AND r.system = g.system AND r.planet = g.planet)
				   		LEFT JOIN $this->playertable p ON (g.ogame_playerid = p.ogame_playerid)
				   		LEFT JOIN $this->allytable a ON (p.alliance_id = a.id)
				   		LEFT JOIN $this->utablename u ON (r.user_id = u.id)
				   		";

		$count_query = "SELECT count(*) as results $from_part $whereclause";

		$stmt         = $this->query($count_query);
		if (!$stmt) return false;

		$line = $stmt->fetch(PDO::FETCH_OBJ);
		if ($line->results > 200) {
			$this->error_object = new ErrorObject(ErrorObject::severity_warning, str_replace("&1", "200", REPORTS_MAX_RESULTS_HIT) );
		}

		$query = "SELECT r.*, (r.metal + r.crystal + r.deuterium) as all_resources, ".
		 		 "r.fleet_resis+r.defence_resis as all_resis, ".
				 "p.playername, p.noob,p.banned,p.vacation,p.inactive,p.long_inactive, p.outlaw, r.moon, p.id as player_id, p.bandit, a.allyname, p.waffentech as pwaffentech, ".
				 "p.schildtech as pschildtech, p.rpz as prpz, r.planetname, g.planetname as g_planetname, ".
				 "p.alliance_id, a.diplomatic_status as allystatus, p.diplomatic_status as playerstatus ".
				 $from_part." ".$whereclause." ".
				 "ORDER BY r.galaxy, r.system, r.planet LIMIT 200";

		$stmt = $this->query($query);
		if (!$stmt) return false;

		// convert DB Result to JSON format
		$parameter = array(
			array("metal","crystal","deuterium","energy","all_resources","all_resis","fleet_resis","defence_resis"),
			array("kt","gt","lj","sj","krz","ss","kolo","rec","spio","bomb","zerri","ds","skrz","sat"),
			array("rak","ll","sl","ion","gauss","plasma","ksk","gsk","arak","irak"),
			array("memi","krimi","deutsyn","solar","fusion","robo","nani","rawe","mesp","krissp","deutsp","folab","terra","allydep","raksilo","mbase","sensor","sprungtor"),
			array("spiolvl","computech","waffentech","schildtech","rpz","energytech","hypertech","vbt","impulse","hra","lasertech","iontech","plasmatech","forschungsnetz","expedition","gravi"),
		);

		$result = ' "items":[';
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$address = $line['galaxy'] .":". $line['system'] .":". $line['planet'];
			$status = "";
			$status .= ($line['noob'] == "true") ? "n" : "";
			$status .= ($line['banned'] == "true") ? "b" : "";
			$status .= ($line['vacation'] == "true") ? "v" : "";
			$status .= ($line['inactive'] == "true") ? "i" : "";
			$status .= ($line['long_inactive'] == "true") ? "I" : "";
			$status .= ($line['outlaw'] == "true") ? "o" : "";

			$result .= '{'.
			'"id": '.$line['id'].', '.
			'"address": '.json_encode($address).', '.
			'"moon": '.json_encode($line['moon']).', '.
			'"ally": '.json_encode($line['allyname']).', '.
			'"ally_id": '.json_encode($line['alliance_id']).', '.
			'"ally_status": '.json_encode($line['allystatus']).', '.
			'"g_planet":'.json_encode($line['g_planetname']).', '.
			//'r_planet:'.json_encode($line['planetname']).', '.
			'"player":'.json_encode($line['playername']).', '.
			'"player_id":'.json_encode($line['player_id']).', '.
			'"player_status":'.json_encode($line['playerstatus']).', '.
			'"player_bandit":'.json_encode($line['bandit']).', '.
			'"datetime":'.json_encode($line['scantime']).', ';

			foreach ($parameter as $key_array) {
				foreach ($key_array as $key_name) {
					if ($key_name == "all_resis" || $key_name == "fleet_resis" || $key_name == "defence_resis") {
						$result .= json_encode($key_name).':'.json_encode(round($line[$key_name] / 1000)).',';
					} else {
						$result .= json_encode($key_name).':'.json_encode($line[$key_name]).',';
					}
				}
			}

			$result .=
			'"depth":'.json_encode($line['scanned']).
			'},'."\n";
		}
		
		if ($stmt->rowCount() > 0) {
			$result = substr($result, 0, strlen($result) - 2 ) . ' ]'; // remove last comma + \n
		} else {
			$result .= "]";
		}

		return $result;
	}



	/**
	 * Delete all reports for which an ID was provided
	 * @param array $ids
	 * @return number Number of deleted entries
	 */
	public function delete_reports(array $ids) {
		$deletion = array();
		foreach($ids as $id) {
			$id = intval($id);
			if ($id > 0) array_push($deletion, $id);
		}
		if (count($deletion) == 0) return 0;
		$query = "DELETE FROM $this->reporttable WHERE id IN ( '".implode("','", $deletion)."' )";
		$rows  = $this->exec($query);

		if ($rows === false) return 0;

		$this->error_object = new ErrorObject(ErrorObject::severity_info, str_replace("&1", $rows, GENERAL_ENTRIES_DELETED) );
		return $rows;
	}

	/**
	 * Create the complex WHERE statement based on the selection parameter.
	 * @param array $param
	 * @return string
	 */
	private function get_search_where_statement($param) {
		$wheres = array();

		if (!empty($param['alliance'][0])) {
			$alliance = DB::getDB()->quote($param['alliance'][0]);
			if (strpos($alliance, "*") === false) {
				// no wildcards
				array_push($wheres, "a.allyname=$alliance");
			} else {
				$alliance = str_replace("*","%",$alliance);
				array_push($wheres, "a.allyname LIKE $alliance");
			}
			$wheres++;
		}

		if (!empty($param['player'][0])) {
			$player = DB::getDB()->quote($param['player'][0]);
			if (strpos($player, "*") === false) {
				array_push($wheres, "p.playername=$player");
			} else {
				$player = str_replace("*","%",$player);
				array_push($wheres, "p.playername LIKE $player");
			}
			$wheres++;
		}

		if ($param['all_resources'][0] > 0) {
		    array_push($wheres, "(r.metal+r.crystal+r.deuterium ".$param["all_resources"][1]." '".$param['all_resources'][0]."')");
        }
		//if ($param['fleet_resis'][0] > 0) array_push($wheres, "(fleet_resis < '".$param['fleet_resis'][0]."')");
		if ($param['fleet_resis'][0] > 0) $param['fleet_resis'][0] *= 1000;
		//if ($param['defence_resis'][0] > 0) array_push($wheres, "(defence_resis < '".$param['defence_resis'][0]."')");
		if ($param['defence_resis'][0] > 0) $param['defence_resis'][0] *= 1000;

	    $parameter = array(
		    array("metal","crystal","deuterium","energy"),
			array("kt","gt","lj","sj","krz","ss","kolo","rec","spio","bomb","zerri","ds","skrz","sat"),
			array("rak","ll","sl","ion","gauss","plasma","ksk","gsk","arak","irak"),
			array("memi","krimi","deutsyn","solar","fusion","robo","nani","rawe","mesp","krissp","deutsp","folab","terra","allydep","raksilo","mbase","sensor","sprungtor"),
			array("spiolvl","computech","waffentech","schildtech","rpz","energytech","hypertech","vbt","impulse","hra","lasertech","iontech","plasmatech","forschungsnetz","expedition","gravi"),
			array("fleet_resis","defence_resis")
		);

		$max_scandepth_required = 0;
		foreach ($parameter as $index => $key_array) {
			foreach ($key_array as $key_name) {
			    if ($param[$key_name][0] > 0) {
			    	$sign = (isset($param[$key_name][1])) ? $param[$key_name][1] : ">=";
			    	if ($sign != ">=" && $sign != "=" && $sign != "<=") exit("possible SQL injection");
			    	if ($index != 5) $max_scandepth_required = $index + 1; // do not use the index for fleet_resis and defence_resis parameter!

			    	if ($index > 4) {
			    		array_push($wheres, "$key_name $sign '".$param[$key_name][0]."'");
			    	} else {
			    		array_push($wheres, "r.$key_name $sign '".$param[$key_name][0]."'");
			    	}
			    }
			}
		}
		if ($max_scandepth_required > 0) {
			array_push($wheres, "r.scanned >= $max_scandepth_required");
		}

		// consider age in hours
		if ($param['age'][0] > 0) {
			$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			if ($timezone[0] > 0) {
				$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
			} else {
				$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
			}
			$min_datetime = date("Y-m-d H:i:s",time() - ($param['age'][0] * 3600) + $timezone);
			array_push($wheres, "r.scantime > '$min_datetime'");
		}

		if ($param['filter_nap'][0]) array_push($wheres, "p.diplomatic_status != 'nap'");
		if ($param['filter_allied'][0]) array_push($wheres, "p.diplomatic_status != 'ally'");
		if ($param['filter_own'][0]) array_push($wheres, "p.diplomatic_status != 'own'");
		if ($param['filter_wing'][0]) array_push($wheres, "p.diplomatic_status != 'wing'");

		if ($param['report_depth'][0] != "resources") {
			switch($param['report_depth'][0]) {
				case "fleet":
					array_push($wheres, "r.scanned >= 2");
					break;
				case "defence":
					array_push($wheres, "r.scanned >= 3");
					break;
				case "buildings":
					array_push($wheres, "r.scanned >= 4");
					break;
				case "research":
					array_push($wheres, "r.scanned >= 5");
					break;
				default: throw new InvalidArgumentException();
			}
		}
		if ($param['select_planetonly'][0] !== null) {
			if ($param['select_planetonly'][0] == "planets") {
				array_push($wheres, "r.moon = 'false'");
			} else {
				array_push($wheres, "r.moon = 'true'");
			}
		}
		if ($param['select_owner'][0] !== null) {
			if ($param['select_owner'][0] > 0) {
				array_push($wheres, "u.id = '".$param['select_owner'][0]."'");
			}
		}
		if ($param['select_vacation'][0] !== null) {
			if ($param['select_vacation'][0]) {
				array_push($wheres, "vacation = 'true'");
			} else {
				array_push($wheres, "vacation = 'false'");
			}
		}
		if ($param['select_banned'][0] !== null) {
			if ($param['select_banned'][0]) {
				array_push($wheres, "banned = 'true'");
			} else {
				array_push($wheres, "banned = 'false'");
			}
		}
		if ($param['select_inactive'][0] !== null) {
			if ($param['select_inactive'][0] === false) {
				array_push($wheres, "inactive = 'false'");
			} elseif ($param['select_inactive'][0] == "inactive") {
				array_push($wheres, "inactive = 'true'");
			} else {
				array_push($wheres, "long_inactive = 'true'");
			}
		}
		if ($param['select_outlaw'][0] !== null) {
			if ($param['select_outlaw'][0]) {
				array_push($wheres, "outlaw = 'true'");
			} else {
				array_push($wheres, "outlaw = 'false'");
			}
		}

	    // finally create the where clause
		$whereclause = "WHERE 1=1 "; // 1=1 is just a trick to avoid checking for "AND"
		if (count($wheres) > 0) {
			$whereclause .= " AND " . implode(" AND ", $wheres);
		}

		if (!empty($param['coordinates'][0])) {
			$whereclause .= CoordinatesHelper::get_coordinate_where_statement($param['coordinates'][0], "g");
		}

		return $whereclause;

	}

	/**
	 * Convert all POST variables into search request parameter. This includes convertig numeric variables to numbers but does not include database escapes.
	 * @param array $param
	 * @return array
	 */
	private function convert_search_parameter($param) {
		$selection = array();

		$selection['alliance'][0]    = trim(stripslashes(strip_tags($param['alliance'])));
		$selection['player'][0]      = trim(stripslashes(strip_tags($param['player'])));
	    $selection['coordinates'][0] = (CoordinatesHelper::validate_coordinates($param['coordinates'])) ? $param['coordinates'] : "";

	    $parameter = array(
		    array("metal","crystal","deuterium","energy","all_resources"),
			array("kt","gt","lj","sj","krz","ss","kolo","rec","spio","bomb","zerri","ds","skrz","sat"),
			array("rak","ll","sl","ion","gauss","plasma","ksk","gsk","arak","irak"),
			array("memi","krimi","deutsyn","solar","fusion","robo","nani","rawe","mesp","krissp","deutsp","folab","terra","allydep","raksilo","mbase","sensor","sprungtor"),
			array("spiolvl","computech","waffentech","schildtech","rpz","energytech","hypertech","vbt","impulse","hra","lasertech","iontech","plasmatech","forschungsnetz","expedition","gravi"),
			// other numeric values
			array("fleet_resis","defence_resis","age")
		);

		foreach ($parameter as $key_array) {
			foreach ($key_array as $key_name) {
			    $selection[$key_name][0] = 0;
			    if ($param[$key_name] != "" && is_numeric($param[$key_name]) && $param[$key_name] > 0) {
			    	$selection[$key_name][0] = intval($param[$key_name]);
			    	if (isset($param["selection_".$key_name])) {
			    		switch ($param["selection_".$key_name]) {
			    			case "eq": $selection[$key_name][1] = "="; break;
			    			case "le": $selection[$key_name][1] = "<="; break;
			    			default: $selection[$key_name][1] = ">="; break;
			    		}
			    	}
			    }
			}
		}

		// checkboxes
		$selection['filter_nap'][0]    = (isset($param['filter_nap'])) ? true : false;
		$selection['filter_allied'][0] = (isset($param['filter_allied'])) ? true : false;
		$selection['filter_own'][0]    = (isset($param['filter_own'])) ? true : false;
		$selection['filter_wing'][0]   = (isset($param['filter_wing'])) ? true : false;

		// dropdowns:
		switch ($param['select_planetonly']) {
			case "planets": $selection['select_planetonly'][0] = "planets"; break;
			case "moons": $selection['select_planetonly'][0] = "moons"; break;
			default:  $selection['select_planetonly'][0] = null; break;
		}
		if ($param['select_owner'] != "" && is_numeric($param['select_owner']) && $param['select_owner'] > 0) {
			$selection['select_owner'][0] = intval($param['select_owner']);
		} else {
			$selection['select_owner'][0] = null;
		}
		$selection['report_depth'][0]   = trim(stripslashes(strip_tags($param['report_depth']))); // resources, fleet, defence, buildings, research
		switch ($param['select_vacation']) {
			case "yes": $selection['select_vacation'][0] = true; break;
			case "no": $selection['select_vacation'][0] = false; break;
			default:  $selection['select_vacation'][0] = null; break;
		}
		switch ($param['select_banned']) {
			case "yes": $selection['select_banned'][0] = true; break;
			case "no": $selection['select_banned'][0] = false; break;
			default:  $selection['select_banned'][0] = null; break;
		}
		switch ($param['select_outlaw']) {
			case "yes": $selection['select_outlaw'][0] = true; break;
			case "no": $selection['select_outlaw'][0] = false; break;
			default:  $selection['select_outlaw'][0] = null; break;
		}

		switch ($param['select_inactive']) {
			case "yes": $selection['select_inactive'][0]      = "inactive"; break;
			case "inactive": $selection['select_inactive'][0] = "inactive"; break;
			case "long_inactive": $selection['select_inactive'][0] = "long_inactive"; break;
			case "no": $selection['select_inactive'][0] = false; break;
			default: $selection['select_inactive'][0] = null; break;
		}

		return $selection;
	}

	/**
	 * convert database associative array for a single report into JSON format
	 * @param array $db_row
	 * @return string
	 */
	private function get_report_as_JSON(array $db_row) {

		$res_sum    = $db_row['metal'] + $db_row['crystal'] + $db_row['deuterium'];
		/*
		 * not needed
		$fleet_sum  = $db_row['kt'] + $db_row['gt'] + $db_row['lj'] + $db_row['sj'] + $db_row['krz'] + $db_row['ss'] + $db_row['kolo'] + $db_row['rec'];
		$fleet_sum += $db_row['spio'] + $db_row['bomb'] + $db_row['zerri'] + $db_row['ds'] + $db_row['skrz'] + $db_row['sat'];
		$def_sum    = $db_row['rak'] + $db_row['ll'] + $db_row['sl'] + $db_row['ion'] + $db_row['gauss'] + $db_row['plasma'] + $db_row['ksk'] + $db_row['gsk'];
		$def_sum   += $db_row['arak'] + $db_row['irak'];
		*/
		$h1 = $h2 = $h3 = $h4 = $h5 = "";
		switch ($db_row["scanned"]) {
			case "1":
				$h1 = "ok";
				 break;
			case "2":
				$h1 = "ok";
				$h2 = "ok";
				 break;
			case "3":
				$h1 = "ok";
				$h2 = "ok";
				$h3 = "ok";
				 break;
			case "4":
				$h1 = "ok";
				$h2 = "ok";
				$h3 = "ok";
				$h4 = "ok";
				 break;
			case "5":
				$h1 = "ok";
				$h2 = "ok";
				$h3 = "ok";
				$h4 = "ok";
				$h5 = "ok";
				break;
			default: throw new InvalidArgumentException();
		}

		$db_array = $this->db_array;
		// remove keys which cannot occur for moon/planet
		if ($db_row['moon'] == "true") {
			unset($db_array['memi']);
			unset($db_array['krimi']);
			unset($db_array['deutsyn']);
			unset($db_array['solar']);
			unset($db_array['fusion']);
			unset($db_array['nani']);
			unset($db_array['folab']);
			unset($db_array['terra']);
			unset($db_array['allydep']);
			unset($db_array['raksilo']);
		} else {
			unset($db_array['mbase']);
			unset($db_array['sensor']);
			unset($db_array['sprungtor']);
		}

		$content = '{'."\n";
		$content .= '"id": ["'.$db_row['id'].'", '.json_encode(REPORT_ARCHIVE_DETAILS).'],'."\n";
		$content .= '"msg_id": ["'.$db_row['msg_id'].'", '.json_encode(REPORT_ARCHIVE_DETAILS).'],'."\n";
		$content .= '"scantime": ["'.$db_row['scantime'].'", '.json_encode(REPORT_ARCHIVE_SCANTIME).'],'."\n";
		$content .= '"planetname": '.json_encode($db_row['planetname']).','."\n";
        $content .= '"playername": '.json_encode($db_row['playername']).','."\n";
        $content .= '"bandit": '.json_encode($db_row['bandit']).','."\n";
		$content .= '"h1": ["'.$h1.'", '.json_encode(REPORT_ARCHIVE_HEADER_RESOURCES).'],'."\n";

		foreach ($db_array as $en_name => $db_key) {

			$content .= "\"".$db_key.'": ["'.$db_row[$db_key].'", '.json_encode($this->probe_array[$en_name]).'],'."\n";

			if ($db_key == "energy") {
				$content .= '"res_sum": ["'.$res_sum.'", '.json_encode(REPORT_ARCHIVE_RESOURCES).'],'."\n";

				$content .= '"h2": ["'.$h2.'", '.json_encode($this->top_array[F_FLEET]).'],'."\n";
			} elseif ($db_key == "sat") {
				//$content .= 'fleet_sum: ["'.$fleet_sum.'", ""],'."\n";
				$content .= '"h3": ["'.$h3.'", '.json_encode($this->top_array[D_DEFENCE]).'],'."\n";
			} elseif ($db_key == "irak") {
				//$content .= 'def_sum: ["'.$def_sum.'", ""],'."\n";
				$content .= '"h4": ["'.$h4.'", '.json_encode($this->top_array[B_BUILDINGS]).'],'."\n";
			} elseif ($db_key == "sprungtor") {
				$content .= '"h5": ["'.$h5.'", '.json_encode($this->top_array[RS_RESEARCH]).'],'."\n";
			}
		}

		$content .= '"username": '.json_encode($db_row["username"])."\n";

		$content .= '}';

		return $content;
	}


/**
 * Copy the DB result set onto another array by replacing all report specific technologies
 * with player specific technologies which are more up to date than the original values.
 */
    private function copy_attributes(array $row) {
        $result = $row;
        $result["spiolvl"] = $result["pspiolvl"];
        unset($result["pspiolvl"]);
        $result["computech"] = $result["pcomputech"];
        unset($result["pcomputech"]);
        $result["waffentech"] = $result["pwaffentech"];
        unset($result["pwaffentech"]);
        $result["schildtech"] = $result["pschildtech"];
        unset($result["pschildtech"]);
        $result["rpz"] = $result["prpz"];
        unset($result["prpz"]);
        $result["energytech"] = $result["penergytech"];
        unset($result["penergytech"]);
        $result["hypertech"] = $result["phypertech"];
        unset($result["phypertech"]);
        $result["vbt"] = $result["pvbt"];
        unset($result["pvbt"]);
        $result["impulse"] = $result["pimpulse"];
        unset($result["pimpulse"]);
        $result["hra"] = $result["phra"];
        unset($result["phra"]);
        $result["lasertech"] = $result["plasertech"];
        unset($result["plasertech"]);
        $result["iontech"] = $result["piontech"];
        unset($result["piontech"]);
        $result["plasmatech"] = $result["pplasmatech"];
        unset($result["pplasmatech"]);
        $result["forschungsnetz"] = $result["pforschungsnetz"];
        unset($result["pforschungsnetz"]);
        $result["expedition"] = $result["pexpedition"];
        unset($result["pexpedition"]);
        $result["gravi"] = $result["pgravi"];
        unset($result["pgravi"]);
    
        return $result;
    }
}