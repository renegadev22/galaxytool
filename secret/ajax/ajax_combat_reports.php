<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) exit("no permission");

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("type?");

try {
	$cb_obj = new CombatReports($combattable, $combatparty, $playertable, $utablename);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

switch ($type) {
	case "initial":
		exit(
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: [] }")
		;

	case "content":
		if (!isset($_GET['id']) || !is_numeric($_GET['id'])) exit("id");
		$id = intval($_GET['id']);
		$details = $cb_obj->get_combat_details($id);
		if ($details === false) echo $cb_obj->get_error_object()->get_JSON_result();
		else echo $cb_obj->get_combat_details($id);
		break;

	case "publish":
		header("content-type: text/html; charset=utf-8");
		header("Pragma: no-cache");
		header("Expires: 0");

		if (!isset($_POST['id'])) exit("2");

		if (!is_numeric($_POST['id'])) {
			$ids = explode("|",$_POST['id']);
		} else {
			$ids[0] = $_POST['id'];
		}
		foreach ($ids as $key => $id) {
			$ids[$key] = intval($id);
		}
		$result = $cb_obj->publish_combat_report($ids);
		$messages = $cb_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);
		break;

	case "unpublish":
		header("content-type: text/html; charset=utf-8");
		header("Pragma: no-cache");
		header("Expires: 0");

		if (!isset($_POST['id'])) exit();

		if (!is_numeric($_POST['id'])) {
			$ids = explode("|",$_POST['id']);
		} else {
			$ids[0] = $_POST['id'];
		}
		foreach ($ids as $key => $id) {
			$ids[$key] = intval($id);
		}

		$result = $cb_obj->unpublish_combat_report($ids);
		$messages = $cb_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);
		break;

	case "delete":
		header("content-type: text/html; charset=utf-8");
		header("Pragma: no-cache");
		header("Expires: 0");
		// do not check for delete permission! Only own combat reports can be deleted

		if (!isset($_POST['id'])) exit();

		if (!is_numeric($_POST['id'])) {
			$ids = explode("|",$_POST['id']);
		} else {
			$ids[0] = $_POST['id'];
		}
		foreach ($ids as $key => $id) {
			$ids[$key] = intval($id);
		}
		$result = $cb_obj->delete_combat_report($ids);
		$messages = $cb_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);
		break;

	case "search":
		if (!isset($_GET['attacker_name']) ||
			!isset($_GET['defender_name']) ||
			!isset($_GET['owner_id']) ||
			!isset($_GET['public_reports']) ||
			!isset($_GET['date_from']) ||
			!isset($_GET['date_to']) ||
			!isset($_GET['coordinates'])
		) {
			header("content-type: text/html; charset=utf-8");
			header("Pragma: no-cache");
			header("Expires: 0");
			exit("Parameter missing");
		}


		header("Content-type: application/json");
		header("Pragma: no-cache");
		header("Expires: 0");

		$attacker      = stripslashes($_GET['attacker_name']);
		$defender      = stripslashes($_GET['defender_name']);
		$owner_id      = intval($_GET['owner_id']);
		$public_report = $_GET['public_reports'];
		$date_from     = $_GET['date_from'];
		$date_to       = $_GET['date_to'];
		$coordinates   = $_GET['coordinates'];

		if ($public_report != "true" && $public_report != "false" && $public_report != "undefined") exit(); // hacking ?

		$result = $cb_obj->get_search_results($attacker, $defender, $owner_id, $public_report, $date_from, $date_to, $coordinates);
		exit($result);

		break;

	case "download":
		if (!isset($_GET['attacker_name']) ||
			!isset($_GET['defender_name']) ||
			!isset($_GET['owner_id']) ||
			!isset($_GET['public_reports']) ||
			!isset($_GET['date_from']) ||
			!isset($_GET['date_to']) ||
			!isset($_GET['coordinates'])
		) {
			header("content-type: text/html; charset=utf-8");
			header("Pragma: no-cache");
			header("Expires: 0");
			exit("Parameter missing");
		}

		$attacker      = stripslashes($_GET['attacker_name']);
		$defender      = stripslashes($_GET['defender_name']);
		$owner_id      = intval($_GET['owner_id']);
		$public_report = $_GET['public_reports'];
		$date_from     = $_GET['date_from'];
		$date_to       = $_GET['date_to'];
		$coordinates   = $_GET['coordinates'];

		if ($public_report != "true" && $public_report != "false" && $public_report != "undefined") exit(); // hacking ?

		$csv_content = $cb_obj->get_search_csv($attacker, $defender, $owner_id, $public_report, $date_from, $date_to, $coordinates);

		header("content-type: application/csv-tab-delimited-table");
		header("content-length: ".strlen($csv_content));
		header("content-disposition: attachment; filename=\"download.csv\"");
		exit($csv_content);

		break;
}

?>