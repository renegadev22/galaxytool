<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) !== true) exit("no permission");

$type = "";
if (isset($_GET['type'])) {
	$type = $_GET['type'];
} elseif(isset($_POST['type'])) {
	$type = $_POST['type'];
}
if ($type == "") exit("type missing");

try {
	$probe_helper        = new ProbeLanguages();
	$flipped_probe_array = $probe_helper->get_flipped_probe_array();
	$flipped_top_array   = $probe_helper->get_flipped_top_array();
	$db_array            = $probe_helper->get_db_array();
	$reports             = new Reports($db_array, $flipped_probe_array, $flipped_top_array, $reporttable, $playertable, $allytable, $dbtablename, $utablename);

	switch ($type) {
		case "search":
			// search
			$result = $reports->search_for_reports($_POST);

			$messages = $reports->get_error_object();
			if ($messages != null) {
				$message_json = $messages->get_JSON_result();
			} else {
				$message_json = "null";
			}
			if ($result === false) $result = "\"items\": []";
			$result = '{ '.$result.' , "messages": '.$message_json.' }';
			//$result = '{ items: [{id:1, metal:1000},{id:2, metal:2000}] , messages: '.$message_json.' }';

			exit($result);

		case "load":
			//coordinates="+coordinates*"&moon="+moon
			if (!isset($_GET['coordinates']) || !isset($_GET['moon'])) exit("Parameter missing");
			if (preg_replace("/\d+\:\d+\:\d+/","",$_GET['coordinates']) != "") exit("wrong coordinates");
			if ($_GET['moon'] != "true" && $_GET['moon'] != "false") exit("wrong moon");

			$moon = ($_GET['moon'] == "true") ? true : false;

			$result = $reports->get_coordinates($_GET['coordinates'], $moon);
			if ($result === false) exit("{}"); // return at least a json object
			exit($result);

		case "delete";
			if (!isset($_POST['id'])) exit("Parameter missing");
			if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) !== true) exit("no permission");

			$ids = explode("|",$_POST['id']);
			$result = $reports->delete_reports($ids);

			$messages = $reports->get_error_object();
			if ($messages != null) {
				$message_json = $messages->get_JSON_result();
			} else {
				$message_json = "null";
			}
			$result = '{ "deleted": '.$result.' , "messages": '.$message_json.' }';

			exit($result);

		default: exit("\"unknown type\": ".$type);
	}

} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}
