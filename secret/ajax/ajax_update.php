<?php
header("content-type: text/html; charset=utf-8");
require "../../config/config.php";
if (!defined("GALAXYTOOL_ROOT")) { // introduced in 5.0
	$fullpath = realpath('.');
	// we need to define the Galaxytool_root constant to be able to include the next files
	$fullpath = str_replace("/secret/ajax", "", $fullpath); // linux
	$fullpath = str_replace('\secret\ajax', "", $fullpath); // windows
	define("GALAXYTOOL_ROOT",$fullpath);
}

session_name(preg_replace("/[^a-zA-Z0-9_]/i", "", GALAXYTOOL_ROOT));
session_start();

if (!isset($_SESSION[GALAXYTOOL_ROOT]) || $_SESSION[GALAXYTOOL_ROOT] != "update.php") exit("session variable not set"); // ensure that this file is only called from update.php

chdir(GALAXYTOOL_ROOT."/secret");
require GALAXYTOOL_ROOT."/config/attributes.php"; // until version 4.9 there was a statement: require "../secret/version.php"; inside the file
chdir(GALAXYTOOL_ROOT."/secret/ajax");

// required to be able to upgrade version 4.x to 5.x; in between, the config file is converted to 5.x and automatic class loading becomes active
if (!defined("GALAXYTOOL_INSTALLED_VERSION") || !defined("VERSION") || GALAXYTOOL_INSTALLED_VERSION != VERSION) {
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/Galaxytool.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/DB.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/DBHandler.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/ErrorObject.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/GenericSuperclass.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/GalaxytoolInstaller.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/GalaxytoolUpdateVersion4.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/includes/classes/GalaxytoolUpdateVersion5.inc.php";
	require_once GALAXYTOOL_ROOT."/secret/version.php";
}
Galaxytool::load_language_file($_SESSION['lang']);

if (isset($_GET['step'])) {
	$step = intval($_GET['step']);
}
if (!isset($step) || $step < 1 || $step > 9) {
	$step = 1;
	$_SESSION['step'] = 1;
}

$validate = (isset($_GET['type']) && $_GET['type'] = "validate") ? true : false;

switch($step) {
	case 2:
		if (!isset($_POST['old_version'])) exit("");
		// before we touch anything we store the corrent connection settings for MySQL in our session
		$query = "SHOW VARIABLES LIKE 'collation_connection'";
		$stmt = DB::getDB()->query($query);
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$_SESSION['mysql_collation_connection'] = $line->Value;

		$query = "SHOW VARIABLES LIKE 'character_set_server'";
		$stmt = DB::getDB()->query($query);
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$_SESSION['character_set_server'] = $line->Value;

		$old_version = null;
		switch ($_POST['old_version']) {
			case "4.6": $old_version = "4.6"; break;
			case "4.7": $old_version = "4.7"; break;
			case "4.8": $old_version = "4.8"; break;
			case "4.9": $old_version = "4.9"; break;
			case "5.0": $old_version = "5.0"; break;
		}
		if ($old_version == null) {
			$message = new ErrorObject(ErrorObject::severity_error, "Unknown old version selected");
			$message_json = ($message != null) ? $message->get_JSON_result() : "null";
			echo '{ result: '.json_encode(false).', messages: '.$message_json.' }';
			exit();
		}

		$url = (isset($_POST['url'])) ? $_POST['url'] : "";
		preg_match('@^(?:https?://)?([^/]+)@i', $url , $result); // get host
		
		// first check if the user is allowed to get data from remote source
		if (ini_get("allow_url_fopen") != 1) {
			$_SESSION['ogame_url'] = "";
			$_SESSION['step'] = 2;
			$result = true;
		} else if (is_array($result) && count($result) > 0) {
			$url = $result[0];
			if (strpos($url,".") === false) {
				// we do not have a domain!
				$api_universe = $url;
				$result = false;
			} else {
				if (strpos($url, "http") === false) {
					$url = "http://".$url;
				}
				// generate API path
				$api_universe  = $url . "/api/universe.xml";

				$one_byte_content = @file_get_contents($api_universe,0,NULL,0,1);
				$result = ($one_byte_content === false) ? false : true;
				
				if ($result) {
					$_SESSION['ogame_url'] = $url;
					$_SESSION['step'] = 2;
				}
			}
		} else {
			$api_universe = $url;
			$result = false;
		}

		$message = null;
		if ($result === false) {
			$message = new ErrorObject(ErrorObject::severity_error, str_replace("&1",$api_universe, INSTALL_STEP4_URL_CHECK_FAILED ));
		}

		$message_json = ($message != null) ? $message->get_JSON_result() : "null";
		echo '{ result: '.json_encode($result).', messages: '.$message_json.' }';

		exit();

	case 3:
		if (!isset($_SESSION['step'])) exit();
		if ($_SESSION['step'] != 2) exit();
		if (!isset($_POST['old_version'])) exit();

		$old_version = null;
		switch ($_POST['old_version']) {
			case "4.6": $old_version = "4.6"; break;
			case "4.7": $old_version = "4.7"; break;
			case "4.8": $old_version = "4.8"; break;
			case "4.9": $old_version = "4.9"; break;
			case "5.0": $old_version = "5.0"; break;
		}
		if ($old_version == null) {
			$message = new ErrorObject(ErrorObject::severity_error, "Unknown old version selected");
			$message_json = ($message != null) ? $message->get_JSON_result() : "null";
			echo '{ result: '.json_encode(false).', messages: '.$message_json.' }';
			exit();
		}

		// create files based on parameter
		if (!isset($dbprefix)) $dbprefix = ""; // introduced with 4.7
		$ogame_url = $_SESSION['ogame_url']; // introduced with 5.0

		// use empty variables to create tables with default names
		if (!isset($fleetmovetable)) $fleetmovetable = "";   // introduced with 4.7
		if (!isset($player_activity)) $player_activity = ""; // introduced with 4.7
		if (!isset($messagetable)) $messagetable = "";       // introduced with 4.7
		if (!isset($combattable)) $combattable = "";         // introduced with 4.7
		if (!isset($combatparty)) $combatparty = "";         // introduced with 4.7
		if (!isset($reportarchive)) $reportarchive = "";     // introduced with 4.8
		if (!isset($systemtablename)) $systemtablename = ""; // introduced with 5.0
		if (!isset($formtable)) $formtable = "";             // introduced with 5.0


		// write config.php file
		$bytes_written = GalaxytoolInstaller::write_config_file($dbusername, $dbpassword, $dbname, $dbhost, $dbprefix, $dbtablename,
		                                                        $systemtablename, $utablename, $playertable, $allytable, $noticetable,
		                                                        $reporttable, $iptablename, $shouttable, $allyhistory, $playerhistory,
		                                                        $fleetmovetable, $player_activity, $messagetable, $combattable,
		                                                        $combatparty, $reportarchive, $formtable, true);
		if ($bytes_written > 0) {
			$messages = new ErrorObject(ErrorObject::severity_info, INSTALL_STEP7_CONFIG);
		} else {
			$messages = new ErrorObject(ErrorObject::severity_error, INSTALL_STEP7_CONFIG_FAILED);
		}

		// write attributes.php file
		$bytes_written = GalaxytoolInstaller::write_attribute_file($owner, $maxshouts, $email_to, $email_from, $usePHPMailer, $default_language, $global_universe, $def_to_debris, $debris_rate, $speed_rate, $ogame_url, $phpmailerHost, $phpmailerUser ,$phpmailerPass,$phpmailerSMTPSecure,$phpmailerPort);
		if ($bytes_written > 0) {
			$messages->add_child_message( new ErrorObject(ErrorObject::severity_info, INSTALL_STEP7_ATTRIBUTES) );
		} else {
			$messages->add_child_message( new ErrorObject(ErrorObject::severity_error, INSTALL_STEP7_ATTRIBUTES_FAILED) );
		}

		if ($messages->get_worst_severity() == ErrorObject::severity_error) {
			// files could not be created
			echo '{ result: '.json_encode(false).', messages: '.$messages->get_JSON_result().' }';
			exit();
		}

		if (empty($systemtablename)) { // introduced with 5.0
			$systemtablename = $dbprefix . "system";
		}
		if (empty($formtable)) { // introduced with 5.0
			$formtable = $dbprefix . "form_saves";
		}		

		// now run the required update
		$updater = new GalaxytoolUpdateVersion5($old_version, $dbtablename, $systemtablename, $utablename, $playertable, $allytable,
		                                        $noticetable, $reporttable, $iptablename, $shouttable, $allyhistory, $playerhistory, $fleetmovetable,
		                                        $player_activity, $messagetable, $combattable, $combatparty, $reportarchive, $formtable, $dbprefix);

		ob_start();
		$result  = $updater->perform_update();
		$unexpected_output = ob_get_clean();
		$update_messages = $updater->get_error_object();

		if ($unexpected_output != "") {
			$messages->add_child_message(new ErrorObject(ErrorObject::severity_error, $unexpected_output));
		}
		if ($update_messages != null) {
			if ($update_messages->get_worst_severity() == ErrorObject::severity_error) {
				$result = false; // we had some errors
			}
			$messages->add_child_message($update_messages);
		} else {
			$messages->add_child_message(new ErrorObject(ErrorObject::severity_info, UPDATE_STEP4_UPDATE_DONE));
		}

		echo '{ result: '.json_encode($result).', messages: '.$messages->get_JSON_result().' }';
		unset($_SESSION['step']);
		unset($_SESSION['ogame_url']);
		exit();

	case 4:
		//@require GALAXYTOOL_ROOT."/config/config.php";
		if (!isset($dbtablename)) {
			$messages = new ErrorObject(ErrorObject::severity_error, "unexpected error - config file has syntax errors?");
			echo '{ result: '.json_encode(true).', messages: '.$messages->get_JSON_result().' }';
			exit();
		}
		@require GALAXYTOOL_ROOT."/config/attributes.php";
		if (!defined("OGAME_URL")) {
			$messages = new ErrorObject(ErrorObject::severity_error, "unexpected error - attributes.php file has syntax errors?");
			echo '{ result: '.json_encode(true).', messages: '.$messages->get_JSON_result().' }';
			exit();
		}
		
		spl_autoload_register('AutoLoader::ParserLoader');
		$parser = new OGameAPIParser($global_universe, $dbtablename, $systemtablename, $playertable, $allytable, $combattable, $combatparty, $noticetable, $playerhistory, $player_activity, $messagetable, false);

		$result = $parser->load_OGame_data(1);
		if ($result === true) {
			$messages = new ErrorObject(ErrorObject::severity_info, INSTALL_STEP8_LOAD_DATA_FINISHED);
		} else {
			$messages = $parser->get_error_object();
		}

		echo '{ result: '.json_encode($result).', messages: '.$messages->get_JSON_result().' }';

		unset($_SESSION[GALAXYTOOL_ROOT]);
		unset($_SESSION['mysql_collation_connection']);
		unset($_SESSION['character_set_server']);
		exit();

}
