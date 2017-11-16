<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_history) !== true) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

$header = '<script type="text/javascript" src="https://www.google.com/jsapi"></script>';
echo Layout::make_header(ALLYHISTORY_TITLE,false,$header);

// playerinformation.php and allyinformation.php have direct links to that page
if (isset($_GET['a1'])) {
	$ally_1 = $_GET['a1'];
}
if (isset($_GET['p1'])) {
	$player_1 = $_GET['p1'];
}


echo '
<script type="text/javascript">
var TEXT_ALLYHISTORY_SCORE = '.json_encode(ALLYHISTORY_SCORE).';
var TEXT_ALLYHISTORY_MSCORE = '.json_encode(ALLYHISTORY_MSCORE).';
var TEXT_ALLYHISTORY_RSCORE = '.json_encode(ALLYHISTORY_RSCORE).';
var TEXT_ALLYHISTORY_ESCORE = '.json_encode(ALLYHISTORY_ESCORE).';
var TEXT_REPORTS_DATE = '.json_encode(REPORTS_DATE).';
var TEXT_ALLYHISTORY_TBLHEAD = '.json_encode(ALLYHISTORY_TBLHEAD).';
</script>
';

echo Layout::start_block(ALLYHISTORY_TBLHEAD);
echo Layout::get_formsave_buttons("history_search");
?>
<div dojoType="dojo.data.ItemFileReadStore" jsId="playerStore" id="playerStore" url="ajax/ajax_players.php?type=all"></div>
<div dojoType="dojo.data.ItemFileReadStore" jsId="allyStore" id="allyStore" url="ajax/ajax_alliances.php?type=all"></div>
<form id="history_search" accept-charset="utf-8" dojoType="dijit.form.Form" onSubmit="return fetch_data_and_show_chart(0)">

<table width="100%">
<?php
for ($i=1;$i<=5;$i++) {
?>
<tr>
	<td style="width: 200px;"><?php echo ALLYHISTORY_ALLYNAME." ".$i; ?></td>
	<td><input dojoType="dijit.form.FilteringSelect" store="allyStore" searchAttr="allyname" name="alliance_<?php echo $i;?>"
			<?php
			if ($i == 1 && isset($ally_1)) echo ' value="'.$ally_1.'" ';
			?>
			id="alliance_<?php echo $i;?>" trim="true" style="width:130px;"></td>
	<td><?php echo ALLYHISTORY_PLAYERNAME." ".$i; ?></td>
	<td><input dojoType="dijit.form.FilteringSelect" store="playerStore" searchAttr="player" name="player_<?php echo $i;?>"
			<?php
			if ($i == 1 && isset($player_1)) echo ' value="'.$player_1.'" ';
			?>
			id="player_<?php echo $i;?>" trim="true" style="width:130px;"></td>
</tr>
<?php
}
?>
<tr>
	<td colspan="4">
		<select name="history_type" dojoType="dijit.form.Select" id="history_type" jsId="history_type" style="width:180px;" onChange="fetch_data_and_show_chart(dojo.byId('days').value)">
		<option value="points"><?php echo ALLYHISTORY_SCORE; ?></option>
		<option value="epoints"><?php echo ALLYHISTORY_ESCORE; ?></option>
		<option value="fpoints"><?php echo ALLYHISTORY_MSCORE; ?></option>
		<option value="rpoints"><?php echo ALLYHISTORY_RSCORE; ?></option>
		<option value="all"><?php echo ALLYHISTORY_ALL_DATA; ?></option>
		</select>
	</td>
</tr>
</table>
<button dojoType="dijit.form.Button" type="button" id="search_button1" onClick="fetch_data_and_show_chart(30)"><?php echo ALLYHISTORY_LASTMONTH; ?></button>
<button dojoType="dijit.form.Button" type="button" id="search_button2" onClick="fetch_data_and_show_chart(0)"><?php echo ALLYHISTORY_ALL_DATA; ?></button>
<input type="hidden" id="days" value="0">
</form>
<?php
echo Layout::close_block();

for ($i=1;$i<5;$i++) {
echo '<div id="HistoryResultsHideMe'.$i.'" style="display:none;">';
echo Layout::start_block(ALLYHISTORY_TBLHEAD,"HistoryResults".$i);
?>
<div id="chart_div<?php echo $i; ?>" style="height: 500px;"></div>
<?php
echo Layout::close_block();
echo "</div>";
}

?>
<script type="text/javascript"	src="javascript/history.js"></script>
<?php

echo Layout::make_footer($global_universe,$messages);
?>

