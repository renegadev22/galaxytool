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
var storeData3 = {
	identifier: 'id',
	label: 'username',
	items: [
<?php
	$content = $userinfo_obj->getSystemInfoData();
	$first_item = true;
	$number_of_items = count($content);
	foreach($content as $entry) {
		if ($first_item === true) {
			$first_item = false;
		} else {
			echo ",";
		}
		echo "{".
		     "id: '".$entry["id"]."',".
             "username: ".json_encode($entry["username"]).",".
             "galaxy: ".$entry["galaxy"].",".
             "counter: ".$entry["counter"].
             "}\n";
	}
?>
	]}

var store3 = new dojo.data.ItemFileReadStore({data: storeData3});
</script>
<table dojoType="dojox.grid.DataGrid" jsId="grid3" id="grid3" store="store3" query="{ username: '*' }" selectable="true"
			style="width: 100%; margin: 5 0 0 0;" clientSort="false" sortinfo="2" autoHeight="true" rowCount="<?php echo $number_of_items; ?>">
	<thead>
		<tr>
			<th width="auto" field="username"><?php echo USERINFO_USERNAME; ?></th>
			<th width="auto" field="galaxy"><?php echo USERINFO_GALAXY; ?></th>
			<th width="auto" field="counter"><?php echo USERINFO_SYSTEMS; ?></th>
		</tr>
	</thead>
</table><br>
