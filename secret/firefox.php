<?php
header ("Content-Type:text/xml");
header ("Access-Control-Allow-Origin: *"); // required for Opera 12 to access the XML response
//header("content-type: text/html; charset=utf-8"); // to see what happens even with PHP runtime errors

/*
* first page to be adressed when it comes to XML transfer via firefox extension
*
* Precondition:
* - Content is sent via POST method
*   $_POST['content'] contains the XML content
*   $_POST['type'] is the content type (equal to content_type in header.xsd)
*/
@require "../config/config.php";
@require "../config/attributes.php";
spl_autoload_register('AutoLoader::ParserLoader');

if (isset($_POST['type']) && $_POST['type'] == 'validate') {
	$token    = (isset($_POST['token']))    ? $_POST['token']    : "";
	$validate = new GalaxypluginValidation($utablename, $token, $global_universe);
	if ($validate === false) {
		exit($validate->error_object->get_xml_result($global_universe));
	}
	$result = $validate->get_insert_permissions();
	if ($result === false) {
		exit($validate->error_object->get_xml_result($global_universe));
	}

	// no error occurred - return XML
	exit($result);

}

if (!isset($_POST['content']) || !isset($_POST['type'])) {
	exit("<?xml version=\"1.0\" encoding=\"UTF-8\"?><invalid_call/>");
}
$_POST['content'] = stripslashes($_POST['content']);
/*
 * to trace incoming data

if (1 < 2) {
	switch ($_POST['type']) {
		case 'galaxyview':
			$folder = GALAXYTOOL_ROOT."/tests/performance/xml_data/galaxyview/";
			break;

		default:
			exit("error");
		break;
	}

	$i=1;
	do {
		$filename = $folder . "data".$i.".xml";
		$i++;
	} while(file_exists($filename));
	file_put_contents($filename, $_POST['content']);
}
*/
switch ($_POST['type']) {
	case 'galaxyview':
		$parser = new GalaxyParser($dbtablename,$systemtablename,$allytable,$playertable,$utablename,$player_activity,$global_universe);
		break;

	case 'player_stats':
	case 'player_highscore':
		$parser = new StatsParser($allytable,$playertable,$utablename,$global_universe);
		break;

	case 'ally_stats':
	case 'ally_highscore':
		$parser = new StatsParser($allytable,$playertable,$utablename,$global_universe);
		break;

	case 'allypage':
		$parser = new AllypageParser($allytable,$playertable,$utablename,$player_activity,$global_universe);
		break;

	case 'reports':
		$parser = new ReportParser($reporttable,$dbtablename,$playertable,$utablename,$global_universe);
		break;

	case 'planetinfo':
		$parser = new PlanetinfoParser($reporttable,$dbtablename,$playertable,$utablename,$global_universe);
		break;

	case 'fleet_movement':
		$parser = new FleetMovementParser($fleetmovetable,$utablename,$global_universe);
		break;

	case 'espionage':
		$parser = new EspionageParser($dbtablename,$systemtablename,$utablename, $playertable, $player_activity,$global_universe);
		break;

	case 'message':
		$parser = new MessageParser($messagetable,$utablename,$playertable,$player_activity,$global_universe);
		break;

	case 'combat_report':
		$parser = new CombatParser($combattable,$combatparty,$utablename,$dbtablename,$systemtablename,$playertable,$player_activity,$global_universe);
		break;

	default:
		$msg_obj = new ErrorObject(ErrorObject::severity_error,"invlid type: ".$_POST['type']); // no return code
		exit($msg_obj->get_xml_result($global_universe));
		break;
}

// pass XML content to parser
$result = $parser->insert_data($_POST['content']);

// check result and return to extension
if ($result === true) {
	// everything worked fine
	// check if we collected some messages on the way
	$messages = $parser->get_error_object();
	if ($messages != null) {
		exit($messages->get_xml_result($global_universe));
	} else {
		$msg_obj = new ErrorObject(ErrorObject::severity_error,"Fatal error: we got no return code but result: true"); // no return code
		exit($msg_obj->get_xml_result($global_universe));
	}
} else {
	// we have an unexpected error situation with "return false"
	// check if we collected some messages on the way
	$messages = $parser->get_error_object();
	if ($messages != null) {
		exit($messages->get_xml_result($global_universe));
	} else {
		$msg_obj = new ErrorObject(ErrorObject::severity_error,"Unexpected error occurred with no detailed messages"); // no return code
		exit($msg_obj->get_xml_result($global_universe));
	}
}

?>