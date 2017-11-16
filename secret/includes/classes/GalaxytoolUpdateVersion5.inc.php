<?php
class GalaxytoolUpdateVersion5 extends GenericSuperclass {

	private $old_version = null;
	private $update4_obj = null;

	private $dbtablename     = null;
	private $systemtablename = null;
	private $utablename      = null;
	private $playertable     = null;
	private $allytable       = null;
	private $noticetable     = null;
	private $reporttable     = null;
	private $iptablename     = null;
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
	private $dbprefix        = null;

	public function __construct($old_version,
		$dbtablename, $systemtablename, $utablename, $playertable, $allytable, $noticetable, $reporttable,
	 	$iptablename, $shouttable, $allyhistory, $playerhistory, $fleetmovetable,
	 	$player_activity, $messagetable, $combattable, $combatparty, $reportarchive,
	 	$formtable, $dbprefix) {

		parent::__construct();

		// check old version
		$this->old_version = null;
		switch ($old_version) {
			case "4.6": $this->old_version = 460; break;
			case "4.7": $this->old_version = 470; break;
			case "4.8": $this->old_version = 480; break;
			case "4.9": $this->old_version = 490; break;
			case "5.0": $this->old_version = 500; break;
			default: throw new InvalidArgumentException();
		}
		if ($this->old_version == null) {
			throw new InvalidArgumentException("Unsupported old version: ".strip_tags($old_version)." provided");
		}

		//  check table names (include prefix if prefix is defined!) - method throws exception on error
		$this->dbtablename     = (GalaxytoolUpdateVersion5::isValidIdentifier($dbtablename)) ? $dbtablename : null;
		$this->systemtablename = (GalaxytoolUpdateVersion5::isValidIdentifier($systemtablename)) ? $systemtablename : null;
		$this->utablename      = (GalaxytoolUpdateVersion5::isValidIdentifier($utablename)) ? $utablename : null;
		$this->playertable     = (GalaxytoolUpdateVersion5::isValidIdentifier($playertable)) ? $playertable : null;
		$this->allytable       = (GalaxytoolUpdateVersion5::isValidIdentifier($allytable)) ? $allytable : null;
		$this->noticetable     = (GalaxytoolUpdateVersion5::isValidIdentifier($noticetable)) ? $noticetable : null;
		$this->reporttable     = (GalaxytoolUpdateVersion5::isValidIdentifier($reporttable)) ? $reporttable : null;
		$this->iptablename     = (GalaxytoolUpdateVersion5::isValidIdentifier($iptablename)) ? $iptablename : null;
		$this->shouttable      = (GalaxytoolUpdateVersion5::isValidIdentifier($shouttable)) ? $shouttable : null;
		$this->allyhistory     = (GalaxytoolUpdateVersion5::isValidIdentifier($allyhistory)) ? $allyhistory : null;
		$this->playerhistory   = (GalaxytoolUpdateVersion5::isValidIdentifier($playerhistory)) ? $playerhistory : null;
		$this->fleetmovetable  = (GalaxytoolUpdateVersion5::isValidIdentifier($fleetmovetable)) ? $fleetmovetable : null;
		$this->player_activity = (GalaxytoolUpdateVersion5::isValidIdentifier($player_activity)) ? $player_activity : null;
		$this->messagetable    = (GalaxytoolUpdateVersion5::isValidIdentifier($messagetable)) ? $messagetable : null;
		$this->combattable     = (GalaxytoolUpdateVersion5::isValidIdentifier($combattable)) ? $combattable : null;
		$this->combatparty     = (GalaxytoolUpdateVersion5::isValidIdentifier($combatparty)) ? $combatparty : null;
		$this->reportarchive   = (GalaxytoolUpdateVersion5::isValidIdentifier($reportarchive)) ? $reportarchive : null;
		$this->formtable       = (GalaxytoolUpdateVersion5::isValidIdentifier($formtable)) ? $formtable : null;
		$this->dbprefix        = (GalaxytoolUpdateVersion5::isValidIdentifier($dbprefix . "_reports_ai")) ? $dbprefix : null; // verify with one trigger

		if ($this->old_version < 490) {
			$this->update4_obj = new GalaxytoolUpdateVersion4($dbtablename,
								$utablename, $playertable, $allytable, $noticetable, $reporttable,
	 							$iptablename, $shouttable, $allyhistory, $playerhistory, $fleetmovetable,
	 							$player_activity, $messagetable, $combattable, $combatparty, $reportarchive, $dbprefix);
		}
	}

	public function perform_update() {
		$message = str_replace("&1",VERSION, UPDATE_START);
		$this->error_object = new ErrorObject(ErrorObject::severity_info, $message);
		if ($this->old_version < 490) {
			if ($this->old_version <= 460) {
				$result = $this->update4_obj->update_to_4_7();
				if (!$result) {
					$this->error_object = $this->update4_obj->get_error_object();
					return false;
				}
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, "4.7 ".UPDATE_STEP_DONE));
			}
			if ($this->old_version <= 470) {
				$result = $this->update4_obj->update_to_4_8();
				if (!$result) {
					$this->error_object = $this->update4_obj->get_error_object();
					return false;
				}
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, "4.8 ".UPDATE_STEP_DONE));
			}
			if ($this->old_version <= 480) {
				$result = $this->update4_obj->update_to_4_9();
				if (!$result) {
					$this->error_object = $this->update4_obj->get_error_object();
					return false;
				}
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, "4.9 ".UPDATE_STEP_DONE));
			}
		}
		if ($this->old_version <= 490) {
			$messages = clone $this->error_object;
			$result = $this->update_to_5_0();
			if (!$result) {
				return false;
			}
			unset($this->error_object);
			$this->error_object = $messages; // we don't want to show all single "done" entries
			unset($messages);
			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, "5.0 ".UPDATE_STEP_DONE));
		}

		return true;
	}


	private function update_to_5_0() {

		// convert all char and text content to utf8 if mysql connection was not using utf8
		if (strpos($_SESSION['mysql_collation_connection'], "utf8") === false) {
			$res = $this->convertToUTF8($this->dbtablename, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->utablename, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->playertable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->allytable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->noticetable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->reporttable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->iptablename, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->shouttable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->allyhistory, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->playerhistory, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->fleetmovetable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			// player activity table does not contain char or text fields
			$res = $this->convertToUTF8($this->combattable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->combatparty, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->reportarchive, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
			$res = $this->convertToUTF8($this->messagetable, $_SESSION['mysql_collation_connection'], $_SESSION['character_set_server']);
			if (!$res) return false;
		}

		// just to ensure that from now on we have utf8 connection
		$res = $this->exec("SET NAMES 'utf8';");
		if ($res === false) return false;
		$res = $this->exec("SET CHARACTER SET 'utf8';");
		if ($res === false) return false;
		$res = $this->exec("SET SESSION collation_connection = 'utf8_general_ci';");
		if ($res === false) return false;

		$query = "ALTER TABLE $this->playertable ADD `outlaw` ENUM( 'true', 'false' ) NOT NULL DEFAULT 'false' AFTER `long_inactive`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->playertable ADD `ships` int(11) unsigned NOT NULL DEFAULT '0' AFTER `flpoints`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->playertable ADD `bandit` ENUM( 'true', 'false' ) NOT NULL DEFAULT 'false' AFTER `outlaw`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->utablename ADD `bb_outlaw` VARCHAR( 25 ) NOT NULL DEFAULT 'FF33FF' AFTER `bb_longinactive`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "CREATE TABLE $this->formtable (
				  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
				  `form_id` varchar(30) NOT NULL,
				  `save_id` varchar(30) NOT NULL,
				  `user_id` smallint(10) unsigned NOT NULL,
				  `content` text NOT NULL,
				  PRIMARY KEY (`id`),
				  UNIQUE KEY `user_id` (`user_id`,`form_id`,`save_id`)
				) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "CREATE TABLE $this->systemtablename (
				  `galaxy` int(2) unsigned NOT NULL,
				  `system` int(2) unsigned NOT NULL,
				  `last_update` datetime NOT NULL,
				  `user_id` smallint(5) unsigned NOT NULL DEFAULT '0',
				  PRIMARY KEY (`galaxy`,`system`),
				  KEY `user_id` (`user_id`)
				) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->utablename DROP `session_save`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->utablename DROP `new_password";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->utablename ADD `password_salt` VARCHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL AFTER `userpass`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// give a new salt to all user and create new hash value for password
		// initial salt definition via query: get 10 random character from new md5 of random substring of current md5 password hash
		$query = "UPDATE $this->utablename SET password_salt = SUBSTRING(md5(SUBSTRING(userpass, FLOOR(1 + (RAND() * 9)) , FLOOR(10 + (RAND() * 10)) )), FLOOR(1 + (RAND() * 9)) , 10 )";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// new password = md5( concat ( salt + password hash + md5( salt) )
		$query = "UPDATE $this->utablename set userpass=md5( CONCAT( password_salt, userpass, md5(password_salt)))";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// change report scandepth to numeric value
		$query = "ALTER TABLE $this->reporttable ADD `scandepth` TINYINT UNSIGNED NOT NULL DEFAULT '1' AFTER `scanned`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reporttable SET scandepth=2 WHERE scanned='fleet'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reporttable SET scandepth=3 WHERE scanned='defence'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reporttable SET scandepth=4 WHERE scanned='buildings'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reporttable SET scandepth=5 WHERE scanned='research'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		// rest is 1 by default
		$query = "ALTER TABLE $this->reporttable DROP `scanned`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->reporttable CHANGE `scandepth` `scanned` TINYINT( 3 ) UNSIGNED NOT NULL DEFAULT '1'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// same for report archive
		$query = "ALTER TABLE $this->reportarchive ADD `scandepth` TINYINT UNSIGNED NOT NULL DEFAULT '1' AFTER `scanned`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reportarchive SET scandepth=2 WHERE scanned='fleet'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reportarchive SET scandepth=3 WHERE scanned='defence'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reportarchive SET scandepth=4 WHERE scanned='buildings'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->reportarchive SET scandepth=5 WHERE scanned='research'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		// rest is 1 by default
		$query = "ALTER TABLE $this->reportarchive DROP `scanned`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->reportarchive CHANGE `scandepth` `scanned` TINYINT( 3 ) UNSIGNED NOT NULL DEFAULT '1'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// remove obsolete index
		$query = "ALTER TABLE $this->dbtablename DROP INDEX `moon`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->dbtablename DROP INDEX `last_update`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->dbtablename DROP INDEX `crystal`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->dbtablename DROP INDEX `metal`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->dbtablename DROP INDEX `user_id`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// new systems table
		$query = "INSERT INTO $this->systemtablename (galaxy, system, last_update, user_id) SELECT galaxy, system, last_update, user_id FROM $this->dbtablename WHERE planet=1";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->dbtablename DROP `last_update`, DROP `user_id`;";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "DELETE FROM $this->dbtablename WHERE planetname='' AND metal=0 AND crystal=0";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));


		$query = "ALTER TABLE $this->utablename ADD `ogame_allyid` INT( 11 ) UNSIGNED NULL DEFAULT NULL AFTER `ogame_playerid`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->utablename CHANGE `ogame_playerid` `ogame_playerid` INT( 11 ) UNSIGNED NULL DEFAULT NULL";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->utablename SET `ogame_playerid` = NULL WHERE ogame_playerid = 0";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->playertable p, $this->utablename u SET u.ogame_playerid=p.ogame_playerid WHERE p.playername = u.ingame";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "UPDATE $this->allytable a, $this->utablename u SET u.ogame_allyid=a.ogame_allyid WHERE a.allyname = u.allytag";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->utablename  DROP `ingame`,   DROP `allytag`;";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->utablename DROP INDEX ogame_playerid";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// change galaxy table player reference to ogame playerid
		$query = "ALTER TABLE $this->dbtablename CHANGE `player_id` `ogame_playerid` INT( 11 ) UNSIGNED NOT NULL";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		// set ogame_playerid entries accordingly based on old value and players table
		$query = "UPDATE $this->dbtablename g, $this->playertable p SET g.ogame_playerid=p.ogame_playerid WHERE p.id=g.ogame_playerid";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));


		$query ="DROP TRIGGER IF EXISTS ".$this->dbprefix."reports_ai";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="CREATE TRIGGER ".$this->dbprefix."reports_ai AFTER INSERT ON $this->reporttable
		  FOR EACH ROW BEGIN
		   IF NEW.scanned = 5 OR NEW.computech > 0 OR NEW.energytech > 0 THEN
		    UPDATE $this->playertable SET
		     spiolvl = NEW.spiolvl,
		     computech = NEW.computech,
		     waffentech = NEW.waffentech,
		     schildtech = NEW.schildtech,
		     rpz = NEW.rpz,
		     energytech = NEW.energytech,
		     hypertech = NEW.hypertech,
		     vbt=NEW.vbt,
		     impulse = NEW.impulse,
		     hra=NEW.hra,
		     lasertech = NEW.lasertech,
		     iontech = NEW.iontech,
		     plasmatech = NEW.plasmatech,
		     forschungsnetz = NEW.forschungsnetz,
		     expedition = NEW.expedition,
		     gravi = NEW.gravi,
		     last_tech_update = NOW()
		     WHERE ogame_playerid = (SELECT g.ogame_playerid FROM $this->dbtablename g WHERE g.galaxy=NEW.galaxy AND g.system=NEW.system AND g.planet=NEW.planet);
		  END IF;

		  IF NEW.msg_id > 0 THEN
		    INSERT IGNORE INTO $this->reportarchive SET
		    galaxy = NEW.galaxy,
		    system = NEW.system,
		    planet = NEW.planet,
		    moon = NEW.moon,
		    msg_id = NEW.msg_id,
		    metal = NEW.metal,
		    crystal = NEW.crystal,
		    deuterium = NEW.deuterium,
		    energy = NEW.energy,
		    scantime = NEW.scantime,
		    scanned = NEW.scanned,

		    kt = NEW.kt,
		    gt = NEW.gt,
		    lj = NEW.lj,
		    sj = NEW.sj,
		    krz = NEW.krz,
		    ss = NEW.ss,
		    kolo = NEW.kolo,
		    rec = NEW.rec,
		    spio = NEW.spio,
		    bomb = NEW.bomb,
		    zerri = NEW.zerri,
		    ds = NEW.ds,
		    skrz = NEW.skrz,
		    sat = NEW.sat,

		    rak = NEW.rak,
		    ll = NEW.ll,
		    sl = NEW.sl,
		    ion = NEW.ion,
		    gauss = NEW.gauss,
		    plasma = NEW.plasma,
		    ksk = NEW.ksk,
		    gsk = NEW.gsk,
		    arak = NEW.arak,
		    irak = NEW.irak,

		    memi = NEW.memi,
		    krimi = NEW.krimi,
		    deutsyn = NEW.deutsyn,
		    solar = NEW.solar,
		    fusion = NEW.fusion,
		    robo = NEW.robo,
		    nani = NEW.nani,
		    rawe = NEW.rawe,
		    mesp = NEW.mesp,
		    krissp = NEW.krissp,
		    deutsp = NEW.deutsp,
		    folab = NEW.folab,
		    terra = NEW.terra,
		    allydep = NEW.allydep,
		    raksilo = NEW.raksilo,
		    mbase = NEW.mbase,
		    sensor = NEW.sensor,
		    sprungtor = NEW.sprungtor,

		    spiolvl = NEW.spiolvl,
		    computech = NEW.computech,
		    waffentech = NEW.waffentech,
		    schildtech = NEW.schildtech,
		    rpz = NEW.rpz,
		    energytech = NEW.energytech,
		    hypertech = NEW.hypertech,
		    vbt = NEW.vbt,
		    impulse = NEW.impulse,
		    hra = NEW.hra,
		    lasertech = NEW.lasertech,
		    iontech = NEW.iontech,
		    plasmatech = NEW.plasmatech,
		    forschungsnetz = NEW.forschungsnetz,
		    expedition = NEW.expedition,
		    gravi = NEW.gravi;

		  END IF;
		END";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="DROP TRIGGER IF EXISTS ".$this->dbprefix."reports_au";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="CREATE TRIGGER ".$this->dbprefix."reports_au AFTER UPDATE ON $this->reporttable
	 FOR EACH ROW BEGIN
	 	IF NEW.scanned = 5 OR NEW.computech > 0 OR NEW.energytech > 0 THEN
		    UPDATE $this->playertable SET
		     spiolvl = NEW.spiolvl,
		     computech = NEW.computech,
		     waffentech = NEW.waffentech,
		     schildtech = NEW.schildtech,
		     rpz = NEW.rpz,
		     energytech = NEW.energytech,
		     hypertech = NEW.hypertech,
		     vbt=NEW.vbt,
		     impulse = NEW.impulse,
		     hra=NEW.hra,
		     lasertech = NEW.lasertech,
		     iontech = NEW.iontech,
		     plasmatech = NEW.plasmatech,
		     forschungsnetz = NEW.forschungsnetz,
		     expedition = NEW.expedition,
		     gravi = NEW.gravi,
		     last_tech_update = NOW()
		     WHERE ogame_playerid = (SELECT g.ogame_playerid FROM $this->dbtablename g WHERE g.galaxy=NEW.galaxy AND g.system=NEW.system AND g.planet=NEW.planet);
		END IF;

		IF NEW.msg_id > 0 THEN
		INSERT IGNORE INTO $this->reportarchive SET
		galaxy = NEW.galaxy,
		system = NEW.system,
		planet = NEW.planet,
		moon = NEW.moon,
		msg_id = NEW.msg_id,
		metal = NEW.metal,
		crystal = NEW.crystal,
		deuterium = NEW.deuterium,
		energy = NEW.energy,
		scantime = NEW.scantime,
		scanned = NEW.scanned,

		kt = NEW.kt,
		gt = NEW.gt,
		lj = NEW.lj,
		sj = NEW.sj,
		krz = NEW.krz,
		ss = NEW.ss,
		kolo = NEW.kolo,
		rec = NEW.rec,
		spio = NEW.spio,
		bomb = NEW.bomb,
		zerri = NEW.zerri,
		ds = NEW.ds,
		skrz = NEW.skrz,
		sat = NEW.sat,

		rak = NEW.rak,
		ll = NEW.ll,
		sl = NEW.sl,
		ion = NEW.ion,
		gauss = NEW.gauss,
		plasma = NEW.plasma,
		ksk = NEW.ksk,
		gsk = NEW.gsk,
		arak = NEW.arak,
		irak = NEW.irak,

		memi = NEW.memi,
		krimi = NEW.krimi,
		deutsyn = NEW.deutsyn,
		solar = NEW.solar,
		fusion = NEW.fusion,
		robo = NEW.robo,
		nani = NEW.nani,
		rawe = NEW.rawe,
		mesp = NEW.mesp,
		krissp = NEW.krissp,
		deutsp = NEW.deutsp,
		folab = NEW.folab,
		terra = NEW.terra,
		allydep = NEW.allydep,
		raksilo = NEW.raksilo,
		mbase = NEW.mbase,
		sensor = NEW.sensor,
		sprungtor = NEW.sprungtor,

		spiolvl = NEW.spiolvl,
		computech = NEW.computech,
		waffentech = NEW.waffentech,
		schildtech = NEW.schildtech,
		rpz = NEW.rpz,
		energytech = NEW.energytech,
		hypertech = NEW.hypertech,
		vbt = NEW.vbt,
		impulse = NEW.impulse,
		hra = NEW.hra,
		lasertech = NEW.lasertech,
		iontech = NEW.iontech,
		plasmatech = NEW.plasmatech,
		forschungsnetz = NEW.forschungsnetz,
		expedition = NEW.expedition,
		gravi = NEW.gravi;

		END IF;
	  END";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, "should not be visible if everything runs fine!"));


		return true;

	}

	private function convertToUTF8($tablename, $source_type, $source_charset) {

		$res = $this->exec("SET SESSION collation_connection = ".DB::getDB()->quote($source_type).";");
		if ($res === false) return false;
		$res = $this->exec("SET CHARACTER SET ".DB::getDB()->quote($source_charset).";");
		if ($res === false) return false;
		$res = $this->exec("SET NAMES ".DB::getDB()->quote($source_charset).";");
		if ($res === false) return false;

		$tablename = DB::getDB()->quote($tablename);
		$query = "SHOW COLUMNS FROM $tablename";
		$stmt = $this->query($query);
		if (!$stmt) return false;


		$columns = array();
		$primary = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ((strpos(strtoupper($line->Type), "CHAR") !== false) || // CHAR and VARCHAR
				(strpos(strtoupper($line->Type), "TEXT") !== false)) {

				array_push($columns, $line->Field);
			}
			if (strtoupper($line->Key) == "PRI") {
				array_push($primary, $line->Field); // collect all fields that belong to primary key - they are always numeric
			}

		}
		if (count($columns) == 0) return true; // no char or text columns in this table

		$query = "SELECT ";
		$query .= implode(",",$columns); // requested attributes
		$query .= ",".implode(",",$primary); // primary key
		$query .= " FROM $tablename";
		$stmt = $this->query($query);
		if (!$stmt) return false;

		$res2 = $this->exec("SET SESSION collation_connection = 'utf8_general_ci';");
		if ($res2 === false) return false;
		$res2 = $this->exec("SET CHARACTER SET 'utf8';");
		if ($res2 === false) return false;
		$res2 = $this->exec("SET NAMES 'utf8';");
		if ($res2 === false) return false;

		if ($tablename == $this->utablename) {
			// we must use single updates here as username and token are unique attributes where ON DUPLICATE KEY UPDATE may fail
			while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$update_query = "UPDATE $tablename SET ";
				foreach ($columns as $column) {
					if ($line[$column] == null) {
						$update_query .= $column."=null,";
					} else {
						$update_query .= $column."=".DB::getDB()->quote($line[$column]).",";
					}
				}
				$update_query = substr($update_query, 0, strlen($update_query)-1); // remove comma
				$update_query .= " WHERE ";
				foreach ($primary as $column) {
					$update_query .= $column."=".DB::getDB()->quote($line[$column])." AND ";
				}
				$update_query = substr($update_query, 0, strlen($update_query)-5); // remove AND

				$res = $this->exec($update_query);
				if ($res === false) return false;
			}
		} else {
			$update_query_start = "INSERT INTO $tablename (";
			$update_query_end = " ON DUPLICATE KEY UPDATE ";
			foreach ($columns as $column) {
				$update_query_start .= $column.",";
				$update_query_end .= $column."=VALUES($column),";
			}
			foreach ($primary as $column) {
				$update_query_start .= $column.",";
			}
			$update_query_start = substr($update_query_start, 0, strlen($update_query_start)-1); // remove comma
			$update_query_start .= ") VALUES ";
			$update_query_end = substr($update_query_end, 0, strlen($update_query_end)-1); // remove comma

			$rows = $stmt->rowCount();
			$processed = 0;
			$keys = count($primary);

			if ($rows == 0) return true; // nothing to convert - e.g. notices
			while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
				if ($processed == 0) {
					$update_query = "";
				} elseif ($processed % 200 == 0) {
					// paging - submit query
					// remove last comma
					$update_query = substr($update_query, 0, strlen($update_query)-1);
					$res2 = $this->exec($update_query_start . $update_query . $update_query_end);
					if ($res2 === false) return false;
					$update_query = "";
				}

				$processed++;
				$update_query .= "(";
				foreach ($columns as $column) {
					$update_query .= "".DB::getDB()->quote($line[$column]).",";
				}
				for ($i=0;$i<$keys;$i++) {
					$update_query .= "".DB::getDB()->quote($line[$primary[$i]]);
					if ($i < $keys-1) $update_query .= ","; // no comma at last entry
				}
				$update_query .= ")";
				if ($processed < $rows) $update_query .= ","; // no comma at last entry
			}

			if ($update_query != "") {
				// final entries
				$res2 = $this->exec($update_query_start . $update_query . $update_query_end);
				if ($res2 === false) return false;
			}
		}

		return true;
	}

	private static function isValidIdentifier($identifier){
        if (preg_match("#^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$#i", $identifier)) return true;
        throw new InvalidArgumentException("Invalid table name identifier provided: ".$identifier);
    }
}