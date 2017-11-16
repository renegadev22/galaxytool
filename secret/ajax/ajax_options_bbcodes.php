<?php
$content_type = "text/html";
require "_general_header.inc.php";

// get BB Codes
try {
	$user_man = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);
	$bb_codes = $user_man->get_bb_codes($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
} catch (Exception $e) {
    exit($e->getMessage());
}
$messages = $user_man->get_error_object();
if ($messages != null) exit($messages->get_plain_message_text());

?>
<form id="update_bbcodes" name="update_bbcodes" action="#" accept-charset="utf-8">
<table cellpadding="4" cellspacing="0" border="0" width="100%">
<tr>
<td style="width:200px;"><?php echo USER_BB_COORDINATES; ?></td>
<td>
<input type="text" name="bb_coordinates" id="bb_coordinates" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_coordinates'];?>" onBlur="adjust_color(this);">
<span id="bb_coordinates_e" style="color: <?php echo $bb_codes['bb_coordinates']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_MOON; ?></td>
<td>
<input type="text" name="bb_moon" id="bb_moon" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_moon'];?>" onBlur="adjust_color(this);">
<span id="bb_moon_e" style="color: <?php echo $bb_codes['bb_moon']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_DEBRIS; ?></td>
<td>
<input type="text" name="bb_debris" id="bb_debris" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_debris'];?>" onBlur="adjust_color(this);">
<span id="bb_debris_e" style="color: <?php echo $bb_codes['bb_debris']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_ALLY; ?></td>
<td>
<input type="text" name="bb_ally" id="bb_ally" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_ally'];?>" onBlur="adjust_color(this);">
<span id="bb_ally_e" style="color: <?php echo $bb_codes['bb_ally']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_ALLYDETAILS; ?></td>
<td>
<input type="text" name="bb_allydetails" id="bb_allydetails" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_allydetails'];?>" onBlur="adjust_color(this);">
<span id="bb_allydetails_e" style="color: <?php echo $bb_codes['bb_allydetails']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_PLAYERNAME; ?></td>
<td>
<input type="text" name="bb_playername" id="bb_playername" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_playername'];?>" onBlur="adjust_color(this);">
<span id="bb_playername_e" style="color: <?php echo $bb_codes['bb_playername']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_BANNED; ?></td>
<td>
<input type="text" name="bb_banned" id="bb_banned" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_banned'];?>" onBlur="adjust_color(this);">
<span id="bb_banned_e" style="color: <?php echo $bb_codes['bb_banned']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_VACATION; ?></td>
<td>
<input type="text" name="bb_vacation" id="bb_vacation" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_vacation'];?>" onBlur="adjust_color(this);">
<span id="bb_vacation_e" style="color: <?php echo $bb_codes['bb_vacation']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_NOOB; ?></td>
<td>
<input type="text" name="bb_noob" id="bb_noob" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_noob'];?>" onBlur="adjust_color(this);">
<span id="bb_noob_e" style="color: <?php echo $bb_codes['bb_noob']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_INACTIVE; ?></td>
<td>
<input type="text" name="bb_inactive" id="bb_inactive" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_inactive'];?>" onBlur="adjust_color(this);">
<span id="bb_inactive_e" style="color: <?php echo $bb_codes['bb_inactive']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_LONGINACTIVE; ?></td>
<td>
<input type="text" name="bb_longinactive" id="bb_longinactive" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_longinactive'];?>" onBlur="adjust_color(this);">
<span id="bb_longinactive_e" style="color: <?php echo $bb_codes['bb_longinactive']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr>
<td><?php echo USER_BB_OUTLAW; ?></td>
<td>
<input type="text" name="bb_outlaw" id="bb_outlaw" dojoType="dijit.form.TextBox" trim="true" value="<?php echo $bb_codes['bb_outlaw'];?>" onBlur="adjust_color(this);">
<span id="bb_outlaw_e" style="color: <?php echo $bb_codes['bb_outlaw']; ?>;"><?php echo INDEX_EXAMPLE; ?></span>
</td>
</tr>
<tr valign="top">
<td>&nbsp;</td>
<td id="bbcode_buttons">
<button id="submit_bbcodes" dojoType="dijit.form.Button" type="button" name="submitbutton3" onclick="update_bbcodes()"><?php echo USER_SUBMIT; ?></button>
<button id="reset_bbcodes" dojoType="dijit.form.Button" type="reset"><?php echo USER_RESET; ?></button>
</td>
</tr>
</table>
</form>
