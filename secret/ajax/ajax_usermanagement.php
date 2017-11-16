<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_userman)) {
	exit("No permission");
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) exit("Wrong parameter");
$id = intval($_GET['id']);

if (!isset($_GET['type'])) exit("Type missing");
$type = $_GET['type'];

try {
	$user_man = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);

	switch ($type) {
		case "user_detail":
			header("Content-type: application/json");
			header("Pragma: no-cache");
			header("Expires: 0");

			$result = $user_man->get_user_data_json($id);
			if ($result === false) exit("no data"); // should not happen; only if user got deleted in parallel
			exit($result);

		break;

		case "delete_user":
			$result = $user_man->delete_user($id);
			if ($result === true) {
				$messages = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);
			} else {
				$messages = $user_man->get_error_object();
			}

			header("Content-type: application/json");
			header("Pragma: no-cache");
			header("Expires: 0");
			exit($messages->get_JSON_result());
			break;

		default:
			exit("wrong type");
		break;
	}
} catch (Exception $e) {
	exit($e->getMessage());
}
