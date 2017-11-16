<?php
$content_type = "text/html";
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true)
	exit("no permission");

if (!isset($_GET['playerid']) || !is_numeric($_GET['playerid'])) exit("playerid missing");
$player_id = intval($_GET['playerid']);
if (!isset($_GET['dialog']) || preg_replace("/[A-Za-z0-9_]/", "", $_GET['dialog']) != "") exit("dialog missing or wrong character");
$dialog = $_GET['dialog'];
if ($dialog == "") exit("dialog empty");
if (!isset($_GET['refresh']) || preg_replace("/[A-Za-z0-9_]/", "", $_GET['refresh']) != "") exit("refresh missing or wrong character");
$refresh = $_GET['refresh']; // can be empty!

try {
	$msg_obj    = new Messages($messagetable,$noticetable,$playertable);
	$notices    = new Notices($noticetable, $playertable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

$notice_content = $notices->get_notice($player_id);
if ($notice_content === false) {
	$message_content = Layout::print_messages($notices->get_error_object());
	$message_content = str_replace("images/", "../../images/", $message_content);
	exit($message_content);
}
?>
<form id="notice_edit" method="post" action="#" accept-charset="utf-8">
<input type="hidden" name="player_id" value="<?php echo $player_id; ?>">
<table cellpadding="4" cellspacing="0" border="0" width="100%">
	<tr>
		<td style="width:150px;"><?php echo NOTICE_TEXT; ?><br>(<span id="cntChars">0</span> / 65000 <?php echo NOTICE_CHARS; ?>)</td>
		<td>
			<textarea id="textcontent" name="textcontent" dojoType="dijit.form.Textarea" onKeyUp="count_character();" style="min-height:400px;"><?php echo $notice_content['noticetext']; ?></textarea>
		</td>
	</tr>
	<tr>
		<td style="float: right;"><button dojoType="dijit.form.Button" type="button" name="submitbutton1"
		   onClick="update_notice('<?php echo $dialog; ?>', '<?php echo $refresh; ?>', '<?php echo $player_id; ?>');"><?php echo NOTICE_SAVE; ?></button></td>
	    <td><button dojoType="dijit.form.Button" type="reset" onClick="reset();"><?php echo USER_RESET; ?></button></td>
	</tr>
</table>
</form>
