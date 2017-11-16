<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

if (isset($_GET['activate']) && is_numeric($_GET['activate']) && $_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) === true) {
	$userman_obj = new UserManagement($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from);
	$userid = (int)$_GET['activate'];
	$updated = $userman_obj->activate_user($userid);
	if ($updated === true) {
		// send activation email with user logon language
		$link = strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$link = str_replace("userinfo.php","ajax/ajax_startpage.php?type=activation_email&userid=$userid",$link);
		$content = file_get_contents($link);
		if ($content == "true") {
			$messages = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);
		} else {
			$messages = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR3);
		}

	}
}

echo Layout::make_header(PW_TITLE);
?>
<div>
    <div id="tabcontainer" jsId="tabcontainer" dojoType="dijit.layout.TabContainer" doLayout="false">
	     <div id="tab1" jsId="tab1" dojoType="dojox.layout.ContentPane" title="<?php echo DETAILEDINFO_PLAYERINFO_TITLE; ?>"
	     href="ajax/ajax_userinfo.php" selected="true">
            ...
        </div>
        <div id="tab2" jsId="tab2" dojoType="dojox.layout.ContentPane" title="<?php echo DETAILEDINFO_PLAYERINFO_TITLE." 2"; ?>"
        href="ajax/ajax_userinfo2.php">
            ...
        </div>
        <div id="tab3" jsId="tab3" dojoType="dojox.layout.ContentPane" title="<?php echo USERINFO_DATA; ?>"
        href="ajax/ajax_userinfo_systems.php">
            ...
        </div>
<?php if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) === true) { // show IP tab only for user management active
		echo '
        <div id="tab4" jsId="tab4" dojoType="dojox.layout.ContentPane" title="'.USERINFO_IP.'"
        	href="ajax/ajax_userinfo_ipinfo.php">
            ...
        </div>';
}
?>
    </div>
</div>
<script type="text/javascript"	src="javascript/userinfo.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>