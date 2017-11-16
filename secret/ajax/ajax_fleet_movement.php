<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_fleetinfo)) exit("no permission");

try {
	$fleetmovement = new FleetMovements($fleetmovetable,$playertable,$dbtablename,array(1)); // we can fake the array as the content is not needed here
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

if (isset($_GET['fleet_id']) && is_numeric($_GET['fleet_id']) && isset($_GET['sub_fleet_id']) && is_numeric($_GET['sub_fleet_id'])) {
	if (isset($_GET['action']) && $_GET['action'] == "delete" && $_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) === true) {
		$result = $fleetmovement->delete_fleet($_GET['fleet_id'],$_GET['sub_fleet_id']);

		$messages = $fleetmovement->get_error_object();
		$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
		$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
		exit($result);
	}


}
?>