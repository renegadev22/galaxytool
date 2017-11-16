<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

echo Layout::make_header(STATS_TITLE, true);

?>
 <script type="text/javascript"	src="javascript/stats.js"></script>
 <script type="text/javascript">
 var stats_banned = "<?php echo PLAYER_BANNED; ?>";
 var stats_vacation = "<?php echo PLAYER_VACATION_MODE; ?>";
 var stats_noob = "<?php echo PLAYER_NOOB; ?>";
 var stats_inactive = "<?php echo PLAYER_INACTIVE; ?>";
 var stats_long_inactive = "<?php echo PLAYER_LONG_INACTIVE; ?>";
 var stats_outlaw = "<?php echo PLAYER_OUTLAW; ?>";
 var stats_confirm_delete = "<?php echo STATS_CONFIRM_DELETE; ?>";

	var plugins = {
			pagination: {
				pageSizes: ["10", "25", "50", "100"],	// Array, custom the items per page button
				// itemTitle: "entrys", 	// String, custom the item' title of description
				description: "30%",	// boolean, custom whether or not the description will be displayed
				sizeSwitch: "260px",	// boolean, custom whether or not the page size switch will be displayed
				pageStepper: "30em",	// boolean, custom whether or not the page step will be displayed
				gotoButton: true,	// boolean, custom whether or not the goto page button will be displayed
				maxPageStep: 7,		// Integer, custom how many page step will be displayed
				position: "both",	// String, custom the position of the pagination bar
										// there're three options: top, bottom, both
				defaultPageSize: <?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results); ?> // Integer, what page size will be used by default
				// ,descTemplate: "${1} ${0}" // A template of the current position description.
			}
		};
</script>

<div style="width: 90%; margin-left:20px;">
    <div id="tabcontainer" jsId="tabcontainer" dojoType="dijit.layout.TabContainer" doLayout=false style="width: 100%;">
	     <div id="tabcontainer1a" jsId="tabcontainer1a" dojoType="dijit.layout.TabContainer" title="<?php echo STATS_PLAYERSTATS; ?>" doLayout=false  nested="true">

	     	<div id="tab1" jsId="tab1" dojoType="dojox.layout.ContentPane" title="<?php echo STATS_STANDARD; ?>"
	     	href="ajax/ajax_stats_player.php?type=standard" selected="true">
            ...
        	</div>
	     	<div id="tab1b" jsId="tab1b" dojoType="dojox.layout.ContentPane" title="<?php echo STATS_MILITARY; ?>"
	     	href="ajax/ajax_stats_player.php?type=military">
            ...
        	</div>
        </div>

		<div id="tabcontainer1b" jsId="tabcontainer1b" dojoType="dijit.layout.TabContainer" title="<?php echo STATS_ALLYSTATS; ?>" doLayout=false nested="true">
	        <div id="tab2" jsId="tab2" dojoType="dojox.layout.ContentPane" title="<?php echo STATS_STANDARD; ?>"
	        href="ajax/ajax_stats_ally.php?type=standard" selected="true">
	            ...
	        </div>
	        <div id="tab2b" jsId="tab2b" dojoType="dojox.layout.ContentPane" title="<?php echo STATS_MILITARY; ?>"
	        href="ajax/ajax_stats_ally.php?type=military">
	            ...
	        </div>
        </div>
    </div>
</div>

<?php
echo Layout::make_footer($global_universe,$messages);
?>
