<?php
@require "../../../config/config.php";
@require "../../../config/attributes.php";
spl_autoload_register('AutoLoader::ParserLoader');

// validate token
$token    = (isset($_GET['token'])) ? $_GET['token'] : "";
$validate = new GalaxypluginValidation($utablename, $token, $global_universe);
if ($validate === false) {
	exit($validate->error_object->get_plain_message_text($global_universe));
}
$result = $validate->get_insert_permissions();
if ($result === false) {
	exit($validate->error_object->get_plain_message_text($global_universe));
}
if ($validate->isMaintenaceAllowed() === false) {
	exit("E: no permission");
}

if (!isset($_GET['type'])) exit("E: No Type specified. Allowed: reload_all, reload_galaxy, reload_stats");
$type = $_GET['type'];
if ($type != "reload_all" && $type != "reload_galaxy" && $type != "reload_stats") exit("unknown type");

ob_start();
$parser = new OGameAPIParser($global_universe, $dbtablename, $systemtablename, $playertable, $allytable, $combattable, $combatparty, $noticetable, $playerhistory, $player_activity, $messagetable, false);

switch ($type) {
	case "reload_all":
		$result = $parser->load_OGame_data( $validate->getUserId() );
		break;

	case "reload_galaxy":
		$result = $parser->load_OGame_universe_data( $validate->getUserId() );
		break;

	case "reload_stats":
		$result = $parser->load_OGame_statistics_data( $validate->getUserId() );
		break;

}

if ($result === true) {
	$messages = new ErrorObject(ErrorObject::severity_info, "Finished");
} else {
	$messages = $parser->get_error_object();
}
$output = ob_get_clean();
if ($output != "") {
	$messages->add_child_message(new ErrorObject(ErrorObject::severity_error, $output));
}

echo $messages->get_plain_message_text();
