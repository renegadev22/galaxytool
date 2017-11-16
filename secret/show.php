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
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

echo Layout::make_header(SHOW_TITLE,false,"",true);

echo Layout::start_block(SHOW_TITLE);

$ally_default = (isset($_GET['ally'])) ? urldecode($_GET['ally']) : "";
$player_default = (isset($_GET['player'])) ? urldecode($_GET['player']) : "";


?>
<script type="text/javascript">
<?php
// TODO: we should not use a variable in global namespace for this
if ($ally_default != "" || $player_default != "") {
	echo "var TRIGGER_SEARCH = true;\n";
} else {
	echo "var TRIGGER_SEARCH = false;\n";
}
?>
</script>
<div dojoType="dojo.data.ItemFileReadStore" jsId="playerStore" id="playerStore" url="ajax/ajax_players.php?type=all"></div>
<div dojoType="dojo.data.ItemFileReadStore" jsId="allyStore" id="allyStore" url="ajax/ajax_alliances.php?type=all"></div>
<form id="show1" accept-charset="utf-8" dojoType="dijit.form.Form" onSubmit="return galaxytool.Show.startSearch();">
<div id="search1" dojoType="dijit.TitlePane" title="<?php echo SHOW_SEARCH; ?>" open="true">
<?php
echo Layout::get_formsave_buttons("show1", true);
?>
<table>
<tr>
	<td style="width: 200px;"><?php echo SHOW_ALLYSYMBOL; ?></td>
	<td><input dojoType="dijit.form.ComboBox" store="allyStore" searchAttr="allyname" value="<?php echo $ally_default; ?>" name="alliance" id="alliance" trim="true" style="width:130px;"></td>
</tr>
<tr>
	<td><?php echo SHOW_PLAYERNAME; ?></td>
	<td><input dojoType="dijit.form.ComboBox" store="playerStore" searchAttr="player" value="<?php echo $player_default; ?>" name="player" id="player" trim="true" style="width:130px;"></td>
</tr>
<tr>
	<td><?php echo COMBATS_COORDINATES; ?></td>
	<td>
		<?php echo Layout::get_coordinates_control(); ?>
	</td>
</tr>
</table>
</div>


<div id="search2" dojoType="dijit.TitlePane" title="<?php echo SHOW_EXTENDED; ?>" open="false">
<table cellpadding="2">
<tr>
	<td style="width: 200px;"><?php echo SHOW_PLANET; ?></td>
	<td><input dojoType="dijit.form.TextBox" searchAttr="planetname" name="planetname" id="planetname" trim="true" style="width:130px;"></td>
</tr>
<tr>
	<td style="width: 200px;"><?php echo SHOW_RANK; ?></td>
	<td><?php echo VIEW_TOP; ?>
	<input id="minrank" type="text" dojoType="dijit.form.NumberTextBox" name="minrank" value="" constraints="{min:1,max:20000,places:0}" style="width: 50px;"> -
	<input id="maxrank" type="text" dojoType="dijit.form.NumberTextBox" name="maxrank" value="" constraints="{min:1,max:20000,places:0}" style="width: 50px;">
	</td>
</tr>
<tr>
	<td style="width: 200px;"><?php echo SHOW_FRANK; ?></td>
	<td><?php echo VIEW_TOP; ?>
	<input id="minfrank" type="text" dojoType="dijit.form.NumberTextBox" name="minfrank" value="" constraints="{min:1,max:20000,places:0}" style="width: 50px;"> -
	<input id="maxfrank" type="text" dojoType="dijit.form.NumberTextBox" name="maxfrank" value="" constraints="{min:1,max:20000,places:0}" style="width: 50px;">
	</td>
</tr>
<tr>
	<td style="width: 200px;"><?php echo SHOW_DATE; ?></td>
	<td>
	<div>
	<input type="radio" dojoType="dijit.form.RadioButton" name="datevalue" id="datevalue0" value="0" checked="checked"><label for="datevalue0"><?php echo SHOW_DATE_0; ?></label>
	<input type="radio" dojoType="dijit.form.RadioButton" name="datevalue" id="datevalue1" value="1"><label for="datevalue1"><?php echo SHOW_DATE_1; ?></label>
	<input type="radio" dojoType="dijit.form.RadioButton" name="datevalue" id="datevalue2" value="2"><label for="datevalue2"><?php echo SHOW_DATE_2; ?></label>
	</div>
	<input type="text" name="date_from" dojoType="dijit.form.DateTextBox" trim="true" id="date_from" propercase="false" style="width:85px;"
	       value="<?php echo date("Y-m-d", time()+$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));?>">
	<input type="text" name="time1" id="time1" dojoType="dijit.form.TimeTextBox"
	       value="T<?php echo date("H:i:s", time()+$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));?>">
	</td>
</tr>
<tr>
	<td style="width: 200px;vertical-align: text-top;"><?php echo SHOW_DF_LONG; ?></td>
	<td><?php echo SHOW_METAL_LONG." ".SHOW_AT_LEAST; ?>
	<input id="metal" type="text" dojoType="dijit.form.NumberTextBox" name="metal" value="" constraints="{min:0,places:0}" style="width: 90px;">
	<span style="padding-left:30px;"><?php echo SHOW_CRYSTAL_LONG." ".SHOW_AT_LEAST; ?></span>
	<input id="crystal" type="text" dojoType="dijit.form.NumberTextBox" name="crystal" value="" constraints="{min:0,places:0}" style="width: 90px;">
	<div style="padding-top: 2px;"><?php echo SHOW_BOTH." ".SHOW_AT_LEAST; ?>
	<input id="both" type="text" dojoType="dijit.form.NumberTextBox" name="both" value="" constraints="{min:0,places:0}" style="width: 90px;">
	</div>
	</td>
</tr>
<tr>
	<td style="width: 200px;"><?php echo SHOW_MOON_SELECTION; ?></td>
	<td>
	<select name="moonsearch" dojoType="dijit.form.Select" id="select_moonsearch" jsId="select_moonsearch" style="width: 50px;">
	<option value="-">-</option>
	<option value="yes"><?php echo SHOW_YES; ?></option>
	<option value="no"><?php echo SHOW_NO; ?></option>
	</select>
	</td>
</tr>
<tr>
	<td style="width: 200px;"><?php echo SHOW_REPORT_SELECTION; ?></td>
	<td>
	<select name="reportsearch" dojoType="dijit.form.Select" id="select_reportsearch" jsId="select_reportsearch" style="width: 50px;">
	<option value="-">-</option>
	<option value="yes"><?php echo SHOW_YES; ?></option>
	<option value="no"><?php echo SHOW_NO; ?></option>
	</select>
	</td>
</tr>
<tr>
	<td style="width: 200px;"><?php echo SHOW_PLAYERS_WITHOUT_PROGRESS; ?></td>
	<td>
	<select name="playerprogress" dojoType="dijit.form.Select" id="select_playerprogress" jsId="select_playerprogress" style="width: 25px;"
	        onChange="galaxytool.Show.changePlayerProgressSearch();">
	<option value="-">-</option>
	<option value="7">7</option>
	<option value="6">6</option>
	<option value="5">5</option>
	<option value="4">4</option>
	<option value="3">3</option>
	<option value="2">2</option>
	<option value="1">1</option>
	</select> <?php echo GENERAL_UNIT_OF_MEASURE_DAYS; ?>
	</td>
</tr>
<?php
/*
<!--
<tr>
	<td style="width: 200px;"><?php echo SHOW_COLONIES; ?></td>
	<td>
	<input type="radio" dojoType="dijit.form.RadioButton" name="colonysearch" id="colonysearch0" value="0"><label for="colonysearch0"><?php echo SHOW_YES; ?></label>
	<input type="radio" dojoType="dijit.form.RadioButton" name="colonysearch" id="colonysearch1" value="1" checked="checked"><label for="colonysearch1"><?php echo SHOW_NO; ?></label>
	<span style="padding-left: 20px;"><?php echo SHOW_FROM_PLANET; ?>
	<input id="colony1" type="text" dojoType="dijit.form.NumberTextBox" name="colony1" value="" constraints="{min:1,max:14,places:0}" style="width: 50px;"> -
	<input id="colony2" type="text" dojoType="dijit.form.NumberTextBox" name="colony2" value="" constraints="{min:2,max:15,places:0}" style="width: 50px;">
	</span>
	</td>
</tr>
 -->
 */
 ?>
<tr>
	<td><?php echo STATS_PLAYERSTATUS; ?></td>
	<td>
	<div><span class="inactive"><?php echo STATS_INACTIVE; ?>:</span>
		<select name="select_inactive" dojoType="dijit.form.Select" id="select_inactive" jsId="select_inactive">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="inactive"><?php echo STATS_INACTIVE; ?></option>
		<option value="long_inactive"><?php echo STATS_LONG_INACTIVE; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
		<span style="margin-left: 25px;" class="vacation"><?php echo STATS_VACATION; ?>:</span>
		<select name="select_vacation" dojoType="dijit.form.Select" id="select_vacation" jsId="select_vacation">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
		<span style="margin-left: 25px;"><?php echo STATS_BANNED; ?>:</span>
		<select name="select_banned" dojoType="dijit.form.Select" id="select_banned" jsId="select_banned">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
		<span style="margin-left: 25px;"><?php echo USER_BB_OUTLAW; ?>:</span>
		<select name="select_outlaw" dojoType="dijit.form.Select" id="select_outlaw" jsId="select_outlaw">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
	</div>
	</td>
</tr>
<tr><td>&nbsp;</td>
	<td>
	<table>
	<tr>
	<td class="nap" style="width: 100px;">
	<input id="playerstatus2" name="playerstatus2" dojoType="dijit.form.CheckBox" value="1">
	<label for="playerstatus2"><?php echo SHOW_NAP; ?></label>
	</td>
	<td class="ally" style="width: 100px;">
	<input id="playerstatus3" name="playerstatus3" dojoType="dijit.form.CheckBox" value="1">
	<label for="playerstatus3"><?php echo SHOW_ALLIED; ?></label>
	</td>
	<td class="war" style="width: 100px;">
	<input id="playerstatus4" name="playerstatus4" dojoType="dijit.form.CheckBox" value="1">
	<label for="playerstatus4"><?php echo SHOW_WAR; ?></label>
	</td>
	</tr>
	<tr>
	<td class="boycott">
	<input id="playerstatus5" name="playerstatus5" dojoType="dijit.form.CheckBox" value="1">
	<label for="playerstatus5"><?php echo SHOW_BOYCOTT; ?></label>
	</td>
	<td class="neutral">
	<input id="playerstatus6" name="playerstatus6" dojoType="dijit.form.CheckBox" value="1">
	<label for="playerstatus6"><?php echo SHOW_NEUTRAL; ?></label>
	</td>
	<td class="own">
	<input id="playerstatus7" name="playerstatus7" dojoType="dijit.form.CheckBox" value="1">
	<label for="playerstatus7"><?php echo SHOW_OWN; ?></label>
	</td>
	</tr>
	<tr>
	<td class="wing">
	<input id="playerstatus8" name="playerstatus8" dojoType="dijit.form.CheckBox" value="1">
	<label for="playerstatus8"><?php echo SHOW_WING; ?></label>
	</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	</table>
	</td>
</tr>
<tr><td style="vertical-align: text-top;"><?php echo SHOW_ALLIANCE_STATUS; ?></td>
	<td>
	<table>
	<tr>
	<td class="nap" style="width: 100px;">
	<input id="allystatus2" name="allystatus2" dojoType="dijit.form.CheckBox" value="1">
	<label for="allystatus2"><?php echo SHOW_NAP; ?></label>
	</td>
	<td class="ally" style="width: 100px;">
	<input id="allystatus3" name="allystatus3" dojoType="dijit.form.CheckBox" value="1">
	<label for="allystatus3"><?php echo SHOW_ALLIED; ?></label>
	</td>
	<td class="war" style="width: 100px;">
	<input id="allystatus4" name="allystatus4" dojoType="dijit.form.CheckBox" value="1">
	<label for="allystatus4"><?php echo SHOW_WAR; ?></label>
	</td>
	</tr>
	<tr>
	<td class="boycott">
	<input id="allystatus5" name="allystatus5" dojoType="dijit.form.CheckBox" value="1">
	<label for="allystatus5"><?php echo SHOW_BOYCOTT; ?></label>
	</td>
	<td class="neutral">
	<input id="allystatus6" name="allystatus6" dojoType="dijit.form.CheckBox" value="1">
	<label for="allystatus6"><?php echo SHOW_NEUTRAL; ?></label>
	</td>
	<td class="own">
	<input id="allystatus7" name="allystatus7" dojoType="dijit.form.CheckBox" value="1">
	<label for="allystatus7"><?php echo SHOW_OWN; ?></label>
	</td>
	</tr>
	<tr>
	<td class="wing">
	<input id="allystatus8" name="allystatus8" dojoType="dijit.form.CheckBox" value="1">
	<label for="allystatus8"><?php echo SHOW_WING; ?></label>
	</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	</table>
	</td>
</tr>
<tr>
	<td style="vertical-align: text-top;"><?php echo SHOW_FILTER_BY; ?>
	</td>
	<td>
<table>
	<tr>
	<td class="nap" style="width: 100px;">
	<input id="filter_nap" name="filter_nap" dojoType="dijit.form.CheckBox" value="1">
	<label for="filter_nap"><?php echo SHOW_NAP; ?></label>
	</td>
	<td class="ally" style="width: 100px;">
	<input id="filter_allied" name="filter_allied" dojoType="dijit.form.CheckBox" value="1">
	<label for="filter_allied"><?php echo SHOW_ALLIED; ?></label>
	</td>
	<td class="own">
	<input id="filter_own" name="filter_own" dojoType="dijit.form.CheckBox" value="1">
	<label for="filter_own"><?php echo SHOW_OWN; ?></label>
	</td>
	</tr>
	<tr>
	<td class="wing">
	<input id="filter_wing" name="filter_wing" dojoType="dijit.form.CheckBox" value="1">
	<label for="filter_wing"><?php echo SHOW_WING; ?></label>
	</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	</table>
	</td>
</tr>

</table>
</div>
<button dojoType="dijit.form.Button" type="submit" id="search_button"><?php echo SHOW_SEARCHBUTTON; ?></button>
</form>
<br>

<div id="result_view" style="display:none;">
	<div id="result_list"><?php echo SHOW_HITS; ?>: <span id="results"></span></div>
	<div>
		<span class="bg_nothing">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_NOTHING; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_neutral">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_NEUTRAL; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_boycott">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_BOYCOTT; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_nap">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_NAP; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_ally">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_ALLIED; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_war">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_WAR; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_own">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_OWN; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_wing">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_WING; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>

	<table dojoType="dojox.grid.DataGrid" jsId="searchgrid" id="searchgrid" query="{ id: '*' }" selectable="true"
		style="width: 100%; height: 400px; margin-top: 5; margin-bottom:20px;" canSort="false" sortinfo="1"
		autoHeight="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results); ?>"
		rowCount="0"
	    rowsPerPage="<?php echo (2 * $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results)); ?>"
	    requestMethod="post">
		<thead>
			<tr>
				<th width="60px;" field="address" formatter="galaxytool.Show.formatAddress"><?php echo SHOW_ADDRESS; ?></th>
				<th width="40px" field="moon" formatter="galaxytool.Show.formatMoon"><?php echo SHOW_MOON; ?></th>
				<th width="60px" field="debris" formatter="galaxytool.Show.formatDebris"><?php echo SHOW_DF; ?></th>
				<th width="auto" field="ally" formatter="galaxytool.Show.formatAlly"><?php echo SHOW_ALLYSORT; ?></th>
				<th width="auto" field="planet" formatter="galaxytool.Show.formatCenter"><?php echo VIEW_PLANET; ?></th>
				<th width="auto" field="player" formatter="galaxytool.Show.formatPlayer"><?php echo VIEW_PLAYER; ?></th>
				<th width="40px" field="status" formatter="galaxytool.Show.formatStatus"><?php echo SHOW_STATUS; ?></th>
				<th width="100px" field="datetime" formatter="galaxytool.Show.formatDatetime"><?php echo SHOW_CURRENTNESS; ?></th>
				<th width="20px" field="notices" formatter="galaxytool.Show.formatNotices">&nbsp;</th>
				<th width="50px" field="reports" formatter="galaxytool.Show.formatReports">&nbsp;</th>
			</tr>
		</thead>
	</table>
</div>

<?php
echo Layout::close_block();
?>
<div id="ReportDialog" dojoType="dijit.Dialog" style="min-width: 740px;" title="">
    <div dojoType="dijit.layout.ContentPane" title="">
    </div>
</div>
<div id="NoticeDialog" dojoType="dijit.Dialog" style="min-width: 540px;" title="<?php echo NOTICE_TITLE; ?>">
	<img src="../images/edit.png" class="hyperlink" id="NoticeDialogEdit" width="24" height="24">
	<div dojoType="dijit.layout.ContentPane" id="NoticeDialogContent" href="" style="min-height:400px;">
	</div>
</div>
<script type="text/javascript" src="javascript/form_validations_AMD.js"></script>
<script type="text/javascript" src="javascript/form_save_AMD.js"></script>
<script type="text/javascript"	src="javascript/report_fetch_AMD.js"></script>
<script type="text/javascript" src="javascript/notices_AMD.js"></script>
<script type="text/javascript" src="javascript/show.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages,true);
?>