<?php
require "_general_header.inc.php";

if (!isset($_GET['type'])) exit("");

try {
	$msg_obj = new Messages($messagetable,$noticetable,$playertable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

$type = $_GET['type'];

switch ($type) {
	case "overview":
		if (isset($_GET['playerid']) && is_numeric($_GET['playerid'])) {
			$playerid = intval($_GET['playerid']);
			echo $msg_obj->get_message_overview($playerid);
		} else {
			echo $msg_obj->get_message_overview();
		}

		break;

	case "content":
		if (!isset($_GET['id']) || !is_numeric($_GET['id'])) exit();
		$id = intval($_GET['id']);
		$result = $msg_obj->get_message_content($id);

		$messages = $msg_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);
		break;

	case "publish":
		if (!isset($_GET['id']) || !is_numeric($_GET['id'])) exit();
		$id = intval($_GET['id']);

		$result = $msg_obj->publish_message($id);

		$messages = $msg_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);

	case "delete":
		// do not check for delete permission! Only own ingame messages can be deleted

		if (!isset($_GET['id']) || !is_numeric($_GET['id'])) exit();
		$id = intval($_GET['id']);
		$result = $msg_obj->delete_message($id);

		$messages = $msg_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);

}