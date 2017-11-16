<?php

/**
 * @author eX0du5
 * 
 * This class is used for administration page functionality.
 *
 */
class Administration extends GenericSuperclass {

	private $dbtablename     = null;
	private $systemtablename = null;
	private $playertable     = null;
	private $allytable       = null;
	private $noticetable     = null;
	private $reporttable     = null;
    private $shouttable      = null;
    private $allyhistory     = null;
    private $playerhistory   = null;
    private $fleetmovetable  = null;
    private $player_activity = null;
    private $messagetable    = null;
    private $combattable     = null;
    private $combatparty     = null;
    private $reportarchive   = null;
    private $formtable       = null;

	/**
	 * Constructor
	 * @param String $dbtablename
	 * @param String $systemtablename
	 * @param String $playertable
	 * @param String $allytable
	 * @param String $noticetable
	 * @param String $reporttable
	 * @param String $shouttable
	 * @param String $allyhistory
	 * @param String $playerhistory
	 * @param String $fleetmovetable
	 * @param String $player_activity
	 * @param String $messagetable
	 * @param String $combattable
	 * @param String $combatparty
	 * @param String $reportarchive
	 * @param String $formtable
	 * @throws InvalidArgumentException
	 */
	public function __construct($dbtablename, $systemtablename, $playertable, $allytable, $noticetable, $reporttable,
	                            $shouttable, $allyhistory, $playerhistory, $fleetmovetable, $player_activity,
	                            $messagetable, $combattable, $combatparty, $reportarchive, $formtable) {

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
		if ($shouttable == "") throw new InvalidArgumentException("News table empty");
		$this->shouttable = $shouttable;
		if ($allyhistory == "") throw new InvalidArgumentException("Ally history table empty");
		$this->allyhistory = $allyhistory;
		if ($playerhistory == "") throw new InvalidArgumentException("Player history table empty");
		$this->playerhistory = $playerhistory;
		if ($fleetmovetable == "") throw new InvalidArgumentException("Fleetmove table empty");
		$this->fleetmovetable = $fleetmovetable;
		if ($player_activity == "") throw new InvalidArgumentException("Player table empty");
		$this->player_activity = $player_activity;
		if ($messagetable == "") throw new InvalidArgumentException("Message table empty");
		$this->messagetable = $messagetable;
		if ($combattable == "") throw new InvalidArgumentException("Combat table empty");
		$this->combattable = $combattable;
		if ($combatparty == "") throw new InvalidArgumentException("Combat party table empty");
		$this->combatparty = $combatparty;
		if ($reportarchive == "") throw new InvalidArgumentException("Report archive table empty");
		$this->reportarchive = $reportarchive;
		if ($formtable == "") throw new InvalidArgumentException("Form table empty");
		$this->formtable = $formtable;


		if (!defined("L_LOGINFAILURE")) throw new InvalidArgumentException("Language file not loaded");

	}


	/**
	 * Start cleanup functionality based in the user input for individual tasks on the administration page.
	 * @param Boolean $planets delete planets > 15 and = 0
	 * @param Int $galaxies delete galaxies > x
	 * @param Boolean $players delete players without playerid
	 * @param Boolean $reports delete reports that have no planet; 
	 * @param Boolean $reset Reset Galaxytool
	 * @param Boolean $unused_players delete all players which are not used at galaxy views
	 * @param Int $old_players delete player entries older than x days
	 * @param Int $old_reports delete reports older than x days
	 * @param Int $old_galaxies delete galaxyviews older than x days
	 * @param Int $old_activities Remove player activities older than x days
	 * @param Int $old_combats delete combat reports older than x days
	 * @param Int $old_messagesdelete ingame messages older than x days
	 * @return boolean
	 */
	public function cleanup($planets, $galaxies, $players, $reports, $reset, $unused_players, $old_players, $old_reports, $old_galaxies, $old_activities, $old_combats, $old_messages) {
		$this->error_object = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);

		if ($reset === true) {
			// reset Galaxytool
			$query = "TRUNCATE $this->dbtablename";
			$res = $this->exec($query);
			$query = "TRUNCATE $this->systemtablename";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->playertable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->allytable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->noticetable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->reporttable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->shouttable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->allyhistory";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->playerhistory";
			$res = $this->exec($query);
			if ($res === false) return false;

			$query = "TRUNCATE $this->fleetmovetable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->player_activity";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->messagetable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->combattable";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->combatparty";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->reportarchive";
			$res = $this->exec($query);
			if ($res === false) return false;
			$query = "TRUNCATE $this->formtable";
			$res = $this->exec($query);
			if ($res === false) return false;

			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_RESET));

			return true;
		}

		if ($planets === true) {
			// delete planets > 15 and = 0
			$query   = "DELETE FROM $this->dbtablename WHERE planet = 0 OR planet > 15";
			$results = $this->exec($query);
			if ($results === false) return false;
			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_PLANETS . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_PLANETS . " : ". ADMIN_NOTBD));
			}
		}

		if ($galaxies != null && is_numeric($galaxies)) {
			// delete galaxies > x
			$parameter = intval($galaxies);
			if ($parameter < 0) $parameter = 9;
			$query = "DELETE FROM $this->dbtablename WHERE galaxy = 0 OR galaxy > :galaxy";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":galaxy", $parameter);
			
			$results = $this->execute($stmt);
			if ($results === false) return false;

			$message = str_replace("&1", $parameter, ADMIN_GALAXIES);
			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_NOTBD));
			}
		}

		if ($players === true) {
			// delete players without playerid
			$query = "DELETE FROM $this->playertable WHERE ogame_playerid IS NULL or ogame_playerid=0"; // = 0 was a bug in a previous version
			$results = $this->exec($query);
			if ($results === false) return false;
			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_PLAYERS . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_PLAYERS . " : ". ADMIN_NOTBD));
			}
		}

		if ($reports === true) {
			$new_results = 0;
			// delete reports that have no planet
			$query = "SELECT r.id FROM $this->reporttable r LEFT JOIN $this->dbtablename g ON (r.galaxy = g.galaxy AND r.system = g.system AND r.planet = g.planet) WHERE r.moon = 'false' AND ( g.ogame_playerid = 0 OR g.ogame_playerid IS NULL )";
			$stmt = $this->query($query);
			if ($stmt === false) return false;
			$ids = array();
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				array_push($ids,$line->id);
			}
			// find moon reports without a moon
			$query = "SELECT r.id FROM $this->reporttable r LEFT JOIN $this->dbtablename g ON (r.galaxy = g.galaxy AND r.system = g.system AND r.planet = g.planet) WHERE r.moon = 'true' AND ( g.ogame_playerid IS NULL OR g.moon IS NULL OR g.moon='false' OR g.moon='' )";
			$stmt = $this->query($query);
			if ($stmt === false) return false;
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				array_push($ids,$line->id);
			}
			if (count($ids) > 0) {
				$query = "DELETE FROM $this->reporttable WHERE id IN (".implode(",",$ids).")";
				$result = $this->exec($query);
				if ($result === false) return false;
			} else {
				$results = 0;
			}

			$ids = array();
			$query = "SELECT ra.id FROM $this->reportarchive ra LEFT JOIN $this->dbtablename g ON (ra.galaxy = g.galaxy AND ra.system = g.system AND ra.planet = g.planet) WHERE ( g.ogame_playerid = 0 OR g.ogame_playerid IS NULL )";
			$stmt = $this->query($query);
			if ($stmt === false) return false;
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				array_push($ids,$line->id);
			}
			if (count($ids) > 0) {
				$query = "DELETE FROM $this->reportarchive WHERE id IN (".implode(",",$ids).")";
				$new_results = $this->exec($query);
				if ($new_results === false) return false;
			}

			$results += $new_results;

			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_REPORTS . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_REPORTS . " : ". ADMIN_NOTBD));
			}
		}


		if ($old_players != null && is_numeric($old_players)) {
			// delete player entries older than x days
			$parameter = intval($old_players);
			if ($parameter < 0) $parameter = 0;

			$message = str_replace("&1",$parameter,ADMIN_OLD_PLAYERS);

			$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			if ($timezone[0] > 0) {
				$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
			} else {
				$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
			}

			$time = date("Y-m-d H:i:s",time() - 86400 * $parameter + $timezone);
			$query = "SELECT id, ogame_playerid FROM $this->playertable WHERE last_stats_update != '0000-00-00 00:00:00' AND last_stats_update < :time";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":time", $time);
			$res = $this->execute($stmt);
			if ($res === false) return false;
			$ids = array();
			$oids = array();
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				array_push($ids,$line->id);
				array_push($oids,$line->ogame_playerid);
			}
			if (count($ids) > 0) {
				$query = "DELETE FROM $this->playertable WHERE id IN (".implode(",",$ids).")";
				$results = $this->exec($query);
				if ($results === false) return false;
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_DONE." ($results)"));

				// delete referenced information
				$query = "DELETE FROM $this->playerhistory WHERE player_id IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;
				$query = "DELETE FROM $this->noticetable WHERE player_id IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;
				$query = "DELETE FROM $this->dbtablename WHERE ogame_playerid  IN (".implode(",",$oids).")";
				$res = $this->exec($query);
				if ($res === false) return false;

				$query = "SELECT combat_id FROM $this->combatparty WHERE player_id IN (".implode(",",$ids).")";
				$stmt = $this->query($query);
				if ($stmt === false) return false;
				$combat_ids = array();
				while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
					array_push($combat_ids,$line->combat_id);
				}
				if (count($combat_ids) > 0) {
					$query = "DELETE FROM $this->combattable WHERE id IN (".implode(",",$combat_ids).")";
					$res = $this->exec($query);
					if ($res === false) return false;
					$query = "DELETE FROM $this->combatparty WHERE combat_id IN (".implode(",",$combat_ids).")";
					$res = $this->exec($query);
					if ($res === false) return false;
				}

				$query = "DELETE FROM $this->player_activity WHERE player_id IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;
				$query = "DELETE FROM $this->messagetable WHERE player_id_from IN (".implode(",",$ids).") OR player_id_to IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;

			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_NOTBD));
			}
		}

		if ($unused_players === true) {
			// select all players which are not used at galaxy views
			$query = "SELECT p.id FROM $this->playertable p LEFT JOIN $this->dbtablename g ON p.ogame_playerid = g.ogame_playerid WHERE g.ogame_playerid IS NULL";
			$stmt = $this->query($query);
			if ($stmt === false) return false;
			$ids = array();
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				array_push($ids,$line->id);
			}
			if (count($ids) > 0) {
				$query = "DELETE FROM $this->playertable WHERE id IN (".implode(",",$ids).")";
				$results = $this->exec($query);
				if ($results === false) return false;

				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_UNUSED_PLAYERS . " : ". ADMIN_DONE." ($results)"));

				// delete referenced information
				$query = "DELETE FROM $this->playerhistory WHERE player_id IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;
				$query = "DELETE FROM $this->noticetable WHERE player_id IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;

				$query = "SELECT combat_id FROM $this->combatparty WHERE player_id IN (".implode(",",$ids).")";
				$stmt = $this->query($query);
				if ($stmt === false) return false;
				$combat_ids = array();
				while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
					array_push($combat_ids,$line->combat_id);
				}
				if (count($combat_ids) > 0) {
					$query = "DELETE FROM $this->combattable WHERE id IN (".implode(",",$combat_ids).")";
					$res = $this->exec($query);
					if ($res === false) return false;
					$query = "DELETE FROM $this->combatparty WHERE combat_id IN (".implode(",",$combat_ids).")";
					$res = $this->exec($query);
					if ($res === false) return false;
				}

				$query = "DELETE FROM $this->player_activity WHERE player_id IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;
				$query = "DELETE FROM $this->messagetable WHERE player_id_from IN (".implode(",",$ids).") OR player_id_to IN (".implode(",",$ids).")";
				$res = $this->exec($query);
				if ($res === false) return false;
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, ADMIN_UNUSED_PLAYERS . " : ". ADMIN_NOTBD));
			}
		}

		if ($old_reports != null && is_numeric($old_reports)) {
			// delete reports older than x days
			$parameter = intval($old_reports);
			if ($parameter < 0) $parameter = 0;

			$message = str_replace("&1",$parameter,ADMIN_OLD_REPORTS);

			$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			if ($timezone[0] > 0) {
				$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
			} else {
				$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
			}

			$time = date("Y.m.d",time() - 86400 * $parameter + $timezone);

			$query = "DELETE FROM $this->reporttable WHERE scantime < '$time' AND scantime != ''";
			$results = $this->exec($query);
			if ($results === false) return false;
			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_DONE." (".floor($results / 15).")"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_NOTBD));
			}
		}

		if ($old_galaxies != null && is_numeric($old_galaxies)) {
			// delete galaxyviews older than x days
			$parameter = intval($old_galaxies);
			if ($parameter < 0) $parameter = 0;
			$message = str_replace("&1",$parameter,ADMIN_OLD_GALAXIES);

			$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			if ($timezone[0] > 0) {
				$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
			} else {
				$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
			}

			$time = date("y-m-d H:i:s",time() - 86400 * $parameter + $timezone);

			$query = "SELECT galaxy, system FROM $this->systemtablename WHERE last_update < :time";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":time", $time);
			$res = $this->execute($stmt);
			if ($res === false) return false;
			
			if ($stmt->rowCount() > 0) {
				$query = "DELETE FROM $this->dbtablename WHERE ";
				while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
					$query .= " (galaxy='$line->galaxy' AND system='$line->system') OR ";
				}
				$query = substr($query, 0, strlen($query) - 4); // remove " OR "
				$res = $this->exec($query);
				if ($res === false) return false;
	
				$query = "DELETE FROM $this->systemtablename WHERE last_update < :time";
				$stmt = DB::getDB()->prepare($query);
				$stmt->bindParam(":time", $time);
				$results = $this->execute($stmt);
				if ($results === false) return false;
			} else {
				$results = 0;
			}
			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_NOTBD));
			}


		}

		if ($old_activities != null && is_numeric($old_activities)) {
			// Remove player activities older than x days
			$parameter = intval($old_activities);
			if ($parameter < 0) $parameter = 0;
			$message = str_replace("&1",$parameter,ADMIN_OLD_ACTIVITIES);

			$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			if ($timezone[0] > 0) {
				$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
			} else {
				$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
			}

			$date = date("y-m-d",time() - 86400 * $parameter + $timezone);

			$query = "DELETE FROM $this->player_activity WHERE activity_date < :activity_date";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":activity_date", $date);
			$results = $this->execute($stmt);
			if ($results === false) return false;
			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_NOTBD));
			}

		}

		if ($old_combats != null && is_numeric($old_combats)) {
			// delete combat reports older than x days
			$parameter = intval($old_combats);
			$message = str_replace("&1",$parameter,ADMIN_OLD_COMBATS);

			$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			if ($timezone[0] > 0) {
				$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
			} else {
				$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
			}

			$time = date("y-m-d H:i:s",time() - 86400 * $parameter + $timezone);

			$query = "DELETE FROM $this->combatparty WHERE combat_id IN (SELECT id FROM $this->combattable WHERE combattime < :time)";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":time", $time);
			$results = $this->execute($stmt);
			if ($results === false) return false;
			if ($results > 0) {
				$query = "DELETE FROM $this->combattable WHERE combattime < '$time'";
				$results = $this->exec($query);
				if ($results === false) return false;
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_NOTBD));
			}
		}

		if ($old_messages != null && is_numeric($old_messages)) {
			// delete ingame messages older than x days
			$parameter = intval($old_messages);
			$message = str_replace("&1",$parameter,ADMIN_OLD_INGAME_MSG);

			$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			if ($timezone[0] > 0) {
				$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
			} else {
				$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
			}

			$time = date("y-m-d H:i:s",time() - 86400 * $parameter + $timezone);

			$query = "DELETE FROM $this->messagetable WHERE messagetime < '$time'";
			$results = $this->exec($query);
			if ($results === false) return false;
			if ($results > 0) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_DONE." ($results)"));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, $message . " : ". ADMIN_NOTBD));
			}
		}

		return true;
	}


}