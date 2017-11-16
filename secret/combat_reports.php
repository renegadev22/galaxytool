<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}
$probe_lang = new ProbeLanguages(); // to load language files
$db_array = $probe_lang->get_flipped_probe_array();

echo Layout::make_header(COMBATS_TITLE);

$store_url = "ajax/ajax_combat_reports.php?type=initial";

echo Layout::start_block(COMBATS_SEARCH_OPTIONS);
echo Layout::get_formsave_buttons("combat_reports1");
?>
	<div dojoType="dojo.data.ItemFileReadStore" jsId="playerStore" id="playerStore" url="ajax/ajax_players.php?type=all"></div>
	<div dojoType="dojo.data.ItemFileReadStore" jsId="userStore" id="userStore" url="ajax/ajax_users.php?type=all"></div>
	<span dojoType="dojo.data.ItemFileWriteStore" jsId="store1" url="<?php echo $store_url; ?>"
	      urlPreventCache="true" clearOnClose="true"></span>
	<form id="combat_reports1">
	<table  border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
		<td style="width: 20%;"><?php echo COMBATS_ATTACKER; ?></td>
		<td style="width: 30%;">
			<input dojoType="dijit.form.ComboBox" store="playerStore" searchAttr="player" name="attacker" id="attacker" trim="true" style="width:130px;">
		</td>
		<td style="width: 20%;"><?php echo COMBATS_DEFENDER; ?></td>
		<td style="width: 30%;">
			<input dojoType="dijit.form.ComboBox" value="" store="playerStore" searchAttr="player" name="defender" id="defender" trim="true" style="width:130px;">
		</td>
	</tr>
	<tr>
		<td><?php echo COMBATS_OWNER; ?></td>
		<td>
		<input data-dojo-type="dijit.form.FilteringSelect" value="0"
    		data-dojo-props="store:userStore, searchAttr:'username'" name="owner" id="owner" style="width:130px">
        </td>
		<td><?php echo COMBATS_PUBLIC_REPORTS; ?></td>
		<td>
			<input id="public_yes" jsId="public_yes" dojoType="dijit.form.CheckBox" onChange="galaxytool_public_search('public_yes')">
			<label for="public_yes" style="margin-left:5px;"><?php echo COMBATS_YES; ?></label>
			<input id="public_no" jsId="public_no" dojoType="dijit.form.CheckBox" onChange="galaxytool_public_search('public_no')" style="margin-left:20px;">
			<label for="public_no" style="margin-left:5px;"><?php echo COMBATS_NO; ?></label>
		</td>
	</tr>
	<tr>
		<td><?php echo COMBATS_DATE; ?></td>
		<td colspan="3">
			<input type="text" name="date_from" value="" dojoType="dijit.form.DateTextBox" trim="true" id="date_from" propercase="false" style="width:85px;">
			<span style="margin-left:10px;">-</span>
			<input type="text" name="date_to" value="" dojoType="dijit.form.DateTextBox" trim="true" id="date_to" propercase="false" style="width:85px; margin-left:10px;">
		</td>
	</tr>
	<tr>
		<td><?php echo COMBATS_COORDINATES; ?></td>
		<td colspan="3">
		<?php echo Layout::get_coordinates_control(); ?>
		</td>
	</tr>


	<tr>
		<td colspan="4">
        	<button dojoType="dijit.form.Button" type="button" id="search_button"><?php echo COMBATS_SEARCH; ?></button>
        	<button dojoType="dijit.form.Button" type="button" id="reset_button"><?php echo COMBATS_RESET; ?></button>
        	<button dojoType="dijit.form.Button" type="button" id="download_button" iconClass="downloadicon"
        	showLabel="false"><?php echo COMBATS_DOWNLOAD_CSV; ?></button>
        </td>
	</tr>
	</table>
	</form>
<?php
echo Layout::close_block();
?>
<div id="result_grid" style="visibility:hidden;">
	<table dojoType="dojox.grid.DataGrid" jsId="grid1" id="grid1" store="store1" query="{ id: '*' }" selectable="true"
	style="height: 200px; margin: 5 0 0 0;" clientSort="true" rowSelector="20px" selectionMode="single" sortinfo="-4"
    autoHeight="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results); ?>"
    rowCount="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results); ?>"
    rowsPerPage="<?php echo (2 * $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results)); ?>">
	<thead>
		<tr>
			<th width="20px" field="selected" editable="true" cellType="dojox.grid.cells.Bool">&nbsp;</th>
			<th width="180px" field="attacker" formatter="galaxytool_grid_formatter"><?php echo COMBATS_ATTACKER; ?></th>
			<th width="180px" field="defender" formatter="galaxytool_grid_formatter"><?php echo COMBATS_DEFENDER; ?></th>
			<th width="140px" field="combattime"><?php echo COMBATS_DATE; ?></th>
			<th width="auto" field="owner"><?php echo COMBATS_OWNER; ?></th>
		</tr>
	</thead>
</table>
<div  style="margin: 1 0 0 25;">
    <img src="../images/arrow_up.png"> <a class="link" href="#"	onclick="checkbox_selection(true)"><?php echo COMBATS_CHECK_ALL; ?></a>/
    <a class="link" href="#" onclick="checkbox_selection(false)"><?php echo COMBATS_UNCHECK_ALL; ?></a>
    &nbsp;&nbsp;&nbsp;<?php echo COMBATS_WITH_SELECTED. ":";?>
	<button dojoType="dijit.form.Button" type="button" id="publish_all_button" disabled="false" showLabel="false" iconClass="shareicon"><?php echo COMBATS_PUBLISH ?></button>
	<button dojoType="dijit.form.Button" type="button" id="unpublish_all_button" disabled="false" showLabel="false" iconClass="unshareicon"><?php echo COMBATS_UNPUBLISH ?></button>
	<button dojoType="dijit.form.Button" type="button" id="delete_all_button" disabled="false" iconClass="trashicon" showLabel="false"><?php echo COMBATS_DELETE ?></button>
</div>
</div>

<div id="details_area" style="visibility:hidden;">
<?php
echo Layout::start_block(COMBATS_COMBATREPORT);
?>
<div align="right" style="padding-right: 5px;">
<button dojoType="dijit.form.Button" type="button" id="publish_button" disabled="true" showLabel="false" iconClass="shareicon"><?php echo COMBATS_PUBLISH ?></button>
<button dojoType="dijit.form.Button" type="button" id="unpublish_button" disabled="true" showLabel="false" iconClass="unshareicon" style="display: none"><?php echo COMBATS_UNPUBLISH ?></button>
<button dojoType="dijit.form.Button" type="button" id="delete_button" disabled="true" iconClass="trashicon" showLabel="false"><?php echo COMBATS_DELETE ?></button>
</div>
 	<div style="text-align:center;"><?php echo COMBATS_COMBAT_AT; ?> [<span id="combat_coordinates">&nbsp;</span>] (<span id="combattime">&nbsp;</span>)</div>
		<table cellpadding="2" style="width:100%" cellspacing="0" border="0">
		<tr>
		<td colspan="2"><span id="attackername">&nbsp;</span></td>
		<td>vs.</td>
		<td colspan="2"><span id="defendername">&nbsp;</span></td>
		</tr>
		<tr>
		<td style="padding-left:5px;"><?php echo COMBATS_LOST_UNITS; ?>:</td>
		<td id="att_lost_units">&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php echo COMBATS_LOST_UNITS; ?>:</td>
		<td id="def_lost_units">&nbsp;</td>
		</tr>
		<tr>
		<td style="padding-left:5px;"><?php echo $db_array['Weapons Technology']; ?>:</td>
		<td id="att_weapon">&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php echo $db_array['Weapons Technology']; ?>:</td>
		<td id="def_weapon">&nbsp;</td>
		</tr>
		<tr>
		<td style="padding-left:5px;"><?php echo $db_array['Shielding Technology']; ?>:</td>
		<td id="att_shield">&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php echo $db_array['Shielding Technology']; ?>:</td>
		<td id="def_shield">&nbsp;</td>
		</tr>
		<tr>
		<td style="padding-left:5px;"><?php echo $db_array['Armour Technology']; ?>:</td>
		<td id="att_amour">&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php echo $db_array['Armour Technology']; ?>:</td>
		<td id="def_amour">&nbsp;</td>
		</tr>
		</table>
		<table style="margin: 20 0 0 0; width: 100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
		<td colspan="2"><?php echo COMBATS_WINNER; ?>: <span id="winner_name">&nbsp;</span></td>
		</tr>
		<tr>
		<td style="padding-left:5px;"><?php echo COMBATS_LOOT; ?>:</td>
		<td><span id="loot_metal">&nbsp;</span>
			<?php echo $db_array['Metal']; ?>,
			<span id="loot_crystal">&nbsp;</span>
			<?php echo $db_array['Crystal']; ?> <?php echo COMBATS_AND; ?>
			<span id="loot_deuterium">&nbsp;</span>
			<?php echo $db_array['Deuterium']; ?>
		</td>
		</tr>
		<tr>
		<td style="padding-left:5px;"><?php echo COMBATS_DEBRIS; ?>:</td>
		<td><span id="debris_metal">&nbsp;</span>
			<?php echo $db_array['Metal']; ?>
			<?php echo COMBATS_AND; ?>
			<span id="debris_crystal">&nbsp;</span>
			<?php echo $db_array['Crystal']; ?>
		</td>
		</tr>
		</table>
<?php
echo Layout::close_block();
?>
</div>
<div id="summary_area" style="margin: 20 0 0 0; visibility:hidden;">
<?php
echo Layout::start_block(COMBATS_COMBAT_SUMMARY);
?>
	<table style="margin: 20 0 0 0; width: 100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
		<td style="padding-left:5px;"><?php echo COMBATS_LOOT; ?>:</td>
		<td><span id="summary_loot_metal">&nbsp;</span>
			<?php echo $db_array['Metal']; ?>,
			<span id="summary_loot_crystal">&nbsp;</span>
			<?php echo $db_array['Crystal']; ?> <?php echo COMBATS_AND; ?>
			<span id="summary_loot_deuterium">&nbsp;</span>
			<?php echo $db_array['Deuterium']; ?>
		</td>
		</tr>
		<tr>
		<td style="padding-left:5px;"><?php echo COMBATS_DEBRIS; ?>:</td>
		<td><span id="summary_debris_metal">&nbsp;</span>
			<?php echo $db_array['Metal']; ?>
			<?php echo COMBATS_AND; ?>
			<span id="summary_debris_crystal">&nbsp;</span>
			<?php echo $db_array['Crystal']; ?>
		</td>
		</tr>
	</table>
<?php
echo Layout::close_block();
?>
</div>
<div style="height: 40px"></div>
<script type="text/javascript">
var galaxytool_userid = <?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid); ?>;
var store_url = "<?php echo $store_url; ?>";
</script>
<script type="text/javascript" src="javascript/combat_reports.js"></script>
<script type="text/javascript" src="javascript/form_validations.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>