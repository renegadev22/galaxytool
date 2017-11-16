<?php
$content_type = "text/html";
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_statusview) !== true)
	exit("no permission");

try {
	$planets    = (isset($_GET['planets'])) ? intval($_GET['planets']) : 1;
	$status_obj = new StatusInfo($dbtablename, $systemtablename, $utablename, $playertable, $allytable, $reporttable, $noticetable);
	$infos = $status_obj->getPlanetsInfo($planets);
} catch (Exception $e) {
	exit("Exception occurred: " . $e->getMessage());
}

echo '<table style="width:100%">';
if ($infos === false || count($infos) == 0) {
	echo "<tr><td>" . SHOW_NOTHING . "</td></tr>";
} else {
	arsort($infos);
	foreach ($infos as $player_id => $data) {
		echo "<tr><td>" . $data[0] . " - <a href=\"playerinformation.php?id=$player_id\">" . $data[1] . "</a></td>";
	}
}
echo '</table>';