<?php
$content_type = "text/html";
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_activities)) exit("no permission");

if (!isset($_POST['playerid'])) {
	if (!isset($_GET['playerid'])) {
		exit("PlayerID missing");
	} else {
		$playerid = intval($_GET['playerid']);
	}
} else {
	$playerid = intval($_POST['playerid']);
}

spl_autoload_register('AutoLoader::ParserLoader');

if (isset($_POST['set_active'])) {
	if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_caninsert)) {
		$error_page_code = "permission";
		include GALAXYTOOL_ROOT."/secret/errorpage.php";
		exit("");
	}

	$activity_parser = new ActivityParser($player_activity,$playertable,$utablename,$global_universe);

	// we need to convert local time to "Ogame Time" which is GMT+1
	$time = time();
	// convert into GMT first
	$offset = date("O",$time);
	$sign    = substr($offset,0,1);
	$hours   = substr($offset,1,2);
	$minutes = substr($offset,-2);
	if ($sign == "+") {
		$time -= $hours * 60 * 60;
		$time -= $minutes * 60;
	} else {
		$time += $hours * 60 * 60;
		$time += $minutes * 60;
	}
	// now into Ogame Time
	$time += (1 + date("I",$time) ) * 60 * 60; // +1 or +2 depending on daylight saving times

	$dow = date("w",$time);

	$result = $activity_parser->collect_manual_activity($playerid,date("Y",$time),date("m",$time),date("d",$time),date("H",$time),date("i",$time),$dow);
	if ($result === false) {
		exit("Unexpected error occurred for manualy activity");
	}
	$result = $activity_parser->insert_into_database();

	$messages = $activity_parser->get_error_object();
	$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
	$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
	exit($result);

} elseif (isset($_POST['date']) && isset($_POST['time_h']) && isset($_POST['time_m'])) {
	if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_caninsert)) {
		$error_page_code = "permission";
		include GALAXYTOOL_ROOT."/secret/errorpage.php";
		exit("");
	}
	$date = $_POST['date'];
	$time_h = $_POST['time_h'];
	$time_m = $_POST['time_m'];
	if (preg_replace("/\d{4}\-\d{2}\-\d{2}/", "", $date) != "") exit("false");
	if (preg_replace("/\d{2}/", "", $time_h) != "") exit("false");
	if (preg_replace("/\d{2}/", "", $time_m) != "") exit("false");

	try {
	    $date_obj = new DateTime($date);
	} catch (Exception $e) {
	    exit($e->getMessage());
	}
	$dow = $date_obj->format('w');

	$date = explode("-", $date);

	$activity_parser = new ActivityParser($player_activity,$playertable,$utablename,$global_universe);
	$result = $activity_parser->collect_manual_activity($playerid,$date[0],$date[1],$date[2],$time_h,$time_m,$dow);
	if ($result === false) {
		$messages = $activity_parser->get_error_object();
		if ($messages == null) {
			$messages = new ErrorObject(ErrorObject::severity_error, "Unexpected error occurred for manualy activity");
		}
		$message_json = $messages->get_JSON_result();
		$result = '{ result: '.json_encode(false).' , messages: '.$message_json.' }';
		exit($result);
	}
	$result = $activity_parser->insert_into_database();

	$messages = $activity_parser->get_error_object();
	$message_json = ($messages != null) ? $messages->get_JSON_result() : "null";
	$result = '{ result: '.json_encode($result).' , messages: '.$message_json.' }';
	exit($result);

}

if (!isset($_GET['playername'])) {
	exit("Player name missing");
} else {
	$playername = $_GET['playername'];
}

$time_from = date("Y-m-d", time()-86400 * 90);
$time_to   = date("Y-m-d");
?>
<div align="center">
<select name="select" dojoType="dijit.form.Select" id="view" jsId="view" onChange="selection_changed('<?php echo $playerid; ?>')">
<option value="day"><?php echo DETAILEDINFO_DAY_VIEW; ?></option>
<option value="week"><?php echo DETAILEDINFO_WEEK_VIEW;?></option>
</select>
<div id="calendar_from" jsId="calendar_from" class="claro" style="font-size: 8pt; visibility:hidden; position: fixed; z-index: 998; ">
	<div dojoType="dijit.Calendar" onValueSelected="dojo.byId('time_from').innerHTML=dojo.date.locale.format(arguments[0], {formatLength: 'medium', selector:'date'}); dojo.byId('calendar_from').style.visibility='hidden'; calendar_from_time=arguments[0]; reload_url(<?php echo $playerid; ?>,'act_graph');">
	</div>
</div>
<div id="calendar_to" class="claro" style="font-size: 8pt; visibility:hidden; position: fixed; z-index: 998; ">
	<div dojoType="dijit.Calendar" onValueSelected="dojo.byId('time_to').innerHTML=dojo.date.locale.format(arguments[0], {formatLength: 'medium', selector:'date'}); dojo.byId('calendar_to').style.visibility='hidden'; calendar_to_time=arguments[0]; reload_url(<?php echo $playerid; ?>,'act_graph');">
	</div>
</div>
<table border="0">
	<tr class="firstcolor"><td colspan="6"><?php echo str_replace("&1",$playername,DETAILEDINFO_ACTIVITY_DESCRIPTION); ?>
	<input type="text" name="date_from" value="<?php echo $time_from; ?>" dojoType="dijit.form.DateTextBox"
	       trim="true" id="date_from" propercase="false" style="width:85px;" onChange="reload_url()">
	<?php echo DETAILEDINFO_TO; ?>
	<input type="text" name="date_to" value="<?php echo $time_to; ?>" dojoType="dijit.form.DateTextBox"
	       trim="true" id="date_to" propercase="false" style="width:85px;" onChange="reload_url()">
	<?php echo DETAILEDINFO_DATA_RESTRICTION; ?>
	</td></tr>
	<tr class="firstcolor">
		<td style="color: #FFB204;"><?php echo DETAILEDINFO_ALLYPAGE; ?></td>
		<td><input id="act_allypage" dojoType="dijit.form.CheckBox"
			name="allypage" checked onchange="reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td style="color: #FF0000;"><?php echo DETAILEDINFO_SCANS; ?></td>
		<td><input id="act_scans" dojoType="dijit.form.CheckBox"
			name="scans" checked onchange="reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td style="color: #C30027;"><?php echo DETAILEDINFO_MESSAGES; ?></td>
		<td><input id="act_messages" dojoType="dijit.form.CheckBox"
			name="messages" checked onchange="reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
	</tr>
	<tr class="firstcolor">
		<td style="color: #FF6B06;"><?php echo DETAILEDINFO_MANUAL; ?></td>
		<td><input id="act_manual" dojoType="dijit.form.CheckBox"
			name="manual" checked onchange="reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td style="color: #C3D564;"><?php echo DETAILEDINFO_GALAXYVIEWS; ?></td>
		<td><input id="act_galaxyview" dojoType="dijit.form.CheckBox"
			name="galaxyview" checked onchange="reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td style="color: #F1E804;"><?php echo DETAILEDINFO_COMBATS; ?></td>
		<td><input id="act_combat_reports" dojoType="dijit.form.CheckBox"
			name="combat_reports" checked onchange="reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
	</tr>
</table>
<table border="0" id="day_selection">
	<tr class="firstcolor">
	<?php
	echo '<td style="text-align:center;" id="monday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_MONDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="tuesday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_TUESDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="wednesday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_WEDNESDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="thursday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_THURSDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="friday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_FRIDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="saturday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_SATURDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="sunday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_SUNDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="workingday">'.
	mb_substr(DETAILEDINFO_WEEKDAY_MONDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')." - ".
	mb_substr(DETAILEDINFO_WEEKDAY_FRIDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";

	echo '<td style="text-align:center;" id="weekend">'.
	mb_substr(DETAILEDINFO_WEEKDAY_SATURDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')." - ".
	mb_substr(DETAILEDINFO_WEEKDAY_SUNDAY,0,DETAILEDINFO_WEEKDAY_SHORTLENGTH,'UTF-8')."</td>\n";
	?>
	</tr>
	<tr class="firstcolor">
		<td align="center"><input id="monday" dojoType="dijit.form.CheckBox"
			name="monday" checked onclick="handle_day_change('monday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="tuesday" dojoType="dijit.form.CheckBox"
			name="tuesday" checked onclick="handle_day_change('tuesday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="wednesday" dojoType="dijit.form.CheckBox"
			name="wednesday" checked onclick="handle_day_change('wednesday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="thursday" dojoType="dijit.form.CheckBox"
			name="thursday" checked onclick="handle_day_change('thursday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="friday" dojoType="dijit.form.CheckBox"
			name="friday" checked onclick="handle_day_change('friday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="saturday" dojoType="dijit.form.CheckBox"
			name="saturday" checked onclick="handle_day_change('saturday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="sunday" dojoType="dijit.form.CheckBox"
			name="sunday" checked onclick="handle_day_change('sunday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="workingday" dojoType="dijit.form.CheckBox"
			name="workingday" checked onclick="handle_day_change('workingday'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
		<td align="center"><input id="weekend" dojoType="dijit.form.CheckBox"
			name="weekend" checked onclick="handle_day_change('weekend'); reload_url(<?php echo $playerid; ?>,'act_graph')" /></td>
	</tr>
</table>
<div style="display:none">
<div dojoType="dijit.Tooltip" connectId="monday">
<?php echo DETAILEDINFO_WEEKDAY_MONDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="tuesday">
<?php echo DETAILEDINFO_WEEKDAY_TUESDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="wednesday">
<?php echo DETAILEDINFO_WEEKDAY_WEDNESDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="thursday">
<?php echo DETAILEDINFO_WEEKDAY_THURSDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="friday">
<?php echo DETAILEDINFO_WEEKDAY_FRIDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="saturday">
<?php echo DETAILEDINFO_WEEKDAY_SATURDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="sunday">
<?php echo DETAILEDINFO_WEEKDAY_SUNDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="workingday">
<?php echo DETAILEDINFO_WEEKDAY_WORKINGDAY; ?>
</div>
<div dojoType="dijit.Tooltip" connectId="weekend">
<?php echo DETAILEDINFO_WEEKDAY_WEEKEND; ?>
</div>
</div>
<?php
$url = "ajax/ajax_activity_graph.php?playerid=$playerid&galaxy=1&scans=1&messages=1&combats=1&allypage=1&manual=1&days=1234567&time_from=$time_from&time_to=$time_to";
?>
<div id="act_graph" dojoType="dijit.layout.ContentPane" href= "<?php echo $url; ?>">
</div>
<br>
<?php
if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_caninsert)) {
?>
<div class="failure"><?php echo DETAILEDINFO_OGAME_SERVERTIMES; ?></div>
<br>
<div class="tblhead" style="width:550px;" dojoType="dijit.TitlePane" title="<?php echo DETAILEDINFO_ENTER_MANUALLY; ?>" open="false">
<?php
/* removed until a good solution was found to determine correct time of Ogame (is no longer CET for all installations)
	<p align="center">
	<button dojoType="dijit.form.Button" type="button" onclick="set_player_active(<?php echo $playerid; ?>);"><?php echo DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE; ?></button>
	</p>
*/
?>
	<div class="firstcolor">
	<?php echo DETAILEDINFO_PLAYER_SEEN_ON; ?>
	<input type="text" name="date" value="" dojoType="dijit.form.DateTextBox" trim="true" id="date" propercase="false" style="width:85px;">
	<select name="select_h" dojoType="dijit.form.Select" id="time_h" jsId="time_h" maxheight="400">
	<?php
	for ($i=0; $i<24; $i++) {
			$time_h = sprintf("%02d",$i);
			echo "<option value=\"$time_h\">$time_h</option>\n";
	}
	?>
	</select>:
	<select name="select_m" dojoType="dijit.form.Select" id="time_m" jsId="time_m" maxheight="400">
	<?php
	for ($j=0;$j<4;$j++) {
		$time_m = sprintf("%02d",$j*15);
		echo "<option value=\"$time_m\">$time_m</option>\n";
	}
	?>
	</select>
	<button dojoType="dijit.form.Button" type="button" onclick="set_player_activity(<?php echo $playerid; ?>);"><?php echo DETAILEDINFO_INSERT; ?></button>
	</div>

</div>
<?php
}
?>
</div>