<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) !== true) exit("no permission");

try {
	$userinfo_obj = new UserInfo($dbtablename, $systemtablename, $utablename, $reporttable, $iptablename, $fleetmovetable, $combattable, $messagetable, $playertable, $allytable);
} catch (Exception $e) {
	exit($e->getMessage());
}

if (!isset($_GET['userid'])) exit("userid missing");
$userid = intval($_GET['userid']);

$content = $userinfo_obj->getIPDetails($userid);
echo $content;

?>