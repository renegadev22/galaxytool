<?php
require "_general_header.inc.php";

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("1");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) exit("no permission");

try {
	$userinfo = new UserInfo($dbtablename, $systemtablename, $utablename, $reporttable, $iptablename, $fleetmovetable, $combattable, $messagetable, $playertable, $allytable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

switch ($type) {
	case "all":
		$user = $userinfo->get_user_with_id();

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: [ { id:0, username: '-' },\n";
		foreach ($user as $name => $id) {
			$return_value .= "{ ".
			    " id:'$id',".
				" username: ".json_encode($name).
				" },\n";
		}
		$return_value = substr($return_value,0,strlen($return_value)-2); // remove ,\n
		$return_value .= "]}\n";
		exit($return_value);
	default:
		exit("unknown type");
}



?>