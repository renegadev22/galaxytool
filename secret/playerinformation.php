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
	$playerinfo = new PlayerInformation($playertable, $allytable, $noticetable, $playerhistory, $reporttable);


echo Layout::make_header(DETAILEDINFO_PLAYERINFO_TITLE,false,"",true);

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_activities) === true) {
	// include dojo file needed for activities
	echo '<script type="text/javascript" src="javascript/activity.js"></script>';
}

if (isset($_GET['ogame_id'])) {
	$_GET['id'] = $playerinfo->get_playerid_for_ogame_id($_GET['ogame_id']);
	if ($_GET['id'] === false) unset($_GET['id']);
}

if (isset($_GET['id'])) {
	$player_id = intval(($_GET['id']));
	$player_information = $playerinfo->get_basic_player_information($player_id);
	if ($player_information  !== false) {
		$previous_alliances = $playerinfo->get_previous_alliances($player_id);
		$playerinfo->set_player_reports($player_id, $reports->get_reports_for_player($player_information["ogame_playerid"]));
		echo '<script type="text/javascript">
		var report_buffer = '.$playerinfo->get_reports_as_json($reports, $player_id).';
		var player_moon_data = '.$playerinfo->get_report_data_as_json($flipped_probe_array, $top_array, $player_id, true).';
		var player_planet_data = '.$playerinfo->get_report_data_as_json($flipped_probe_array, $top_array, $player_id, false).';
		var player_id = '.$player_id.';
		</script>';

		// stats link
		$stats_url = "history.php?p1=".$player_information['playername'];
		$player_status = Layout::get_player_status_string($player_information['banned'],$player_information['vacation'],$player_information['noob'],$player_information['inactive'],$player_information['long_inactive'],$player_information['outlaw']);
?>
<script type="text/javascript"	src="javascript/playerinformation.js"></script>
<div style="width: 90%; margin-left:20px;">
    <div id="tabcontainer" jsId="tabcontainer" dojoType="dijit.layout.TabContainer" doLayout=false style="width: 100%;">
	     <div id="tab1" jsId="tab1" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_GENERAL; ?>" selected="true">

		<table cellpadding="5" cellspacing="0" border="0" align="center" width="90%"><tr><td>
		<tr>
			<td style="width:250px;"><?php echo STATS_PLAYERNAME; ?></td>
			<td>
				<a href="<?php echo $stats_url; ?>">
				<span id="pn_<?php echo $player_id; ?>" class="<?php echo $player_information['diplomatic_status']; ?>" style="text-decoration:underline;"><?php echo $player_information['playername']; ?></span>
				</a>&nbsp;<?php echo $player_status; ?>

<?php
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_diplomatic) === true) {
?>
	<div dojoType="dijit.form.DropDownButton" id="playerstatus_button" jsId="playerstatus_button">
    <span><?php echo STATS_CHANGE_PLAYER_STATUS; ?></span>
    <div dojoType="dijit.Menu">
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'nothing')">
                <?php echo '<span class="nothing">'.STATS_NOTHING."</span>"; ?>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'nap')">
                <?php echo '<span class="nap">'.STATS_NAP."</span>"; ?>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'ally')">
                <?php echo '<span class="ally">'.STATS_ALLIED."</span>"; ?>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'war')">
                <?php echo '<span class="war">'.STATS_WAR."</span>"; ?>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'boycott')">
                <?php echo '<span class="boycott">'.STATS_BOYCOTT."</span>"; ?>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'neutral')">
                <?php echo '<span class="neutral">'.STATS_NEUTRAL."</span>"; ?>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'own')">
                <?php echo '<span class="own">'.STATS_OWN."</span>"; ?>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool.PlayerInfo.changePlayerStatus(<?php echo $player_id; ?>, 'wing')">
                <?php echo '<span class="wing">'.STATS_WING."</span>"; ?>
    </div>
    </div>
    </div>
<?php
		}
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) === true) {
			echo '<img id="delete_icon" src="../images/trash.png" style="cursor: pointer; vertical-align: middle;" onClick="galaxytool.PlayerInfo.deletePlayer('.$player_id.')">';
			//echo htmlentities('<tr><td colspan="2" style="padding-left:10px;"><a href="#" onclick="requestPage(\\\'ajax/ajax_stats.php?type=player_delete&amp;player_id='.$player_id.'\\\',true,\\\'').utf8_encode(STATS_CONFIRM_DELETE).htmlentities('\\\')">').utf8_encode(STATS_DELETE).htmlentities('</a></td></tr>');
		}
?>
		</td></tr>
<?php
		if (!empty($player_information['allyname'])) {
?>
			<tr><td><?php echo STATS_ALLYNAME; ?></td><td class="<?php echo $player_information['a_dipl_status']; ?>"><a href="allyinformation.php?id=<?php echo $player_information['alliance_id']; ?>" style="text-decoration:underline;"><?php echo $player_information['allyname']; ?></a> (<?php echo STATS_MEMBERS; ?>: <?php echo $player_information['members']; ?>)</td></tr>
<?php
		} else {
?>
			<tr><td><?php echo STATS_ALLYNAME; ?></td><td><?php echo DETAILEDINFO_NO_ALLIANCE; ?></td></tr>
<?php
		}

		$score  = ($player_information['rank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['rank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['points'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$fscore = ($player_information['frank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['frank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['fpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$rscore = ($player_information['rrank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['rrank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['rpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;

		$escore = ($player_information['erank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['erank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['epoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$hscore = ($player_information['hrank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['hrank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['hpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$fbscore = ($player_information['fbrank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['fbrank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['fbpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$fdscore = ($player_information['fdrank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['fdrank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['fdpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;
		$flscore = ($player_information['flrank'] > 0) ? DETAILEDINFO_RANK.": ".$player_information['flrank']." ".DETAILEDINFO_POINTS." ".number_format($player_information['flpoints'],0,",",".") : DETAILEDINFO_UNKNOWN;

		$defence = $player_information['fpoints'] - $player_information['points'] + $player_information['rpoints'] + $player_information['epoints'];
		if ($defence < 0) $defence = 0;
		$defence = number_format($defence,0,",",".");
		if ($player_information['ships'] > 0) {
			$scores_per_ship = number_format(($player_information['fpoints'] - $defence) / $player_information['ships'] ,0,",",".");
		} else {
			$scores_per_ship = DETAILEDINFO_UNKNOWN;
		}
		$ships = number_format($player_information['ships'] ,0,",",".");

?>
		<tr><td><?php echo DETAILEDINFO_SCORE; ?></td><td><?php echo $score; ?></td></tr>
		<tr><td><?php echo STATS_ECONOMY; ?></td><td><?php echo $escore; ?></td></tr>
		<tr><td><?php echo DETAILEDINFO_RESEARCH; ?></td><td><?php echo $rscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY; ?></td><td><?php echo $fscore; ?></td></tr>
		<tr><td><?php echo STATS_HONOUR; ?></td><td><?php echo $hscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY_BUILD; ?></td><td><?php echo $fbscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY_DESTROYED; ?></td><td><?php echo $fdscore; ?></td></tr>
		<tr><td><?php echo STATS_MILITARY_LOST; ?></td><td><?php echo $flscore; ?></td></tr>
		<tr><td><?php echo DETAILEDINFO_SHIPS; ?></td><td><?php echo $ships; ?></td></tr>
		<tr><td><?php echo DETAILEDINFO_DEFENCE_SCORE; ?></td>
			<td>
			<span id="TooltipDefenceScore" class="hyperlink" onmouseover="dijit.Tooltip.defaultPosition=['above', 'below']"><?php echo $defence; ?></span>
			<div class="dijitHidden"><span data-dojo-type="dijit.Tooltip" data-dojo-props="connectId:'TooltipDefenceScore'"><?php echo DETAILEDINFO_DEFENCE_SCORE_TOOLTIP; ?></span></div>
			</td>
		</tr>
		<tr><td><?php echo DETAILEDINFO_SCORE_PER_SHIP; ?></td><td><?php echo $scores_per_ship; ?></td></tr>
		<tr><td><?php echo USER_BB_OUTLAW; ?></td><td><?php echo ($player_information['bandit'] == "true") ? SHOW_YES : SHOW_NO; ?></td></tr>

<?php

		if ($player_information['homegalaxy'] > 0) {
			$home_coordinates = $player_information['homegalaxy'].':'.$player_information['homesystem'].':'.$player_information['homeplanet'];
		echo '
		<tr><td>'.DETAILEDINFO_HOME_PLANET.'</td><td><a href="galaxyview.php?gala='.$player_information['homegalaxy'].'&system='.$player_information['homesystem'].'">'.$home_coordinates.'</a></td></tr>
		';
		} else {
		echo '
		<tr><td>'.DETAILEDINFO_HOME_PLANET.'</td><td>'.DETAILEDINFO_UNKNOWN.'</td></tr>
		';
		}

		$all_coordinates = $playerinfo->get_player_coordinates($player_id);

		$planets = 0;
		$moons   = 0;
		$planet_coordinates = "";
		$moon_coordinates   = "";
		$num = 0;
		if (is_array($all_coordinates)) {
			foreach ($all_coordinates as $coordinates_key => $details) {
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
			if ($planets > 0) $planet_coordinates = substr($planet_coordinates, 0, strlen($planet_coordinates) - 1);
			if ($moons > 0) $moon_coordinates = substr($moon_coordinates, 0, strlen($moon_coordinates) - 1);
		}
?>
	<tr><td><?php echo DETAILEDINFO_KNOWN_PLANETS; ?></td><td><?php echo "<strong>".$planets."</strong> - ".$planet_coordinates; ?></td></tr>
	<tr><td><?php echo DETAILEDINFO_MOONS; ?></td><td><?php echo "<strong>".$moons."</strong> - ".$moon_coordinates; ?></td></tr>
<?php
		$phalanx_range = $playerinfo->get_phalanx_ranges($player_id);
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
	<tr><td valign="top"><?php echo DETAILEDINFO_PREVIOUS_ALLIANCES; ?></td><td><?php
	foreach ($previous_alliances as $allyid => $allyname) {
		echo '<a href="allyinformation.php?id='.$allyid.'">'.$allyname.'</a><br/>';
	}
	?></td></tr>
	<tr><td valign="top"><?php echo DETAILEDINFO_PLAYER_MESSAGES; ?></td><td>
<?php
		if ($msg_obj->get_message_count($player_id) > 0) {
			echo '<a href="messages.php?playerid='.$player_id.'">'.DETAILEDINFO_SHOW.'</a>';
		} else {
			echo DETAILEDINFO_NONE;
		}
?>
	</td></tr>

<?php
		if ($player_information['noticetext'] != NULL)	{
			echo '<tr><td valign="top">'.DETAILEDINFO_NOTICES.'<div class="hyperlink" onclick="dijit.byId(\'NoticeDialog\').show();"><img src="../images/edit.png"></div></td>'.
			     '<td><div id="PlayerNoticeContent" dojoType="dijit.layout.ContentPane">'.Messages::get_bb_2_html(utf8_decode($player_information['noticetext'])).'</div></td></tr>';
		} else {
			echo '<tr><td valign="top">'.DETAILEDINFO_NOTICES.'<div><a href="notices.php?player_id='.$player_id.'&action=edit"><img src="../images/edit.png"></a></div></td><td>'.DETAILEDINFO_NO_NOTICES.'</td></tr>';
		}
?>
		</table>
        </div>
<?php
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) === true) {
?>
	        <div id="tab2" jsId="tab2" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_RESOURCES; ?>">
			<table cellpadding="5" cellspacing="0" border="0" width="100%">
<?php
		$production = $playerinfo->get_production($player_id);
		echo '
			<tr><td style="width:250px;">&nbsp;</td><td style="font-weight:bold;">'.DETAILEDINFO_METAL.'</td><td style="font-weight:bold;">'.DETAILEDINFO_CRYSTAL.'</td><td style="font-weight:bold;">'.DETAILEDINFO_DEUTERIUM.'</td></tr>
			<tr><td>'.DETAILEDINFO_RESOURCES_PER_HOUR.'</td><td>'.number_format($production['metal']*$speed_rate,0,",",".").'</td><td>'.number_format($production['crystal']*$speed_rate,0,",",".").'</td><td>'.number_format($production['deuterium']*$speed_rate,0,",",".").'</td></tr>
			<tr><td>'.DETAILEDINFO_RESOURCES_PER_DAY.'</td><td>'.number_format($production['metal']*24*$speed_rate,0,",",".").'</td><td>'.number_format($production['crystal']*24*$speed_rate,0,",",".").'</td><td>'.number_format($production['deuterium']*24*$speed_rate,0,",",".").'</td></tr>
			<tr><td>'.DETAILEDINFO_RESOURCES_PER_WEEK.'</td><td>'.number_format($production['metal']*24*7*$speed_rate,0,",",".").'</td><td>'.number_format($production['crystal']*24*7*$speed_rate,0,",",".").'</td><td>'.number_format($production['deuterium']*24*7*$speed_rate,0,",",".").'</td></tr>
			<tr><td>'.DETAILEDINFO_RESOURCES_PER_MONTH.'</td><td>'.number_format($production['metal']*24*30*$speed_rate,0,",",".").'</td><td>'.number_format($production['crystal']*24*30*$speed_rate,0,",",".").'</td><td>'.number_format($production['deuterium']*24*30*$speed_rate,0,",",".").'</td></tr>
		';
?>
			</table>
	        </div>
			<div id="tab3" jsId="tab3" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_FLEET_TAB; ?>">

			<table cellpadding="5" cellspacing="0" border="0" width="100%">
<?php

		$fleetsize = $playerinfo->get_fleetsize($player_id);
		echo '
				<tr><td colspan="4">'.DETAILEDINFO_FLEET_DETAIL.'</td></tr>
				<tr><td>'.$flipped_probe_array[F_SMALLCARGOSHIP].'</td><td>'.number_format($fleetsize["kt"],0,",",".").'</td><td>'.$flipped_probe_array[F_LARGECARGOSHIP].'</td><td>'.number_format($fleetsize["gt"],0,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[F_LIGHFIGHTER].'</td><td>'.number_format($fleetsize["lj"],0,",",".").'</td><td>'.$flipped_probe_array[F_HEAVYFIGHTER].'</td><td>'.number_format($fleetsize["sj"],0,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[F_CRUISER].'</td><td>'.number_format($fleetsize["krz"],0,",",".").'</td><td>'.$flipped_probe_array[F_BATTLESHIP].'</td><td>'.number_format($fleetsize["ss"],0,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[F_COLONYSHIP].'</td><td>'.number_format($fleetsize["kolo"],0,",",".").'</td><td>'.$flipped_probe_array[F_RECYCLER].'</td><td>'.number_format($fleetsize["rec"],0,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[F_ESPIONAGEPROBE].'</td><td>'.number_format($fleetsize["spio"],0,",",".").'</td><td>'.$flipped_probe_array[F_BOMBER].'</td><td>'.number_format($fleetsize["bomb"],0,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[F_DESTROYER].'</td><td>'.number_format($fleetsize["zerri"],0,",",".").'</td><td>'.$flipped_probe_array[F_DEATHSTAR].'</td><td>'.number_format($fleetsize["ds"],0,",",".").'</td></tr>
				<tr><td>'.$flipped_probe_array[F_BATTLECRUISER].'</td><td>'.number_format($fleetsize["skrz"],0,",",".").'</td><td>'.$flipped_probe_array[F_SOLARSATELLITE].'</td><td>'.number_format($fleetsize["sat"],0,",",".").'</td></tr>
			';
?>
			</table>
        	</div>
	        <div id="tab4" jsId="tab4" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_TECH; ?>">
			<table cellpadding="5" cellspacing="0" border="0" width="100%">
<?php
		echo '
				<tr><td>'.$flipped_probe_array[RS_ESPIONAGE].'</td><td>'.$player_information['spiolvl'].'</td><td>'.$flipped_probe_array[RS_COMPUTER].'</td><td>'.$player_information['computech'].'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_WEAPON].'</td><td>'.$player_information['waffentech'].'</td><td>'.$flipped_probe_array[RS_SHIELDING].'</td><td>'.$player_information['schildtech'].'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_ARMOUR].'</td><td>'.$player_information['rpz'].'</td><td>'.$flipped_probe_array[RS_ENERGY].'</td><td>'.$player_information['energytech'].'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_HYPERSPACE].'</td><td>'.$player_information['hypertech'].'</td><td>'.$flipped_probe_array[RS_COMBUSTIONENGINE].'</td><td>'.$player_information['vbt'].'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_IMPULSEENGINE].'</td><td>'.$player_information['impulse'].'</td><td>'.$flipped_probe_array[RS_HYPERSPACEENGINE].'</td><td>'.$player_information['hra'].'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_LASER].'</td><td>'.$player_information['lasertech'].'</td><td>'.$flipped_probe_array[RS_ION].'</td><td>'.$player_information['iontech'].'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_PLASMA].'</td><td>'.$player_information['plasmatech'].'</td><td>'.$flipped_probe_array[RS_IRNETWORK].'</td><td>'.$player_information['forschungsnetz'].'</td></tr>
				<tr><td>'.$flipped_probe_array[RS_EXPEDITION].'</td><td>'.$player_information['expedition'].'</td><td>'.$flipped_probe_array[RS_GRAVITON].'</td><td>'.$player_information['gravi'].'</td></tr>
			';
?>
			</table>
	        </div>
<?php
			if ($playerinfo->player_has_planet_info($player_id)) {
?>
	        <div id="tab5" jsId="tab5" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_PLANET_TAB; ?>">
	        	<span dojoType="dojo.data.ItemFileReadStore" jsId="planetstore" url=""> </span>
				<table dojoType="dojox.grid.DataGrid" id="planetgrid" jsId="planetgrid" store="planetstore" escapeHTMLInData="false"
					canSort="false" autoHeight=100 selectable="true">
					<thead>
						<tr>
							<th width="150px" field="c0">&nbsp;</th>
							<th width="75px" field="c1">&nbsp;</th>
						</tr>
					</thead>
				</table>
	        </div>
<?php
			}
			if ($playerinfo->player_has_moon_info($player_id)) {
?>
	        <div id="tab6" jsId="tab6" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_MOON_TAB; ?>">
	        	<span dojoType="dojo.data.ItemFileReadStore" jsId="moonstore" url=""> </span>
				<table dojoType="dojox.grid.DataGrid" id="moongrid" jsId="moongrid" store="moonstore" escapeHTMLInData="false"
					canSort="false" autoHeight=100 selectable="true">
					<thead>
						<tr>
							<th width="150px" field="c0">&nbsp;</th>
							<th width="75px" field="c1">&nbsp;</th>
						</tr>
					</thead>
				</table>
	        </div>
<?php
			}

        } // probeview == true
        if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_activities) === true) {
?>
	        <div id="tab7" jsId="tab7" dojoType="dijit.layout.ContentPane" title="<?php echo DETAILEDINFO_ACTIVITIES; ?>"
	        	href="ajax/ajax_activities.php?playerid=<?php echo $player_id."&amp;playername=".$player_information['playername']; ?>">
				...
	        </div>
<?php
        }
?>
    </div>
</div>
<?php
	}	// no player with this ID found
}
?>
<div style="height:40px;"></div>
<div id="ReportDialog" dojoType="dijit.Dialog" style="min-width: 740px;" title="">
    <div dojoType="dijit.layout.ContentPane" title="">
    </div>
</div>
<div id="NoticeDialog" dojoType="dijit.Dialog" style="min-width: 700px;" title="<?php echo NOTICE_HEADER . " [" . $player_information['playername'] . "]"; ?>">
    <div dojoType="dijit.layout.ContentPane" title="" href="ajax/ajax_notices_edit.php?playerid=<?php echo $player_id; ?>&dialog=NoticeDialog&refresh=PlayerNoticeContent">
    </div>
</div>
<div style="display:none;">
	<div data-dojo-type="dijit.TooltipDialog" closable="true" onMouseLeave="dijit.popup.close(reporttooltip);" id="reporttooltip">
		<div id="reporttooltipcontent">
		</div>
	</div>
</div>

<script type="text/javascript"	src="javascript/report_fetch_AMD.js"></script>
<script type="text/javascript" src="javascript/notices_AMD.js"></script>
<?php

} catch (Exception $e) {
    exit("Exception occurred: ".$e);
}

echo Layout::make_footer($global_universe,$messages, true);
?>