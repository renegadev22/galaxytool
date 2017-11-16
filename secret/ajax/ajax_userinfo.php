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
var storeData = {
	identifier: 'username',
	label: 'username',
	items: [
<?php
	$content = $userinfo_obj->getUserInfo1Data();
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
          "ingame: ".json_encode($entry["ingame"]).",".
          "allytag: ".json_encode($entry["allytag"]).",".
          "pid: ".json_encode($entry["pid"]).",".
          "aid: ".json_encode($entry["aid"]).",".
          "status: ".json_encode($entry["status_content"]).",".
          "status_style: ".json_encode($entry["status_style"]).",".
          "url: ".json_encode($entry["url"]).",".
          "logins: ".$entry["logins"].",".
          "last_login: ". json_encode($entry["last_login"]).
          "}\n";
	}
?>
	]}
var store1 = new dojo.data.ItemFileReadStore({data: storeData});
store1.comparatorMap={}
store1.comparatorMap["username"] = function (a, b) { return a.localeCompare(b); }
store1.comparatorMap["ingame"] = function (a, b) { return a.localeCompare(b); }
store1.comparatorMap["allytag"] = function (a, b) { return a.localeCompare(b); }
</script>
<table dojoType="dojox.grid.DataGrid" jsId="grid1" id="grid1" store="store1" query="{ username: '*' }" selectable="true"
		style="width: 100%; margin: 5 0 0 0;" clientSort="true" sortinfo="1" autoHeight="true" rowCount="<?php echo $number_of_items; ?>">
	<thead>
		<tr>
			<th width="120px" field="username"><?php echo USERINFO_USERNAME; ?></th>
			<th width="120px" field="ingame" formatter="galaxytool_ingame_formatter"><?php echo USERINFO_INGAME; ?></th>
			<th width="100px" field="allytag" formatter="galaxytool_ally_formatter"><?php echo USERINFO_ALLYTAG; ?></th>
			<th width="60px" field="status" formatter="galaxytool_status_formatter"><?php echo USERINFO_STATUS; ?></th>
			<th width="100px" field="logins"formatter="galaxytool_centered_formatter"><?php echo USERINFO_LOGINS; ?></th>
			<th width="auto" field="last_login"><?php echo USERINFO_LASTLOGIN; ?></th>
		</tr>
	</thead>
</table><br>