<?php
require "_general_header.inc.php";

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("type missing");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

try {
	$class_ref = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);

	switch ($type) {
		case "updatelinks":
			if (!isset($_POST['links'])) exit("links missing");
			$result = $class_ref->change_links($_POST['links']);
			$messages = $class_ref->get_error_object();

			// return info or error messages as JSON objects
			header("Pragma: no-cache");
			header("Expires: 0");
			exit($messages->get_JSON_result());

			break;

		case "updatebbcodes":
			$codes = array("bb_coordinates","bb_moon","bb_debris","bb_ally","bb_allydetails","bb_playername","bb_banned","bb_vacation","bb_noob","bb_inactive","bb_longinactive","bb_outlaw");
			foreach ($codes as $code) {
				if (!isset($_POST[$code])) exit("BBCode $code missing");
			}

			$result = $class_ref->change_bb_codes($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid), $_POST['bb_coordinates'], $_POST['bb_moon'], $_POST['bb_debris'], $_POST['bb_ally'], $_POST['bb_allydetails'], $_POST['bb_playername'], $_POST['bb_banned'], $_POST['bb_vacation'], $_POST['bb_noob'], $_POST['bb_inactive'], $_POST['bb_longinactive'], $_POST['bb_outlaw']);
			$messages = $class_ref->get_error_object();

			// return info or error messages as JSON objects
			header("Pragma: no-cache");
			header("Expires: 0");
			exit($messages->get_JSON_result());

			break;

		case "perform_useradmin":
			if (!isset($_POST['old_combats_p1'])) exit("Missing data");
			if (!isset($_POST['old_ingame_msg_p1'])) exit("Missing data");

			$combat_reports = (isset($_POST['delete_combatreports'])) ? $_POST['old_combats_p1'] : null;
			$fleetmovements = (isset($_POST['delete_fleetmoves'])) ? true : false;
			$messages       = (isset($_POST['delete_messages'])) ? $_POST['old_ingame_msg_p1'] : null;

			$result = $class_ref->delete_user_data($combat_reports, $fleetmovements, $messages);
			$messages = $class_ref->get_error_object();

			// return info or error messages as JSON objects
			header("Pragma: no-cache");
			header("Expires: 0");
			exit($messages->get_JSON_result());

			break;

		default:
			exit("unknown type");
	}

} catch (Exception $e) {
	exit("Exception occurred: ".$e->getMessage());
}


