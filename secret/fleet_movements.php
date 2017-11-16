<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_fleetinfo)) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

echo Layout::make_header(FLEETS_TITLE);

?>
<div id="fleet_movement_details" dojoType="dijit.layout.ContentPane" href="">
</div>

<script type="text/javascript" src="javascript/fleet_movements.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>