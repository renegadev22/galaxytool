<?php
/*
 * Requests sent to that file come from the startup page where the user is not authorized / logged in
 */
chdir("../");
require "../config/config.php";
require "../config/attributes.php";

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("type missing");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

if ($type == "admin_email" || $type == "activation_email") {
	Galaxytool::load_language_file($default_language);
} else {
	if (!isset($_SESSION['lang'])) {
		$_SESSION['lang'] = $default_language;
	}
	Galaxytool::load_language_file($_SESSION['lang']);
}

try {
	$class_ref = new UnauthenticatedAccess($utablename, $email_from, $email_to);

	switch ($type) {
		case "reset":
			if (!isset($_POST['email'])) exit("no email?");
			$response = $class_ref->request_password_reset($_POST['email']);
			$messages = $class_ref->get_error_object();

			// return info or error messages as JSON objects
			header("Content-type: application/json");
			header("Pragma: no-cache");
			header("Expires: 0");
			exit($messages->get_JSON_result());

			break;

		case "admin_email":
			if (!isset($_GET['username'])) exit("false");
			$username = urldecode($_GET['username']);

			$response = $class_ref->send_admin_notification($username);
			if ($response == true) exit("true");
			exit("false");

			break;

		case "activation_email":
			// code is called from userinfo.php but not from start page
			if (!isset($_GET['userid'])) exit("false");
			$class_ref = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);
			$response = $class_ref->send_activation_notification($_GET['userid']);
			if ($response == true) exit("true");
			exit("false");

			break;

		default:
			exit("unknown type");
	}

} catch (Exception $e) {
	exit("Exception occurred: ".$e->getMessage());
}
