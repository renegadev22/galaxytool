<?php
$content_type = "text/html";
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_statusview) !== true) exit("no permission");

try {
	$status_obj = new StatusInfo($dbtablename, $systemtablename, $utablename, $playertable, $allytable, $reporttable, $noticetable);
	$infos = $status_obj->getStatusInfo1();
} catch (Exception $e) {
	exit("Exception occurred: ".$e->getMessage());
}

?>
<table cellpadding="4" cellspacing="0" border="0" width="100%">
<tr><td style="width:75%;"><?php echo INDEX_ENTRIES; ?></td><td><?php echo $infos["info_systems"]; ?></td></tr>
<tr><td><?php echo INDEX_ENTRIES_LASTWEEK; ?></td><td class="farbe1"><?php echo $infos["info_lastweek"]; ?></td></tr>
<tr><td><?php echo INDEX_ENTRIES_TO_OLD; ?></td><td class="farbe6"><?php echo $infos["info_too_old"]; ?></td></tr>
<tr><td><?php echo INDEX_REGISTERED_USERS; ?></td><td><?php echo $infos["info_reg_user"]; ?></td></tr>
<tr><td><?php echo INDEX_NOTICES; ?></td><td><?php echo $infos["info_notices"]; ?></td></tr>
<tr><td><?php echo INDEX_PLAYERS; ?></td><td><?php echo $infos["info_players"]; ?></td></tr>
<tr><td><?php echo INDEX_ALLIES; ?></td><td><?php echo $infos["info_allies"]; ?></td></tr>
<tr><td><?php echo INDEX_REPORTS; ?></td><td><?php echo $infos["info_reports"]; ?></td></tr>
<tr><td><?php echo INDEX_UMOD; ?></td><td><?php echo $infos["info_umod"]; ?></td></tr>
<tr><td><?php echo INDEX_NO_MOONS; ?></td><td><?php echo $infos["info_moons"]; ?></td></tr>
<tr><td><?php echo INDEX_NO_TARGETS; ?></td><td><?php echo $infos["info_raidable"]; ?></td></tr>
<?php
$input = '
<input type="text" name="planets" value="" dojoType="dijit.form.NumberTextBox" constraints="{min:2,max:20,places:0}"
       required="true" id="planets" onChange="galaxytool_planet_changed()" onKeyPress="galaxytool_handle_enter" style="width:20px;">';
?>
<tr><td style="vertical-align:top;"><?php echo str_replace("&1",$input,INDEX_PLAYERS_WITH_N_PLANETS); ?></td>
<td id="planets_info">&nbsp;</td></tr>
</table>