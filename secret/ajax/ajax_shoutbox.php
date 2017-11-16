<?php
require "_general_header.inc.php";

$shoutbox = new Shoutbox($shouttable);
if (!isset($_GET['type']) && !isset($_POST['type'])) exit("type missing");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

switch ($type) {
	case "delete":
		if (!isset($_POST['id']) || !is_numeric($_POST['id'])) exit();
		$id = intval($_POST['id']);
		$response = $shoutbox->delete_entry($id);

		$messages = $shoutbox->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ "result": '.json_encode($response).' , "messages": '.$message_json.' }';
		exit($result);
		break;

	case "insert":
		if (!isset($_POST['comment']) || trim($_POST['comment']) == "") {
			exit("comment missing");
		}
		$comment = trim(strip_tags(stripslashes($_POST['comment'])));
		$response = $shoutbox->insert_entry($comment, $_SESSION['s_auth']->get_setting(iAuthorization::setting_username), $maxshouts);
		$messages = $shoutbox->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ "result": '.json_encode($response).' , "messages": '.$message_json.' }';
		exit($result);
		break;

	case "read":
		echo $shoutbox->read_data($_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset), true);

		break;

	default:
		exit("unknown type");
}
