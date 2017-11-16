<?php
/**
 * This sript is executed from install or update scripts and cannot use the standard header include
 * as the user is not logged in or the config files are not yet created.
 */
header("content-type: application/json; charset=utf-8");

$fullpath = realpath('.');
// we need to define the Galaxytool_root constant to be able to include the next files
$fullpath = str_replace("/secret/ajax", "", $fullpath); // linux
$fullpath = str_replace('\secret\ajax', "", $fullpath); // windows
define("GALAXYTOOL_ROOT",$fullpath);

session_name(preg_replace("/[^a-zA-Z0-9_]/i", "", GALAXYTOOL_ROOT));
session_start();

require GALAXYTOOL_ROOT . "/secret/includes/classes/ErrorObject.inc.php";
require GALAXYTOOL_ROOT . "/secret/parser/OGameSettingsParser.inc.php";

// check if URL exists
$url = (isset($_POST['ogame_server'])) ? $_POST['ogame_server'] : "";

preg_match('@^(?:https?://)?([^/]+)@i', $url , $result_match); // get host
$result  = null;
$message = null;

if (is_array($result_match) && count($result_match) > 0) {
	$url = $result_match[0];
	if (strpos($url, "http") === false) {
		$url = "http://".$url;
	}
	// generate API path
	$api_universe  = $url . "/api/serverData.xml";
	// extract settings from XML content
	$settings = new OGameSettingsParser();
	$result = $settings->getOGameSettingsFromXML($api_universe);
	
	if ($result === false) {
		$message = $settings->get_error_object();
	}
	if ($result !== false && !array_key_exists("name", $result)) {
		$result['name'] = ""; // to return always "name" property to javascript
	}

} else {
	$message = new ErrorObject(ErrorObject::severity_error, "No host found in $url");
	$result = false;
}

if ($result !== false)  {
	$message = new ErrorObject(ErrorObject::severity_info, "Settings loaded from OGame server. Please check and proceed.");
}
$message_json = ($message != null) ? $message->get_JSON_result() : "null";

echo '{ "result": '.json_encode($result).', "messages": '.$message_json.'}';

?>