<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) exit("no permission");

if (!isset($_GET['galaxy']) || !isset($_GET['system'])) exit("parameter missing");

$galaxy = intval($_GET['galaxy']);
$system = intval($_GET['system']);

if ($galaxy < 1) $galaxy = 1;
if ($system < 1) $system = 1;

try {
	$galaxyview = new Galaxyview($dbtablename, $systemtablename, $playertable, $allytable, $utablename, $reporttable, $fleetmovetable, $noticetable);
	$fleetmovement = new FleetMovements($fleetmovetable,$playertable,$dbtablename,array()); // report specifics not required here, use emtpy array
} catch (Exception $e) {
	exit("Exception occurred: ".$e->getMessage());
}

$_SESSION['s_galaxyview_galaxy'] = $galaxy;
$_SESSION['s_galaxyview_system'] = $system;

$content      = $galaxyview->get_galaxy_view($galaxy, $system);
$reports      = $galaxyview->get_reports($galaxy, $system);
$sytem_info   = $galaxyview->get_system_info($galaxy, $system);
$phalanx_info = $galaxyview->get_phalanx_info($galaxy, $system);
$irak_info    = $galaxyview->get_irak_info($galaxy, $system);

$fleet_moves = array();
if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_fleetinfo)) {
	$fleet_moves = $fleetmovement->check_fleet_movement($galaxy,$system);
	if (!is_array($fleet_moves)) {
		$error_obj = $fleetmovement->get_error_object();
		if ($error_obj != null) exit( $error_obj->get_plain_message_text() );
		exit("Error occurred");
	}
}

$json = "{\n";
if ($sytem_info === false || is_array($sytem_info) && count($sytem_info) == 0) {
	$json .= "\"username\": \"\",";
	$json .= "\"last_update\": \"\",";
} else {
	$json .= "\"username\": ".json_encode($sytem_info['username']).",";
	$json .= "\"last_update\": ".json_encode($sytem_info['last_update']).",";
}

$json .= "\"planets\": [ \n";
foreach ($content as $pos => $data) {
	$json .= "{";
	foreach ($data as $key => $value) {
		$json .= "\"$key\": ".json_encode($value).",\n";
	}
	if (array_key_exists($pos, $fleet_moves) && $fleet_moves[$pos] === true) {
		$json .= "\"fleetmoves\": true,";
	} else {
		$json .= "\"fleetmoves\": false,";
	}

	if (array_key_exists($pos, $reports)) {
		if (array_key_exists('moon', $reports[$pos])) {
			$json .= "\"moon_report\": true,";
		} else {
			$json .= "\"moon_report\": false,";
		}
		if (array_key_exists('planet', $reports[$pos])) {
			$json .= "\"planet_report\": true,";
		} else {
			$json .= "\"planet_report\": false,";
		}
	} else {
		$json .= "\"moon_report\": false,";
		$json .= "\"planet_report\": false,";
	}

	$json .= "\"pos\": $pos";
	$json .= "},\n";
}
$json = substr($json,0,strlen($json)-2); // remove ,\n
$json .= "],\n";

$json .= "\"phalanx\": [\n";
foreach ($phalanx_info as $key => $data) {
	$json .= "{ \"g\": ".$data['galaxy'].', "s": '.$data['system'].', "p": '.$data['planet'].", \"d\": ".json_encode($data['diplomatic_status'])." },";
}
if (count($phalanx_info) > 0) $json = substr($json,0,strlen($json)-1);
$json .= "],\n";

$json .= "\"irak\": [\n";
foreach ($irak_info as $key => $data) {
	$json .= "{ \"g\": ".$data['galaxy'].', "s": '.$data['system'].', "p": '.$data['planet'].", \"d\": ".json_encode($data['diplomatic_status'])." },";
}
if (count($irak_info) > 0) $json = substr($json,0,strlen($json)-1);
$json .= "]\n";

$json .= "\n}\n";
echo $json;