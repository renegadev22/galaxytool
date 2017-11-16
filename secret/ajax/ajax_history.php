<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_history)) exit("no permission");

$type = "";
if (isset($_GET['type'])) {
	$type = $_GET['type'];
} elseif(isset($_POST['type'])) {
	$type = $_POST['type'];
}
if ($type == "") exit("type missing");

try {
	$history = new History($dbtablename, $playerhistory, $allyhistory);

	if (!isset($_POST['player_data'])) {
		$playerIDs = array();
	} else {
		$playerIDs = explode("|",$_POST['player_data']);
	}
	if (!isset($_POST['ally_data'])) {
		$allyIDs = array();
	} else {
		$allyIDs = explode("|",$_POST['ally_data']);
	}
	if (!isset($_POST['timespan'])) {
		$timespan = 0;
	} else {
		$timespan = intval($_POST['timespan']);
	}

	$result = $history->get_scores($type, $timespan, $playerIDs, $allyIDs);
	if (is_array($result) && count($result) > 0) {
		$new_result = array();
		// transform array to be an array in json too
		foreach ($result as $date => $collection) {
			$playerdata_for_date = array();
			$allydata_for_date = array();
			if (array_key_exists("p", $collection)) {
				foreach($collection['p'] as $player_id => $scores) {
					array_push($playerdata_for_date, array($player_id, $scores));
				}
			}

			if (array_key_exists("a", $collection)) {
				foreach($collection['a'] as $ally_id => $scores) {
					array_push($allydata_for_date, array($ally_id, $scores));
				}
			}

			array_push($new_result, array($date, $playerdata_for_date, $allydata_for_date));
		}
	} else {
		$new_result = array();
	}

	$messages = $history->get_error_object();
	if ($messages != null) {
		$message_json = $messages->get_JSON_result();
	} else {
		$message_json = "null";
	}

	$result = '{ chart: '.json_encode($_GET['chart']).', data: '.json_encode($new_result).' , messages: '.$message_json.' }';
	exit($result);


} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

