<?php

// check if user is logged in
if (!isset($_SESSION['s_serverurl']) || (isset($_SESSION['s_serverurl']) && (strpos($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'],$_SESSION['s_serverurl']) === false))) {
	$path = $_SERVER['PHP_SELF'];
	$pos = strrpos($path,"/");
	$path = substr($path,0,$pos+1);

	$error_page_code = "timeout";
	if (!isset($NO_PAGE_FORWARD)) {
		include GALAXYTOOL_ROOT."/secret/errorpage.php";
		exit();
	}	
}
if (session_name() != preg_replace("/[^a-zA-Z0-9_]/i", "", GALAXYTOOL_ROOT)) {
	exit("Session ID does not match. Session ID and name properly defined before session start?");
}
if (!isset($_SESSION['s_loggedin']) || ($_SESSION['s_loggedin'] == false)) {
	$error_page_code = "timeout";
	if (!isset($NO_PAGE_FORWARD)) {
		include GALAXYTOOL_ROOT."/secret/errorpage.php";
		exit();
	}
}

// check if session belongs to an outdated Galaxytool version (before upgrade)
if (isset($_SESSION['s_auth']) && $_SESSION['s_auth']->get_logon_version() != VERSION) {
	$error_page_code = "timeout";
	if (!isset($NO_PAGE_FORWARD)) {
		include GALAXYTOOL_ROOT."/secret/errorpage.php";
		exit();
	}
}

// Update last action time at DB if config file was loaded before; Config file is not loaded if no DB connection is required
// do not update last_action in ajax requests
if (strpos($_SERVER['PHP_SELF'], "/ajax_") === false) {
	if (isset($_SESSION['s_auth']) && isset($utablename) && is_numeric($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid))) {
		$query = "UPDATE $utablename SET last_action=now() WHERE id=:user_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":user_id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		$stmt->execute();
	}
}

?>