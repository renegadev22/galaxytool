<?php
$content_type = "text/html";
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) exit("no permission");

if (!isset($_GET['playerid']) || !is_numeric($_GET['playerid'])) exit("playerid missing");
$player_id = intval($_GET['playerid']);

try {
	$notices    = new Notices($noticetable, $playertable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

$notice_content = $notices->get_notice($player_id);
if ($notice_content === false) {
	$error = $notices->get_error_object();
	echo Layout::print_messages($error);
	exit();
} else {
	echo Messages::get_bb_2_html($notice_content['noticetext']);
	exit();
}
