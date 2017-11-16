<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) !== true) exit("no permission");

if (!isset($_GET['type'])) exit("");

$archive_obj = new ReportArchive($reportarchive,$playertable);


$type = $_GET['type'];

switch ($type) {
	case "empty":
		// return no content as json format
		echo $archive_obj->get_empty();

		break;

	case "coordinates":
		if (!isset($_GET['coordinates']) || !(preg_replace("/\d+\:\d+\:\d+/","",$_GET['coordinates']) == "")) exit("coordinates error");
		$coordinates = $_GET['coordinates'];
		$moon        = (isset($_GET['moon']) && $_GET['moon'] == "true") ? "true" : "false";

		$probe_helper = new ProbeLanguages();
		$flipped_probe_array = $probe_helper->get_flipped_probe_array();
		$flipped_top_array   = $probe_helper->get_flipped_top_array();

		echo $archive_obj->get_coordinates($coordinates, $moon, $flipped_probe_array, $flipped_top_array);
		break;

	case "delete":
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) !== true) exit("no permissions");

		if (!isset($_POST['msg_id'])) exit("no msg id");
		$msg_ids = $_POST['msg_id'];
		$msg_ids = explode(",",$msg_ids);

		$result = $archive_obj->delete_reports($msg_ids);

		$messages = $archive_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);

		break;

}

?>