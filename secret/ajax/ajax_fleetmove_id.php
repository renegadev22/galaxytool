<?php
$content_type = "text/html";
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_fleetinfo)) exit("no permission");

if (!isset($_GET['fleet_id']) || !is_numeric($_GET['fleet_id'])) exit("id missing");


try {
	$probe_helper = new ProbeLanguages();
	$flipped_probe_array = $probe_helper->get_flipped_probe_array();

	$fleetmovement = new FleetMovements($fleetmovetable,$playertable,$dbtablename,$flipped_probe_array);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

$fleets = $fleetmovement->fetch_fleet($_GET['fleet_id']);
if (count($fleets) == 0) {
	echo Layout::start_block(FLEETS_ACTUAL_FLEETS);
	echo '<div style="width:100%; text-align: center;">'.FLEETS_NO_DATA.'</div>';
	echo Layout::close_block();
	exit();
}

if (count($fleets) > 1) {
	$dragosim_acs_link  = $fleetmovement->get_dragosim_acs_link($fleets);
	$osimulate_acs_link = $fleetmovement->get_osimulate_acs_link($fleets);
} else {
	$dragosim_acs_link  = "";
	$osimulate_acs_link = "";
}

echo Layout::start_block(FLEETS_DETAILS." [".$fleets[0]['scantime']."]");

foreach ($fleets as $index => $line) {

	$arrival_time = explode(" ",$line['arrival_time']);

	echo '
	<div dojoType="dijit.TitlePane" title="'.FLEETS_FLEET.": ".($index+1).'" open="true">
	<table id="fleet_'.$line['fleet_id']."_".$line['sub_fleet_id'].'" cellpadding="1" cellspacing="0" border="0" align="center" width="90%">'."\n";

	if ($dragosim_acs_link != "" || $osimulate_acs_link != "") {
		echo '<tr class="tblhead"><td><span class="acs_attack">'.FLEETS_MISSION_ACS_ATTACK."</span></td>".
		'<td colspan="8">
		<div style="display:inline;"><a class="link" href="'.$dragosim_acs_link.'"  target="dragosim">'.REPORTS_DRAGOSIM.'</a></div>
		<div style="display:inline; margin-left: 50px;"><a class="link" href="'.$osimulate_acs_link.'"  target="osimulate">'.REPORTS_OSIMULATE.'</a></div>
		</td></tr>'."\n";
	}

	$returning = ($line['returning'] == "true") ? FLEETS_YES : FLEETS_NO;
	$mission = $fleetmovement->get_mission($line['mission']);
	// create array containing fleet text and amount if amount > 0
	$entities = $fleetmovement->get_entities($line);
	$speedsim_link  = $fleetmovement->get_speedsimlink($line);
	$dragosim_link  = $fleetmovement->get_dragosimlink($line);
	$osimulate_link = $fleetmovement->get_osimulatelink($line);

	if ($line['returning'] == "true") {
		$ship_icon = '<img src="../images/spaceship_left.png" />';
	} else {
		$ship_icon = '<img src="../images/spaceship_right.png" />';
	}

	// planet icons
	$origin_planet_icon      = $fleetmovement->get_planet_icon($line['origin_moon'],$line['origin_planetname']);
	$destination_planet_icon = $fleetmovement->get_planet_icon($line['destination_moon'],$line['destination_planetname'], $line['mission']);

	$origin_player = ($line['playername'] != "") ? $line['playername'] : $line['origin_planetname'];
	$origin_playerid = ($line['playerid'] != "")          ? $line['playerid'] : 0;
	$origin_status = ($line['diplomatic_status'] != "") ? "class=\"".$line['diplomatic_status']."\"" : "";
	$target_player = ($line['target_player'] != "") ? $line['target_player'] : $line['destination_planetname'];
	$target_playerid = ($line['target_playerid'] != "")   ? $line['target_playerid'] : 0;
	$target_status = ($line['target_status'] != "") ? "class=\"".$line['target_status']."\"" : "";

	echo '<tr class="firstcolor">'.
	'<td>'.$arrival_time[1]."<br />".$arrival_time[0]."</td>".
	'<td>'.$mission."</td>".
	"<td>$origin_planet_icon</td>";
	
	echo "<td>";
	if ($origin_playerid > 0)
		echo "<a href=\"playerinformation.php?id=$origin_playerid\"><span $origin_status>".$origin_player."</span></a>";
	else
		echo "<span $origin_status>".$origin_player."</span>";
	echo "<br /><a class=\"link\" href=\"galaxyview.php?gala=".$line['origin_galaxy']."&amp;system=".$line['origin_system']."\">".$line['origin_galaxy'].":".$line['origin_system'].":".$line['origin_planet']."</a></td>\n".
	
	"<td>".$ship_icon."</td>".
	"<td>".number_format($line['ships'],0,",",".")."</td>".
	"<td>$destination_planet_icon</td>";
	
	echo "<td>";
	if ($target_playerid > 0)
		echo "<a href=\"playerinformation.php?id=$target_playerid\"><span $target_status>".$target_player."</span></a>";
	else
		echo "<span $target_status>".$target_player."</span>";
	
	echo "<br /><a class=\"link\" href=\"galaxyview.php?gala=".$line['destination_galaxy']."&amp;system=".$line['destination_system']."\">".$line['destination_galaxy'].":".$line['destination_system'].":".$line['destination_planet']."</a></td>";
	
	
	if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) === true) {
		echo "<td><img class=\"hyperlink\" src=\"../images/trash.png\" onclick=\"deleteFleetMovement('".$line['fleet_id']."','".$line['sub_fleet_id']."')\" border=\"0\" /></td>";
	}
	echo "</tr>\n";

	echo '<tr><td colspan="9">';

	echo '<table class="standard" cellpadding="0" cellspacing="3" border="0" align="center" style="width:600px;">';

	$j = 0;
	foreach ($entities as $j => $entity) {
		$entity[1] = number_format($entity[1],0,",",".");
		if ($j % 2 == 0) {
			echo '<tr class="firstcolor"><td style="width:175px;">'.$entity[0].':</td><td style="width:100px;">'.$entity[1].'</td>';
		} else {
			echo '<td style="width:175px;">'.$entity[0].':</td><td style="width:100px;">'.$entity[1].'</td></tr>';
		}
	}
	if ($j % 2 == 0) {
		// we need to add an empty fleet entry
		echo '<td colspan="2">&nbsp;</td></tr>';
	}

	echo "<tr><td class=\"tblhead\" colspan=\"4\">";
	echo "<div style=\"display:inline;\"><a class=\"link\" href=\"$speedsim_link\"  target=\"speedsim\">".REPORTS_SPEEDSIM."</a></div>";
	echo "<div style=\"display:inline; margin-left: 50px;\"><a class=\"link\" href=\"$dragosim_link\"  target=\"dragosim\">".REPORTS_DRAGOSIM."</a></div>";
	echo "<div style=\"display:inline; margin-left: 50px;\"><a class=\"link\" href=\"$osimulate_link\"  target=\"osimulate\">".REPORTS_OSIMULATE."</a></div>";
	echo "</td></tr>";
	
	echo '</table></td></tr>';

	echo '</table></div>'."\n";

	$dragosim_link = ""; // to have this displayed only once
}

echo '<div class="hyperlink" style="text-align:center" onClick="show_all_fleets()">'.FLEETS_ALL_FLEETS.'</div>'; ;

echo Layout::close_block();

?>
