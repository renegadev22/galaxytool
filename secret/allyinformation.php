<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

try {
	$probe_helper         = new ProbeLanguages();
	$flipped_probe_array = $probe_helper->get_flipped_probe_array();
	$top_array           = $probe_helper->get_flipped_top_array();
	$db_array            = $probe_helper->get_db_array();
	$reports             = new Reports($db_array, $flipped_probe_array, $top_array, $reporttable, $playertable, $allytable, $dbtablename, $utablename);

	$msg_obj    = new Messages($messagetable,$noticetable,$playertable);
	$allyinfo   = new AllyInformation($playertable, $allytable, $reporttable);

} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

echo Layout::make_header(DETAILEDINFO_ALLYINFO_TITLE,false,"",true);

if (isset($_GET['id'])) {
	$alliance_id = intval(($_GET['id']));
	$ally_information = $allyinfo->get_basic_ally_information($alliance_id);
	if ($ally_information  !== false) {
		$all_reports = $reports->get_reports_for_alliance($ally_information["ogame_allyid"]);
		$allyinfo->set_ally_reports($alliance_id, $reports->get_reports_for_alliance($ally_information["ogame_allyid"]));
		echo '<script type="text/javascript">
		var report_buffer = '.$allyinfo->get_reports_as_json($reports, $alliance_id).';
		var alliance_member = '.$allyinfo->get_ally_member_as_json($alliance_id).';
		</script>';
		// stats link
		$stats_url = "history.php?a1=".$ally_information['allyname'];
		$ally_members = $ally_information['members'];
?>
<script type="text/javascript"	src="javascript/allyinformation.js"></script>
<div style="width: 90%; margin-left:20px;">
    <div id="tabcontainer" jsId="tabcontainer" dojoType="dijit.layout.TabContainer" style="width: 100%;" doLayout=false>
	     <div id="tab1" jsId="tab1" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_GENERAL; ?>" selected="true">
			<table cellpadding="5" cellspacing="0" border="0" align="center" width="100%">
				<tr>
					<td style="width:200px"><?php echo STATS_ALLYNAME; ?></td>
					<td>
						<a href="<?php echo $stats_url; ?>">
						<span id="pn_<?php echo $alliance_id; ?>" class="<?php echo $ally_information['dipl_status']; ?>" style="text-decoration:underline;"><?php echo $ally_information['allyname']; ?> - (<?php echo STATS_MEMBERS; ?>: <?php echo $ally_members; ?>)</span>
						</a>
<?php
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_diplomatic) === true) {
?>
				<div dojoType="dijit.form.DropDownButton" id="allystatus_button" jsId="allystatus_button">
			    	<span><?php echo STATS_CHANGE_ALLIANCE_STATUS; ?></span>
			        <div dojoType="dijit.Menu">
			        	<div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'nothing')">
			                <?php echo '<span class="nothing">'.STATS_NOTHING."</span>"; ?>
			            </div>
			            <div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'nap')">
			                <?php echo '<span class="nap">'.STATS_NAP."</span>"; ?>
			            </div>
			            <div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'ally')">
			                <?php echo '<span class="ally">'.STATS_ALLIED."</span>";; ?>
			            </div>
			            <div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'war')">
			                <?php echo '<span class="war">'.STATS_WAR."</span>";; ?>
			            </div>
			            <div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'boycott')">
			                <?php echo '<span class="boycott">'.STATS_BOYCOTT."</span>";; ?>
			            </div>
			            <div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'neutral')">
			                <?php echo '<span class="neutral">'.STATS_NEUTRAL."</span>";; ?>
			            </div>
			            <div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'own')">
			                <?php echo '<span class="own">'.STATS_OWN."</span>";; ?>
			            </div>
			            <div dojoType="dijit.MenuItem" onClick="galaxytool.AllyInfo.changeAllyStatus(<?php echo $alliance_id; ?>, 'wing')">
			                <?php echo '<span class="wing">'.STATS_WING."</span>";; ?>
			            </div>
			        </div>
			    </div>
<?php
		}
?>
				</td>
			</tr>
<?php
		$score  = ($ally_information['rank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['rank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['points'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$fscore = ($ally_information['frank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['frank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['fpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$rscore = ($ally_information['rrank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['rrank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['rpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;

		$escore = ($ally_information['erank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['erank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['epoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$hscore = ($ally_information['hrank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['hrank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['hpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$fbscore = ($ally_information['fbrank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['fbrank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['fbpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$fdscore = ($ally_information['fdrank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['fdrank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['fdpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$flscore = ($ally_information['flrank'] > 0) ? DETAILEDINFO_RANK.": ".$ally_information['flrank']." ".DETAILEDINFO_POINTS." ".number_format($ally_information['flpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
?>
		<tr><td><?php echo DETAILEDINFO_SCORE; ?></td><td><?php echo $score; ?></td></tr>
		<tr><td><?php echo STATS_ECONOMY; ?></td><td><?php echo $escore; ?></td></tr>
		<tr><td><?php echo DETAILEDINFO_RESEARCH; ?></td><td><?php echo $rscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY; ?></td><td><?php echo $fscore; ?></td></tr>
		<tr><td><?php echo STATS_HONOUR; ?></td><td><?php echo $hscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY_BUILD; ?></td><td><?php echo $fbscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY_DESTROYED; ?></td><td><?php echo $fdscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY_LOST; ?></td><td><?php echo $flscore; ?></td></tr>
<?php
		$all_coordinates = $allyinfo->get_ally_coordinates($alliance_id);
		$planets = 0;
		$moons   = 0;
		$planet_coordinates = "\n<div>";
		$moon_coordinates   = "\n<div>";
		$num = 0;
		if (is_array($all_coordinates)) {
			$last_galaxy = 0;
			foreach ($all_coordinates as $coordinates_key => $details) {
				if ($last_galaxy != $details['galaxy']) {
					if 	($last_galaxy != 0) {
						$planet_coordinates .= "</div>\n".'<div style="padding-top: 5px">';
						$moon_coordinates .= "</div>\n".'<div style="padding-top: 5px">';;
					}
					$last_galaxy = $details['galaxy'];
				}

				if ($details['moon']) {
					$coordinates_wo_moon = str_replace("M","",$coordinates_key);
					if ($details['report']) {
						$moon_coordinates .= ' <a id="report_id'.$num.'" href="report.php?coordinates='.$coordinates_wo_moon.'&amp;moon=true" style="font-weight:bold;"'.
											 ' onClick="galaxytool.ReportFetch.showReport(\''.$coordinates_wo_moon.'\',true); return false;"'.
											 ' onmouseover="galaxytool.ReportFetch.showReport(\''.$coordinates_wo_moon.'\',true,undefined,true,\'report_id'.$num.'\'); galaxytool.ReportFetch.reportTooltipMouseOver();"'.
											 ' onmouseout="galaxytool.ReportFetch.closeReportTooltip(); setTimeout(galaxytool.ReportFetch.closeReportTooltipIfNotUsed, 750)">'.
											 $coordinates_wo_moon."</a>;";
						$num++;
					} else {
						$moon_coordinates .= " <a href=\"galaxyview.php?gala=".$details['galaxy']."&amp;system=".$details['system']."\">".$coordinates_wo_moon."</a>;";
					}
					$moons++;
				} else {
					if ($details['report']) {
						$planet_coordinates .= ' <a id="report_id'.$num.'" href="report.php?coordinates='.$coordinates_key.'&amp;moon=false" style="font-weight:bold;"'.
											 ' onClick="galaxytool.ReportFetch.showReport(\''.$coordinates_key.'\',false); return false;"'.
											 ' onmouseover="galaxytool.ReportFetch.showReport(\''.$coordinates_key.'\',false,undefined,true,\'report_id'.$num.'\'); galaxytool.ReportFetch.reportTooltipMouseOver();"'.
											 ' onmouseout="galaxytool.ReportFetch.closeReportTooltip(); setTimeout(galaxytool.ReportFetch.closeReportTooltipIfNotUsed, 750)">'.
												$coordinates_key."</a>;";
						$num++;
					} else {
						$planet_coordinates .= " <a href=\"galaxyview.php?gala=".$details['galaxy']."&amp;system=".$details['system']."\">".$coordinates_key."</a>;";
					}
					$planets++;
				}
			}
			if ($planets > 0) {
				$planet_coordinates = substr($planet_coordinates, 0, strlen($planet_coordinates) - 1);
				$planet_coordinates .= "</div>\n";
			}
			if ($moons > 0) {
				$moon_coordinates = substr($moon_coordinates, 0, strlen($moon_coordinates) - 1);
				$moon_coordinates .= "</div>\n";
			}
		}
?>
		<tr><td><?php echo DETAILEDINFO_KNOWN_PLANETS; ?></td><td><?php echo "<strong>".$planets."</strong> - ".$planet_coordinates; ?></td></tr>
		<tr><td><?php echo DETAILEDINFO_MOONS; ?></td><td><?php echo "<strong>".$moons."</strong> - ".$moon_coordinates; ?></td></tr>
<?php
		$phalanx_range = $allyinfo->get_phalanx_ranges($alliance_id);
		if (is_array($phalanx_range)) {
			$phalanx_range = Galaxytool::get_phalanx_range($phalanx_range);
		}
		$i = 0;
		if (!is_array($phalanx_range) || count($phalanx_range) == 0)	{
			echo '<tr><td>'.DETAILEDINFO_PHALANX_AREA.'</td><td>'.DETAILEDINFO_NO_PHALANX_AREA.'</td></tr>';
		} else {
			foreach ($phalanx_range as $galaxy => $text) {
				if ($i == 0) {
					echo '<tr><td>'.DETAILEDINFO_PHALANX_AREA.'</td><td>'.$text.'</td></tr>';
				} else {
					echo '<tr><td>&nbsp;</td><td>'.$text.'</td></tr>';
				}

				$i++;
			}
		}
?>
		</table>
	</div>
	<div id="tab2" jsId="tab2" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_MEMBERS; ?>">
		<table dojoType="dojox.grid.DataGrid" jsId="grid1" id="grid1" escapeHTMLInData="false"
			   style="width: 100%; margin: 5 0 0 0;" clientSort="true" sortinfo="1" autoHeight="true" selectable="true">
			<thead>
				<tr>
					<th width="150px;" field="playername" formatter="galaxytool.AllyInfo.playerFormatter"><?php echo STATS_PLAYERNAME; ?></th>
					<th width="50px;" field="status" formatter="galaxytool.AllyInfo.centeredFormatter"><?php echo STATS_STATUS; ?></th>
					<th width="100px;" field="score" formatter="galaxytool.AllyInfo.scoreFormatter"><?php echo DETAILEDINFO_SCORE; ?></th>
					<th width="100px;" field="economy" formatter="galaxytool.AllyInfo.scoreFormatter"><?php echo STATS_ECONOMY; ?></th>
			 		<th width="100px;" field="fleet" formatter="galaxytool.AllyInfo.scoreFormatter"><?php echo STATS_MILITARY; ?></th>
					<th width="auto" field="research" formatter="galaxytool.AllyInfo.scoreFormatter"><?php echo DETAILEDINFO_RESEARCH; ?></th>
				</tr>
			</thead>
		</table><br> <!-- // br needed to avoid drawing errors in dojo -->
    </div>
<?php
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) == true) {
			$production = $allyinfo->get_production($alliance_id);
?>
			<div id="tab3" jsId="tab3" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_RESOURCES; ?>">
			<table cellpadding="2" cellspacing="0" border="0" align="center" width="100%">
		        <tr><td style="width:200px;">&nbsp;</td><td style="font-weight:bold;"><?php echo DETAILEDINFO_METAL; ?></td><td style="font-weight:bold;"><?php echo DETAILEDINFO_CRYSTAL; ?></td><td style="font-weight:bold;"><?php echo DETAILEDINFO_DEUTERIUM; ?></td></tr>
		        <tr><td><?php echo DETAILEDINFO_RESOURCES_PER_HOUR; ?></td><td><?php echo number_format($production['metal']*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['crystal']*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['deuterium']*$speed_rate,0,",","."); ?></td></tr>
		        <tr><td><?php echo DETAILEDINFO_RESOURCES_PER_DAY; ?></td><td><?php echo number_format($production['metal']*24*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['crystal']*24*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['deuterium']*24*$speed_rate,0,",","."); ?></td></tr>
		        <tr><td><?php echo DETAILEDINFO_RESOURCES_PER_WEEK; ?></td><td><?php echo number_format($production['metal']*24*7*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['crystal']*24*7*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['deuterium']*24*7*$speed_rate,0,",","."); ?></td></tr>
		        <tr><td><?php echo DETAILEDINFO_RESOURCES_PER_MONTH; ?></td><td><?php echo number_format($production['metal']*24*30*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['crystal']*24*30*$speed_rate,0,",","."); ?></td><td><?php echo number_format($production['deuterium']*24*30*$speed_rate,0,",","."); ?></td></tr>
	        </table>
        	</div>
<?php
		}
?>
        <div id="tab4" jsId="tab4" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_GRAPHS; ?>"
			href="ajax/ajax_stats.php?id=<?php echo $alliance_id; ?>&amp;type=graph">
        </div>
<?php


        if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) == true) {

        	$fleetsize = $allyinfo->get_fleetsize($alliance_id);
?>
		<div id="tab5" jsId="tab5" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_FLEET_TAB; ?>">
			<table cellpadding="5" cellspacing="0" border="0" width="100%">
<?php
	echo '
				<tr><td colspan="4">'.DETAILEDINFO_FLEET_DETAIL.'</td></tr>
				<tr><td>'.$flipped_probe_array[F_SMALLCARGOSHIP].'</td><td>'.number_format($fleetsize["kt"],0,",",".").' / ('.number_format($fleetsize["kt"] / $ally_members,1,",",".").')</td><td>'.$flipped_probe_array[F_LARGECARGOSHIP].'</td><td>'.number_format($fleetsize["gt"],0,",",".").' / ('.number_format($fleetsize["gt"] / $ally_members,1,",",".").')</td></tr>
				<tr><td>'.$flipped_probe_array[F_LIGHFIGHTER].'</td><td>'.number_format($fleetsize["lj"],0,",",".").' / ('.number_format($fleetsize["lj"] / $ally_members,1,",",".").')</td><td>'.$flipped_probe_array[F_HEAVYFIGHTER].'</td><td>'.number_format($fleetsize["sj"],0,",",".").' / ('.number_format($fleetsize["sj"] / $ally_members,1,",",".").')</td></tr>
				<tr><td>'.$flipped_probe_array[F_CRUISER].'</td><td>'.number_format($fleetsize["krz"],0,",",".").' / ('.number_format($fleetsize["krz"] / $ally_members,1,",",".").')</td><td>'.$flipped_probe_array[F_BATTLESHIP].'</td><td>'.number_format($fleetsize["ss"],0,",",".").' / ('.number_format($fleetsize["ss"] / $ally_members,1,",",".").')</td></tr>
				<tr><td>'.$flipped_probe_array[F_COLONYSHIP].'</td><td>'.number_format($fleetsize["kolo"],0,",",".").' / ('.number_format($fleetsize["kolo"] / $ally_members,1,",",".").')</td><td>'.$flipped_probe_array[F_RECYCLER].'</td><td>'.number_format($fleetsize["rec"],0,",",".").' / ('.number_format($fleetsize["rec"] / $ally_members,1,",",".").')</td></tr>
				<tr><td>'.$flipped_probe_array[F_ESPIONAGEPROBE].'</td><td>'.number_format($fleetsize["spio"],0,",",".").' / ('.number_format($fleetsize["spio"] / $ally_members,1,",",".").')</td><td>'.$flipped_probe_array[F_BOMBER].'</td><td>'.number_format($fleetsize["bomb"],0,",",".").' / ('.number_format($fleetsize["bomb"] / $ally_members,1,",",".").')</td></tr>
				<tr><td>'.$flipped_probe_array[F_DESTROYER].'</td><td>'.number_format($fleetsize["zerri"],0,",",".").' / ('.number_format($fleetsize["zerri"] / $ally_members,1,",",".").')</td><td>'.$flipped_probe_array[F_DEATHSTAR].'</td><td>'.number_format($fleetsize["ds"],0,",",".").' / ('.number_format($fleetsize["ds"] / $ally_members,1,",",".").')</td></tr>
				<tr><td>'.$flipped_probe_array[F_BATTLECRUISER].'</td><td>'.number_format($fleetsize["skrz"],0,",",".").' / ('.number_format($fleetsize["skrz"] / $ally_members,1,",",".").')</td><td>'.$flipped_probe_array[F_SOLARSATELLITE].'</td><td>'.number_format($fleetsize["sat"],0,",",".").' / ('.number_format($fleetsize["sat"] / $ally_members,1,",",".").')</td></tr>
			';
?>
			</table>
		</div>
	    <div id="tab6" jsId="tab6" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_TECH; ?>">
			<table cellpadding="5" cellspacing="0" border="0" width="100%">
<?php
			$techarray = $allyinfo->get_tech_info($alliance_id);
	echo '
				<tr><td colspan="4">'.DETAILEDINFO_TECH_DETAIL.'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_ESPIONAGE].'</td><td>'.number_format($techarray["spiolvl"],1,",",".").'</td><td>'.$flipped_probe_array[RS_COMPUTER].'</td><td>'.number_format($techarray["computech"] ,1,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_WEAPON].'</td><td>'.number_format($techarray["waffentech"],1,",",".").'</td><td>'.$flipped_probe_array[RS_SHIELDING].'</td><td>'.number_format($techarray["schildtech"],1,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_ARMOUR].'</td><td>'.number_format($techarray["rpz"],1,",",".").'</td><td>'.$flipped_probe_array[RS_ENERGY].'</td><td>'.number_format($techarray["energytech"],1,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_HYPERSPACE].'</td><td>'.number_format($techarray["hypertech"],1,",",".").'</td><td>'.$flipped_probe_array[RS_COMBUSTIONENGINE].'</td><td>'.number_format($techarray["vbt"],1,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_IMPULSEENGINE].'</td><td>'.number_format($techarray["impulse"],1,",",".").'</td><td>'.$flipped_probe_array[RS_HYPERSPACEENGINE].'</td><td>'.number_format($techarray["hra"],1,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_LASER].'</td><td>'.number_format($techarray["lasertech"],1,",",".").'</td><td>'.$flipped_probe_array[RS_ION].'</td><td>'.number_format($techarray["iontech"],1,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_PLASMA].'</td><td>'.number_format($techarray["plasmatech"],1,",",".").'</td><td>'.$flipped_probe_array[RS_IRNETWORK].'</td><td>'.number_format($techarray["forschungsnetz"],1,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_EXPEDITION].'</td><td>'.number_format($techarray["expedition"],1,",",".").'</td><td>'.$flipped_probe_array[RS_GRAVITON].'</td><td>'.number_format($techarray["gravi"],1,",",".").'</td></tr>
		';
?>
			</table>
        </div>
<?php
        }
?>
    </div>
</div>
<?php

	} else {
		// no players within this alliance, or no alliance found
	}
}
?>
<div id="ReportDialog" dojoType="dijit.Dialog" style="min-width: 740px;" title="">
    <div dojoType="dijit.layout.ContentPane" title="">
    </div>
</div>
<div style="display:none;">
	<div data-dojo-type="dijit.TooltipDialog" closable="true" onMouseLeave="dijit.popup.close(reporttooltip);" id="reporttooltip">
		<div id="reporttooltipcontent">
		</div>
	</div>
</div>
<script type="text/javascript" src="javascript/report_fetch_AMD.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages, true);
?>