<?php

class StatusInfo extends GenericSuperclass {
	var $dbtablename     = null;
	var $systemtablename = null;
	var $utablename      = null;
	var $playertable     = null;
	var $allytable       = null;
	var $noticetable     = null;
	var $reporttable     = null;

	public function __construct( $dbtablename, $systemtablename, $utablename, $playertable, $allytable, $reporttable, $noticetable) {
		parent::__construct();

		if ($dbtablename == "") throw new InvalidArgumentException("Tablename missing for galaxytable");
		$this->dbtablename = $dbtablename;

		if ($systemtablename == "") throw new InvalidArgumentException("Tablename missing for systemtable");
		$this->systemtablename = $systemtablename;

		if ($utablename == "") throw new InvalidArgumentException("Tablename missing for usertable");
		$this->utablename = $utablename;

		if ($playertable == "") throw new InvalidArgumentException("Tablename missing for playertable");
		$this->playertable = $playertable;

		if ($allytable == "") throw new InvalidArgumentException("Tablename missing for allytable");
		$this->allytable = $allytable;

		if ($noticetable == "") throw new InvalidArgumentException("Tablename missing for notices table");
		$this->noticetable= $noticetable;

		if ($reporttable == "") throw new InvalidArgumentException("Tablename missing for reporttable");
		$this->reporttable = $reporttable;
	}

	/**
	 * Returns an array with all status information required for first tab.
	 * @return array
	 */
	public function getStatusInfo1() {
		$query  = "SELECT count(*) as cardinality FROM $this->systemtablename";
		$stmt = $this->query($query);
		if  (!$stmt) $info_systems = 0;
		else {
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$info_systems = number_format($line->cardinality,0,",",".");
			}
		}

		$query  = "SELECT count(*) as cardinality FROM $this->systemtablename WHERE DATE_SUB(CURDATE(),INTERVAL 7 DAY) <= last_update";
		$stmt = $this->query($query);
		if  (!$stmt) $info_lastweek = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_lastweek = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->systemtablename WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) > last_update";
		$stmt = $this->query($query);
		if  (!$stmt) $info_too_old = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_too_old = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->utablename";
		$stmt = $this->query($query);
		if  (!$stmt) $info_reg_user = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_reg_user = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->noticetable";
		$stmt = $this->query($query);
		if  (!$stmt) $info_notices = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_notices = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->playertable";
		$stmt = $this->query($query);
		if  (!$stmt) $info_players = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_players = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->allytable";
		$stmt = $this->query($query);
		if  (!$stmt) $info_allies = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_allies = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->reporttable";
		$stmt = $this->query($query);
		if  (!$stmt) $info_reports = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_reports = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->playertable WHERE vacation='true'";
		$stmt = $this->query($query);
		if  (!$stmt) $info_umod = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_umod = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->dbtablename WHERE moon='true'";
		$stmt = $this->query($query);
		if  (!$stmt) $info_moons = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_moons = number_format($line->cardinality,0,",",".");
		}

		$query  = "SELECT count(*) as cardinality FROM $this->dbtablename g, $this->playertable p WHERE g.ogame_playerid = p.ogame_playerid AND banned='false' AND vacation='false' AND noob='false'";
		$query = "SELECT count(*) as cardinality FROM $this->dbtablename g where ogame_playerid IN (SELECT p.ogame_playerid FROM $this->playertable p WHERE banned='false' AND vacation='false' AND noob='false')";
		$stmt = $this->query($query);
		if  (!$stmt) $info_raidable = 0;
		else {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$info_raidable = number_format($line->cardinality,0,",",".");
		}

		$content = array();
		$content["info_systems"]  = $info_systems;
		$content["info_lastweek"] = $info_lastweek;
		$content["info_too_old"]  = $info_too_old;
		$content["info_reg_user"] = $info_reg_user;
		$content["info_notices"]  = $info_notices;
		$content["info_players"]  = $info_players;
		$content["info_allies"]   = $info_allies;
		$content["info_reports"]  = $info_reports;
		$content["info_umod"]     = $info_umod;
		$content["info_moons"]    = $info_moons;
		$content["info_raidable"] = $info_raidable;

		return $content;
	}

	/**
	 * Return the number of the greatest galaxy known in the database
	 * @return number
	 */
	public function getMaxGalaxy() {
		// determine max galaxy (there are universes with more than 9 galaxies)
		$query = "SELECT MAX(galaxy) as max_galaxy FROM ".$this->dbtablename;
		$stmt = $this->query($query);
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		if ($stmt->rowCount() > 0) {
			$max_galaxy = $line->max_galaxy;
		} else {
			$max_galaxy = 1;
		}

		return $max_galaxy;
	}


	public function getGalaxyStatus($galaxy) {

		for ($j=1;$j<500;$j++) {
			$galaxiearray[$j] = 0; // Datumstempel auf 0 setzen
			$userarray[$j] = "unknown";
		}
		$query = "SELECT s.system, UNIX_TIMESTAMP(CONVERT_TZ(s.last_update, '+00:00', '".$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."')) as gtimestamp, DATE_FORMAT(CONVERT_TZ(s.last_update, '+00:00', '".$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."'), '%d. %m. %Y - %H:%i:%s') as glastupdate, u.username ".
				 "FROM ".$this->systemtablename." s LEFT JOIN ".$this->utablename." u ON (s.user_id=u.id) ".
				 "GROUP BY galaxy, system ".
				 "HAVING galaxy=:galaxy";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":galaxy", $galaxy);
		$res = $this->execute($stmt);
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$galaxiearray[$line->system] = $line->gtimestamp;
			$userarray[$line->system] = $line->username." ".STATUS_ON." ".$line->glastupdate;
		}

		return array($galaxiearray, $userarray);
	}

	/**
	 * Returns an array of players who have more than $planets planets
	 * @param Int $planets
	 * @return array
	 */
	public function getPlanetsInfo($planets) {
		$planets = intval($planets);
		if ($planets < 2 || $planets > 20) return false;

		// select players with more than 9 planets
		$query  = "SELECT playername,count(*) as planets, p.id as player_id FROM $this->dbtablename g LEFT JOIN $this->playertable p on (p.ogame_playerid = g.ogame_playerid) ".
				  "GROUP BY player_id HAVING count( * ) > :planets";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":planets", $planets);
		$res = $this->execute($stmt);
		if (!$res) return false;
		$players_with_n_planets = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->playername != null) {
				$players_with_n_planets[$line->player_id][0] = $line->planets;
				$players_with_n_planets[$line->player_id][1] = $line->playername;
			}
		}

		return $players_with_n_planets;
	}


}
