<?php
if (isset($_POST['language'])) {
	$new_language = $_POST['language'];
} elseif (isset($_GET['language'])) {
	$new_language = $_GET['language'];
}

require "_general_header.inc.php";

if (isset($_POST['redirect_url'])) {
	Galaxytool::HTML_redirect($_POST['redirect_url']);
}

try {
	$userinfo_obj = new UserInfo($dbtablename, $systemtablename, $utablename, $reporttable, $iptablename, $fleetmovetable, $combattable, $messagetable, $playertable, $allytable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e->getMessage());
}

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_is_admin)) {
	// check if installation files have been deleted
	if (@file_exists(GALAXYTOOL_ROOT."/install.php") || @file_exists(GALAXYTOOL_ROOT."/update.php")) {
		$messages = new ErrorObject(ErrorObject::severity_error, INSTALL_FILE_DELETE_CHECK);
	}
}

$need_admin = $need_mail = 0;
if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) === true) {
	$admin_email = $userinfo_obj->get_admin_email_user();
	$need_admin = $admin_email["admin"];
	$need_mail  = $admin_email["email"];
}

echo Layout::make_header(INDEX_TITLE,false,"",true);

if ($need_admin > 0 || $need_mail > 0) {
	echo Layout::start_block(INDEX_USERMANAGEMENT);
	echo '
	<table>
	<tr><td>'.INDEX_NEEDADMIN.'</td><td class="farbe4">'.$need_admin.'</td></tr>
	<tr><td>'.INDEX_NEEDEMAIL.'</td><td class="farbe6">'.$need_mail.'</td></tr>
	</table>
	';
	echo Layout::close_block();
}

?>
<br>
<?php
echo Layout::start_block(INDEX_SHOUTBOX);
?>
<div dojoType="dojo.data.ItemFileReadStore" jsId="shoutbox_store" id="shoutbox_store" url="ajax/ajax_shoutbox.php?type=read"></div>
<table dojoType="dojox.grid.DataGrid" jsId="shoutbox_grid" id="shoutbox_grid" store="shoutbox_store"
	   canSort="false" autoHeight="true" rowCount="10" selectable="true" data-dojo-props="escapeHTMLInData:false">
	<thead>
		<tr>
<?php
// show first column with ID only if delete permission is given to the user
	if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) === true) {
		echo '<th width="20px" field="id" formatter="galaxytool.Home.deleteFormatter">id</th>';
	}
?>
			<th width="75px" field="date">date</th>
			<th width="100px" field="username">username</th>
			<th width="auto" field="shouttext">shouttext</th>

		</tr>
	</thead>
</table>
<?php echo INDEX_COMMENT.":"; ?>&nbsp;
<input type="text" name="shouttext" value="" dojoType="dijit.form.TextBox" trim="true" jsId="shouttext" id="shouttext" style="width: 350px;" size="255" maxlength="255">
<button dojoType="dijit.form.Button" type="button" id="add_comment" onClick="galaxytool.Home.addComment()"><?php echo INDEX_INSERT; ?></button>
<?php
echo Layout::close_block();

if ($_SESSION['s_auth']->get_setting(iAuthorization::setting_getting_started) != "hidden") {
	$expand_getting_started = ($_SESSION['s_auth']->get_setting(iAuthorization::setting_getting_started) == "expand") ? "true" : "false";
?>
<br>
<div id="gettingStartedInfos" dojoType="dijit.TitlePane" title="<?php echo INDEX_GETTING_STARTED; ?>" open="<?php echo $expand_getting_started; ?>">
<?php
switch($_SESSION['lang']) {
	case "german":  $url = "https://addons.mozilla.org/de/firefox/addon/galaxytoolbar/versions"; break;
	case "spanish": $url = "https://addons.mozilla.org/es-ES/firefox/addon/galaxytoolbar/versions"; break;
	default:        $url = "https://addons.mozilla.org/en-US/firefox/addon/galaxytoolbar/versions"; break;
}
echo INDEX_GETTING_STARTED1."<br>";
echo str_replace("&1","<strong>$global_universe</strong>",INDEX_GETTING_STARTED2)."<br>";
echo str_replace("&1",'<a target="_blank" class="external_link" href="'.$url.'">Galaxytoolbar</a>',INDEX_GETTING_STARTED3);
echo "<br>".INDEX_GETTING_STARTED4."<br>";
echo INDEX_GETTING_STARTED5." ".INDEX_GETTING_STARTED6."<br>";

switch($_SESSION['lang']) {
	case "german":  $url = "http://de.wiki.galaxytool.eu/index.php/Bedienung"; break;
	case "spanish": $url = "http://es.wiki.galaxytool.eu/index.php/Utilizaci%C3%B3n"; break;
	default:        $url = "http://en.wiki.galaxytool.eu/index.php/Usage"; break;
}
echo INDEX_GETTING_WIKIPAGE;
echo " ".'<a target="_blank" class="external_link" href="'.$url.'">'.INDEX_GETTING_WIKIPAGE2.'</a>';
echo "<br><br>";
echo INDEX_GETTING_BOARD." ";
echo '<a target="_blank" class="external_link" href="http://board.galaxytool.eu">http://board.galaxytool.eu</a><br>';
echo "<br>";
$username = preg_replace("/[^a-zA-Z0-9_]/","",$_SESSION['s_auth']->get_setting(iAuthorization::setting_username));
$username = ($username == "") ? "Galaxytooluser" : $username;
$url = "http://widget.mibbit.com/?server=webirc.onlinegamesnet.net&channel=%23galaxietool&nick=".$username."&customloading=waiting%20for%20the%20IRC-server%20...&customprompt=Welcome%20to%20Galaxytool%20IRC%20Channel.&noServerTab=false&noServerMotd=true&a";
echo INDEX_GETTING_CHAT1." ";
echo '<a target="_blank" class="external_link" href="'.$url.'">http://wbe002.mibbit.com/</a><br>';
echo INDEX_GETTING_CHAT2;
?>
</div>
<br>
<?php
}
?>
<?php

if ($_SESSION['s_auth']->get_setting(iAuthorization::setting_plugin_info) != "hidden") {
	$expand_plugin = ($_SESSION['s_auth']->get_setting(iAuthorization::setting_plugin_info) == "expand") ? "true" : "false";


$http_s = (isset($_SERVER['HTTPS'])) ? "https://" : "http://";
?>
<div id="toolbarInfos" dojoType="dijit.TitlePane" title="<?php echo INDEX_TOOLBAR_INFO; ?>" open="<?php echo $expand_plugin; ?>">
<table border="0" cellpadding="2" cellspacing="0" style="width: 100%;">
<tr>
<td style="width: 200px;"><?php echo INDEX_TOOLBAR_URL; ?></td><td id="plugin_url"><?php echo $http_s.$_SERVER['HTTP_HOST'].str_replace("index.php","galaxyplugin.php",$_SERVER['PHP_SELF']); ?></td>
</tr>
<tr>
<td style="width: 200px;"><?php echo INDEX_TOOLBAR_TOKEN; ?></td><td id="plugin_token"><?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_plugin_token); ?></td>
</tr>
<tr>
<td><?php echo INDEX_TOOLBAR_VERSION_REQUIRED; ?></td>
<td>
<?php
switch($_SESSION['lang']) {
	case "german":  $url = "https://addons.mozilla.org/de/firefox/addon/galaxytoolbar/"; break;
	case "spanish": $url = "https://addons.mozilla.org/es-ES/firefox/addon/galaxytoolbar/"; break;
	default:        $url = "https://addons.mozilla.org/en-US/firefox/addon/galaxytoolbar/"; break;
}
?>
<a class="external_link" href="<?php echo $url; ?>" target="_blank"><?php echo PLUGIN_VERSION; ?></a></td>
</tr>
<tr>
<td colspan="2">
<?php
switch($_SESSION['lang']) {
	case "german":  $url = "http://de.wiki.galaxytool.eu/index.php/Toolbar"; break;
	case "spanish": $url = "http://es.wiki.galaxytool.eu/index.php/Toolbar"; break;
	default:        $url = "http://en.wiki.galaxytool.eu/index.php/Firefox_Extension"; break;
}
?>
<a class="external_link" href="<?php echo $url; ?>" target="_blank"><?php echo INDEX_TOOLBAR_INSTALL_GUIDE; ?></a></td>
</tr>
<tr>
<td colspan="2">
<button dojoType="dijit.form.Button" type="button" id="new_token" onClick="galaxytool.Home.getNewToken()">
<?php echo INDEX_TOOLBAR_NEW_TOKEN; ?>
</button>
</td>
</tr>
</table>
</div>
<?php
}
?>
<br>
<?php
echo Layout::start_block(INDEX_USERINFO);

$now_online        = $userinfo_obj->get_now_online();
$now_online_text   = get_online_list($now_online);
$today_online      = $userinfo_obj->get_today_online();
$today_online_text = get_online_list($today_online);

?>
<table cellpadding="4" cellspacing="0" border="0" width="100%">
<tr><td><?php echo INDEX_ONLINE; ?>: <strong><?php echo count($now_online); ?></strong></td><td><?php echo $now_online_text; ?></td></tr>
<tr><td><?php echo INDEX_TODAY; ?>: <strong><?php echo count($today_online); ?></strong></td><td><?php echo $today_online_text; ?></td></tr>
<tr><td colspan="2"><?php echo INDEX_ALL; ?>: <strong><?php echo $userinfo_obj->get_overall_logins(); ?></strong></td></tr>
<tr><td colspan="2"><?php echo INDEX_OWN_LOGINS; ?>: <strong><?php echo $userinfo_obj->get_user_logins(); ?></strong></td></tr>
</table>
<?php
echo Layout::close_block();
?>
<div style="display:none" id="G-71bfcce7-421d-4042-95d4-a585a821cbca"></div>
<script type="text/javascript" src="javascript/home.js">
</script>
<?php
echo Layout::make_footer($global_universe, $messages, true);



function get_online_list($online) {
	$online_text = "";
	foreach ($online as $value) {
		if ($value->username != "") {
			$username = Galaxytool::cleanString($value->username);
			if ($value->player_id > 0) {
				if ($online_text == "") {
					$online_text = "<a href=\"playerinformation.php?id=".$value->player_id."\">".$username."</a>";
				} else {
					$online_text .= ", <a href=\"playerinformation.php?id=".$value->player_id."\">".$username."</a>";
				}
			} else {
				if ($online_text == "") {
					$online_text = $username;
				} else {
					$online_text .= ", ".$username;
				}
			}
		}
	}
	return $online_text;
}
