<?php
if (isset($_POST['user_language'])) {
	$new_language = $_POST['user_language'];
}
require "_general_header.inc.php";

$user_man = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);

// check if page must be redirected with logout
if (isset($_POST['submitbutton1']) && isset($_POST['oldpass']) && trim($_POST['oldpass'])!= "" && isset($_POST['delete_account'])) {
	// delete own user
	$deleted = $user_man->delete_user_by_password($_SESSION['s_auth']->get_setting( iAuthorization::setting_userid), $_POST['oldpass'] );
	if ($deleted == true) {
		Galaxytool::HTML_redirect("../index.php?logout");
	}
}

echo Layout::make_header(PW_TITLE);

?>
<script type="text/javascript">
var delete_account_safety_request = "<?php echo DELETE_ACCOUNT_SAFETY_REQUEST; ?>";
</script>
<?php
if (isset($_POST['submitbutton1'])) {
	// first tab - general options
	$changes = $user_man->change_options($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid), $_POST['oldpass'], $_POST['newpass1'], $_POST['newpass2'], $_POST['ogame_playerid'], $_POST['ogame_allyid'], $_POST['stylepath'],
	                          $_POST['email'], $_POST['timezone'], $_POST['ogame_offset'], $_POST['search_results'], $_POST['getting_started'], $_POST['plugin_info'], $_POST['user_language']);
	$show_messages = true;
	$messages = $user_man->get_error_object();
}
?>
<div>
	<div dojoType="dojo.data.ItemFileReadStore" jsId="playerStore" id="playerStore" url="ajax/ajax_players.php?type=all&ogame_playerid=true"></div>
	<div dojoType="dojo.data.ItemFileReadStore" jsId="allyStore" id="allyStore" url="ajax/ajax_alliances.php?type=all&ogame_allyid=true"></div>
    <div id="tabcontainer" jsId="tabcontainer" dojoType="dijit.layout.TabContainer" doLayout="false">
		<div id="tab1" jsId="tab1" dojoType="dijit.layout.ContentPane" title="<?php echo MENU_USEROPTIONS2; ?>" selected="true" class="standard_tab">
		<form name="usermangagement1" method="post" action="change_password.php" accept-charset="utf-8" onsubmit="return check_delete_account(this.delete_account_id.checked)">
		<table>
		<tr><td><?php echo OLD_PASSWORD; ?>:</td><td>
		<input type="password" name="oldpass" value="" required="true"
		       dojoType="dijit.form.ValidationTextBox" trim="true" id="oldpass" maxLength="40" class="long_input">
		</td></tr>
		<tr><td><?php echo NEW_PASSWORD; ?>:</td><td>
		<input type="password" name="newpass1" value=""
		       dojoType="dijit.form.TextBox" trim="true" id="newpass1" maxLength="40" class="long_input">
		</td></tr>
		<tr><td><?php echo NEW_PASSWORD; ?>:</td><td>
		<input type="password" name="newpass2" value=""
		       dojoType="dijit.form.TextBox" trim="true" id="newpass2" maxLength="40" class="long_input">
		</td></tr>
		<tr><td><?php echo USER_INGAME; ?>:</td>
		<td>
		<input data-dojo-type="dijit.form.FilteringSelect" value="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_ogame_playerid); ?>"
    		data-dojo-props="store:playerStore, searchAttr:'player'" name="ogame_playerid" id="ogame_playerid"" class="long_input">
        </td></tr>
		<tr><td><?php echo USER_ALLYTAG; ?>:</td><td>
		<input dojoType="dijit.form.FilteringSelect" value="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_ogame_allyid); ?>"
			store="allyStore" searchAttr="allyname" name="ogame_allyid" id="ogame_allyid" trim="true" class="long_input">
		</td></tr>
		<tr><td><?php echo USER_STYLEPATH; ?>:</td><td>
		<input type="text" name="stylepath" value="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_stylepath); ?>" required="true"
		       dojoType="dijit.form.ValidationTextBox" trim="true" id="stylepath" maxLength="255" class="long_input">
		</td></tr>
		<tr><td><?php echo USER_EMAIL; ?>:</td><td>
		<input type="text" name="email" value="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_email); ?>" required="true"  class="long_input"
		       dojoType="dijit.form.ValidationTextBox" trim="true" id="email" regExp="([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})"  maxLength="50">
		</td></tr>
		<tr><td><?php echo USER_TABLE_ENTRIES; ?>:</td><td>
		<?php
		$select_values = array(10,25,50,100);
		$selection = '
		<select name="search_results" dojoType="dijit.form.Select" id="search_results" jsId="search_results" style="width:50px; padding: 1px;">'."\n";
		foreach ($select_values as $select_value) {
			 $selected = ($select_value == $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results)) ? 'selected="selected"' : "";
			$selection .=  '<option value="'.$select_value.'" '.$selected.'>'.$select_value.'</option>'."\n";
		}
		$selection .= "</select>\n";
		echo $selection;
		?>
		</td></tr>
		<tr><td><?php echo CH_PASSWD_GETTING_STARTED; ?>:</td><td>
		<?php
		$select_values = array("expand" => CH_PASSWD_EXPAND, "collapse" => CH_PASSWD_COLLAPSE, "hidden" => CH_PASSWD_HIDDEN);
		$selection = '
		<select name="getting_started" dojoType="dijit.form.Select" id="getting_started" jsId="getting_started" style="width:150px; padding: 1px;">'."\n";
		foreach ($select_values as $key => $select_value) {
			 $selected = ($key == $_SESSION['s_auth']->get_setting(iAuthorization::setting_getting_started)) ? 'selected="selected"' : "";
			$selection .=  '<option value="'.$key.'" '.$selected.'>'.$select_value.'</option>'."\n";
		}
		$selection .= "</select>\n";
		echo $selection;
		?>
		</td></tr>
		<tr><td><?php echo CH_PASSWD_PLUGIN; ?>:</td><td>
		<?php
		$selection = '
		<select name="plugin_info" dojoType="dijit.form.Select" id="plugin_info" jsId="plugin_info" style="width:150px; padding: 1px;">'."\n";
		foreach ($select_values as $key => $select_value) {
			$selected = ($key == $_SESSION['s_auth']->get_setting(iAuthorization::setting_plugin_info)) ? 'selected="selected"' : "";
			$selection .=  '<option value="'.$key.'" '.$selected.'>'.$select_value.'</option>'."\n";
		}
		$selection .= "</select>\n";
		echo $selection;
		?>
		</td></tr>
		<tr><td><?php echo CH_PASSWD_USER_LANGUAGE; ?>:</td><td>
		<?php
		echo Layout::getLanguageDropDown("user_language","padding: 1px; width:150px;","../images/flags/", "index.php", false);
		?>
		</td></tr>
		<tr><td><?php echo TIMEZONE_OFFSET; ?>:</td><td>
		<?php
		echo Layout::get_timezone_selection("timezone", iAuthorization::setting_timezone_offset);
		?>
		</td></tr>
		<tr><td><?php echo TIMEZONE_OGAME_OFFSET; ?>:</td><td>
		<?php
		echo Layout::get_timezone_selection("ogame_offset", iAuthorization::setting_ogame_offset);
		?>
		</td></tr>
		<?php
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_is_admin) == false) {
			echo '
			<tr><td>'.DELETE_ACCOUNT.'</td>
			<td>
			<input id="delete_account_id" data-dojo-type="dijit.form.CheckBox" data-dojo-props=\'name:"delete_account", value:""\'/>
			</td></tr>';
		} else {
			echo '
			<tr><td>&nbsp;</td>
			<td style="display:none">
			<input id="delete_account_id" data-dojo-type="dijit.form.CheckBox" data-dojo-props=\'name:"delete_account", value:""\'/>
			</td></tr>';
					}
		?>
		<tr>
      	<td style="float: right;"><button dojoType="dijit.form.Button" type="submit" name="submitbutton1"><?php echo USER_SUBMIT; ?></button></td>
      	<td><button dojoType="dijit.form.Button" type="reset"><?php echo USER_RESET; ?></button></td>
		</tr>
		</table>
		</form>

       	</div>
        <div id="tab2" jsId="tab2" dojoType="dijit.layout.ContentPane" title="<?php echo USER_LINKS; ?>" href="ajax/ajax_options_links.php" class="standard_tab">
        </div>
        <div id="tab3" jsId="tab3" dojoType="dijit.layout.ContentPane" title="<?php echo USER_EXPORT_TITLE; ?>" href="ajax/ajax_options_bbcodes.php" class="standard_tab">
        </div>
        <div id="tab4" jsId="tab4" dojoType="dijit.layout.ContentPane" title="<?php echo CH_PASSWD_AUTHORIZATION; ?>" href="ajax/ajax_options_permissions.php" class="standard_tab">
        </div>
        <div id="tab5" jsId="tab5" dojoType="dijit.layout.ContentPane" title="<?php echo MENU_ADMIN; ?>" href="ajax/ajax_options_own_management.php" class="standard_tab">
        </div>
    </div>
</div>
<script type="text/javascript"	src="javascript/change_password.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>
