<?php
require "_general_header.inc.php";

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("1");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) exit("no permission");

try {
	$playerinfo = new PlayerInformation($playertable, $allytable, $noticetable, $playerhistory, $reporttable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

switch ($type) {
	case "all":
		$ogame_playerid = (isset($_GET['ogame_playerid'])) ? true : false;

		exit($playerinfo->get_players_as_JSON($ogame_playerid));

	default:
		exit("unknown type");
}



?>