<?php
$content_type = "text/html";
require "_general_header.inc.php";

$authorizations = array(
array(USER_SEARCH, iAuthorization::permission_cansearch),
array(USER_PROBES, iAuthorization::permission_probeview),
array(USER_ALLYHISTORY, iAuthorization::permission_history),
array(USER_STATUS, iAuthorization::permission_statusview),
array(USER_FLEETINFO, iAuthorization::permission_fleetinfo),
array(USER_ACTIVITIES, iAuthorization::permission_activities),
array(null, null),
array(USER_INSERT, iAuthorization::permission_caninsert),
array(USER_DELETION, iAuthorization::permission_candelete),
array(USER_DIPLOMATIC, iAuthorization::permission_diplomatic),
array(null, null),
array(USER_MANAGEMENT, iAuthorization::permission_userman),
array(USER_MAINTENANCE, iAuthorization::permission_maintenance),
array(CH_PASSWD_ADMIN, iAuthorization::permission_is_admin)
);

?>
<table class="standard" cellpadding="4" cellspacing="5" border="0" style="width: 500px;">
<?php
foreach ($authorizations as $entry) {
	if ($entry[0] == null) {
		echo '<tr><td colspan="2">&nbsp;</td></tr>'."\n";
	} else {
	echo '
	<tr><td>'.$entry[0].':</td>
	<td>';
	if ($_SESSION['s_auth']->get_permission($entry[1]))
		echo "<img src=\"../images/ok.png\">";
	else
		echo "<img src=\"../images/no.png\">";
	echo '
		</td>
	</tr>';
	}
}
?>
</table>