<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_userman)) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}
try {
	$user_man  = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);
	$user_info = new UserInfo($dbtablename, $systemtablename, $utablename, $reporttable, $iptablename, $fleetmovetable, $combattable, $messagetable, $playertable, $allytable);

} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}


echo Layout::make_header(USER_TITLE);

if (isset($_POST['user_id'])) {
	if (isset($_POST['maintenance'])) {
		$maintenance  = ($_POST['maintenance'] == "true")  ? "true" : "false";
	} else {
		$maintenance = "false";
	}

	if (is_numeric($_POST['user_id'])) {
		// Update user
		$result = $user_man->update_user($_POST['user_id'], $_POST['username'], $_POST['pass1'], $_POST['pass2'], $_POST['stylepath'], $_POST['ogame_playerid'],
		                                 $_POST['ogame_allyid'], $_POST['email'], $_POST['cansearch'], $_POST['caninsert'], $_POST['candelete'], $_POST['statusview'],
		                                 $_POST['probeview'], $_POST['userman'], $_POST['history'], $_POST['diplomatic'], $_POST['fleetinfo'], $_POST['activities'],
		                                 $maintenance);
		$show_messages = true;
		$messages = $user_man->get_error_object();

	} elseif ($_POST['user_id'] == "new_user") {
		// Create new user
		$result = $user_man->create_new_user($_POST['username'], $_POST['pass1'], $_POST['stylepath'], $_POST['ogame_playerid'], $_POST['ogame_allyid'], $_POST['email'],
		                                     $_POST['cansearch'], $_POST['caninsert'], $_POST['candelete'], $_POST['statusview'], $_POST['probeview'], $_POST['userman'],
		                                     $_POST['history'], $_POST['diplomatic'], $_POST['fleetinfo'], $_POST['activities'],
		                                     $maintenance);
		$show_messages = true;
		$messages = $user_man->get_error_object();
	}
}

$fehler = false;
$all_user = $user_info->get_user_with_id();

$show_id = "new_user";
if (isset($_GET['id'])) {
	$show_id = intval($_GET['id']);
	$action_url = "usermanagement.php?id=".$show_id;
} else {
	$action_url = "usermanagement.php";
}

$email_read_only = "true";
$permissions_read_only = "false";
$display_trash = "none";

if ($messages != null && $messages->get_worst_severity() == ErrorObject::severity_error) {
	// we had an issue inserting and need to show the values as provided from POST request
	$email_read_only = "false";

	$username       = trim(stripslashes($_POST['username']));
	$ogame_playerid = trim(stripslashes($_POST['ogame_playerid']));
	$ogame_allyid   = trim(stripslashes($_POST['ogame_allyid']));
	$stylepath      = trim(stripslashes($_POST['stylepath']));
	$email          = trim(stripslashes($_POST['email']));

	$permission[iAuthorization::permission_cansearch]    = $_POST[iAuthorization::permission_cansearch];
	$permission[iAuthorization::permission_caninsert]    = $_POST[iAuthorization::permission_caninsert];
	$permission[iAuthorization::permission_candelete]    = $_POST[iAuthorization::permission_candelete];
	$permission[iAuthorization::permission_statusview]   = $_POST[iAuthorization::permission_statusview];
	$permission[iAuthorization::permission_probeview]    = $_POST[iAuthorization::permission_probeview];
	$permission[iAuthorization::permission_userman]      = $_POST[iAuthorization::permission_userman];
	$permission[iAuthorization::permission_history]      = $_POST[iAuthorization::permission_history];
	$permission[iAuthorization::permission_diplomatic]   = $_POST[iAuthorization::permission_diplomatic];
	$permission[iAuthorization::permission_fleetinfo]    = $_POST[iAuthorization::permission_fleetinfo];
	$permission[iAuthorization::permission_activities]   = $_POST[iAuthorization::permission_fleetinfo];
	$permission[iAuthorization::permission_maintenance]  = $_POST[iAuthorization::permission_maintenance];

} elseif($show_id != "new_user") {
	// we have to show values for a given user id - keep email read only
	$user_data = $user_man->get_user_data($show_id);
	$username       = $user_data['username'];
	$ogame_playerid = $user_data['ogame_playerid'];
	$ogame_allyid   = $user_data['ogame_allyid'];
	$stylepath      = $user_data['stylepath'];
	$email          = $user_data['email'];

	$permission = $user_data["permission"];
	// admin settings must not be changed
	if ($user_data[iAuthorization::permission_is_admin] == "true") {
		$permissions_read_only = "true";
		$display_trash = "none";
	} else {
		$display_trash = "inline";
	}

} else {
	// show empty values for all fields
	$email_read_only = "false";

	$username       = "";
	$ogame_playerid = "";
	$ogame_allyid   = "";
	$stylepath      = "styles.css";
	$email          = "";

	$permission[iAuthorization::permission_cansearch]    = "false";
	$permission[iAuthorization::permission_caninsert]    = "false";
	$permission[iAuthorization::permission_candelete]    = "false";
	$permission[iAuthorization::permission_statusview]   = "false";
	$permission[iAuthorization::permission_probeview]    = "false";
	$permission[iAuthorization::permission_userman]      = "false";
	$permission[iAuthorization::permission_history]      = "false";
	$permission[iAuthorization::permission_diplomatic]   = "false";
	$permission[iAuthorization::permission_fleetinfo]    = "false";
	$permission[iAuthorization::permission_activities]   = "false";
	$permission[iAuthorization::permission_maintenance]  = "false";
}

$permission_text[iAuthorization::permission_cansearch]    = USER_SEARCH;
$permission_text[iAuthorization::permission_probeview]    = USER_PROBES;
$permission_text[iAuthorization::permission_history]      = USER_ALLYHISTORY;
$permission_text[iAuthorization::permission_statusview]   = USER_STATUS;
$permission_text[iAuthorization::permission_fleetinfo]    = USER_FLEETINFO;
$permission_text[iAuthorization::permission_activities]   = USER_ACTIVITIES;
$permission_text["skip1"]        = "skip";
$permission_text[iAuthorization::permission_caninsert]    = USER_INSERT;
$permission_text[iAuthorization::permission_candelete]    = USER_DELETION;
$permission_text[iAuthorization::permission_diplomatic]   = USER_DIPLOMATIC;
$permission_text["skip2"]        = "skip";
$permission_text[iAuthorization::permission_userman]      = USER_MANAGEMENT;
$permission_text[iAuthorization::permission_maintenance]  = USER_MAINTENANCE;

?>
<form id="userman1" name="usermangagement" method="post" accept-charset="utf-8" action="<?php echo $action_url; ?>" onsubmit="return validate_form()">
<?php
echo Layout::start_block(USER_TITLE);
echo Layout::get_formsave_buttons("userman1");
?>
<div style="margin-left: 150px;"><?php echo USER_NAMES; ?> :
<select name="user_selection" dojoType="dijit.form.Select" id="user_selection" jsId="user_selection" onChange="switch_user()" maxheight="400" style="padding: 1px; width: 150px;">
<option value="new_user"><?php echo USER_NEWUSER; ?></option>
<?php
foreach ($all_user as $user_name => $id) {
	echo "<option value=\"$id\" ";
	if ($show_id == $id) echo 'selected="selected"';
	echo ">".Galaxytool::cleanString($user_name)."</option>\n";
}
?>
</select>
<img id="delete_icon" src="../images/trash.png" style="cursor: pointer; vertical-align: middle; display: <?php echo $display_trash; ?>" onClick="delete_user()">
</div>
	<div dojoType="dojo.data.ItemFileReadStore" jsId="playerStore" id="playerStore" url="ajax/ajax_players.php?type=all&ogame_playerid=true"></div>
	<div dojoType="dojo.data.ItemFileReadStore" jsId="allyStore" id="allyStore" url="ajax/ajax_alliances.php?type=all&ogame_allyid=true"></div>
<table style="margin-top: 20px;">
	<tr><td style="width: 200px;"><?php echo USER_USERNAME; ?>:</td><td>
	<input type="text" name="username" value="<?php echo $username; ?>" required="true"
	       dojoType="dijit.form.ValidationTextBox" trim="true" id="username" maxLength="40" class="long_input">
	</td></tr>
	<tr><td><?php echo USER_PASSWORD; ?>:</td><td>
	<input type="password" name="pass1" value=""
	       dojoType="dijit.form.ValidationTextBox" trim="true" id="pass1" maxLength="40" class="long_input" invalidMessage="<?php echo REGISTER_ERROR5; ?>">
	</td></tr>
	<tr><td><?php echo USER_PASSWORD; ?>:</td><td>
	<input type="password" name="pass2" value=""
	       dojoType="dijit.form.ValidationTextBox" trim="true" id="pass2" maxLength="40" class="long_input" invalidMessage="<?php echo REGISTER_ERROR5; ?>">
	</td></tr>
	<tr><td><?php echo USER_INGAME; ?>:</td>
	<td>
	<input data-dojo-type="dijit.form.FilteringSelect" value="<?php echo $ogame_playerid; ?>"
    		data-dojo-props="store:playerStore, searchAttr:'player'" name="ogame_playerid" id="ogame_playerid"" class="long_input">
        </td></tr>
		<tr><td><?php echo USER_ALLYTAG; ?>:</td><td>
		<input dojoType="dijit.form.FilteringSelect" value="<?php echo $ogame_allyid; ?>"
			store="allyStore" searchAttr="allyname" name="ogame_allyid" id="ogame_allyid" trim="true" class="long_input">
	</td></tr>
	<tr><td><?php echo USER_STYLEPATH; ?>:</td><td>
	<input type="text" name="stylepath" value="<?php echo $stylepath; ?>" required="true"
	       dojoType="dijit.form.ValidationTextBox" trim="true" id="stylepath" maxLength="255" class="long_input">
	</td></tr>
	<tr><td><?php echo USER_EMAIL; ?>:</td><td>
	<input type="text" name="email" value="<?php echo $email; ?>" required="true"  class="long_input" readOnly="<?php echo $email_read_only; ?>"
	       dojoType="dijit.form.ValidationTextBox" trim="true" id="email" regExp="([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})"  maxLength="50">
	</td></tr>
</table>
<table style="margin-top: 20px;">
<?php
foreach($permission_text as $key => $text) {
	if ($text == "skip") {
		echo '<tr><td colspan="4">&nbsp;</td></tr>';
		continue;
	}

	$ON_Selected  =  ($permission[$key] == "true") ? "checked" : "";
	$OFF_Selected =  ($permission[$key] == "true") ? "" : "checked";

	$permissions_backup = $permissions_read_only;
	if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_is_admin) !== true &&
	    $key == iAuthorization::permission_maintenance) {
	    // maintenance is read only for all - except admin
		$permissions_read_only = "true";
	}
	echo '
	<tr>
		<td style="width:200px;">'.$text.':</td>
		<td><input type="radio" dojoType="dijit.form.RadioButton" name="'.$key.'" id="'.$key.'ON" value="true" readOnly="'.$permissions_read_only.'" '.$ON_Selected.'>'.USER_YES.'
		<input style="margin-left: 20px;" type="radio" dojoType="dijit.form.RadioButton" name="'.$key.'" id="'.$key.'OFF" value="false" readOnly="'.$permissions_read_only.'" '.$OFF_Selected.'>'.USER_NO.'
		</td>
	</tr>
	';
	$$permissions_read_only = $permissions_backup;
}
?>
	<tr>
		<td style="float: right;"><button dojoType="dijit.form.Button" type="submit" name="submitbutton1"><?php echo USER_SUBMIT; ?></button></td>
      	<td><button dojoType="dijit.form.Button" type="reset"><?php echo USER_RESET; ?></button></td>
	</tr>
</table>
<input type="hidden" id="user_id" name="user_id" value="<?php echo $show_id; ?>">
<?php
echo Layout::close_block();
?>
</form>
<script type="text/javascript"	src="javascript/usermanagement.js"></script>
<script type="text/javascript">
var own_userid = "<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid); ?>";
var user_is_admin = <?php if($_SESSION['s_auth']->get_permission(iAuthorization::permission_is_admin)) echo "true"; else echo "false"; ?>;
</script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>