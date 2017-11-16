<?php
$content_type = "text/html";
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_fleetinfo)) exit("no permission");

try {
	$probe_helper = new ProbeLanguages();
	$flipped_probe_array = $probe_helper->get_flipped_probe_array();

	$fleetmovement = new FleetMovements($fleetmovetable,$playertable,$dbtablename,$flipped_probe_array);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

if(isset($_GET['galaxy']) && isset($_GET['system']) && isset($_GET['planet'])) {
	$galaxy = intval($_GET['galaxy']);
	$system = intval($_GET['system']);
	$planet = intval($_GET['planet']);

	$fleets = $fleetmovement->fetch_planet($galaxy,$system,$planet);
} else {
	$fleets = $fleetmovement->fetch_all();
}

?>
<?php
if (count($fleets) == 0) {
	echo Layout::start_block(FLEETS_ACTUAL_FLEETS);
	echo '<div style="width:100%; text-align: center;">'.FLEETS_NO_DATA.'</div>';
	echo Layout::close_block();
	exit();
}

echo Layout::start_block(FLEETS_ACTUAL_FLEETS);
?>
<table id="fleet_movement_table" cellpadding="4" cellspacing="0" border="0" width="100%">
<?php
$i = 0;
$fleet_detail_tooltip = array();
foreach ($fleets as $line) {
	$returning = ($line['returning'] == "true") ? FLEETS_YES : FLEETS_NO;
	$mission = $fleetmovement->get_mission($line['mission']);
	// create array containing fleet text and amount if amount > 0
	$entities = $fleetmovement->get_entities($line);

	$details = '<table class="standard" cellpadding="4" cellspacing="0" border="0" width="100%">'.
	'<tr class=tblhead><td colspan=4>'.FLEETS_DETAILS." [".$line['scantime'].']</td></tr>';

	foreach ($entities as $j => $entity) {
			$entity[1] = number_format($entity[1],0,",",".");
			if ($j % 2 == 0) {
				$details .= '<tr class="firstcolor"><td style="padding-left:20px;">'.$entity[0].':</td><td>'.$entity[1].'</td>';
			} else {
				$details .= '<td>'.$entity[0].':</td><td>'.$entity[1].'</td></tr>';
			}
		}
		if ($j % 2 == 0) {
			// we need to add an empty fleet entry
			$details .= '<td colspan="2">&nbsp;</td></tr>';
		}
		$details .= '</table>';
			array_push($fleet_detail_tooltip,$details);
			if ($i % 2 == 0) {
			$class = "firstcolor";
		} else {
			$class = "secondcolor";
		}
			if ($line['returning'] == "true") {
			$ship_icon = '<img class="hyperlink" onClick="show_fleet_by_id('.$line['fleet_id'].')" id="fleet_tooltip_'.count($fleet_detail_tooltip).'" border="0" src="../images/spaceship_left.png" />';
		} else {
			$ship_icon = '<img class="hyperlink" onClick="show_fleet_by_id('.$line['fleet_id'].')" id="fleet_tooltip_'.count($fleet_detail_tooltip).'" border="0" src="../images/spaceship_right.png" />';
		}
		// planet icons
		$origin_planet_icon      = $fleetmovement->get_planet_icon($line['origin_moon'],$line['origin_planetname']);
		$destination_planet_icon = $fleetmovement->get_planet_icon($line['destination_moon'],$line['destination_planetname'], $line['mission']);

		$arrival_time = explode(" ",$line['arrival_time']);

		$origin_player   = ($line['playername'] != "")        ? $line['playername'] : $line['origin_planetname'];
		$origin_playerid = ($line['playerid'] != "")          ? $line['playerid'] : 0;
		$origin_status   = ($line['diplomatic_status'] != "") ? "class=\"".$line['diplomatic_status']."\"" : "";
		$target_player   = ($line['target_player'] != "")     ? $line['target_player'] : $line['destination_planetname'];
		$target_playerid = ($line['target_playerid'] != "")   ? $line['target_playerid'] : 0;
		$target_status   = ($line['target_status'] != "")     ? "class=\"".$line['target_status']."\"" : "";

		echo '<tr id="fleet_'.$line['fleet_id']."_".$line['sub_fleet_id'].'" class="'.$class.'">'.
		'<td style="padding-left:20px;">'.$arrival_time[1]."<br />".$arrival_time[0]."</td>".
		'<td>'.$mission."</td>".
		"<td>$origin_planet_icon</td>".
		"<td>";
		
		if ($origin_playerid > 0)
			echo "<a href=\"playerinformation.php?id=$origin_playerid\"><span $origin_status>".$origin_player."</span></a>";
		else 
			echo "<span $origin_status>".$origin_player."</span>";
		
		echo "<br /><a class=\"link\" href=\"galaxyview.php?gala=".$line['origin_galaxy']."&amp;system=".$line['origin_system']."\">".$line['origin_galaxy'].":".$line['origin_system'].":".$line['origin_planet']."</a></td>\n".
		"<td>".$ship_icon."</td>".
		"<td>".number_format($line['ships'],0,",",".")."</td>".
		"<td>$destination_planet_icon</td>".
		"<td>";
		
		if ($target_playerid > 0)
			echo "<a href=\"playerinformation.php?id=$target_playerid\"><span $target_status>".$target_player."</span></a>";
		else
			echo "<span $target_status>".$target_player."</span>";
		
		echo "<br /><a class=\"link\" href=\"galaxyview.php?gala=".$line['destination_galaxy']."&amp;system=".$line['destination_system']."\">".$line['destination_galaxy'].":".$line['destination_system'].":".$line['destination_planet']."</a></td>";

		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) === true) {
			echo '<td><img class="hyperlink" src="../images/trash.png" onclick="deleteFleetMovement(\''.$line['fleet_id'].'\',\''.$line['sub_fleet_id'].'\')" border="0" /></td>';
		} else {
			echo "<td>&nbsp;</td>";
		}
		echo "</tr>\n";

		$i++;
	}
	?>
</table>

<?php
	foreach ($fleet_detail_tooltip as $key => $details) {
		echo '<div dojoType="dijit.Tooltip" connectId="fleet_tooltip_'.($key+1).'">'.$details.'</div>'."\n";
	}

echo Layout::close_block();
