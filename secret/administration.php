<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_maintenance)) {
	$error_page_code = "permission";
	require GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

echo Layout::make_header(ADMIN_TITLE);

if (isset($_POST['submit_button'])) {
	try {
		$admin_class = new Administration($dbtablename, $systemtablename, $playertable, $allytable, $noticetable, $reporttable, $shouttable, $allyhistory, $playerhistory, $fleetmovetable, $player_activity, $messagetable, $combattable, $combatparty, $reportarchive, $formtable);

		$planets        = (isset($_POST['planets']))        ? true : false;
		$players        = (isset($_POST['players']))        ? true : false;
		$reports        = (isset($_POST['reports']))        ? true : false;
		$reset          = (isset($_POST['reset']))          ? true : false;
		$unused_players = (isset($_POST['unused_players'])) ? true : false;
		$galaxies       = (isset($_POST['galaxies']) && isset($_POST['galaxies_p1']))             ? intval($_POST['galaxies_p1']) : null;
		$old_players    = (isset($_POST['old_players']) && isset($_POST['old_players_p1']))       ? intval($_POST['old_players_p1']) : null;
		$old_reports    = (isset($_POST['old_reports']) && isset($_POST['old_reports_p1']))       ? intval($_POST['old_reports_p1']) : null;
		$old_galaxies   = (isset($_POST['old_galaxies']) && isset($_POST['old_galaxies_p1']))     ? intval($_POST['old_galaxies_p1']) : null;
		$old_activities = (isset($_POST['old_activities']) && isset($_POST['old_activities_p1'])) ? intval($_POST['old_activities_p1']) : null;
		$old_combats    = (isset($_POST['old_combats']) && isset($_POST['old_combats_p1']))       ? intval($_POST['old_combats_p1']) : null;
		$old_messages   = (isset($_POST['old_ingame_msg']) && isset($_POST['old_ingame_msg_p1'])) ? intval($_POST['old_ingame_msg_p1']) : null;

		$admin_class->cleanup($planets, $galaxies, $players, $reports, $reset, $unused_players, $old_players, $old_reports, $old_galaxies, $old_activities, $old_combats, $old_messages);

		$messages = $admin_class->get_error_object();

	} catch (Exception $e) {
		exit("Exception occurred: ".$e->getMessage());
	}
}

echo Layout::start_block(ADMIN_TITLE);
if (OGAME_URL !== "") {
	$OGame_header = get_headers(OGAME_URL."/api/universe.xml", 1);

	if (isset($OGame_header) && array_key_exists(0,$OGame_header) && strpos($OGame_header[0],"200 OK")) {
		$OGame_data_date = Date("Y-m-d H:i",strtotime($OGame_header["Last-Modified"]));
	} else {
		$OGame_data_date = "";
	}

	$OGame_header = get_headers(OGAME_URL."/api/highscore.xml?category=1&type=1", 1);

	if (isset($OGame_header) && array_key_exists(0,$OGame_header) && strpos($OGame_header[0],"200 OK")) {
		$OGame_stats_data_date = Date("Y-m-d H:i",strtotime($OGame_header["Last-Modified"]));
	} else {
		$OGame_stats_data_date = "";
	}
?>
<div class="spacing">
	<?php echo ADMIN_OGAME_API; ?>&nbsp;
	<span id="refresh_button">
	<button id="refresh_button_id" dojoType="dijit.form.Button" onclick="download_data(1)" type="button" name="refresh_button"><?php echo ADMIN_OGAME_ALL_DATA; ?></button>
	</span>
	<div data-dojo-type="dijit.Tooltip" data-dojo-props="connectId:'refresh_button_id',position:['below']">
	    <?php echo STATS_UPDATE.": ".$OGame_data_date; ?>
	</div>

	<span id="refresh_galaxy_button">
	<button id="refresh_gala_button" dojoType="dijit.form.Button" onclick="download_data(2)" type="button" name="refresh_galaxy_button"><?php echo ADMIN_OGAME_GALAXY_DATA; ?></button>
	</span>
	<div data-dojo-type="dijit.Tooltip" data-dojo-props="connectId:'refresh_gala_button',position:['below']">
	    <?php echo STATS_UPDATE.": ".$OGame_data_date; ?>
	</div>

	<span id="refresh_stats_button">
	<button dojoType="dijit.form.Button" onclick="download_data(3)" type="button" name="refresh_stats_button"><?php echo ADMIN_OGAME_STATISTICS_DATA; ?></button>
	</span>
	<div data-dojo-type="dijit.Tooltip" data-dojo-props="connectId:'refresh_stats_button',position:['below']">
	    <?php echo STATS_UPDATE.": ".$OGame_stats_data_date; ?>
	</div>


	<span id="refresh_loading" style="display:none;"><img src="../images/loading_small.gif" width="16" height="16" title="loading" /></span>
	<span id="refresh_done" style="display:none;" class="traffic_light_green"><?php echo UPDATE_DONE; ?></span>
	<span id="refresh_failed" style="display:none;" class="traffic_light_red"><?php echo UPDATE_FAILED; ?></span>
</div>
<br>
<?php
} // end of OGame API
?>
<form name="usermangagement1" method="post" action="administration.php" accept-charset="utf-8" onsubmit="return confirm_screen()">
<div style="margin: 10px 0px;" class="traffic_light_red"><?php echo ADMIN_DISCLAMER; ?></div>
<div id="tp1" dojoType="dijit.TitlePane" title="<?php echo ADMIN_INCONSISTENCIES;?>">
	<div class="spacing">
		<input id="option1" name="planets" dojoType="dijit.form.CheckBox" />
		<label for="option1"><?php echo ADMIN_PLANETS; ?></label>
	</div>
	<div class="spacing">
		<input id="option2" name="galaxies" dojoType="dijit.form.CheckBox" />
		<label for="option2"><?php
		$input = '<input id="galaxies_p1" type="text" dojoType="dijit.form.NumberTextBox" name="galaxies_p1"
		        value="9" constraints="{min:1,max:99,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_GALAXIES);
		?></label>
	</div>
	<div class="spacing">
		<input id="option3" name="players" dojoType="dijit.form.CheckBox" />
		<label for="option3"><?php echo ADMIN_PLAYERS; ?></label>
	</div>
	<div class="spacing">
		<input id="option4" name="reports" dojoType="dijit.form.CheckBox" />
		<label for="option4"><?php echo ADMIN_REPORTS; ?></label>
	</div>
	<div class="spacing">
		<input id="option7" name="unused_players" dojoType="dijit.form.CheckBox" />
		<label for="option7"><?php
		$input = '<input id="unused_players_p1" type="text" dojoType="dijit.form.NumberTextBox" name="unused_players_p1"
		        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_UNUSED_PLAYERS);
		?></label>
	</div>
</div>
<br>
<div id="tp2" dojoType="dijit.TitlePane" title="<?php echo ADMIN_MISC;?>">
	<div class="spacing">
		<input id="option5" name="reset" dojoType="dijit.form.CheckBox" />
		<label for="option5"><?php echo ADMIN_RESET; ?></label>
	</div>
	<div class="spacing">
		<input id="option6" name="old_players" dojoType="dijit.form.CheckBox" />
		<label for="option6"><?php
		$input = '<input id="old_players_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_players_p1"
		        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_OLD_PLAYERS);
		?></label>
	</div>
	<div class="spacing">
		<input id="option8" name="old_reports" dojoType="dijit.form.CheckBox" />
		<label for="option8"><?php
		$input = '<input id="old_reports_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_reports_p1"
		        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_OLD_REPORTS);
		?></label>
	</div>
	<div class="spacing">
		<input id="option9" name="old_galaxies" dojoType="dijit.form.CheckBox" />
		<label for="option9"><?php
		$input = '<input id="old_galaxies_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_galaxies_p1"
		        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_OLD_GALAXIES);
		?></label>
	</div>
	<div class="spacing">
		<input id="option10" name="old_activities" dojoType="dijit.form.CheckBox" />
		<label for="option10"><?php
		$input = '<input id="old_activities_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_activities_p1"
		        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_OLD_ACTIVITIES);
		?></label>
	</div>
	<div class="spacing">
		<input id="option11" name="old_combats" dojoType="dijit.form.CheckBox" />
		<label for="option11"><?php
		$input = '<input id="old_combats_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_combats_p1"
		        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_OLD_COMBATS);
		?></label>
	</div>
	<div class="spacing">
		<input id="option12" name="old_ingame_msg" dojoType="dijit.form.CheckBox" />
		<label for="option12"><?php
		$input = '<input id="old_ingame_msg_p1" type="text" dojoType="dijit.form.NumberTextBox" name="old_ingame_msg_p1"
		        value="30" constraints="{min:1,max:2000,places:0}" required="true" style="width: 20px;"
		        invalidMessage="'.INDEX_INVALID_DATA.'">';
		echo str_replace("&1",$input,ADMIN_OLD_INGAME_MSG);
		?></label>
	</div>
</div>
<br>
<div id="admin_buttons">
<button dojoType="dijit.form.Button" type="submit" name="submit_button"><?php echo USER_SUBMIT; ?></button>&nbsp;
<button dojoType="dijit.form.Button" type="reset"><?php echo USER_RESET; ?></button>
</div>
</form>
<script type="text/javascript">
var text_admin_selection = "<?php echo ADMIN_SELECTION; ?>";
var text_admin_safety = "<?php echo ADMIN_SAFETY; ?>";
</script>
<script type="text/javascript"	src="javascript/administration.js"></script>
<?php
echo Layout::close_block();

echo Layout::make_footer($global_universe, $messages);
?>