<?php
require "_general_header.inc.php";

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("1");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_maintenance) !== true) exit("no permission");

if ($type != "reload_all" && $type != "reload_galaxy" && $type != "reload_stats") exit("unknown type");

spl_autoload_register('AutoLoader::ParserLoader');
ob_start();
$parser = new OGameAPIParser($global_universe, $dbtablename, $systemtablename, $playertable, $allytable, $combattable, $combatparty, $noticetable, $playerhistory, $player_activity, $messagetable, false);

switch ($type) {
	case "reload_all":
		$result = $parser->load_OGame_data($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		break;

	case "reload_galaxy":
		$result = $parser->load_OGame_universe_data($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		break;

	case "reload_stats":
		$result = $parser->load_OGame_statistics_data($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		break;

}


if ($result === true) {
	$messages = new ErrorObject(ErrorObject::severity_info, INSTALL_STEP8_LOAD_DATA_FINISHED);
} else {
	$messages = $parser->get_error_object();
}
$output = ob_get_clean();
if ($output != "") {
	$messages->add_child_message(new ErrorObject(ErrorObject::severity_error, $output));
}

echo '{ result: '.json_encode($result).', messages: '.$messages->get_JSON_result().' }';
exit();
