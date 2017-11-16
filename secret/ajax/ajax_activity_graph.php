<?php
$content_type = "text/html";
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_activities)) exit("no permission");

if (!isset($_GET['playerid'])) {
	exit("PlayerID missing");
} else {
	$playerid = intval($_GET['playerid']);
}

$show_galaxy = false;
$show_scans = false;
$show_messages = false;
$show_combats = false;
$show_allypage = false;
$show_manual = false;
$time_from = "";
$time_to = "";
$days = array();
if (isset($_GET['galaxy'])) {
	$show_galaxy = (intval($_GET['galaxy']) == 1) ? true : false;
}
if (isset($_GET['scans'])) {
	$show_scans = (intval($_GET['scans']) == 1) ? true : false;
}
if (isset($_GET['messages'])) {
	$show_messages = (intval($_GET['messages']) == 1) ? true : false;
}
if (isset($_GET['combats'])) {
	$show_combats = (intval($_GET['combats']) == 1) ? true : false;
}
if (isset($_GET['allypage'])) {
	$show_allypage = (intval($_GET['allypage']) == 1) ? true : false;
}
if (isset($_GET['manual'])) {
	$show_manual = (intval($_GET['manual']) == 1) ? true : false;
}
if (isset($_GET['time_from'])
		&& preg_replace("/([0-9]{4,4})\-([0-9]){2,2}\-([0-9]){2,2}/", "",
				$_GET['time_from']) == "") {
	$time_from = $_GET['time_from'];
}
if (isset($_GET['time_to'])
		&& preg_replace("/([0-9]{4,4})\-([0-9]){2,2}\-([0-9]){2,2}/", "",
				$_GET['time_to']) == "") {
	$time_to = $_GET['time_to'];
}
if (isset($_GET['days'])) {
	for ($i = 0; $i < strlen($_GET['days']); $i++) {
		array_push($days, substr($_GET['days'], $i, 1));
	}
}
$view = "day";
if (isset($_GET['weekview'])) {
	$view = "week";
}

$in_statement = array();
if ($show_galaxy)
	array_push($in_statement, 'galaxyview');
if ($show_scans)
	array_push($in_statement, 'scan');
if ($show_messages)
	array_push($in_statement, 'message');
if ($show_combats)
	array_push($in_statement, 'combat_report');
if ($show_allypage)
	array_push($in_statement, 'alliance_page');
if ($show_manual)
	array_push($in_statement, 'manual');

if (count($in_statement) == 0)
	exit(DETAILEDINFO_NODATA);

if ($time_from != "" && $time_to != "") {
	if ($time_to < $time_from)
		exit(DETAILEDINFO_NODATA);
}

$query = "SELECT * FROM $player_activity WHERE player_id=$playerid AND activity_type IN ('"
		. implode("','", $in_statement) . "')";
if ($time_from != "") {
	$query .= " AND activity_date >= " . DB::getDB()->quote($time_from);
}
if ($time_to != "") {
	$query .= " AND activity_date <= " . DB::getDB()->quote($time_to);
}
if (count($days) == 7) {
	// all days selected
	$query .= " AND weekday IN ('" . implode("','", $days) . "')";
} elseif (count($days) > 0) {
	// some days selected
	$query .= " AND weekday IN ('" . implode("','", $days) . "')";
} elseif (!isset($_GET['days']) && $view == "day") {
	// no days selected - we cannot find anything
	exit(DETAILEDINFO_NODATA);
}

//echo $query."<br>";
$stmt = DB::getDB()->query($query);

$activities = array();
if ($view == "day") {
	for ($i = 0; $i < 24 * 4; $i++) {
		$galaxyviews[$i] = 0;
		$scans[$i] = 0;
		$messages[$i] = 0;
		$manual[$i] = 0;
		$combat_reports[$i] = 0;
		$alliance_pages[$i] = 0;
	}

	$max_values = array();
	for ($i = 0; $i < 24 * 4; $i++) {
		$max_values[$i] = 0;
	}

	while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
		switch ($line->minute) {
		case 0:
			$array_index = $line->hour * 4;
			break;
		case 15:
			$array_index = $line->hour * 4 + 1;
			break;
		case 30:
			$array_index = $line->hour * 4 + 2;
			break;
		case 45:
			$array_index = $line->hour * 4 + 3;
			break;
		default:
			exit("Error occurred for invalid minute value $line->minute");
		}

		$max_values[$array_index]++; // count entries for given timeframe regardless of type

		switch ($line->activity_type) {
		case 'galaxyview':
			$galaxyviews[$array_index]++;
			break;
		case 'scan':
			$scans[$array_index]++;
			break;
		case 'message':
			$messages[$array_index]++;
			break;
		case 'manual':
			$manual[$array_index]++;
			break;
		case 'combat_report':
			$combat_reports[$array_index]++;
			break;
		case 'alliance_page':
			$alliance_pages[$array_index]++;
			break;
		default:
			exit(
					"Error occurred: unexpected activity type $line->activity_type");
		}

	}

	$max_value = max($max_values);
	if ($max_value == 0) {
		echo DETAILEDINFO_NODATA;
	} else {

		$url = "https://chart.googleapis.com/chart"
				. "?chxl=0:|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24"
				. // custom labels
				"&chxp=0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24"
				. // Axis Label Positions
				"&chf=bg,s,13181D" . "&chxr=0,0,24|1,0,$max_value"
				. // Axis Range
				"&chxs=0,C4C4C4,11.5,0,lt,C4C4C4|1,C4C4C4,11.5,0,lt,C4C4C4"
				. // Axis Label Styles
				"&chxt=x,y" . // visible axes
				"&chbh=a,0,0" . // Bar Width and Spacing
				"&chs=580x225" . // size
				"&cht=bvs" . // chart type
				"&chco=FFB204,FF0000,C30027,FF6B06,C3D564,F1E804"
				. // Series Colors
				"&chds=0,$max_value,0,$max_value,0,$max_value,0,$max_value,0,$max_value,0,$max_value"
				. // data scaling
				"&chd=t:" . implode(",", $alliance_pages) . "|"
				. implode(",", $scans) . "|" . implode(",", $messages) . "|"
				. implode(",", $manual) . "|" . implode(",", $galaxyviews)
				. "|" . implode(",", $combat_reports);

		echo "<img src=\"$url\" />";

	}

} else {
	// weekly view

	for ($i = 0; $i < 7; $i++) {
		$galaxyviews[$i] = 0;
		$scans[$i] = 0;
		$messages[$i] = 0;
		$manual[$i] = 0;
		$combat_reports[$i] = 0;
		$alliance_pages[$i] = 0;
	}

	$max_values = array();
	for ($i = 0; $i < 7; $i++) {
		$max_values[$i] = 0;
	}

	while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
		$array_index = $line->weekday-1;
		$max_values[$array_index]++; // count entries for given timeframe regardless of type

		switch ($line->activity_type) {
		case 'galaxyview':
			$galaxyviews[$array_index]++;
			break;
		case 'scan':
			$scans[$array_index]++;
			break;
		case 'message':
			$messages[$array_index]++;
			break;
		case 'manual':
			$manual[$array_index]++;
			break;
		case 'combat_report':
			$combat_reports[$array_index]++;
			break;
		case 'alliance_page':
			$alliance_pages[$array_index]++;
			break;
		default:
			exit(
					"Error occurred: unexpected activity type $line->activity_type");
		}

	}

	$max_value = max($max_values);
	if ($max_value == 0) {
		echo DETAILEDINFO_NODATA;
	} else {

		$url = "https://chart.googleapis.com/chart"
				. "?chxl=0:|".DETAILEDINFO_WEEKDAY_MONDAY.
				"|".DETAILEDINFO_WEEKDAY_TUESDAY.
				"|".DETAILEDINFO_WEEKDAY_WEDNESDAY.
				"|".DETAILEDINFO_WEEKDAY_THURSDAY.
				"|".DETAILEDINFO_WEEKDAY_FRIDAY.
				"|".DETAILEDINFO_WEEKDAY_SATURDAY.
				"|".DETAILEDINFO_WEEKDAY_SUNDAY.""
				. // custom labels
				// Axis Label Positions
				"&chf=bg,s,13181D" . "&chxr=0,0,7|1,0,$max_value"
				. // Axis Range
				"&chxs=0,C4C4C4,11.5,0,lt,C4C4C4|1,C4C4C4,11.5,0,lt,C4C4C4"
				. // Axis Label Styles
				"&chxt=x,y" . // visible axes
				"&chbh=a,40,0" . // Bar Width and Spacing
				"&chs=580x225" . // size
				"&cht=bvs" . // chart type
				"&chco=FFB204,FF0000,C30027,FF6B06,C3D564,F1E804"
				. // Series Colors
				"&chds=0,$max_value,0,$max_value,0,$max_value,0,$max_value,0,$max_value,0,$max_value"
				. // data scaling
				"&chd=t:" . implode(",", $alliance_pages) . "|"
				. implode(",", $scans) . "|" . implode(",", $messages) . "|"
				. implode(",", $manual) . "|" . implode(",", $galaxyviews)
				. "|" . implode(",", $combat_reports);

		echo "<img src=\"$url\" />";

	}
}

?>
