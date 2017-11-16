<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

try {
	$probe_helper        = new ProbeLanguages();
	$flipped_probe_array = $probe_helper->get_flipped_probe_array();
	$top_array           = $probe_helper->get_flipped_top_array();
	$db_array            = $probe_helper->get_db_array();
	$reports             = new Reports($db_array, $flipped_probe_array, $top_array, $reporttable, $playertable, $allytable, $dbtablename, $utablename);

	$galaxyview = new Galaxyview($dbtablename, $systemtablename, $playertable, $allytable, $utablename, $reporttable, $fleetmovetable, $noticetable);
	if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_fleetinfo) === true) {
		$fleetmovement = new FleetMovements($fleetmovetable,$playertable,$dbtablename,$flipped_probe_array);
	}

	$status_obj = new StatusInfo($dbtablename, $systemtablename, $utablename, $playertable, $allytable, $reporttable, $noticetable);
	$max_galaxy = $status_obj->getMaxGalaxy();

} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

echo Layout::make_header(VIEW_TITLE,false,"",true);

if (isset($_GET['gala']) && isset($_GET['system']) && is_numeric($_GET['gala']) && is_numeric($_GET['system'])) {
	$galaxy = $_GET['gala'];
	$system = $_GET['system'];
	if ($galaxy < 1) $galaxy = 1;
	if ($galaxy > $max_galaxy) $galaxy = $max_galaxy;
	if ($system < 1) $system = 1;
	if ($system > 499) $system = 499;
} elseif(isset($_SESSION['s_galaxyview_galaxy']) && isset($_SESSION['s_galaxyview_system'])) {
	$galaxy = $_SESSION['s_galaxyview_galaxy'];
	$system = $_SESSION['s_galaxyview_system'];
} else {
	$galaxy = 1;
	$system = 1;
}

$_SESSION['s_galaxyview_galaxy'] = $galaxy;
$_SESSION['s_galaxyview_system'] = $system;

$data         = $galaxyview->get_galaxy_view($galaxy, $system);
$reports      = $galaxyview->get_reports($galaxy, $system);
$sytem_info   = $galaxyview->get_system_info($galaxy, $system);
$phalanx_info = $galaxyview->get_phalanx_info($galaxy, $system);
$irak_info    = $galaxyview->get_irak_info($galaxy, $system);

if (isset($fleetmovement) && is_object($fleetmovement)) {
	$fleet_moves = $fleetmovement->check_fleet_movement($galaxy,$system);
} else {
	$fleet_moves = array();
}

?>
<form action="galaxyview.php" name="viewform" accept-charset="utf-8">
<table cellpadding="0" cellspacing="0" border="0" align="center" style="width: 654px;">
	<tr class="tblhead">
		<td align="right" style="padding-right:20px;"><?php echo VIEW_GALAXY; ?></td>
		<td style="width:30px;">&nbsp;</td>
		<td align="left" style="padding-left:20px;"><?php echo VIEW_SYSTEM; ?></td>
	</tr>
	<tr>
	<td align="right">
		<button dojoType="dijit.form.Button" type="button" name="gback" id="gback" onclick="galaxytool.GalaxyView.galaDown()">&lt;</button>
		<input id="galaxy" tabindex="1" type="text" dojoType="dijit.form.NumberTextBox" name="galaxy"
        		value="<?php echo $galaxy; ?>" constraints="{min:1,max:<?php echo $max_galaxy; ?>,places:0}" required="true" style="width: 33px;">
		<button dojoType="dijit.form.Button" type="button" name="gfwd" id="gfwd" onclick="galaxytool.GalaxyView.galaUp()">&gt;</button>
	</td>
	<td style="width:30px; text-align: center;">
		<button dojoType="dijit.form.Button" type="button" name="go" id="go" onclick="galaxytool.GalaxyView.loadSystem()"><?php echo VIEW_GO; ?></button>
		<img id="loading_icon" src="../images/loading_small.gif" style="display:none;">
	</td>
	<td align="left">
		<button dojoType="dijit.form.Button" type="button" name="sback" id="sback" onclick="galaxytool.GalaxyView.systemDown()">&lt;</button>
		<input id="system" tabindex="2" type="text" dojoType="dijit.form.NumberTextBox" name="system"
        		value="<?php echo $system; ?>" constraints="{min:1,max:499,places:0}" required="true" style="width: 33px;">
		<button dojoType="dijit.form.Button" type="button" name="sfwd" id="sfwd" onclick="galaxytool.GalaxyView.systemUp()">&gt;</button>
	</td>
	</tr>
</table>
</form>


<div id="moon_calculator" style="display:none;">
<div data-dojo-type="dijit.TooltipDialog" closable="true" onMouseLeave="dijit.popup.close(moontooltip);" id="moontooltip">
<table cellspacing="0" style="width:250px;">
	<tr class="standard"><td><?php echo VIEW_MOON_DESTROY_CHANCE; ?></td></tr>
	<tr><td><?php echo VIEW_DIAMETER; ?>:&nbsp;<span id="moonsize_display"></span>&nbsp;km</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><?php echo VIEW_CHANCE_WITH_ONE; ?>: <span id="moon_chance_1">0</span>%</td></tr>
	<tr><td><?php echo VIEW_CHANCE_WITH_N; ?>
		<input id="moonsize" value="1" type="hidden">
		<input id="death_stars" type="text" dojoType="dijit.form.NumberTextBox" text-align: right;" name="galaxy"
				value="2" constraints="{min:1,max:10000,places:0}" required="true" style="width: 33px;"
				onkeyup="galaxytool.GalaxyView.changeMoonDestChance()">

		<?php echo VIEW_DEATH_STARS; ?>: <span id="moon_chance_n">0</span>%</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr class="standard"><td><?php echo VIEW_DS_DESTROY_CHANCE; ?></td></tr>
	<tr><td align="center"><span id="moon_ds_lost"></span>%</td></tr>
	<tr><td>&nbsp;</td></tr>
</table>
</div>
</div>

<div style="display:none;">
	<div data-dojo-type="dijit.TooltipDialog" closable="true" onMouseLeave="dijit.popup.close(reporttooltip);" id="reporttooltip">
		<div id="reporttooltipcontent">
		</div>
	</div>
</div>

<table cellpadding="0" cellspacing="0" border="0" align="center" style="width: 654px;">
<tbody>
<tr>
<td colspan="12" id="galaxy_info" style="text-align: center;">
<?php
if ($sytem_info === false || is_array($sytem_info) && count($sytem_info) == 0) {
	echo VIEW_NODATA;
} else {
	echo ' <div class="system_updated">'.Galaxytool::cleanString($sytem_info['username']).' @ '.$sytem_info['last_update'].'</div>';
}
?>
</td>
</tr>

<tr class="standard" style="display:block; padding-top: 10px; height: 21px;">
<th class="galaxyview_spacer1"><div></div></th>
<th class="galaxyview_pos"><?php echo VIEW_POSITION; ?></th>
<th class="galaxyview_planeticon"></th>
<th class="galaxyview_planet"><?php echo VIEW_PLANET; ?></th>
<th class="galaxyview_moon"><?php echo VIEW_MOON; ?></th>
<th class="galaxyview_spacer2"></th>
<th class="galaxyview_debris"><?php echo VIEW_TF; ?></th>
<th class="galaxyview_player"><?php echo VIEW_PLAYER." ".VIEW_PLAYER_ADD; ?></th>
<th class="galaxyview_ally"><?php echo VIEW_ALLY; ?></th>
<th class="galaxyview_notice">&nbsp;</th>
<th class="galaxyview_report1">&nbsp;</th>
<th class="galaxyview_report2">&nbsp;</th>
</tr>

<?php
$colonies = 0;
for ($i=1; $i<16; $i++) {
	if (!array_key_exists($i, $data)) {
		echo '<tr class="galaxy_row">
		    <td class="galaxyview_spacer1"><div></div></td>
		    <td class="galaxyview_pos"><div id="planetpos_'.$i.'" class="centered_text">'.$i.'</div></td>
			<td id="planeticon_'.$i.'" class="galaxyview_planeticon no_planet"><div></div></td>
			<td style="vertical-align:middle;"><div id="planetname_'.$i.'" class="galaxyview_planet centered_text"></div></td>
			<td id="moon_'.$i.'" class="galaxyview_moon centered_text"></td>
			<td class="galaxyview_spacer2"><div></div></td>
			<td id="debris_'.$i.'" class="galaxyview_debris centered_text" style="font-size:6pt;"></td>
			<td id="player_'.$i.'" class="galaxyview_player centered_text"></td>
			<td id="ally_'.$i.'" class="galaxyview_ally centered_text"></td>
			<td id="notice_'.$i.'" class="galaxyview_notice"></td>
			<td id="reports1_'.$i.'" class="galaxyview_report1"></td>
			<td class="galaxyview_report2" id="reports2_'.$i.'"></td>
			</tr>';
	} else {
		$colonies++;

		$class      = ($data[$i]['diplomatic_status'] != "nothing") ? 'class="bg_'.$data[$i]['diplomatic_status'].' galaxyview_diplomatic_status_overlay centered_text"' : 'class="centered_text"';
		$ally_class = ($data[$i]['dipl_status'] != "nothing") ? 'class="'.$data[$i]['dipl_status'].'"' : "";

		// Fleet Movements
		$fleet_move_icon      = "";
		if (isset($fleet_moves) && $fleet_moves[$data[$i]['planet']]) {
			$fleet_move_icon = '<img class="hyperlink" src="../images/spaceship_right.png" onclick="galaxytool.GalaxyView.showFleetMove('.$galaxy.','.$system.','.$i.')" height="16" width="16" alt="fleet movement" style="vertical-align:bottom" />';
		}

		// Moon data
		$moon_data  = ($data[$i]['moon'] == "true") ? '<img height="30" width="30" src="../images/OGame/moon.gif">' : "";

		// Debris data
		$metal   = ($data[$i]['metal'] > 0)   ? number_format($data[$i]['metal'],0,",",".")   : "";
		$crystal = ($data[$i]['crystal'] > 0) ? number_format($data[$i]['crystal'],0,",",".") : "";
		$metal_display   = ($metal != "") ? "block" : "none";
		$crystal_display = ($crystal != "") ? "block" : "none";

		if ($metal != "" || $crystal != "") {
			$debris_tooltip   = '<div id="debristooltip_'.$i.'" dojoType="dijit.Tooltip" connectId="debris_'.$i.'" position="above"><div style=font-size:10pt;>'.
								'<div>'.SHOW_METAL_LONG.': '.$metal.'</div>'.
								'<div>'.SHOW_CRYSTAL_LONG.': '.$crystal.'</div><br>'.
								REPORTS_FOR_TF.':<br>'.REPORTS_REC.': <span>'.
								number_format(ceil(($data[$i]['metal'] + $data[$i]['crystal']) / 20000),0,",",".").'</span></div></div>';
			$debris_icon      = '<img height="30" width="30" src="../images/OGame/tf_a.gif">';
		} else {
			$debris_tooltip   = "";
			$debris_icon      = '';
		}

		// player data
		if ($data[$i]['playername'] != null) {
			$playername = '<span class="'.Layout::get_player_status_class($data[$i]['banned'],$data[$i]['vacation'],$data[$i]['noob'],$data[$i]['inactive'],$data[$i]['long_inactive'],$data[$i]['outlaw']).'">'. $data[$i]['playername'].'</span>';
			$player_status = Layout::get_player_status_string($data[$i]['banned'],$data[$i]['vacation'],$data[$i]['noob'],$data[$i]['inactive'],$data[$i]['long_inactive'],$data[$i]['outlaw']);
			if ($player_status != "") $player_status = "(".$player_status.")";

			$display_player_details = ($data[$i]['rank'] > 0) ? "block" : "none";
			$player_status_text     = ($data[$i]['rank'] > 0) ? STATS_PLAYERSTATS : SHOW_NOTRANKED;
			if ($data[$i]['banned'] == "true") {
				$data[$i]['rank'] = 0;
				$data[$i]['erank'] = 0;
				$data[$i]['frank'] = 0;
				$data[$i]['rrank'] = 0;
			}

			$player_mouseover = '<div class="'.$data[$i]['diplomatic_status'].'" style="font-size:10pt;">'.$player_status_text."</div>".
								'<div style="display:'.$display_player_details.'">'.
									'<table>'.
									'<tr><td>'.SHOW_RANK.":</td><td>#".$data[$i]['rank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['points'],0,",",".")."</td>".
									'</tr>'.
									'<tr>'.
										'<td>'.STATS_ECONOMY.":</td><td>#".$data[$i]['erank']."</td>".
										'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['epoints'],0,",",".")."</td>".
									'</tr>'.
									'<tr><td>'.STATS_MILITARY.":</td><td>#".$data[$i]['frank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['fpoints'],0,",",".")."</td>".
									'</tr>'.
									'<tr><td>'.STATS_RESEARCH.":</td><td>#".$data[$i]['rrank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['rpoints'],0,",",".")."</td>".
									'</tr>'.
									'<tr><td>'.STATS_HONOUR.":</td><td>#".$data[$i]['hrank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['hpoints'],0,",",".")."</td>".
									'</tr>'.
									'<tr><td>'.STATS_MILITARY_BUILD.":</td><td>#".$data[$i]['fbrank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['fbpoints'],0,",",".")."</td>".
									'</tr>'.
									'<tr><td>'.STATS_MILITARY_DESTROYED.":</td><td>#".$data[$i]['fdrank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['fdpoints'],0,",",".")."</td>".
									'</tr>'.
									'<tr><td>'.STATS_MILITARY_LOST.":</td><td>#".$data[$i]['flrank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['flpoints'],0,",",".")."</td>".
									'</tr>'.
									'</table><br>'.
									STATS_UPDATE.": <span id='pi_lastupdate_".$i."'>".$data[$i]['plastupdate']."</span>".
								"</div>";
		} else {
			// no player but only debris field
			$playername = "";
			$player_status = "";
			$display_player_details = "";
			$player_status_text = "";
			$player_mouseover = "";
		}

		// ally data
		$display_ally_details = ($data[$i]['arank'] > 0) ? "block" : "none";
		$ally_status_text     = ($data[$i]['arank'] > 0) ? STATS_ALLYSTATS : SHOW_NOTRANKED;
		$member_display = (!empty($data[$i]['members'])) ? "block" : "none";

		$ally_mouseover = '<div class="'.$data[$i]['dipl_status'].'" style= "font-size:10pt;">'.$ally_status_text.'</div>'.
							'<div style="display:'.$display_ally_details.'">'.
								'<table>'.
								'<tr><td>'.STATS_MEMBERS.':</td><td colspan="3">'.$data[$i]['members'].'</td>'.
								'</tr>'.
								'<tr><td>'.SHOW_RANK.':</td><td>#'.$data[$i]['arank'].'</td>'.
								'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['apoints'],0,",",".")."</td>".
								'<tr>'.
									'<td>'.STATS_ECONOMY.":</td><td>#".$data[$i]['aerank']."</td>".
									'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['aepoints'],0,",",".")."</td>".
								'</tr>'.
								'<tr><td>'.STATS_MILITARY.":</td><td>#".$data[$i]['afrank']."</td>".
								'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['afpoints'],0,",",".")."</td>".
								'</tr>'.
								'<tr><td>'.STATS_RESEARCH.":</td><td>#".$data[$i]['arrank']."</td>".
								'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['arpoints'],0,",",".")."</td>".
								'</tr>'.
								'<tr><td>'.STATS_HONOUR.":</td><td>#".$data[$i]['ahrank']."</td>".
								'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['ahpoints'],0,",",".")."</td>".
								'</tr>'.
								'<tr><td>'.STATS_MILITARY_BUILD.":</td><td>#".$data[$i]['afbrank']."</td>".
								'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['afbpoints'],0,",",".")."</td>".
								'</tr>'.
								'<tr><td>'.STATS_MILITARY_DESTROYED.":</td><td>#".$data[$i]['afdrank']."</td>".
								'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['afdpoints'],0,",",".")."</td>".
								'</tr>'.
								'<tr><td>'.STATS_MILITARY_LOST.":</td><td>#".$data[$i]['aflrank']."</td>".
								'<td style="padding-left: 5px;">'.STATS_SCORE.":</td><td>".number_format($data[$i]['aflpoints'],0,",",".")."</td>".
								'</tr>'.
								'</table><br>'.
								STATS_UPDATE.": ".$data[$i]['alastupdate'].
							'</div>';


		// Notices
		if ($data[$i]['notice_id'] != null) {
			$notice = '<img class="hyperlink" onClick="galaxytool.GalaxyView.showNoticeContent('.$data[$i]['player_id'].')" src="../images/notice.gif" width="15" height="17" alt="notice" border="0">';
		} else {
			$notice = '<img class="hyperlink" onClick="galaxytool.GalaxyView.createNoticeContent('.$data[$i]['player_id'].')" src="../images/no_notice.gif" width="15" height="17" alt="notice" border="0">';
		}

		// Reports
		$moon = false;
		$planet = false;
		if (array_key_exists($i, $reports)) {
			if (array_key_exists('moon', $reports[$i])) {
				$moon = true;
			}
			if (array_key_exists('planet', $reports[$i])) {
				$planet = true;
			}
		}

		$report_content1 = '';
		$report_content2 = '';
		$coordinates    = $data[$i]['galaxy'].":".$data[$i]['system'].":".$i;
		if ($planet == true) {
			$report_content1 .= '<a href="report.php?coordinates='.$coordinates.'&amp;moon=false" onClick="galaxytool.ReportFetch.showReport(\''.$coordinates.'\',false); return false;"'.
								' onmouseover="galaxytool.ReportFetch.showReport(\''.$coordinates.'\',false,undefined,true);"'.
								' onmouseout="setTimeout(galaxytool.ReportFetch.closeReportTooltipIfNotUsed, 750)">'.
								'<img src="../images/spio.gif" width="15" height="17" alt="combat report" border="0"></a>';
		}
		if ($moon == true) {
			$report_content2 .= '<a href="report.php?coordinates='.$coordinates.'&amp;moon=true" onClick="galaxytool.ReportFetch.showReport(\''.$coordinates.'\',true); return false;"'.
								' onmouseover="galaxytool.ReportFetch.showReport(\''.$coordinates.'\',true,undefined,true);"'.
								' onmouseout="setTimeout(galaxytool.ReportFetch.closeReportTooltipIfNotUsed, 750)">'.
								'<img src="../images/spio.gif" width="15" height="17" alt="combat report" border="0"></a>';
		}

		echo '
			<tr class="galaxy_row">
			<td class="galaxyview_spacer1"><div></div></td>
			<td class="galaxyview_pos"><div id="planetpos_'.$i.'" '.$class.'>'.$i.'</div></td>
			<td id="planeticon_'.$i.'" class="galaxyview_planeticon planet"><div></div></td>
			<td style="vertical-align:middle;"><div id="planetname_'.$i.'" class="galaxyview_planet centered_text">'.$data[$i]['planetname'].' '.$fleet_move_icon.'</div>
			</td>
			<td id="moon_'.$i.'" class="galaxyview_moon centered_text"><span id="moon_calc_'.$i.'" style="cursor: pointer;" onMouseOver="galaxytool.GalaxyView.showMoonCalc(\''.$i.'\');">'.$moon_data.'</span>
			<input id="moonsize_'.$i.'" type="hidden" value="'.$data[$i]['moonsize'].'"></td>
			<td class="galaxyview_spacer2"><div></div></td>
			<td id="debris_'.$i.'" class="galaxyview_debris centered_text" style="font-size:6pt;">
				'.$debris_tooltip.$debris_icon.'
			</td>
			<td id="player_'.$i.'" class="galaxyview_player centered_text">
				<a id="player_anchor_'.$i.'" href="playerinformation.php?id='.urlencode($data[$i]['player_id']).'">'.$playername.'</a><span style="padding-left: 5px;">'.$player_status.'</span>
				<div dojoType="dijit.Tooltip" id="playertooltip_'.$i.'" connectId="player_anchor_'.$i.'" position="above">'.$player_mouseover.'</div>
			</td>
			<td id="ally_'.$i.'" class="galaxyview_ally centered_text"><a id="ally_anchor_'.$i.'" href="allyinformation.php?id='.urlencode($data[$i]['alliance_id']).'"><span '.$ally_class.'>'.$data[$i]['allyname'].'</span></a>
				<div dojoType="dijit.Tooltip" id="allytooltip_'.$i.'" connectId="ally_anchor_'.$i.'" position="above">'.$ally_mouseover.'</div>
			</td>
			<td id="notice_'.$i.'" class="galaxyview_notice notice">'.$notice.'</td>
			<td id="reports1_'.$i.'" class="galaxyview_report1 report1">'.$report_content1.'</td>
			<td class="galaxyview_report2" id="reports2_'.$i.'">'.$report_content2.'</td>
			</tr>
			';
	}
}
?>
</tbody>
</table>
<?php
//echo Layout::start_block(VIEW_TITLE);
?>
<table cellpadding="2" cellspacing="0" border="0" align="center" style="width: 654px; border: 1px solid black;">
<tr><td style="text-align: center; border-bottom: 1px solid black;" colspan="8"><span id="colonies"><?php echo $colonies; ?></span> <?php echo VIEW_COLONISED; ?></td></tr>
<tr>
	<td style="text-align: center;" colspan="8">
		<span class="bg_nothing">&nbsp;&nbsp;</span> <?php echo STATS_NOTHING; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_neutral">&nbsp;&nbsp;</span> <?php echo STATS_NEUTRAL; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_boycott">&nbsp;&nbsp;</span> <?php echo STATS_BOYCOTT; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_nap">&nbsp;&nbsp;</span> <?php echo STATS_NAP; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_ally">&nbsp;&nbsp;</span> <?php echo STATS_ALLIED; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_war">&nbsp;&nbsp;</span> <?php echo STATS_WAR; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_own">&nbsp;&nbsp;</span> <?php echo STATS_OWN; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_wing">&nbsp;&nbsp;</span> <?php echo STATS_WING; ?>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
</tr>
<tr class="standard"><td colspan="8"><?php echo VIEW_MOONPHALANX; ?></td></tr>
<tr>
	<td colspan="8" id="phalanx"><div style="max-width: 640px;"><?php
	if (count($phalanx_info) == 0) {
		echo VIEW_NOMOONS;
	} else {
		foreach ($phalanx_info as $key => $data) {
			$coordinates = $data['galaxy'].':'.$data['system'].':'.$data['planet'];
			echo '<span class="hyperlink '.$data['diplomatic_status'].'" style="margin-left:10px;" onClick="galaxytool.ReportFetch.showReport(\''.$coordinates.'\',true)">'.$coordinates.'</span> ';
		}
	}
	?></div>
	</td>
</tr>
<tr class="standard"><td colspan="8"><?php echo VIEW_IRAKS; ?></td></tr>
<tr>
	<td colspan="8" id="irak"><div style="max-width: 640px;"><?php
	if (count($irak_info) == 0) {
		echo VIEW_NOIRAKS;
	} else {
		foreach ($irak_info as $key => $data) {
			$coordinates = $data['galaxy'].':'.$data['system'].':'.$data['planet'];
			echo '<span class="hyperlink '.$data['diplomatic_status'].'" style="margin-left:10px;" onClick="galaxytool.ReportFetch.showReport(\''.$coordinates.'\',false)">'.$coordinates.'</span> ';
		}
	}
	?></div>
	</td>
</tr>
</table>
<div id="FleetDialog" dojoType="dijit.Dialog" style="min-width: 540px;" title="<?php echo FLEETS_DETAILS; ?>">
	<div dojoType="dijit.layout.ContentPane" id="FleetDialogContent" href="" style="min-height:400px;">
	</div>
</div>
<div id="NoticeDialog" dojoType="dijit.Dialog" style="min-width: 540px;" title="<?php echo NOTICE_TITLE; ?>">
	<img src="../images/edit.png" class="hyperlink" id="NoticeDialogEdit" width="24" height="24">
	<div dojoType="dijit.layout.ContentPane" id="NoticeDialogContent" href="" style="min-height:400px;">
	</div>
</div>
<div id="ReportDialog" dojoType="dijit.Dialog" style="min-width: 740px;" title="">
    <div dojoType="dijit.layout.ContentPane" title="">
    </div>
</div>
<?php
//echo Layout::close_block();
?>
<script type="text/javascript"	src="javascript/notices_AMD.js"></script>
<script type="text/javascript"	src="javascript/report_fetch_AMD.js"></script>
<script type="text/javascript"	src="javascript/galaxyview.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages, true);
?>