<?php
$content_type = "text/html";
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) exit("No permission");

$type = "";
if (isset($_GET['type'])) {
	$type = $_GET['type'];
} elseif(isset($_POST['type'])) {
	$type = $_POST['type'];
}
if ($type == "") exit("type missing");

$military = ($type == "military") ? true : false;

$suffix = ($military === false) ? "1" : "2";
?>
<div><?php echo STATS_PLAYERSTATUS; ?><span style="margin-left: 25px;" class="inactive"><?php echo STATS_INACTIVE; ?>:</span>
	<select name="select_inactive" dojoType="dijit.form.Select" id="select_inactive<?php echo $suffix; ?>" jsId="select_inactive<?php echo $suffix; ?>">
	<option value="-">-</option>
	<option value="yes"><?php echo STATS_YES; ?></option>
	<option value="inactive"><?php echo STATS_INACTIVE; ?></option>
	<option value="long_inactive"><?php echo STATS_LONG_INACTIVE; ?></option>
	<option value="no"><?php echo STATS_NO; ?></option>
	</select>
	<span style="margin-left: 25px;" class="vacation"><?php echo STATS_VACATION; ?>:</span>
	<select name="select_vacation" dojoType="dijit.form.Select" id="select_vacation<?php echo $suffix; ?>" jsId="select_vacation<?php echo $suffix; ?>">
	<option value="-">-</option>
	<option value="yes"><?php echo STATS_YES; ?></option>
	<option value="no"><?php echo STATS_NO; ?></option>
	</select>
	<span class="noob"><?php echo STATS_NOOB; ?>:</span>
	<select name="select_noob" dojoType="dijit.form.Select" id="select_noob<?php echo $suffix; ?>" jsId="select_noob<?php echo $suffix; ?>">
	<option value="-">-</option>
	<option value="yes"><?php echo STATS_YES; ?></option>
	<option value="no"><?php echo STATS_NO; ?></option>
	</select>
	<button dojoType="dijit.form.Button" type="button" onClick="galaxytool_load_new_stats('playerstats', <?php echo $suffix; ?>, playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)"><?php echo STATS_SEARCH; ?></button>
</div>
<div style="margin-top: 10px; width:100%;">
<?php
if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_diplomatic)) {
?>
	<div dojoType="dijit.form.DropDownButton" disabled="true" id="playerstatus_button<?php echo $suffix; ?>" jsId="playerstatus_button<?php echo $suffix; ?>">
    <span><?php echo STATS_CHANGE_PLAYER_STATUS; ?></span>
    <div dojoType="dijit.Menu">
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('nothing', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
       <span class="nothing"><?php echo STATS_NOTHING; ?></span>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('nap', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
       <span class="nap"><?php echo STATS_NAP; ?></span>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('ally', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
      <span class="ally"><?php echo STATS_ALLIED; ?></span>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('war', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
      <span class="war"><?php echo STATS_WAR; ?></span>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('boycott', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
      <span class="boycott"><?php echo STATS_BOYCOTT; ?></span>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('neutral', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
       <span class="neutral"><?php echo STATS_NEUTRAL; ?></span>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('own', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
      <span class="own"><?php echo STATS_OWN; ?></span>
    </div>
    <div dojoType="dijit.MenuItem" onClick="galaxytool_playerstatus('wing', playergrid<?php echo $suffix; ?>, playerstore<?php echo $suffix; ?>)">
       <span class="wing"><?php echo STATS_WING; ?></span>
    </div>
    </div>
    </div>
<?php
}
if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete)) {
	echo '
       	<button dojoType="dijit.form.Button" type="button" id="delete_player_button'.$suffix.'" disabled="true"
                   iconClass="trashicon" showLabel="false" onClick="galaxytool_delete_player(playergrid'.$suffix.', playerstore'.$suffix.')">'.STATS_DELETE.'</button>
';
}

$store_url = ($military === false) ? "ajax/ajax_stats.php?type=playerstats&military=false" : "ajax/ajax_stats.php?type=playerstats&military=true";
?>
</div>
<div dojoType="dojox.data.QueryReadStore" jsId="playerstore<?php echo $suffix; ?>" id="playerstore<?php echo $suffix; ?>" url="<?php echo $store_url; ?>">
</div>
<table style="width:100%;" dojoType="dojox.grid.EnhancedGrid" id="playergrid<?php echo $suffix; ?>" jsId="playergrid<?php echo $suffix; ?>" store="playerstore<?php echo $suffix; ?>"
       plugins="plugins" autoHeight="100" rowCount="0"
       rowSelector="20px" delayScroll="true" selectable="true">
	<thead>
		<tr>
<?php
if ($military === false) {
	// standard stats
?>
			<th width="30px" field="rank" formatter="galaxytool_pstats_rank<?php echo $suffix; ?>"><?php echo STATS_RANK; ?></th>
			<th width="auto" field="name" formatter="galaxytool_pstats_name<?php echo $suffix; ?>"><?php echo STATS_PLAYERNAME; ?></th>
			<th width="35px" field="status" formatter="galaxytool_pstats_status"><?php echo STATS_STATUS; ?></th>
			<th width="auto" field="allyname" formatter="galaxytool_pstats_ally<?php echo $suffix; ?>"><?php echo STATS_ALLYNAME; ?></th>
			<th width="90px" sortDesc="true" field="score" formatter="galaxytool_stats_score"><?php echo STATS_SCORE; ?></th>
			<th width="90px" sortDesc="true" field="economy" formatter="galaxytool_pstats_economy<?php echo $suffix; ?>"><?php echo STATS_ECONOMY; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="90px" sortDesc="true" field="fleet" formatter="galaxytool_pstats_fleet<?php echo $suffix; ?>"><?php echo STATS_FLEET; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="90px" sortDesc="true" field="research" formatter="galaxytool_pstats_research<?php echo $suffix; ?>"><?php echo STATS_RESEARCH; ?> (<?php echo STATS_RANK; ?>)</th>
<?php
} else {
	// military stats
?>
			<th width="30px" field="fbrank" formatter="galaxytool_pstats_rank<?php echo $suffix; ?>"><?php echo STATS_RANK; ?></th>
			<th width="110px" field="name" formatter="galaxytool_pstats_name<?php echo $suffix; ?>"><?php echo STATS_PLAYERNAME; ?></th>
			<th width="35px" field="status" formatter="galaxytool_pstats_status"><?php echo STATS_STATUS; ?></th>
			<th width="100px" field="allyname" formatter="galaxytool_pstats_ally<?php echo $suffix; ?>"><?php echo STATS_ALLYNAME; ?></th>
			<th width="90px" sortDesc="true" field="fb" formatter="galaxytool_stats_score"><?php echo STATS_MILITARY_BUILD; ?></th>
			<th width="90px" sortDesc="true" field="fd" formatter="galaxytool_pstats_md<?php echo $suffix; ?>"><?php echo STATS_MILITARY_DESTROYED; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="90px" sortDesc="true" field="fl" formatter="galaxytool_pstats_ml<?php echo $suffix; ?>"><?php echo STATS_MILITARY_LOST; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="auto" sortDesc="true" field="honour" formatter="galaxytool_pstats_honour<?php echo $suffix; ?>"><?php echo STATS_HONOUR; ?> (<?php echo STATS_RANK; ?>)</th>
<?php
}
?>
		</tr>
	</thead>
</table>
<div style="width:90%; text-align:center; margin-top:10px;">
	<span class="bg_nothing">&nbsp;&nbsp;</span> <?php echo STATS_NOTHING; ?>
	<span class="bg_neutral" style="margin-left:20px;">&nbsp;&nbsp;</span> <?php echo STATS_NEUTRAL; ?>
	<span class="bg_boycott" style="margin-left:20px;">&nbsp;&nbsp;</span> <?php echo STATS_BOYCOTT; ?>
	<span class="bg_nap" style="margin-left:20px;">&nbsp;&nbsp;</span> <?php echo STATS_NAP; ?>
	<span class="bg_ally" style="margin-left:20px;">&nbsp;&nbsp;</span> <?php echo STATS_ALLIED; ?>
	<span class="bg_war" style="margin-left:20px;">&nbsp;&nbsp;</span> <?php echo STATS_WAR; ?>
	<span class="bg_own" style="margin-left:20px;">&nbsp;&nbsp;</span> <?php echo STATS_OWN; ?>
	<span class="bg_wing" style="margin-left:20px;">&nbsp;&nbsp;</span> <?php echo STATS_WING; ?>
</div>
