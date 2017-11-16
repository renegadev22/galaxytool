<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) exit("no permission");

$type = "";
if (isset($_GET['type'])) {
	$type = $_GET['type'];
} elseif(isset($_POST['type'])) {
	$type = $_POST['type'];
}
if ($type == "") exit("type missing");

try {
	$notices    = new Notices($noticetable, $playertable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}


switch ($type) {
	case "update":
		$result = $notices->update_notice($_POST['player_id'], $_POST['textcontent']);
		$messages = $notices->get_error_object();
		if ($messages instanceof ErrorObject) {
			exit($messages->get_JSON_result());
		} else {
			return "Error";
		}


	default:
		exit("unknown type");
}
