<?php

class GalaxytoolUpdateVersion4 extends GenericSuperclass {

	private $dbtablename = null;
	private $utablename = null;
	private $playertable = null;
	private $allytable = null;
	private $noticetable = null;
	private $reporttable = null;
	private $iptablename = null;
	private $shouttable = null;
	private $allyhistory = null;
	private $playerhistory = null;
	private $fleetmovetable = null;
	private $player_activity = null;
	private $messagetable = null;
	private $combattable = null;
	private $combatparty = null;
	private $reportarchive = null;
	private $dbprefix = null;


	public function __construct(
		$dbtablename, $utablename, $playertable, $allytable, $noticetable, $reporttable,
	 	$iptablename, $shouttable, $allyhistory, $playerhistory, $fleetmovetable,
	 	$player_activity, $messagetable, $combattable, $combatparty, $reportarchive,
	 	$dbprefix) {

		parent::__construct();

		$this->dbtablename     = $dbtablename;
		$this->utablename      = $utablename;
		$this->playertable     = $playertable;
		$this->allytable       = $allytable;
		$this->noticetable     = $noticetable;
		$this->reporttable     = $reporttable;
		$this->iptablename     = $iptablename;
		$this->shouttable      = $shouttable;
		$this->allyhistory     = $allyhistory;
		$this->playerhistory   = $playerhistory;
		$this->fleetmovetable  = $fleetmovetable;
		$this->player_activity = $player_activity;
		$this->messagetable    = $messagetable;
		$this->combattable     = $combattable;
		$this->combatparty     = $combatparty;
		$this->reportarchive   = $reportarchive;
		$this->dbprefix        = $dbprefix;
	}



	public function update_to_4_7() { // update from 4.6 to 4.7
		$message = str_replace("&1","4.6", UPDATE_START);
		$message = str_replace("&2","4.7", $message);
		$this->error_object = new ErrorObject(ErrorObject::severity_info, $message);
		// update user table
		$query = "ALTER TABLE $this->utablename ADD ogame_offset VARCHAR( 6 ) NOT NULL DEFAULT '+00:00' AFTER timezone_offset";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->utablename ADD candelete ENUM( 'true', 'false' ) NOT NULL default 'false' AFTER caninsert";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->utablename ADD fleetinfo ENUM( 'true', 'false' ) NOT NULL default 'false' AFTER diplomatic, ".
				 " ADD activities ENUM( 'true', 'false' ) NOT NULL default 'false' AFTER fleetinfo, ".
				 " ADD maintenance ENUM( 'true', 'false' ) NOT NULL default 'false' AFTER fleetinfo";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "UPDATE $this->utablename SET candelete = 'true', fleetinfo = 'true', activities = 'true', maintenance = 'true' WHERE is_admin = 'true'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// update report table
		$query = "ALTER TABLE $this->reporttable ADD msg_id INT( 10 ) NULL DEFAULT NULL AFTER moon";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->reporttable ADD INDEX ( msg_id )";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// fleet movements table
		$query = "CREATE TABLE $this->fleetmovetable (
					fleet_id int(10) unsigned NOT NULL,
					sub_fleet_id int(10) unsigned default NULL,
	  				mission enum('expedition','colonization','recycle','transport','deployment','espionage','acs_defend','attack','acs_attack','moon_destruction','missile_attack') NOT NULL,
					arrival_time datetime NOT NULL default '0000-00-00 00:00:00',
					returning enum('true','false'),
					origin_galaxy int(2) NOT NULL default '0',
					origin_system int(3) NOT NULL default '0',
					origin_planet int(2) NOT NULL default '0',
					origin_planetname varchar(40) NOT NULL default '',
					origin_moon enum('true','false','unknown'),
					destination_galaxy int(2) NOT NULL default '0',
					destination_system int(3) NOT NULL default '0',
					destination_planet int(2) NOT NULL default '0',
				    destination_planetname varchar(40) NOT NULL default '',
				    destination_moon enum('true','false','unknown'),
	  				scantime datetime NOT NULL default '0000-00-00 00:00:00',
				  	metal int(10) unsigned NOT NULL default '0',
				  	crystal int(10) unsigned NOT NULL default '0',
				  	deuterium int(10) unsigned NOT NULL default '0',
	  				user_id smallint(5) unsigned NOT NULL default '0',
					kt mediumint(8) unsigned NOT NULL default '0',
					gt mediumint(8) unsigned NOT NULL default '0',
					lj mediumint(8) unsigned NOT NULL default '0',
					sj mediumint(8) unsigned NOT NULL default '0',
					krz mediumint(8) unsigned NOT NULL default '0',
					ss mediumint(8) unsigned NOT NULL default '0',
					kolo mediumint(8) unsigned NOT NULL default '0',
					rec mediumint(8) unsigned NOT NULL default '0',
					spio mediumint(8) unsigned NOT NULL default '0',
					bomb mediumint(8) unsigned NOT NULL default '0',
					zerri mediumint(8) unsigned NOT NULL default '0',
					ds mediumint(8) unsigned NOT NULL default '0',
					skrz mediumint(8) unsigned NOT NULL default '0',
					irak mediumint(8) unsigned NOT NULL default '0',
					PRIMARY KEY (fleet_id, sub_fleet_id),
					KEY origin (origin_galaxy,origin_system,origin_planet),
					KEY (arrival_time)
			      ) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// player activity table
		$query = "CREATE TABLE $this->player_activity (
					id int(10) unsigned NOT NULL auto_increment,
		            player_id int(10) unsigned NOT NULL default '0',
					activity_date date NOT NULL default '0000-00-00',
		            hour tinyint(3) unsigned NOT NULL default '0',
		            minute tinyint(3) unsigned NOT NULL default '0',
		            weekday tinyint(3) unsigned NOT NULL default '0',
		            activity_type enum('galaxyview', 'scan', 'message', 'manual', 'combat_report', 'alliance_page') NOT NULL,

		            PRIMARY KEY (id),
					UNIQUE KEY consistency (player_id, activity_date, hour, minute, activity_type)
		      	) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));


			// ingame message table
		$query = "CREATE TABLE $this->messagetable (
					id int(10) unsigned NOT NULL auto_increment,
		            msg_id int(10) unsigned NOT NULL,
		            messagetime datetime NOT NULL default '0000-00-00 00:00:00',
		            subject varchar(255) NOT NULL default '',
		            player_id_from int(10) unsigned NOT NULL default '0',
		            player_id_to int(10) unsigned NOT NULL default '0',
					message_content TEXT NOT NULL,
		            userid smallint(5) unsigned NOT NULL default '0',
					PRIMARY KEY (id),
					KEY msg_id (msg_id),
					KEY userid (userid)
			      ) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));


			// combat table
		$query = "CREATE TABLE $this->combattable (
					id int(10) unsigned NOT NULL auto_increment,
		            msg_id int(10) unsigned NOT NULL,
		            combattime datetime NOT NULL default '0000-00-00 00:00:00',
		            winner enum('attacker','defender','nobody') NOT NULL,
		            loot_metal int(10) unsigned,
			  		loot_crystal int(10) unsigned,
			  		loot_deuterium int(10) unsigned,
		            debris_metal int(10) unsigned,
			  		debris_crystal int(10) unsigned,
			  		public enum('true','false') default 'false',
			  		userid smallint(5) unsigned NOT NULL default '0',
					PRIMARY KEY (id),
					KEY msg_id (msg_id),
					KEY userid (userid)
			      ) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));


			// combat party table
		$query = "CREATE TABLE $this->combatparty (
					id int(10) unsigned NOT NULL auto_increment,
					combat_id int(10) unsigned NOT NULL,
					combat_type enum('attacker','defender') NOT NULL,
					player_id int(10) unsigned,
			  		galaxy int(2) unsigned NOT NULL,
			  		system int(3) unsigned NOT NULL,
			  		planet int(2) unsigned NOT NULL,
			  		waffentech tinyint(3) unsigned,
			  		schildtech tinyint(3) unsigned,
			  		rpz tinyint(3) unsigned,
			  		lost_units bigint(20) unsigned DEFAULT NULL,
			  		attack_location enum('true','false') NOT NULL DEFAULT 'false',
					PRIMARY KEY (id),
					KEY combat_id (combat_id),
					KEY player_id (player_id)
			      ) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));


		return true;
	}

	public function update_to_4_8() { // update from 4.7 to 4.8
		$message = str_replace("&1","4.7", UPDATE_START);
		$message = str_replace("&2","4.8", $message);
		$this->error_object = new ErrorObject(ErrorObject::severity_info, $message);

		// add reportarchive table
		$query = "CREATE TABLE $this->reportarchive (
			  id int(10) unsigned NOT NULL AUTO_INCREMENT,
			  galaxy int(2) unsigned DEFAULT NULL,
			  system int(3) unsigned DEFAULT NULL,
			  planet int(2) unsigned DEFAULT NULL,
			  moon enum('true','false') DEFAULT 'false',
			  msg_id int(10) unsigned DEFAULT NULL,
			  metal int(10) unsigned NOT NULL DEFAULT '0',
			  crystal int(10) unsigned NOT NULL DEFAULT '0',
			  deuterium int(10) unsigned NOT NULL DEFAULT '0',
			  energy int(10) unsigned NOT NULL DEFAULT '0',
			  kt mediumint(8) unsigned NOT NULL DEFAULT '0',
			  gt mediumint(8) unsigned NOT NULL DEFAULT '0',
			  lj mediumint(8) unsigned NOT NULL DEFAULT '0',
			  sj mediumint(8) unsigned NOT NULL DEFAULT '0',
			  krz mediumint(8) unsigned NOT NULL DEFAULT '0',
			  ss mediumint(8) unsigned NOT NULL DEFAULT '0',
			  kolo mediumint(8) unsigned NOT NULL DEFAULT '0',
			  rec mediumint(8) unsigned NOT NULL DEFAULT '0',
			  spio mediumint(8) unsigned NOT NULL DEFAULT '0',
			  bomb mediumint(8) unsigned NOT NULL DEFAULT '0',
			  zerri mediumint(8) unsigned NOT NULL DEFAULT '0',
			  ds mediumint(8) unsigned NOT NULL DEFAULT '0',
			  skrz mediumint(8) unsigned NOT NULL DEFAULT '0',
			  sat mediumint(8) unsigned NOT NULL DEFAULT '0',
			  rak mediumint(8) unsigned NOT NULL DEFAULT '0',
			  ll mediumint(8) unsigned NOT NULL DEFAULT '0',
			  sl mediumint(8) unsigned NOT NULL DEFAULT '0',
			  ion mediumint(8) unsigned NOT NULL DEFAULT '0',
			  gauss mediumint(8) unsigned NOT NULL DEFAULT '0',
			  plasma mediumint(8) unsigned NOT NULL DEFAULT '0',
			  ksk mediumint(8) unsigned NOT NULL DEFAULT '0',
			  gsk mediumint(8) unsigned NOT NULL DEFAULT '0',
			  arak mediumint(8) unsigned NOT NULL DEFAULT '0',
			  irak mediumint(8) unsigned NOT NULL DEFAULT '0',
			  memi tinyint(3) unsigned NOT NULL DEFAULT '0',
			  krimi tinyint(3) unsigned NOT NULL DEFAULT '0',
			  deutsyn tinyint(3) unsigned NOT NULL DEFAULT '0',
			  solar tinyint(3) unsigned NOT NULL DEFAULT '0',
			  fusion tinyint(3) unsigned NOT NULL DEFAULT '0',
			  robo tinyint(3) unsigned NOT NULL DEFAULT '0',
			  nani tinyint(3) unsigned NOT NULL DEFAULT '0',
			  rawe tinyint(3) unsigned NOT NULL DEFAULT '0',
			  mesp tinyint(3) unsigned NOT NULL DEFAULT '0',
			  krissp tinyint(3) unsigned NOT NULL DEFAULT '0',
			  deutsp tinyint(3) unsigned NOT NULL DEFAULT '0',
			  folab tinyint(3) unsigned NOT NULL DEFAULT '0',
			  terra tinyint(3) unsigned NOT NULL DEFAULT '0',
			  allydep tinyint(3) unsigned NOT NULL DEFAULT '0',
			  raksilo tinyint(3) unsigned NOT NULL DEFAULT '0',
			  mbase tinyint(3) unsigned NOT NULL DEFAULT '0',
			  sensor tinyint(3) unsigned NOT NULL DEFAULT '0',
			  sprungtor tinyint(3) unsigned NOT NULL DEFAULT '0',
			  spiolvl tinyint(3) unsigned NOT NULL DEFAULT '0',
			  computech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  waffentech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  schildtech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  rpz tinyint(3) unsigned NOT NULL DEFAULT '0',
			  energytech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  hypertech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  vbt tinyint(3) unsigned NOT NULL DEFAULT '0',
			  impulse tinyint(3) unsigned NOT NULL DEFAULT '0',
			  hra tinyint(3) unsigned NOT NULL DEFAULT '0',
			  lasertech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  iontech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  plasmatech tinyint(3) unsigned NOT NULL DEFAULT '0',
			  forschungsnetz tinyint(3) unsigned NOT NULL DEFAULT '0',
			  expedition tinyint(3) unsigned NOT NULL DEFAULT '0',
			  gravi tinyint(3) unsigned NOT NULL DEFAULT '0',
			  scantime datetime DEFAULT NULL,
			  scanned enum('ressources','fleet','defence','buildings','research') NOT NULL default 'ressources',
			  PRIMARY KEY (id),
			  UNIQUE KEY msg_id (msg_id),
			  KEY coordinates (galaxy,system,planet,moon)
			) DEFAULT CHARSET=utf8";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// rename old field to new field name - install files adjusted
		$query = "ALTER TABLE $this->utablename CHANGE `statspage` `search_results` MEDIUMINT( 8 ) UNSIGNED NOT NULL DEFAULT '25'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// update all user to display 25 rows by default for search results (field was formerly used for stats rows only)
		$query = "UPDATE $this->utablename SET search_results=25";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		// add last_sumbit field to see when the last data was submited
		$query = "ALTER TABLE $this->utablename ADD last_submit date DEFAULT '0000-00-00' AFTER last_action";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// change default values for home coordinates - must not be "not null" as it was done at update.php before!
		$query = "ALTER TABLE $this->playertable
		MODIFY homegalaxy INT( 2 ) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Home coordinates',
		MODIFY homesystem INT( 3 ) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Home coordinates',
		MODIFY homeplanet INT( 2 ) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Home coordinates'";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// add new index for userinfo.php
		$query = "ALTER TABLE $this->fleetmovetable ADD INDEX ( `user_id` )";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));
		$query = "ALTER TABLE $this->dbtablename ADD INDEX ( `user_id` )";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// add new column for plugin token
		$query = "ALTER TABLE $this->utablename ADD `plugin_token` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `userpass` , ADD UNIQUE ( plugin_token )";
		$res = $this->exec($query);
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// add new column for user defined language
		$query = "ALTER TABLE $this->utablename ADD `language` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL AFTER `email`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// new column for user preferences regarding startup page
		$query = "ALTER TABLE $this->utablename ADD `getting_started` ENUM( 'expand', 'collapse', 'hidden' ) NOT NULL DEFAULT 'expand' AFTER `ogame_offset` , ADD `plugin_info` ENUM( 'expand', 'collapse', 'hidden' ) NOT NULL DEFAULT 'expand' AFTER `getting_started`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->reporttable CHANGE `scantime` `scantime` DATETIME NOT NULL";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		return true;
	}

	public function update_to_4_9() { // update from 4.8 to 4.9
		$message = str_replace("&1","4.8", UPDATE_START);
		$message = str_replace("&2","4.9", $message);
		$this->error_object = new ErrorObject(ErrorObject::severity_info, $message);

		$query = "ALTER TABLE $this->playertable ADD `erank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `rpoints` ,".
				 "ADD `epoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `erank` ,".
				 "ADD `hrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `epoints` ,".
				 "ADD `hpoints` INT NOT NULL DEFAULT '0' AFTER `hrank` ,".
				 "ADD `fbrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `hpoints` ,".
				 "ADD `fbpoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `fbrank` ,".
				 "ADD `fdrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `fbpoints` ,".
				 "ADD `fdpoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `fdrank` ,".
				 "ADD `flrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `fdpoints` ,".
				 "ADD `flpoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `flrank`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->allytable ADD `erank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `rpoints` ,".
				 "ADD `epoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `erank` ,".
				 "ADD `hrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `epoints` ,".
				 "ADD `hpoints` INT NOT NULL DEFAULT '0' AFTER `hrank` ,".
				 "ADD `fbrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `hpoints` ,".
				 "ADD `fbpoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `fbrank` ,".
				 "ADD `fdrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `fbpoints` ,".
				 "ADD `fdpoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `fdrank` ,".
				 "ADD `flrank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `fdpoints` ,".
				 "ADD `flpoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `flrank`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->playerhistory ADD `erank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `rpoints` ,".
				 "ADD `epoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `erank`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query = "ALTER TABLE $this->allyhistory ADD `erank` SMALLINT UNSIGNED NOT NULL DEFAULT '0' AFTER `rpoints` ,".
				 "ADD `epoints` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `erank`";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		// Trigger adjustments
		$query ="DROP TRIGGER IF EXISTS ".$this->dbprefix."players_ai";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="CREATE TRIGGER ".$this->dbprefix."players_ai AFTER INSERT ON $this->playertable
			FOR EACH ROW BEGIN
				INSERT INTO $this->playerhistory SET
					year = DATE_FORMAT(NOW(),'%Y'),
					month = DATE_FORMAT(NOW(),'%m'),
					day = DATE_FORMAT(NOW(),'%e'),
					player_id = NEW.id,
					alliance_id = NEW.alliance_id,
					rank = NEW.rank,
					points = NEW.points,
					frank = NEW.frank,
					fpoints = NEW.fpoints,
			    	rrank = NEW.rrank,
			    	rpoints = NEW.rpoints,
			    	erank = NEW.erank,
			    	epoints = NEW.epoints;
			END";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="DROP TRIGGER IF EXISTS ".$this->dbprefix."players_au";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="CREATE TRIGGER ".$this->dbprefix."players_au AFTER UPDATE ON $this->playertable
			FOR EACH ROW BEGIN
				INSERT INTO $this->playerhistory SET
					year = DATE_FORMAT(NOW(),'%Y'),
					month = DATE_FORMAT(NOW(),'%m'),
					day = DATE_FORMAT(NOW(),'%e'),
					player_id = NEW.id,
					alliance_id = NEW.alliance_id,
					rank = NEW.rank,
					points = NEW.points,
					frank = NEW.frank,
					fpoints = NEW.fpoints,
			    	rrank = NEW.rrank,
			    	rpoints = NEW.rpoints,
			    	erank = NEW.erank,
			    	epoints = NEW.epoints
			ON DUPLICATE KEY UPDATE
				rank=valueS(rank), points=VALUES(points),
				frank=valueS(frank), fpoints=VALUES(fpoints),
				rrank=valueS(rrank), rpoints=VALUES(rpoints),
				erank=valueS(erank), epoints=VALUES(epoints);
			END";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="DROP TRIGGER IF EXISTS ".$this->dbprefix."alliances_ai";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="CREATE TRIGGER ".$this->dbprefix."alliances_ai AFTER INSERT ON $this->allytable
			FOR EACH ROW BEGIN
				INSERT INTO $this->allyhistory SET
					year = DATE_FORMAT(NOW(),'%Y'),
					month = DATE_FORMAT(NOW(),'%m'),
					day = DATE_FORMAT(NOW(),'%e'),
					alliance_id = NEW.id,
					members = NEW.members,
					rank = NEW.rank,
					points = NEW.points,
					frank = NEW.frank,
					fpoints = NEW.fpoints,
			    	rrank = NEW.rrank,
			    	rpoints = NEW.rpoints,
			    	erank = NEW.erank,
			    	epoints = NEW.epoints;
			END";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="DROP TRIGGER IF EXISTS ".$this->dbprefix."alliances_au";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		$query ="CREATE TRIGGER ".$this->dbprefix."alliances_au AFTER UPDATE ON $this->allytable
			FOR EACH ROW BEGIN
				INSERT INTO $this->allyhistory SET
					year = DATE_FORMAT(NOW(),'%Y'),
					month = DATE_FORMAT(NOW(),'%m'),
					day = DATE_FORMAT(NOW(),'%e'),
					alliance_id = NEW.id,
					members = NEW.members,
					rank = NEW.rank,
					points = NEW.points,
					frank = NEW.frank,
					fpoints = NEW.fpoints,
			    	rrank = NEW.rrank,
			    	rpoints = NEW.rpoints,
			    	erank = NEW.erank,
			    	epoints = NEW.epoints
			ON DUPLICATE KEY UPDATE
				rank=values(rank), points=values(points),
				frank=values(frank), fpoints=values(fpoints),
				rrank=values(rrank), rpoints=values(rpoints),
				erank=values(erank), epoints=values(epoints);
			END";
		$res = $this->exec($query);
		if ($res === false) return false;
		$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP_DONE));

		return true;
	}


}