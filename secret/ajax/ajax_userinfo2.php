<?php
$content_type = "text/html";
require "_general_header.inc.php";

try {
	$userinfo_obj = new UserInfo($dbtablename, $systemtablename, $utablename, $reporttable, $iptablename, $fleetmovetable, $combattable, $messagetable, $playertable, $allytable);
} catch (Exception $e) {
	exit($e->getMessage());
}
?>
<script type="text/javascript">
var storeData2 = {
	identifier: 'username',
	label: 'username',
	items: [
<?php
	$content = $userinfo_obj->getUserInfo2Data();
	$first_item = true;
	$number_of_items = count($content);
	foreach ($content as $entry) {
		if ($first_item === true) {
			$first_item = false;
		} else {
			echo ",";
		}
		echo "{".
		    "username: ".json_encode($entry["username"]).",".
            "systems: ".json_encode($entry["systems"]).",".
            "systems_percent: ".json_encode($entry["systems_percent"]).",".
            "reports: ".json_encode($entry["reports"]).",".
            "fleetmoves: ".json_encode($entry["fleetmoves"]).",".
            "combats: ".json_encode($entry["combats"]).",".
            "messages: ".json_encode($entry["messages"]).",".
        	"last_update: ".json_encode($entry["last_update"]).
		"}\n";
	}
?>
	]}
var store2 = new dojo.data.ItemFileReadStore({data: storeData2});
store2.comparatorMap={}
//store2.comparatorMap["username"] = galaxytool_compare_case_insensitive;;
store2.comparatorMap["username"] = function (a, b) { return a.localeCompare(b); }
store2.comparatorMap["systems"] = galaxytool_compare_integer;
store2.comparatorMap["systems_percent"] = galaxytool_compare_float;
store2.comparatorMap["reports"] = galaxytool_compare_integer;
store2.comparatorMap["fleetmoves"] = galaxytool_compare_integer;
store2.comparatorMap["combats"] = galaxytool_compare_integer;
store2.comparatorMap["messages"] = galaxytool_compare_integer;
</script>
<table dojoType="dojox.grid.DataGrid" jsId="grid2" id="grid2" store="store2" query="{ username: '*' }" selectable="true"
		style="margin: 5 0 0 0;" clientSort="true" sortinfo="1" autoHeight="true" rowCount="<?php echo $number_of_items; ?>">
	<thead>
		<tr>
			<th width="90px" field="username"><?php echo USERINFO_USERNAME; ?></th>
			<th width="75px" field="systems" formatter="galaxytool_centered_formatter"><?php echo USERINFO_SYSTEMS; ?></th>
			<th width="50px" field="systems_percent" formatter="galaxytool_centered_formatter">%</th>
			<th width="75px" field="reports" formatter="galaxytool_centered_formatter"><?php echo INDEX_REPORTS; ?></th>
			<th width="75px" field="fleetmoves" formatter="galaxytool_centered_formatter"><?php echo MENU_FLEET_MOVEMENTS; ?></th>
			<th width="75px" field="combats" formatter="galaxytool_centered_formatter"><?php echo MENU_COMBAT_REPORTS; ?></th>
			<th width="75px" field="messages" formatter="galaxytool_centered_formatter"><?php echo MENU_MESSAGES; ?></th>
			<th width="auto" field="last_update" formatter="galaxytool_centered_formatter"><?php echo USERINFO_LAST_SUBMIT; ?></th>
		</tr>
	</thead>
</table><br>