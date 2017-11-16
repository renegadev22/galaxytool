<?php
require "_general_header.inc.php";

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("1");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) exit("no permission");

try {
	$allyinfo   = new AllyInformation($playertable, $allytable, $reporttable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

switch ($type) {
	case "all":
		$ogame_allyid = (isset($_GET['ogame_allyid'])) ? true : false;

		exit($allyinfo->get_alliances_as_JSON($ogame_allyid));

	default:
		exit("unknown type");
}



?>