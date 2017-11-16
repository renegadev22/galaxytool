<?php
$content_type = "text/html";
require "_general_header.inc.php";
?>
<form id="update_links" name="update_links" action="#" accept-charset="utf-8">
<table cellpadding="4" cellspacing="0" border="0" width="100%">
<tr>
<td style="width:150px;"><?php echo USER_LINKS; ?><br>
<span style="font-size:7pt;"><?php echo USER_LINKS2; ?></span></td>
<td>
<textarea id="links" data-dojo-type="dijit.form.SimpleTextarea" data-dojo-props='name:"links",
			style:{height:"200px", width:"90%"}, rows:"", cols:""'>
<?php echo str_replace('\n',"\n",$_SESSION['s_auth']->get_setting(iAuthorization::setting_links)); ?>
</textarea>
</td>
</tr>
<tr valign="top">
<td>&nbsp;</td>
<td id="links_buttons">
<button id="submit_links" dojoType="dijit.form.Button" type="button" name="submitbutton2" onclick="update_links()"><?php echo USER_SUBMIT; ?></button>
<button id="reset_links" dojoType="dijit.form.Button" type="reset"><?php echo USER_RESET; ?></button>
</td>
</tr>
</table>
</form>