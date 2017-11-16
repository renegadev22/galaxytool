<?php
if (isset($_POST['user_language']) && $_POST['user_language'] != $_SESSION['lang']) {
	$new_language = $_POST['user_language'];
}
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_statusview) !== true ) {
	exit("No permission");
}


echo Layout::make_header(STATUS_TITLE);

$galaxy = (isset($_GET['galaxy']) && is_numeric($_GET['galaxy'])) ? intval($_GET['galaxy']) : 1;
if ($galaxy < 1) $galaxy = 1;

?>
<script type="text/javascript"	src="javascript/status.js"></script>
<div class="startsHidden" style="width: 750px; margin-left:20px;">
    <div id="tabcontainer" jsId="tabcontainer" dojoType="dijit.layout.TabContainer" doLayout=false style="width: 100%;">
	     <div id="tab1" jsId="tab1" dojoType="dijit.layout.ContentPane" title="<?php echo INDEX_INFO; ?>"
            href="ajax/ajax_status_information.php" selected="true">
        </div>
        <div id="tab2" jsId="tab2" dojoType="dijit.layout.ContentPane" title="<?php echo STATUS_GALAXY; ?>"
            href="ajax/ajax_status_galaxystatus.php?galaxy=<?php echo $galaxy; ?>">
        </div>
    </div>
</div>
<?php
echo Layout::make_footer($global_universe,$messages);
?>