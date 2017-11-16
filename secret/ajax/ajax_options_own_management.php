<?php
$content_type = "text/html";
require "_general_header.inc.php";

try {
	$user_man = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);
} catch (Exception $e) {
    exit($e->getMessage());
}
?>
<form id="usermangagement" name="usermangagement" action="#" accept-charset="utf-8">
<table cellpadding="4" cellspacing="0" border="0" width="100%" style="padding: 20px;">
<tr>
<td>
<input id="delete_combatreports" name="delete_combatreports" dojoType="dijit.form.CheckBox" value="agreed">
<?php
$input = '<input id="old_combats_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_combats_p1"
        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
        invalidMessage="'.INDEX_INVALID_DATA.'">';
echo str_replace("&1",$input,USER_DELETE_MY_COMBAT_REPORTS_LIMITED);
?>
</td>
</tr>
<tr>
<td>
<input id="delete_messages" name="delete_messages" dojoType="dijit.form.CheckBox" value="agreed">
<?php
$input = '<input id="old_ingame_msg_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_ingame_msg_p1"
        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
        invalidMessage="'.INDEX_INVALID_DATA.'">';
echo str_replace("&1",$input,USER_DELETE_MY_MESSAGES_LIMITED);
?>
</td>
</tr>
<tr>
<td>
<input id="delete_fleetmoves" name="delete_fleetmoves" dojoType="dijit.form.CheckBox" value="agreed">
<?php echo USER_DELETE_MY_FLEETMOVES; ?>
</td>
</tr>
<tr>
<td id="admin_button">
<button id="delete_personal_data" dojoType="dijit.form.Button" type="button" name="delete_personal_data" onclick="perform_useradmin()"><?php echo USER_SUBMIT; ?></button>
</td>
</tr>
</table>
</form>