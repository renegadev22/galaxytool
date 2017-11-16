<?php
$content_type = "text/html";
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) !== true) exit("no permission");

try {
	$userinfo_obj = new UserInfo($dbtablename, $systemtablename, $utablename, $reporttable, $iptablename, $fleetmovetable, $combattable, $messagetable, $playertable, $allytable);
} catch (Exception $e) {
	exit($e->getMessage());
}
?>
<select name="user_select" dojoType="dijit.form.Select" style="width:130px" id="user_select" jsId="user_select">
<?php
	$user_list = $userinfo_obj->get_user_with_id();

	$first_id = null;
	foreach ($user_list as $username => $id) {
		if ($first_id == null) $first_id = $id;
		echo "<option value=\"$id\">".Galaxytool::cleanString($username)."</option>\n";
	}
	$store_url = "ajax/ajax_userinfo_ipdetails.php?userid=$first_id";
?>
</select>
<span dojoType="dojo.data.ItemFileReadStore" id="store4" jsId="store4" url="<?php echo $store_url; ?>"
	  urlPreventCache="false" clearOnClose="true"></span>
<table dojoType="dojox.grid.DataGrid" jsId="grid4" id="grid4" store="store4" query="{ id: '*' }"
	style="width: 100%; margin-top: 5; margin-bottom:20px;" clientSort="true" sortinfo="-2" autoHeight="true" selectable="true">
	<thead>
		<tr>
			<th width="auto" field="ip"><?php USERINFO_IP; ?></th>
			<th width="auto" field="logintime"><?php echo USERINFO_LOGINTIME; ?></th>
		</tr>
	</thead>
</table><br>