<?php
/**
 * Handle search requests triggered by the standard galaxy tool search page.
 * @author eX0du5
 *
 */
class GalaxytoolSearch extends GenericSuperclass {

	private $dbtablename     = null;
	private $systemtablename = null;
	private $playertable     = null;
	private $allytable       = null;
	private $noticetable     = null;
	private $reporttable     = null;
	private $selection       = null;
	private $query           = null;
	private $results         = null;
	private $playerhistory   = null;

	public function __construct($dbtablename, $systemtablename, $playertable, $allytable, $noticetable, $reporttable, $playerhistory) {
		parent::__construct();

		if ($dbtablename == "") throw new InvalidArgumentException("Galaxy table empty");
		$this->dbtablename = $dbtablename;

		if ($systemtablename == "") throw new InvalidArgumentException("System table empty");
		$this->systemtablename = $systemtablename;

		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;

		if ($allytable == "") throw new InvalidArgumentException("Ally table empty");
		$this->allytable = $allytable;

		if ($noticetable == "") throw new InvalidArgumentException("Notice table empty");
		$this->noticetable = $noticetable;

		if ($reporttable == "") throw new InvalidArgumentException("Report table empty");
		$this->reporttable = $reporttable;

		if ($playerhistory == "") throw new InvalidArgumentException("Playerhistory table empty");
		$this->playerhistory = $playerhistory;
	}

	/**
	 * Return the number of rows that match the selection criteria.
	 * @return number|NULL
	 */
	public function get_number_of_results() {
		if ($this->results == null) return 0;
		return $this->results;
	}

	public function get_content($start, $count) {
		$start = intval($start);
		$count = intval($count);
		if ($start < 0) $start = 0;
		if ($count < 10) $count = $_SESSION['s_auth']->get_setting(iAuthorization::setting_hits);

		$limit = $start.",".$count;

		$stmt = $this->query($this->query . " LIMIT " . $limit);
		if (!$stmt) return false;

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

			$notice = ($line['notice_id'] > 0 && $line['notice_id'] !== null) ? $line['player_id'] : null;
			$preport = ($line['report_id'] > 0 && $line['report_id'] !== null) ? "true" : "false";
			$mreport = ($line['report_moonid'] > 0 && $line['report_moonid'] !== null) ? "true" : "false";

			$result .= '{'.
			'"address": '.json_encode($address).', '.
			'"moon": {"exists":'.$line['moon'].', "size":'.$line['moonsize'].'}, '.
			'"debris": {"m":'.$line['metal'].',"c":'.$line['crystal'].'}, '.
			'"ally": {"n":'.json_encode($line['allyname']).',"id":'.json_encode($line['alliance_id']).',"s":'.json_encode($line['allystatus']).',"m":'.json_encode($line['members']).'}, '.
			'"planet":'.json_encode($line['planetname']).', '.
			'"player":{"n":'.json_encode($line['playername']).',"id":'.json_encode($line['player_id']).',"s":'.json_encode($line['playerstatus']).'}, '.
			'"status":'.json_encode($status).', '.
			'"datetime":'.json_encode($line['glastupdate']).', '.
			'"notices":'.json_encode($notice).', '.
			'"reports":{"p":'.$preport.',"m":'.$mreport.', "c":'.json_encode($address).'}'.
			'},';

		}
		$result .= ' ]';

		return $result;

	}


	/**
	 * Provide the POST array containing all parameter of the form and perform validations and store selection parameter in an internal array.
	 * @param array $param
	 */
	public function set_search_parameter($param) {
		$this->query = null; // reset former selection parameter
		$this->results = null;

		$this->selection['alliance']    = trim(stripslashes(strip_tags($param['alliance'])));
		$this->selection['player']      = trim(stripslashes(strip_tags($param['player'])));
		$this->selection['planetname']  = trim(stripslashes(strip_tags($param['planetname'])));
	    $this->selection['coordinates'] = (CoordinatesHelper::validate_coordinates($param['coordinates'])) ? $param['coordinates'] : "";

	    $this->selection['minrank'] = 0;
	    if ($param['minrank'] != "" && is_numeric($param['minrank']) && $param['minrank'] > 0) {
	    	$this->selection['minrank'] = intval($param['minrank']);
	    }
	    $this->selection['maxrank'] = 0;
	    if ($param['maxrank'] != "" && is_numeric($param['maxrank']) && $param['maxrank'] > 0) {
	    	$this->selection['maxrank'] = intval($param['maxrank']);
	    }

	    $this->selection['minfrank'] = 0;
	    if ($param['minfrank'] != "" && is_numeric($param['minfrank']) && $param['minfrank'] > 0) {
	    	$this->selection['minfrank'] = intval($param['minfrank']);
	    }
	    $this->selection['maxfrank'] = 0;
	    if ($param['maxfrank'] != "" && is_numeric($param['maxfrank']) && $param['maxfrank'] > 0) {
	    	$this->selection['maxfrank'] = intval($param['maxfrank']);
	    }

	    switch ($param['datevalue']) {
	    	case 1: $this->selection['date_selector'] = "<"; break;
	    	case 2: $this->selection['date_selector'] = ">"; break;
	    	default: $this->selection['date_selector'] = ""; break;
	    }
	    $this->selection['date'] = "";
	    $this->selection['time'] = "";
	    if ($this->selection['date_selector'] != "") {
	    	// format: 2011-12-15
	    	if (preg_replace("/\d{4}\-\d{2}\-\d{2}/", "", $param['date_from']) == "") {
	    		$this->selection['date'] = $param['date_from'];
	    		// format: T21:13:00
	    		if (preg_replace("/T\d{2}\:\d{2}\:\d{2}/", "", $param['time1']) == "") {
	    			$this->selection['time'] = str_replace("T", "", $param['time1']);
	    		}
	    	}
	    }

	    $this->selection['metal']   = (is_numeric($param['metal']) && $param['metal'] > 0) ? intval($param['metal']) : 0;
	    $this->selection['crystal'] = (is_numeric($param['crystal']) && $param['crystal'] > 0) ? intval($param['crystal']) : 0;
	    $this->selection['both']    = (is_numeric($param['both']) && $param['both'] > 0) ? intval($param['both']) : 0;

		switch ($param['moonsearch']) {
			case "yes": $this->selection['moonsearch'] = true; break;
			case "no": $this->selection['moonsearch'] = false; break;
			default: $this->selection['moonsearch'] = null; break;
		}
		switch ($param['reportsearch']) {
			case "yes": $this->selection['reportsearch'] = true; break;
			case "no": $this->selection['reportsearch'] = false; break;
			default: $this->selection['reportsearch'] = null; break;
		}

		switch ($param['playerprogress']) {
			case "-": $this->selection['playerprogress'] = null; break;
			default:
				$this->selection['playerprogress'] = intval($param['playerprogress']);
				if ($this->selection['playerprogress'] < 1 || $this->selection['playerprogress'] > 7) $this->selection['playerprogress'] = null;
				break;
		}

/*
		$this->selection['colonysearch'] = false;
		$this->selection['colony_from']  = 0;
		$this->selection['colony_to']    = 0;
		if ($param['colonysearch'] == "0") {
			if (is_numeric($param['colony1']) && $param['colony1'] > 0 && $param['colony1'] < 15) {
				$this->selection['colony_from']  = intval($param['colony1']);
				$this->selection['colonysearch'] = true;
			}
			if (is_numeric($param['colony2']) && $param['colony2'] > 0 && $param['colony2'] < 15) {
				$this->selection['colony_to']    = intval($param['colony2']);
				$this->selection['colonysearch'] = true;
			}
		}
*/
		switch ($param['select_inactive']) {
			case "yes":           $this->selection['inactives'] = "inactive"; break;
			case "inactive":      $this->selection['inactives'] = "inactive"; break;
			case "long_inactive": $this->selection['inactives'] = "long_inactive"; break;
			case "no":            $this->selection['inactives'] = false; break;
			default:              $this->selection['inactives'] = null; break;

		}

		switch ($param['select_vacation']) {
			case "yes":     $this->selection['select_vacation'] = true; break;
			case "no":      $this->selection['select_vacation'] = false; break;
			default:        $this->selection['select_vacation'] = null; break;
		}

		switch ($param['select_banned']) {
			case "yes":     $this->selection['select_banned'] = true; break;
			case "no":      $this->selection['select_banned'] = false; break;
			default:        $this->selection['select_banned'] = null; break;
		}
		switch ($param['select_outlaw']) {
			case "yes":     $this->selection['select_outlaw'] = true; break;
			case "no":      $this->selection['select_outlaw'] = false; break;
			default:        $this->selection['select_outlaw'] = null; break;
		}

	    // optional parameter -> 1 = on
	    for ($i = 2; $i < 9; $i++) {
	    	$this->selection['p_status'.$i] = (isset($param['playerstatus'.$i])) ? true : false;
	    	$this->selection['a_status'.$i] = (isset($param['allystatus'.$i])) ? true : false;
	    }
	    $this->selection['filter_nap']    = (isset($param['filter_nap'])) ? true : false;
	    $this->selection['filter_allied'] = (isset($param['filter_allied'])) ? true : false;
	    $this->selection['filter_own']    = (isset($param['filter_own'])) ? true : false;
	    $this->selection['filter_wing']   = (isset($param['filter_wing'])) ? true : false;

	}

	public function perform_search($page=1) {
		if ($this->query == null && $this->selection == null) throw new InvalidArgumentException("No search parameter defined!");
		if ($this->query == null) {
			$res = $this->build_query();
			if (!$res) return false;
			$page = 1;
		}
		$this->selection = null;

		// add limit parameter
		$query = $this->query . " LIMIT ".$page * $_SESSION['s_auth']->get_setting(iAuthorization::setting_hits).", ".$_SESSION['s_auth']->get_setting(iAuthorization::setting_hits);

		$stmt   = $this->query($query);
		if (!$stmt) return false;

		$results = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			array_push($results, $line);
		}

		return $results;
	}

	/**
	 * Transform selection parameter into a query which can be executed and get the number of maximum records for that query.
	 * @return boolean
	 */
	private function build_query() {
		$whereclause = $this->get_where_statement();

		$from_part = "FROM $this->dbtablename g INNER JOIN $this->systemtablename s ON (g.galaxy=s.galaxy AND g.system=s.system) ".
					 "LEFT JOIN $this->playertable p ON (g.ogame_playerid=p.ogame_playerid) ";
		if ($this->selection['playerprogress'] !== null) {
			// we need to merge with player history table too
			$from_part .= "INNER JOIN $this->playerhistory ph ON (p.id=ph.player_id) ";
		}

		$from_part .=
		             "LEFT JOIN $this->allytable a ON (p.alliance_id=a.id) ".
		             "LEFT JOIN $this->noticetable n ON (p.id = n.player_id) ".
		             "LEFT JOIN $this->reporttable r ON (g.galaxy = r.galaxy AND g.system = r.system AND g.planet = r.planet AND r.moon='false') ".
		             "LEFT JOIN $this->reporttable rm ON (g.galaxy = rm.galaxy AND g.system = rm.system AND g.planet = rm.planet AND rm.moon='true') ";

		$count_query = "SELECT count(*) as results $from_part $whereclause";
		$stmt         = $this->query($count_query);
		if (!$stmt) return false;

		//$this->error_object = new ErrorObject(ErrorObject::severity_info, $count_query);

		$line          = $stmt->fetch(PDO::FETCH_OBJ);
		$this->results = $line->results;

		$this->query = "SELECT g.galaxy,g.system,g.planet,g.moon,g.moonsize,g.metal,g.crystal, ".
					   "a.allyname,g.planetname,p.playername,p.noob,p.banned,p.vacation,p.inactive,p.long_inactive, p.outlaw, ".
		               "DATE_FORMAT(CONVERT_TZ(s.last_update, '+00:00', '".$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."'), '%H:%i %d.%m.%y') as glastupdate, ".
		               "n.id as notice_id ,r.id as report_id, rm.id as report_moonid, ".
		               "p.alliance_id, p.id as player_id, p.diplomatic_status as playerstatus, ".
					   "a.diplomatic_status as allystatus, a.members ".$from_part." ".$whereclause." ".
					   "ORDER BY galaxy,system,planet ";

		return true;
	}

	/**
	 * Create the complex WHERE statement based on the selection parameter provided earlier.
	 * @return string
	 */
	private function get_where_statement() {
		$wheres = array();

		if (!empty($this->selection['alliance'])) {
			$alliance = DB::getDB()->quote($this->selection['alliance']);
			if (strpos($alliance, "*") === false) {
				// no wildcards
				array_push($wheres, "a.allyname=$alliance");
			} else {
				$alliance = str_replace("*","%",$alliance);
				array_push($wheres, "a.allyname LIKE $alliance");
			}
		}

		if (!empty($this->selection['player'])) {
			$player = DB::getDB()->quote($this->selection['player']);
			if (strpos($player, "*") === false) {
				array_push($wheres, "p.playername=$player");
			} else {
				$player = str_replace("*","%",$player);
				array_push($wheres, "p.playername LIKE $player");
			}
		}

		if (!empty($this->selection['planetname'])) {
			$planetname = DB::getDB()->quote($this->selection['planetname']);
			if (strpos($planetname, "*") === false) {
				array_push($wheres, "g.planetname=$planetname");
			} else {
				$planetname = str_replace("*","%",$planetname);
				array_push($wheres, "g.planetname LIKE $planetname");
			}
		}

		if ($this->selection['minrank'] > 0) {
			array_push($wheres, "p.rank >= ".$this->selection['minrank']);
		}
		if ($this->selection['maxrank'] > 0) {
			array_push($wheres, "p.rank <= ".$this->selection['maxrank']." AND p.rank != 0 ");
		}

		if ($this->selection['minfrank'] > 0) {
			array_push($wheres, "p.frank >= ".$this->selection['minfrank']);
		}
		if ($this->selection['maxfrank'] > 0) {
			array_push($wheres, "p.frank <= ".$this->selection['maxfrank']." AND p.frank != 0");
		}

		if (!empty($this->selection['date_selector']) && !empty($this->selection['date']) && !empty($this->selection['time'])) {
			$time = $this->selection['date']." ".$this->selection['time'];
			array_push($wheres, "s.last_update ".$this->selection['date_selector']." '$time' ");
		}

		if ($this->selection['metal'] > 0) {
			array_push($wheres, "g.metal > ".$this->selection['metal']);
		}
		if ($this->selection['crystal'] > 0) {
			array_push($wheres, "g.crystal > ".$this->selection['crystal']);
		}
		if ($this->selection['both'] > 0) {
			array_push($wheres, "(g.metal+g.crystal > ".$this->selection['both'].")");
		}

		if ($this->selection['moonsearch'] === true) {
			array_push($wheres, "g.moon='true'");
		} elseif($this->selection['moonsearch'] === false) {
			array_push($wheres, "g.moon='false'");
		} // else: null

		if ($this->selection['reportsearch'] === true) {
			array_push($wheres, "(r.id IS NOT NULL OR rm.id IS NOT NULL)");
		} elseif($this->selection['reportsearch'] === false) {
			array_push($wheres, "r.id IS NULL AND rm.id IS NULL");
		} // else: null

		if ($this->selection['playerprogress'] !== null) {
			$date = time() - 86400 * $this->selection['playerprogress'];
			array_push($wheres, "ph.year='".date("Y",$date)."' AND ph.month='".date("m",$date)."' AND ph.day='".date("d",$date)."' AND p.points = ph.points");
		}

/*
		if ($this->selection['colonysearch']) {
			if ($this->selection['colony_from'] > 0) {
				array_push($wheres, "g.planet==null");
			}
			if ($this->selection['colony_to'] > 0) {

			}
		}
// TODO: colonysearch is not working if planets do not exist in DB!

		$this->selection['colonysearch'] = false;
		$this->selection['colony_from']  = "";
		$this->selection['colony_to']    = "";
		if ($param['colonysearch'] == "0") {
			if (is_numeric($param['colony1']) && $param['colony1'] > 0 && $param['colony1'] < 15) {
				$this->selection['colony_from']  = intval($param['colony1']);
				$this->selection['colonysearch'] = true;
			}
			if (is_numeric($param['colony2']) && $param['colony2'] > 0 && $param['colony2'] < 15) {
				$this->selection['colony_to']    = intval($param['colony2']);
				$this->selection['colonysearch'] = true;
			}
		}
*/

		if ($this->selection['inactives'] !== null) {
			if ($this->selection['inactives'] === false) {
				array_push($wheres, "inactive = 'false'");
			} elseif ($this->selection['inactives'] == "inactive") {
				array_push($wheres, "inactive = 'true'");
			} else {
				array_push($wheres, "long_inactive = 'true'");
			}
		}


		if ($this->selection['select_vacation'] !== null) {
			if ($this->selection['select_vacation']) {
				array_push($wheres, "vacation = 'true'");
			} else {
				array_push($wheres, "vacation = 'false'");
			}
		}
		if ($this->selection['select_banned'] !== null) {
			if ($this->selection['select_banned']) {
				array_push($wheres, "banned = 'true'");
			} else {
				array_push($wheres, "banned = 'false'");
			}
		}
		if ($this->selection['select_outlaw'] !== null) {
			if ($this->selection['select_outlaw']) {
				array_push($wheres, "outlaw = 'true'");
			} else {
				array_push($wheres, "outlaw = 'false'");
			}
		}

	    // optional parameter true == on
	    $a_status = array();
	    $p_status = array();
	    $status = array('nap','ally','war','boycott','neutral','own','wing');
	    for ($i = 2; $i < 9; $i++) {
	    	if ($this->selection['p_status'.$i]) {
	    		array_push($p_status, "p.diplomatic_status='".$status[$i-2]."'");
	    	}
	    	if ($this->selection['a_status'.$i]) {
	    		array_push($a_status, "a.diplomatic_status='".$status[$i-2]."'");
	    	}
	    }

		if ($this->selection['filter_nap']) {
			array_push($wheres, "p.diplomatic_status!='nap'");
			array_push($wheres, "a.diplomatic_status!='nap'");
		}
		if ($this->selection['filter_allied']) {
			array_push($wheres, "p.diplomatic_status!='ally'");
			array_push($wheres, "a.diplomatic_status!='ally'");
		}
		if ($this->selection['filter_own']) {
			array_push($wheres, "p.diplomatic_status!='own'");
			array_push($wheres, "a.diplomatic_status!='own'");
		}
		if ($this->selection['filter_wing']) {
			array_push($wheres, "p.diplomatic_status!='wing'");
			array_push($wheres, "a.diplomatic_status!='wing'");
		}

	    // finally create the where clause

		$whereclause = "WHERE 1=1 "; // 1=1 is just a trick to avoid checking for "AND"
		if (count($wheres) > 0) {
			$whereclause .= " AND " . implode(" AND ", $wheres);
		}
		if (count($p_status) > 0) {
			$whereclause .= " AND (" . implode(" OR ", $p_status) . ") ";
		}
		if (count($a_status) > 0) {
			$whereclause .= " AND (" . implode(" OR ", $a_status) . ") ";
		}

		if (!empty($this->selection['coordinates'])) {
			$whereclause .= CoordinatesHelper::get_coordinate_where_statement($this->selection['coordinates'], "g");
		}

		return $whereclause;
	}

}