<?php
header("content-type: text/html; charset=utf-8");

class InstallAutoLoader {
	public static function ClassLoader($class) {
		if (is_readable(GALAXYTOOL_ROOT."/secret/includes/classes/{$class}.inc.php"))
			require GALAXYTOOL_ROOT."/secret/includes/classes/{$class}.inc.php";
	}
}

$fullpath = realpath('.');
// we need to define the Galaxytool_root constant to be able to include the next files
$fullpath = str_replace("/secret/ajax", "", $fullpath); // linux
$fullpath = str_replace('\secret\ajax', "", $fullpath); // windows
define("GALAXYTOOL_ROOT",$fullpath);
$usePHPMailer = false; // required by general.inc.php - but not for installer; but could throw notice message

session_name(preg_replace("/[^a-zA-Z0-9_]/i", "", GALAXYTOOL_ROOT));
session_start();

if (!isset($_SESSION[GALAXYTOOL_ROOT]) || $_SESSION[GALAXYTOOL_ROOT] != "install.php") exit(); // ensure that this file is only called from install.php

require GALAXYTOOL_ROOT . "/secret/version.php";
spl_autoload_register('InstallAutoLoader::ClassLoader');
Galaxytool::load_language_file($_SESSION['lang']);

if (isset($_GET['step'])) {
	$step = intval($_GET['step']);
}
if (!isset($step) || $step < 1 || $step > 9) {
	$step = 1;
}

$validate = (isset($_GET['type']) && $_GET['type'] = "validate") ? true : false;

switch($step) {
	case 2:
		$_SESSION['step'] = 2;
		// validate step 2
		clearstatcache(); // required as is_writeable() is cached on certain OS

		$folder = (is_writable(GALAXYTOOL_ROOT."/config/")) ? true : false;
		// inherit from folder
		$attributes = $folder;
		$config     = $folder;
		// if file exists, overwrite folder definitions with file settings
		if (file_exists(GALAXYTOOL_ROOT."/config/attributes.php")) {
			$attributes = (is_writable(GALAXYTOOL_ROOT."/config/attributes.php")) ? true : false;
		}
		if (file_exists(GALAXYTOOL_ROOT."/config/config.php")) {
			$config     = (is_writable(GALAXYTOOL_ROOT."/config/config.php")) ? true : false;
		}

		$message = null;
		if ($attributes !== true) {
			$message = new ErrorObject(ErrorObject::severity_error, "attributes.php - ".INSTALL_STEP2_FILE_NOT_WRITEABLE);
		}
		if ($config !== true) {
			if (!isset($message)) $message = new ErrorObject(ErrorObject::severity_error, "config.php - ".INSTALL_STEP2_FILE_NOT_WRITEABLE);
			else $message->add_child_message(new ErrorObject(ErrorObject::severity_error, "config.php - ".INSTALL_STEP2_FILE_NOT_WRITEABLE));
		}

		// return new information as json object with result: (true|false), messages: xyz
		$message_json = ($message != null) ? $message->get_JSON_result() : "null";
		echo '{ config: '.json_encode($config).', attribute: '.json_encode($attributes).', messages: '.$message_json.' }';
		exit();

	case 3:
		if (!isset($_SESSION['step'])) exit("not defined");
		if ($_SESSION['step'] != 2 && $_SESSION['step'] != 3) exit("wrong old step ".$_SESSION['step']); // we may trigger third step several times

		$dbprefix = "";
		if (isset($_POST['server']))   $server   = stripslashes($_POST['server']);
		if (isset($_POST['username'])) $username = stripslashes($_POST['username']);
		if (isset($_POST['password'])) $password = stripslashes($_POST['password']);
		if (isset($_POST['dbname']))   $dbname   = stripslashes($_POST['dbname']);
		if (isset($_POST['prefix']))   $dbprefix = stripslashes($_POST['prefix']);

		$message = null;
		if (isset($server) && isset($username) && isset($password) && isset($dbname)) {
			// validate mysql connection
			$tab1_created = false;
			$tab2_created = false;
			try {
				$pdo = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8', $username, $password,
					            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true ) );
				$pdo->query("SET NAMES 'utf8';");
				$pdo->query("SET SESSION collation_connection = 'utf8_general_ci';");
						
				// check mysql version
				$query = "SELECT VERSION() as version";
				$stmt = $pdo->query($query);
				
				$version = $stmt->fetch(PDO::FETCH_OBJ);
				if (strpos($version->version,"-") > 0) {
					$version = substr($version->version,0,strpos($version->version,"-"));
				} else {
					$version = $version->version;
				}

				$error_occured = false;
				// http://bugs.galaxytool.eu/galaxyview.php?id=375 <-- v5.0.87 has a bug
				if (version_compare($version, "5.0.16", '<') || version_compare($version, "5.0.87", '=')) {
					$message = new ErrorObject(ErrorObject::severity_error, str_replace("&1", $version, INSTALL_STEP3_MYSQL_VERSION_FAILED) );
					$error_occured = true;
				}

				if ($error_occured === false) {
					$tab1_created = false;
					$tab2_created = false;

					// check trigger creation including validity of prefix
					$query = "CREATE TABLE ".$dbprefix."gt_test1(a1 INT)";
					$res = $pdo->exec($query);
					$tab1_created = true;
					$query = "CREATE TABLE ".$dbprefix."gt_test2(a2 INT)";
					$res = $pdo->exec($query);
					$tab2_created = true;
					$query = "CREATE TRIGGER ".$dbprefix."gt_testref BEFORE INSERT ON ".$dbprefix."gt_test1
						  FOR EACH ROW BEGIN
						    INSERT INTO ".$dbprefix."gt_test2 SET a2 = NEW.a1;
						  END;";
					$res = $pdo->exec($query);
					if ($res === false) {
						$message = new ErrorObject(ErrorObject::severity_error, $pdo->get_db_error_object());
					}
					if ($tab1_created) {
						$query = "DROP TABLE ".$dbprefix."gt_test1";
						$pdo->exec($query);
					}
					if ($tab2_created) {
						$query = "DROP TABLE ".$dbprefix."gt_test2";
						$pdo->exec($query);
					}
				}
			} catch (PDOException $e) {
				$message = new ErrorObject(ErrorObject::severity_error, INSTALL_STEP3_CONNECT_FAILED);
				$message->add_child_message( new ErrorObject(ErrorObject::severity_error, $e->getMessage()));
				// php does not support FINALLY statement at try-catch blocks :-(
				if ($tab1_created) {
					$query = "DROP TABLE ".$dbprefix."gt_test1";
					$pdo->exec($query);
				}
				if ($tab2_created) {
					$query = "DROP TABLE ".$dbprefix."gt_test2";
					$pdo->exec($query);
				}
			}
		} else {
			$message = new ErrorObject(ErrorObject::severity_error, "unexpected error");
		}

		if ($message == null) {
			$_SESSION['step'] = 3;
		}

		$message_json = ($message != null) ? $message->get_JSON_result() : "null";
		echo '{ messages: '.$message_json.' }';

		exit();

	case 4:
		if ($_SESSION['step'] != 3 && $_SESSION['step'] != 4) exit("wrong old step ".$_SESSION['step']); // we may trigger third step several times

		$url = (isset($_POST['url'])) ? $_POST['url'] : "";
		preg_match('@^(?:https?://)?([^/]+)@i', $url , $result); // get host
		
		// first check if the user is allowed to get data from remote source
		if (ini_get("allow_url_fopen") != 1) {
			$_SESSION['ogame_url'] = "";
			$_SESSION['step'] = 4;
			$result = true;
		} else if (is_array($result) && count($result) > 0) {
			$url = $result[0];
			if (strpos($url, "http") === false) {
				$url = "http://".$url;
			}
			// generate API path
			$api_universe  = $url . "/api/universe.xml";

			$one_byte_content = @file_get_contents($api_universe,0,NULL,0,1);
			$result = ($one_byte_content === false) ? false : true;

			if ($result) {
				$_SESSION['ogame_url'] = $url;
				$_SESSION['step'] = 4;
			}
		} else {
			$result = false;
		}

		$message = null;
		if ($result === false) {
			$message = new ErrorObject(ErrorObject::severity_error, str_replace("&1",$api_universe, INSTALL_STEP4_URL_CHECK_FAILED ));
		}

		$message_json = ($message != null) ? $message->get_JSON_result() : "null";
		echo '{ result: '.json_encode($result).', messages: '.$message_json.' }';

		exit();

	case 7:
		if (!isset($_SESSION['step'])) exit();
		if ($_SESSION['step'] != 4) exit();

		// create files based on parameter
		if (!isset($_POST['dbhost']) || !isset($_POST['dbname']) || !isset($_POST['dbusername']) || !isset($_POST['dbpassword']) || !isset($_POST['dbprefix'])) exit("config parameter missing");
		// no further variable checks - if somebody wants to corrupt his config files by manipulating http requests... he can do so or write the files directly
		$dbhost     = stripslashes($_POST['dbhost']);
		$dbusername = stripslashes($_POST['dbusername']);
		$dbpassword = stripslashes($_POST['dbpassword']);
		$dbname     = stripslashes($_POST['dbname']);
		$dbprefix   = stripslashes($_POST['dbprefix']);

		$owner            = stripslashes($_POST['owner']);
		$maxshouts        = intval(stripslashes($_POST['maxshouts']));
		$email_to         = stripslashes($_POST['email_to']);
		$email_from       = stripslashes($_POST['email_from']);
		$usePHPMailer     = ($_POST['usePHPMailer'] == "true") ? true : false;
		$SMPT_host        = stripslashes($_POST['SMPT_host']);
		$SMPT_user        = stripslashes($_POST['SMPT_user']);
		$SMPT_pass        = stripslashes($_POST['SMPT_pass']);
		$SMPT_secure      = stripslashes($_POST['SMPT_secure']);
		$SMPT_port        = intval(stripslashes($_POST['SMPT_host']));
		$default_language = stripslashes($_POST['default_language']);
		$global_universe  = stripslashes($_POST['global_universe']);
		$def_to_debris    = ($_POST['def_to_debris'] == "true") ? true : false;
		$debris_rate      = stripslashes($_POST['debris_rate']);
		$speed_rate       = stripslashes($_POST['speed_rate']);
		$ogame_url        = $_SESSION['ogame_url'];

		// admin account password
		$admin_password   = $_POST['admin_pass'];

		// write config.php file
		$bytes_written = GalaxytoolInstaller::write_config_file($dbusername, $dbpassword, $dbname, $dbhost, $dbprefix);
		if ($bytes_written > 0) {
			$messages = new ErrorObject(ErrorObject::severity_info, INSTALL_STEP7_CONFIG);
		} else {
			$messages = new ErrorObject(ErrorObject::severity_error, INSTALL_STEP7_CONFIG_FAILED);
		}
		
		// write attributes.php file
		$bytes_written = GalaxytoolInstaller::write_attribute_file($owner, $maxshouts, $email_to, $email_from, $usePHPMailer, $default_language, $global_universe, $def_to_debris, $debris_rate, $speed_rate, $ogame_url, $SMPT_host,$SMPT_user,$SMPT_pass,$SMPT_secure,$SMPT_port);
		if ($bytes_written > 0) {
			$messages->add_child_message( new ErrorObject(ErrorObject::severity_info, INSTALL_STEP7_ATTRIBUTES) );
		} else {
			$messages->add_child_message( new ErrorObject(ErrorObject::severity_error, INSTALL_STEP7_ATTRIBUTES_FAILED) );
		}
		
		if ($messages->get_worst_severity() == ErrorObject::severity_error) {
			// files could not be created
			echo '{ result: '.json_encode(false).', messages: '.$messages->get_JSON_result().' }';
			exit("");
		}
		
		@require GALAXYTOOL_ROOT."/config/config.php"; // notice due to existing GALAXYTOOL_ROOT definition
		if (!isset($dbtablename)) {
			$messages->add_child_message( new ErrorObject(ErrorObject::severity_error, "unexpected error - config file has syntax errors?") );
			exit();
		}
		
		// now create the Galaxytool tables
		$installer = new GalaxytoolInstaller();
		$installer->create_database_tables($dbtablename, $systemtablename, $utablename, $playertable, $allytable, $noticetable, $reporttable, $iptablename,
		                                   $shouttable, $allyhistory, $playerhistory, $fleetmovetable, $player_activity, $messagetable,
		                                   $combattable, $combatparty, $reportarchive, $formtable, $dbprefix);
		
		$installer->create_admin_account($admin_password, $utablename);
		
		$errors = $installer->get_error_object();
		$result = true;
		if ($errors != null) {
			$result = false; // we had some errors
			$messages->add_child_message($errors);
		} else {
			$_SESSION['step'] = 7;
			$messages->add_child_message(new ErrorObject(ErrorObject::severity_info, INSTALL_STEP7_CREATED_TABLES));
		}

		echo '{ result: '.json_encode($result).', messages: '.$messages->get_JSON_result().' }';
		unset($_SESSION['ogame_url']);
		exit();

	case 8:
		if (!isset($_SESSION['step'])) exit();
		if ($_SESSION['step'] != 7) exit();

		@require GALAXYTOOL_ROOT."/config/config.php";
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
		$parser = new OGameAPIParser($global_universe, $dbtablename, $systemtablename, $playertable, $allytable, $combattable, $combatparty, $noticetable, $playerhistory, $player_activity, $messagetable, true);

		$result = $parser->load_OGame_data(1);
		if ($result === true) {
			$messages = new ErrorObject(ErrorObject::severity_info, INSTALL_STEP8_LOAD_DATA_FINISHED);
		} else {
			$messages = $parser->get_error_object();
		}

		echo '{ result: '.json_encode($result).', messages: '.$messages->get_JSON_result().' }';
		unset($_SESSION[GALAXYTOOL_ROOT]);
		unset($_SESSION['step']);
		exit();

}
