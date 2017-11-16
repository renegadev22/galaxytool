<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) exit("no permission");

$type = "";
if (isset($_GET['type'])) {
	$type = $_GET['type'];
} elseif(isset($_POST['type'])) {
	$type = $_POST['type'];
}
if ($type == "") exit("type missing");

try {
	$stats_obj = new Stats($utablename, $playertable, $allytable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

switch ($type) {
	case "playerstats":
		$start    = (isset($_GET['start'])) ? intval($_GET['start']) : 0;
		$count    = (isset($_GET['count'])) ? intval($_GET['count']) : 50;
		$sort     = (isset($_GET['sort'])) ? $_GET['sort'] : "rank";
		$military = (isset($_GET['military']) && $_GET['military'] == "true") ? true : false;

		$inactive = (isset($_GET['inactive'])) ? $_GET['inactive'] : null;
		$vacation = (isset($_GET['vacation'])) ? $_GET['vacation'] : null;
		$noob     = (isset($_GET['noob'])) ? $_GET['noob'] : null;

		if (substr($sort,0,1) == "-") {
			$sortorder = Stats::descending;
			$sort = substr($sort, 1);
		} else {
			$sortorder = Stats::ascending;
		}

		$content = $stats_obj->getPlayerStats($start, $count, $sort, $sortorder, $inactive, $vacation, $noob);
		exit($content);
		break;

	case "allystats":
		$start   = (isset($_GET['start'])) ? intval($_GET['start']) : 0;
		$count   = (isset($_GET['count'])) ? intval($_GET['count']) : 50;
		$sort    = (isset($_GET['sort'])) ? $_GET['sort'] : "rank";
		$military = (isset($_GET['military']) && $_GET['military'] == "true") ? true : false;

		if (substr($sort,0,1) == "-") {
			$sortorder = Stats::descending;
			$sort = substr($sort, 1);
		} else {
			$sortorder = Stats::ascending;
		}

		$content = $stats_obj->getAllyStats($start, $count, $sort, $sortorder);
		exit($content);
		break;

	case "graph":
		$id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;
		$content = $stats_obj->getAllyGraph($id);
		exit($content);

		break;

	case "player_delete":
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) !== true) exit("no permissions");
		$player_id = intval($_GET['player_id']);
		$result = $stats_obj->player_delete($player_id, $playerhistory, $noticetable, $dbtablename, $combatparty, $combattable, $player_activity, $messagetable);

		$messages = $stats_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ "result": '.json_encode($result).' , "messages": '.$message_json.' }';
		exit($result);

	case "alliance_delete":
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) !== true) exit("no permissions");
		$alliance_id = intval($_GET['alliance_id']);
		$result = $stats_obj->alliance_delete($alliance_id);
		$messages = $stats_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ "result": '.json_encode($result).' , "messages": '.$message_json.' }';
		exit($result);

	case "change_player":
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_diplomatic) !== true) exit("no permissions");
		$player_id = intval($_GET['player_id']);
		$result = $stats_obj->change_player($player_id, $_GET['new_status']);
		$messages = $stats_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ "result": '.json_encode($result).' , "messages": '.$message_json.' }';
		exit($result);

	case "change_alliance":
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_diplomatic) !== true) exit("no permissions");
		$alliance_id = intval($_GET['alliance_id']);
		$result = $stats_obj->change_alliance($alliance_id, $_GET['new_status']);
		$messages = $stats_obj->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ "result": '.json_encode($result).' , "messages": '.$message_json.' }';
		exit($result);

	default: exit("");

}