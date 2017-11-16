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

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_diplomatic) ||
    $_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete)) {
?>
<div style="margin-top: 10px;">
	<div dojoType="dijit.form.DropDownButton" disabled="true" id="allystatus_button<?php echo $suffix; ?>" jsId="allystatus_button<?php echo $suffix; ?>">
    	<span><?php echo STATS_CHANGE_ALLIANCE_STATUS; ?></span>
        <div dojoType="dijit.Menu">
        	<div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('nothing', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="nothing"><?php echo STATS_NOTHING; ?></span>
            </div>
            <div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('nap', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="nap"><?php echo STATS_NAP; ?></span>
            </div>
            <div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('ally', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="ally"><?php echo STATS_ALLIED; ?></span>
            </div>
            <div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('war', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="war"><?php echo STATS_WAR; ?></span>
            </div>
            <div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('boycott', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="boycott"><?php echo STATS_BOYCOTT; ?></span>
            </div>
            <div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('neutral', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="neutral"><?php echo STATS_NEUTRAL; ?></span>
            </div>
            <div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('own', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="own"><?php echo STATS_OWN; ?></span>
            </div>
            <div dojoType="dijit.MenuItem" onClick="galaxytool_allystatus('wing', allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)">
                <span class="wing"><?php echo STATS_WING; ?></span>
            </div>
        </div>
    </div>
<?php
	if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete)) {
		echo '
	      	<button dojoType="dijit.form.Button" type="button" id="delete_ally_button'.$suffix.'" disabled="true"
	                  iconClass="trashicon" showLabel="false" onClick="galaxytool_delete_ally(allygrid'.$suffix.', allystore'.$suffix.')">'.STATS_DELETE.'</button>
			';
	}
}
$store_url = ($military === false) ? "ajax/ajax_stats.php?type=allystats&military=false" : "ajax/ajax_stats.php?type=allystats&military=true";
?>
	<div id="AllyDetailsDialog<?php echo $suffix; ?>" dojoType="dijit.Dialog" title="<?php echo STATS_SHOW_GRAPH; ?>">
		<div dojoType="dijit.layout.ContentPane" title="" style="width: 200px; height: 400px;">
	            ...
	    </div>
	</div>
	<button dojoType="dijit.form.Button" type="button" id="details_button<?php echo $suffix; ?>" disabled="true"
	        iconClass="magnifiericon" showLabel="false" onClick="galaxytool_ally_info(<?php echo $suffix; ?>, allygrid<?php echo $suffix; ?>, allystore<?php echo $suffix; ?>)"><?php echo STATS_SHOW_GRAPH; ?></button>
</div>
<div dojoType="dojox.data.QueryReadStore" jsId="allystore<?php echo $suffix; ?>" id="allystore<?php echo $suffix; ?>" url="<?php echo $store_url; ?>">
</div>
<table style="width:100%;" dojoType="dojox.grid.EnhancedGrid" id="allygrid<?php echo $suffix; ?>" jsId="allygrid<?php echo $suffix; ?>" store="allystore<?php echo $suffix; ?>"
       plugins="plugins" autoHeight="100" rowCount="0"
       rowSelector="20px" delayScroll="true" selectable="true">
	<thead>
		<tr>
<?php
if ($military === false) {
	// standard stats
?>
			<th width="50px" field="rank" formatter="galaxytool_astats_rank<?php echo $suffix; ?>"><?php echo STATS_RANK; ?></th>
			<th width="100px" field="allyname" formatter="galaxytool_astats_name<?php echo $suffix; ?>"><?php echo STATS_ALLYNAME; ?></th>
			<th width="80px" sortDesc="true" field="member" formatter="galaxytool_stats_score"><?php echo STATS_MEMBERS; ?></th>
			<th width="90px" sortDesc="true" field="score" formatter="galaxytool_stats_score"><?php echo STATS_SCORE; ?></th>
			<th width="90px" sortDesc="true" field="economy" formatter="galaxytool_astats_economy<?php echo $suffix; ?>"><?php echo STATS_ECONOMY; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="90px" sortDesc="true" field="fleet" formatter="galaxytool_astats_fleet<?php echo $suffix; ?>"><?php echo STATS_FLEET; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="auto" sortDesc="true" field="research" formatter="galaxytool_astats_research<?php echo $suffix; ?>"><?php echo STATS_RESEARCH; ?> (<?php echo STATS_RANK; ?>)</th>
<?php
} else {
	// military stats
?>
			<th width="50px" field="fbrank" formatter="galaxytool_astats_rank<?php echo $suffix; ?>"><?php echo STATS_RANK; ?></th>
			<th width="150px" field="allyname" formatter="galaxytool_astats_name<?php echo $suffix; ?>"><?php echo STATS_ALLYNAME; ?></th>
			<th width="80px" sortDesc="true" field="member" formatter="galaxytool_stats_score"><?php echo STATS_MEMBERS; ?></th>
			<th width="90px" sortDesc="true" field="fb" formatter="galaxytool_stats_score"><?php echo STATS_MILITARY_BUILD; ?></th>
			<th width="90px" sortDesc="true" field="fd" formatter="galaxytool_astats_md<?php echo $suffix; ?>"><?php echo STATS_MILITARY_DESTROYED; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="90px" sortDesc="true" field="fl" formatter="galaxytool_astats_ml<?php echo $suffix; ?>"><?php echo STATS_MILITARY_LOST; ?> (<?php echo STATS_RANK; ?>)</th>
			<th width="auto" sortDesc="true" field="honour" formatter="galaxytool_astats_honour<?php echo $suffix; ?>"><?php echo STATS_HONOUR; ?> (<?php echo STATS_RANK; ?>)</th>
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
