<?php

/**
 * This class manages all galaxy view specific requests.
 * @author eX0du5
 *
 */
class Galaxyview extends GenericSuperclass {

	private $dbtablename     = null;
	private $systemtablename = null;
	private $playertable     = null;
	private $allytable       = null;
	private $utablename      = null;
	private $reporttable     = null;
	private $fleetmovetable  = null;
	private $noticetable     = null;

	public function __construct($dbtablename, $systemtablename, $playertable, $allytable, $utablename, $reporttable, $fleetmovetable, $noticetable) {
		parent::__construct();

		if ($dbtablename == "") throw new InvalidArgumentException("Galaxy table empty");
		$this->dbtablename = $dbtablename;

		if ($systemtablename == "") throw new InvalidArgumentException("System table empty");
		$this->systemtablename = $systemtablename;

		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;

		if ($allytable == "") throw new InvalidArgumentException("Ally table empty");
		$this->allytable = $allytable;

		if ($utablename == "") throw new InvalidArgumentException("User table empty");
		$this->utablename = $utablename;

		if ($reporttable == "") throw new InvalidArgumentException("Report table empty");
		$this->reporttable = $reporttable;

		if ($fleetmovetable == "") throw new InvalidArgumentException("Fleetmovement table empty");
		$this->fleetmovetable = $fleetmovetable;

		if ($noticetable == "") throw new InvalidArgumentException("Notice table empty");
		$this->noticetable = $noticetable;

		if (!defined("USER_ERROR1")) throw new InvalidArgumentException("Language file not loaded");
	}


	public function get_galaxy_view($galaxy, $system) {
		if (!is_numeric($galaxy) || !is_numeric($system) || $galaxy < 1 || $system < 1) throw new InvalidArgumentException("Galaxy and system must be numeric");

		$query = "SELECT g.*,p.alliance_id, DATE_FORMAT(CONVERT_TZ(s.last_update, '+00:00', '".
				 $_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."'), '%H:%i:%s - %d. %m. %Y') as glastupdate, ".
				 "p.rank, p.points, p.erank, p.epoints, p.frank, p.fpoints, p.rrank, p.rpoints, p.noob, p.banned, p.vacation, p.inactive, p.long_inactive, p.outlaw, p.last_stats_update as plastupdate, p.playername, p.diplomatic_status, ".
				 "p.hrank, p.hpoints, p.fbrank, p.fbpoints, p.fdrank, p.fdpoints, p.flrank, p.flpoints, p.id as player_id, ".
				 "a.rank as arank, a.members, a.rank as arank, a.points as apoints, a.erank as aerank, a.epoints as aepoints, a.frank as afrank, a.fpoints as afpoints, a.rrank as arrank, a.rpoints as arpoints, ".
				 "a.hrank as ahrank, a.hpoints as ahpoints, a.fbrank as afbrank, a.fbpoints as afbpoints, a.fdrank as afdrank, a.fdpoints as afdpoints, a.flrank as aflrank, a.flpoints as aflpoints, ".
				 "DATE_FORMAT(CONVERT_TZ(a.last_update, '+00:00', '".
				 $_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."'), '%H:%i:%s - %d. %m. %Y') as alastupdate, a.allyname, a.diplomatic_status as dipl_status, ".
				 "n.id as notice_id, ".
				 "u.username ".
				 "FROM $this->dbtablename g INNER JOIN $this->systemtablename s ON (g.galaxy=s.galaxy AND g.system=s.system) ".
				 "LEFT JOIN $this->playertable p ON (g.ogame_playerid=p.ogame_playerid) ".
				 "LEFT JOIN $this->allytable a ON (p.alliance_id=a.id) ".
				 "LEFT JOIN $this->noticetable n ON (p.id = n.player_id) ".
 				 "LEFT JOIN $this->utablename u ON (u.id = s.user_id) ".
 				 "WHERE g.galaxy=:galaxy AND g.system=:system ORDER BY planet ASC";

		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $galaxy);
		$stmt->bindParam(":system", $system);
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) {
			return array();
		}

		$content = array();
		while ($planet_data = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$content[$planet_data['planet']] = $planet_data;
		}

		return $content; // might be empty
	}

	public function get_system_info($galaxy, $system) {
		if (!is_numeric($galaxy) || !is_numeric($system) || $galaxy < 1 || $system < 1) throw new InvalidArgumentException("Galaxy and system must be numeric");

		$query = "SELECT u.username, s.last_update ".
		         "FROM $this->dbtablename g INNER JOIN $this->systemtablename s ON (g.galaxy=s.galaxy AND g.system=s.system) ".
				 "LEFT JOIN $this->utablename u ON (u.id = s.user_id) ".
				 "WHERE s.galaxy=:galaxy AND s.system=:system LIMIT 1";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $galaxy);
		$stmt->bindParam(":system", $system);
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) {
			return array();
		}

		$content = $stmt->fetch(PDO::FETCH_ASSOC);
		return $content;
	}

	public function get_phalanx_info($galaxy, $system) {
		if (!is_numeric($galaxy) || !is_numeric($system) || $galaxy < 1 || $system < 1) throw new InvalidArgumentException("Galaxy and system must be numeric");

    	$query = "SELECT r.galaxy,r.system,r.planet, p.diplomatic_status
				  FROM $this->reporttable r
				  LEFT JOIN $this->dbtablename g ON ( r.galaxy = g.galaxy AND r.system = g.system AND r.planet = g.planet )
				  LEFT JOIN $this->playertable p ON (g.ogame_playerid = p.ogame_playerid)
				  WHERE r.moon='true' AND r.sensor>0 AND p.inactive = 'false' AND p.vacation = 'false' AND p.banned = 'false' AND g.galaxy=:galaxy AND
				  :system1 >= min_phalanx AND :system2 <= max_phalanx";

		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $galaxy);
		$stmt->bindParam(":system1", $system);
		$stmt->bindParam(":system2", $system);
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) {
			return array();
		}

		$content = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$key = $line['galaxy'] * 100000 + $line['system'] * 100 + $line['planet'];
			$content[$key] = $line;
		}
		ksort($content); // sort by "coordinates"

		return $content;
	}

	public function get_irak_info($galaxy, $system) {
		if (!is_numeric($galaxy) || !is_numeric($system) || $galaxy < 1 || $system < 1) throw new InvalidArgumentException("Galaxy and system must be numeric");

	   	$query = "SELECT r.galaxy,r.system,r.planet, p.diplomatic_status
                  FROM $this->reporttable r
                  LEFT JOIN $this->dbtablename g ON (g.galaxy = r.galaxy AND g.system = r.system AND g.planet = r.planet)
                  LEFT JOIN $this->playertable p ON (g.ogame_playerid = p.ogame_playerid)
                  WHERE r.raksilo>3 AND p.inactive = 'false' AND p.vacation = 'false' AND p.banned = 'false' AND r.galaxy=:galaxy
                        AND :system1 >= min_rak AND :system2 <= max_rak";

		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $galaxy);
		$stmt->bindParam(":system1", $system);
		$stmt->bindParam(":system2", $system);
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) {
			return array();
		}

		$content = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$key = $line['galaxy'] * 100000 + $line['system'] * 100 + $line['planet'];
			array_push($content, $line);
		}
		ksort($content); // sort by "coordinates"

		return $content;
	}

	public function get_reports($galaxy, $system) {
		if (!is_numeric($galaxy) || !is_numeric($system) || $galaxy < 1 || $system < 1) throw new InvalidArgumentException("Galaxy and system must be numeric");
		$query = "SELECT id, planet, moon ".
				 "FROM $this->reporttable r ".
				 "WHERE r.galaxy=:galaxy AND r.system=:system";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $galaxy);
		$stmt->bindParam(":system", $system);
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) {
			return array();
		}

		$content = array();
		while ($report_data = $stmt->fetch(PDO::FETCH_ASSOC)) {
			if ($report_data['moon'] == "true") {
				$content[$report_data['planet']]['moon']  = $report_data;
			} else {
				$content[$report_data['planet']]['planet'] = $report_data;
			}
		}
		return $content; // might be empty
	}


}