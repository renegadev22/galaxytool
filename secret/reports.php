<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) !== true) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}
try {
	$probe_helper        = new ProbeLanguages();
	$flipped_probe_array = $probe_helper->get_flipped_probe_array();
	$top_array           = $probe_helper->get_flipped_top_array();
	$db_array            = array_flip($probe_helper->get_db_array());
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

echo Layout::make_header(REPORTS_TITLE,false,"",true);

echo Layout::start_block(REPORTS_TITLE);
?>
<script type="text/javascript">
<?php
$resource_keys = array("metal","crystal","deuterium","energy");
$fleet_keys = array("kt","gt","lj","sj","krz","ss","kolo","rec","spio","bomb","zerri","ds","skrz","sat");
$defense_keys = array("rak","ll","sl","ion","gauss","plasma","ksk","gsk","arak","irak");
$building_keys = array("memi","krimi","deutsyn","solar","fusion","robo","nani","rawe","mesp","krissp","deutsp","folab","terra","allydep","raksilo","mbase","sensor","sprungtor");
$research_keys = array("spiolvl","computech","waffentech","schildtech","rpz","energytech","hypertech","vbt","impulse","hra","lasertech","iontech","plasmatech","forschungsnetz","expedition","gravi");
$all_db_keys = array($resource_keys, $fleet_keys, $defense_keys, $building_keys, $research_keys);
echo '
var galaxytool_autoheight = '.json_encode($_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results)).';

var column_header = {metal:'.json_encode($flipped_probe_array[R_METAL]).',crystal:'.json_encode($flipped_probe_array[R_CRYSTAL]).',deuterium:'.json_encode($flipped_probe_array[R_DEUTERIUM]).',energy:'.json_encode($flipped_probe_array[R_ENERGY]).',
		kt:'.json_encode($flipped_probe_array[F_SMALLCARGOSHIP]).',gt:'.json_encode($flipped_probe_array[F_LARGECARGOSHIP]).',lj:'.json_encode($flipped_probe_array[F_LIGHFIGHTER]).',sj:'.json_encode($flipped_probe_array[F_HEAVYFIGHTER]).',krz:'.json_encode($flipped_probe_array[F_CRUISER]).',
		ss:'.json_encode($flipped_probe_array[F_BATTLESHIP]).',kolo:'.json_encode($flipped_probe_array[F_COLONYSHIP]).',rec:'.json_encode($flipped_probe_array[F_RECYCLER]).',spio:'.json_encode($flipped_probe_array[F_ESPIONAGEPROBE]).',
		bomb:'.json_encode($flipped_probe_array[F_BOMBER]).',zerri:'.json_encode($flipped_probe_array[F_DESTROYER]).',ds:'.json_encode($flipped_probe_array[F_DEATHSTAR]).',skrz:'.json_encode($flipped_probe_array[F_BATTLECRUISER]).',sat:'.json_encode($flipped_probe_array[F_SOLARSATELLITE]).',
		rak:'.json_encode($flipped_probe_array[D_MISSILELAUNCHER]).',ll:'.json_encode($flipped_probe_array[D_SMALLLASER]).',sl:'.json_encode($flipped_probe_array[D_HEAVYLASER]).',ion:'.json_encode($flipped_probe_array[D_IONCANNON]).',gauss:'.json_encode($flipped_probe_array[D_GAUSSCANNON]).',
		plasma:'.json_encode($flipped_probe_array[D_PLASMACANNON]).',ksk:'.json_encode($flipped_probe_array[D_SMALLSHIELDDOME]).',gsk:'.json_encode($flipped_probe_array[D_LARGESHILDDOME]).',arak:'.json_encode($flipped_probe_array[D_ANTIBALLISTICMISSILE]).',
		irak:'.json_encode($flipped_probe_array[D_INTERPLANETARYMISSILE]).',
		memi:'.json_encode($flipped_probe_array[B_METALMINE]).',krimi:'.json_encode($flipped_probe_array[B_CRYSTALMINE]).',deutsyn:'.json_encode($flipped_probe_array[B_DEUTERIUMSYNTHESIZER]).',solar:'.json_encode($flipped_probe_array[B_SOLARPLANT]).',
		fusion:'.json_encode($flipped_probe_array[B_FUSIONPLANT]).',robo:'.json_encode($flipped_probe_array[B_ROBOTFACTORY]).',nani:'.json_encode($flipped_probe_array[B_NANITEFACTORY]).',rawe:'.json_encode($flipped_probe_array[B_SHIPYARD]).',
		mesp:'.json_encode($flipped_probe_array[B_METALSTORAGE]).',krissp:'.json_encode($flipped_probe_array[B_CRYSTALSTORAGE]).',deutsp:'.json_encode($flipped_probe_array[B_DEUTERIUMTANK]).',folab:'.json_encode($flipped_probe_array[B_RESAERCHLAB]).',
		terra:'.json_encode($flipped_probe_array[B_TERRAFORMER]).',allydep:'.json_encode($flipped_probe_array[B_ALLIANCEDEPOT]).',raksilo:'.json_encode($flipped_probe_array[B_ROCKETSILO]).',mbase:'.json_encode($flipped_probe_array[B_LUNARBASE]).',
		sensor:'.json_encode($flipped_probe_array[B_SENSORPHALANX]).',sprungtor:'.json_encode($flipped_probe_array[B_JUMPGATE]).',
		spiolvl:'.json_encode($flipped_probe_array[RS_ESPIONAGE]).',computech:'.json_encode($flipped_probe_array[RS_COMPUTER]).',waffentech:'.json_encode($flipped_probe_array[RS_WEAPON]).',schildtech:'.json_encode($flipped_probe_array[RS_SHIELDING]).',
		rpz:'.json_encode($flipped_probe_array[RS_ARMOUR]).',energytech:'.json_encode($flipped_probe_array[RS_ENERGY]).',hypertech:'.json_encode($flipped_probe_array[RS_HYPERSPACE]).',vbt:'.json_encode($flipped_probe_array[RS_COMBUSTIONENGINE]).',
		impulse:'.json_encode($flipped_probe_array[RS_IMPULSEENGINE]).',hra:'.json_encode($flipped_probe_array[RS_HYPERSPACEENGINE]).',lasertech:'.json_encode($flipped_probe_array[RS_LASER]).',iontech:'.json_encode($flipped_probe_array[RS_ION]).',
		plasmatech:'.json_encode($flipped_probe_array[RS_PLASMA]).',forschungsnetz:'.json_encode($flipped_probe_array[RS_IRNETWORK]).',expedition:'.json_encode($flipped_probe_array[RS_EXPEDITION]).',gravi:'.json_encode($flipped_probe_array[RS_GRAVITON]).',
		address:'.json_encode(SHOW_ADDRESS).',moon:'.json_encode(SHOW_MOON).',ally:'.json_encode(SHOW_ALLYSORT).',g_planet:'.json_encode(SHOW_PLANET).',
		player:'.json_encode(SHOW_PLAYERNAME).',datetime:'.json_encode(SHOW_DATE).',depth:{ header: '.json_encode(REPORTS_DEPTH).',
		resources: '.json_encode(REPORTS_RESOURCES).', fleet: '.json_encode(REPORTS_FLEET).', defence: '.json_encode(REPORTS_DEFENCE).',
		buildings: '.json_encode(REPORTS_BUILDINGS).', research: '.json_encode(REPORTS_TECHNOLOGY).' }, all_resources:'.json_encode(REPORTS_RESOURCES).',
		all_resis:'.json_encode(REPORTS_ALL_RESIS).', fleet_resis:'.json_encode(REPORTS_FLEET_SCORE).',defence_resis:'.json_encode(REPORTS_DEFENCE_SCORE).'};

';
?>
</script>
<div dojoType="dojo.data.ItemFileReadStore" jsId="playerStore" id="playerStore" url="ajax/ajax_players.php?type=all"></div>
<div dojoType="dojo.data.ItemFileReadStore" jsId="allyStore" id="allyStore" url="ajax/ajax_alliances.php?type=all"></div>

<form id="report1" accept-charset="utf-8" dojoType="dijit.form.Form" onSubmit="return galaxytool.Reports.startSearch()">
<div id="search1" dojoType="dijit.TitlePane" title="<?php echo REPORTS_SEARCH; ?>" open="true">
<?php
echo Layout::get_formsave_buttons("report1",true);
?>
<table>
<tr>
	<td style="width: 200px;"><?php echo SHOW_ALLYSYMBOL; ?></td>
	<td style="width: 200px;"><input dojoType="dijit.form.ComboBox" store="allyStore" searchAttr="allyname" name="alliance" id="alliance" trim="true" style="width:130px;"></td>
	<td style="width: 200px;"><?php echo COMBATS_COORDINATES; ?></td>
	<td style="width: 200px;">
		<?php echo Layout::get_coordinates_control(); ?>
	</td>
</tr>
<tr>
	<td><?php echo SHOW_PLAYERNAME; ?></td>
	<td><input dojoType="dijit.form.ComboBox" store="playerStore" searchAttr="player" name="player" id=""player"" trim="true" style="width:130px;"></td>
	<td colspan="2">&nbsp;</td>
</tr>
<tr>
</tr>
</table>
</div>
<div id="search2" dojoType="dijit.TitlePane" title="<?php echo REPORTS_RESOURCES; ?>" open="true">
<table>
<tr>
	<td style="width: 200px;"><?php echo $flipped_probe_array[R_METAL]; ?></td>
	<td style="width: 200px;">
        <select name="selection_metal" dojoType="dijit.form.Select" id="selection_metal" jsId="selection_metal">
            <option value="ge">&ge;</option>
            <option value="eq">=</option>
            <option value="le">&le;</option>
        </select>	    
	    <input id="metal" type="text" dojoType="dijit.form.NumberTextBox" name="metal" value="0" constraints="{min:0,places:0}" style="width: 100px;"></td>
	<td style="width: 200px;"><?php echo $flipped_probe_array[R_CRYSTAL]; ?></td>
	<td style="width: 200px;">
        <select name="selection_crystal" dojoType="dijit.form.Select" id="selection_crystal" jsId="selection_crystal">
            <option value="ge">&ge;</option>
            <option value="eq">=</option>
            <option value="le">&le;</option>
        </select>	    
	    <input id="crystal" type="text" dojoType="dijit.form.NumberTextBox" name="crystal" value="0" constraints="{min:0,places:0}" style="width: 100px;"></td>
</tr>
<tr>
	<td><?php echo $flipped_probe_array[R_DEUTERIUM]; ?></td>
	<td>
        <select name="selection_deuterium" dojoType="dijit.form.Select" id="selection_deuterium" jsId="selection_deuterium">
            <option value="ge">&ge;</option>
            <option value="eq">=</option>
            <option value="le">&le;</option>
        </select>
        <input id="deuterium" type="text" dojoType="dijit.form.NumberTextBox" name="deuterium" value="0" constraints="{min:0,places:0}" style="width: 100px;"></td>
	<td><?php echo $flipped_probe_array[R_ENERGY]; ?></td>
	<td>
        <select name="selection_energy" dojoType="dijit.form.Select" id="selection_energy" jsId="selection_energy">
            <option value="ge">&ge;</option>
            <option value="eq">=</option>
            <option value="le">&le;</option>
        </select>	    
	    <input id="energy" type="text" dojoType="dijit.form.NumberTextBox" name="energy" value="0" constraints="{min:0,places:0}" style="width: 100px;"></td>
</tr>
<tr>
	<td><?php echo REPORTS_ALL_RESOURCES; ?></td>
	<td>
        <select name="selection_all_resources" dojoType="dijit.form.Select" id="selection_all_resources" jsId="selection_all_resources">
            <option value="ge">&ge;</option>
            <option value="eq">=</option>
            <option value="le">&le;</option>
        </select>	    
	    <input id="all_resources" type="text" dojoType="dijit.form.NumberTextBox" name="all_resources" value="0" constraints="{min:0,places:0}" style="width: 100px;"></td>
	<td colspan="2">&nbsp;</td>
</table>
</div>

<?php

$titlepanes = array(
					array("id" => "search3", "text"=>REPORTS_FLEET),
				    array("id" => "search4", "text"=>REPORTS_DEFENCE),
				    array("id" => "search5", "text"=>REPORTS_BUILDINGS),
				    array("id" => "search6", "text"=>REPORTS_TECHNOLOGY),
);

foreach ($titlepanes as $titlepane) {
?>
<div id="<?php echo $titlepane['id']; ?>" dojoType="dijit.TitlePane" title="<?php echo $titlepane['text'];; ?>" open="false">
<table>
<?php
	switch ($titlepane['id']) {
		case "search3": $keys = $fleet_keys; break;
		case "search4": $keys = $defense_keys; break;
		case "search5": $keys = $building_keys; break;
		case "search6": $keys = $research_keys; break;

		default:
			exit("fatal error");
	}

	foreach ($keys as $index => $db_key) {
		if ($index % 2 == 0) echo "<tr>";
		echo '
			<td style="width: 200px;">'.$flipped_probe_array[$db_array[$db_key]].'</td>
			<td style="width: 200px;">
			<select name="selection_'.$db_key.'" dojoType="dijit.form.Select" id="selection_'.$db_key.'" jsId="selection_'.$db_key.'">
			<option value="ge">&ge;</option>
			<option value="eq">=</option>
			<option value="le">&le;</option>
			</select>
			<input id="'.$db_key.'" type="text" dojoType="dijit.form.NumberTextBox" name="'.$db_key.'" value="0" constraints="{min:0,places:0}" style="width: 100px;">
			</td>
		';
		if ($index % 2 == 1) echo "</tr>";
	}
	if ($index % 2 == 0) {
		echo "<td colspan=\"2\">&nbsp;</td>";
		echo "</tr>"; // close last TR tag
	}
?>
</table>
</div>
<?php
}
?>

<div dojoType="dojo.data.ItemFileReadStore" jsId="userStore" id="userStore" url="ajax/ajax_users.php?type=all"></div>
<div id="search7" dojoType="dijit.TitlePane" title="<?php echo REPORTS_STUFF; ?>" open="false">
<table>
<tr>
	<td style="width: 200px;"><?php echo REPORTS_FLEET_SCORE; ?></td>
	<td style="width: 200px;">
	<select name="selection_fleet_resis" dojoType="dijit.form.Select" id="selection_fleet_resis" jsId="selection_fleet_resis">
		<option value="ge">&ge;</option>
		<option value="le">&le;</option>
	</select>
	<input id="fleet_resis" type="text" dojoType="dijit.form.NumberTextBox" name="fleet_resis" value="0" constraints="{min:0,places:0}" style="width: 100px;"></td>
	<td style="width: 200px;"><?php echo REPORTS_DEFENCE_SCORE; ?></td>
	<td style="width: 200px;">
	<select name="selection_defence_resis" dojoType="dijit.form.Select" id="selection_defence_resis" jsId="selection_defence_resis">
		<option value="ge">&ge;</option>
		<option value="le">&le;</option>
	</select>
	<input id="defence_resis" type="text" dojoType="dijit.form.NumberTextBox" name="defence_resis" value="0" constraints="{min:0,places:0}" style="width: 100px;"></td>
</tr>
<tr>
	<td><?php echo REPORTS_OWNER; ?></td>
	<td><input data-dojo-type="dijit.form.FilteringSelect" value="0"
    		data-dojo-props="store:userStore, searchAttr:'username'" name="select_owner" id="select_owner" style="width:100px">
    </td>
	<td><?php echo REPORTS_DEPTH; ?></td>
	<td>
		<select name="report_depth" dojoType="dijit.form.Select" id="report_depth" jsId="report_depth" style="width:100px;">
		<option value="resources"><?php echo REPORTS_RESOURCES; ?></option>
		<option value="fleet"><?php echo REPORTS_FLEET; ?></option>
		<option value="defence"><?php echo REPORTS_DEFENCE; ?></option>
		<option value="buildings"><?php echo REPORTS_BUILDINGS; ?></option>
		<option value="research"><?php echo REPORTS_TECHNOLOGY; ?></option>
		</select>
	</td>
</tr>
<tr>
	<td><?php echo REPORTS_SHOW_ONLY; ?></td>
	<td>
		<select name="select_planetonly" dojoType="dijit.form.Select" id="show_only" jsId="show_only" style="width:100px;">
		<option value="-">-</option>
		<option value="planets"><?php echo REPORTS_SHOW_PLANETS; ?></option>
		<option value="moons"><?php echo REPORTS_SHOW_MOONS; ?></option>
		</select>
	</td>
	<td><?php echo REPORTS_DATE." ".REPORTS_DATE_2; ?></td>
	<td>
	<input id="age" type="text" dojoType="dijit.form.NumberTextBox" name="age" value="" constraints="{min:1,places:0}" style="width: 100px;">&nbsp;<?php echo REPORTS_HOURS; ?>
	</td>
</tr>
<tr>
	<td style="width: 200px;"><?php echo STATS_PLAYERSTATUS; ?></td>
	<td colspan="3">
	<div><span class="inactive"><?php echo STATS_INACTIVE; ?>:</span>
		<select name="select_inactive" dojoType="dijit.form.Select" id="select_inactive" jsId="select_inactive">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="inactive"><?php echo STATS_INACTIVE; ?></option>
		<option value="long_inactive"><?php echo STATS_LONG_INACTIVE; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
		<span style="margin-left: 25px;" class="vacation"><?php echo STATS_VACATION; ?>:</span>
		<select name="select_vacation" dojoType="dijit.form.Select" id="select_vacation" jsId="select_vacation">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
		<span style="margin-left: 25px;"><?php echo STATS_BANNED; ?>:</span>
		<select name="select_banned" dojoType="dijit.form.Select" id="select_banned" jsId="select_banned">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
		<span style="margin-left: 25px;"><?php echo USER_BB_OUTLAW; ?>:</span>
		<select name="select_outlaw" dojoType="dijit.form.Select" id="select_outlaw" jsId="select_outlaw">
		<option value="-">-</option>
		<option value="yes"><?php echo STATS_YES; ?></option>
		<option value="no"><?php echo STATS_NO; ?></option>
		</select>
	</div>
	</td>
</tr>
<tr>
	<td style="vertical-align: text-top;"><?php echo SHOW_FILTER_BY; ?>
	</td>
	<td colspan="3">
	<table>
		<tr>
		<td class="nap" style="width: 100px;">
		<input id="filter_nap" name="filter_nap" dojoType="dijit.form.CheckBox" value="1">
		<label for="filter_nap"><?php echo SHOW_NAP; ?></label>
		</td>
		<td class="ally" style="width: 100px;">
		<input id="filter_allied" name="filter_allied" dojoType="dijit.form.CheckBox" value="1">
		<label for="filter_allied"><?php echo SHOW_ALLIED; ?></label>
		</td>
		<td class="own" style="width: 100px;">
		<input id="filter_own" name="filter_own" dojoType="dijit.form.CheckBox" value="1">
		<label for="filter_own"><?php echo SHOW_OWN; ?></label>
		</td>
		<td class="wing" style="width: 100px;">
		<input id="filter_wing" name="filter_wing" dojoType="dijit.form.CheckBox" value="1">
		<label for="filter_wing"><?php echo SHOW_WING; ?></label>
		</td>
		</tr>
	</table>
	</td>
</tr>
</table>
</div>
<button dojoType="dijit.form.Button" type="submit" id="search_button"><?php echo REPORTS_SEARCH_SHORT; ?></button>
<img id="search_icon" src="../images/loading_small.gif" style="display: none;">
</form>

<div id="result_view" style="display:none;">
	<div id="result_list"><?php echo SHOW_HITS; ?>: <span id="results"></span></div>
	<div>
		<span class="bg_nothing">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_NOTHING; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_neutral">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_NEUTRAL; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_boycott">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_BOYCOTT; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_nap">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_NAP; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_ally">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_ALLIED; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_war">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_WAR; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_own">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_OWN; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bg_wing">&nbsp;&nbsp;&nbsp;&nbsp;</span> <?php echo STATS_WING; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	<div style="text-align: right;"><img src="../images/options.gif" class="hyperlink" onClick="dijit.byId('ColumnDialog').show();" alt="Options"></div>

	<table dojoType="dojox.grid.DataGrid" jsId="searchgrid" id="searchgrid" selectable="true"
		style="width: 100%; height: 400px; margin-top: 5; margin-bottom:20px;" sortinfo="3"
		autoHeight="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results); ?>" rowCount="0" rowsPerPage="200">
		<thead>
			<tr>
				<th width="60px;" field="address" formatter="galaxytool.Reports.formatAddress"><?php echo SHOW_ADDRESS; ?></th>
			</tr>
		</thead>
	</table>
	<div  style="margin: 0 0 0 15;">
	    <img src="../images/arrow_up.png"> <a class="link" href="#"	onclick="galaxytool.Reports.checkboxSelection(true)"><?php echo COMBATS_CHECK_ALL; ?></a>/
	    <a class="link" href="#" onclick="galaxytool.Reports.checkboxSelection(false)"><?php echo COMBATS_UNCHECK_ALL; ?></a>
	    &nbsp;&nbsp;&nbsp;<?php echo COMBATS_WITH_SELECTED. ":";

	    if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) === true) {
	    	// do not hide check and uncheck as this can be used also to mark reports which shall be relevant for raiding without the intention to delete them
	    ?>
		<button dojoType="dijit.form.Button" type="button" id="delete_all_button" disabled="false" iconClass="trashicon"
		  showLabel="false" onclick="galaxytool.Reports.deleteSelected()"><?php echo REPORTS_DELETE ?></button>
		 <?php
	    }
		 ?>
	</div>
</div>

<?php
echo Layout::close_block();
?>
<div id="ColumnDialog" dojoType="dijit.Dialog" style="width: 560px;" title="<?php echo GENERAL_COLUMN_HIDE_TITLE; ?>">
	<div style="overflow: auto; height: 600px;">
    <div dojoType="dijit.layout.ContentPane" title="">
    <div><?php echo GENERAL_COLUMN_HIDE_INFO; ?></div>
	<form id="report_columns" accept-charset="utf-8">
	<div id="columnspane1" dojoType="dijit.TitlePane" title="" open="true">
	<table>
	<tr>
	<td><input id="column_address" name="column_address" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_ADDRESS; ?></td>
	<td><input id="column_moon" name="column_moon" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_MOON; ?></td>
	</tr>
	<tr>
	<td><input id="column_ally" name="column_ally" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_ALLY; ?></td>
	<td><input id="column_g_planet" name="column_g_planet" dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo SHOW_PLANET; ?></td>
	</tr>
	<tr>
	<td><input id="column_player" name="column_player" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_PLAYERNAME; ?></td>
	<td><input id="column_datetime" name="column_datetime" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_DATE; ?></td>
	</tr>
	<tr>
	<td><input id="column_depth" name="column_depth" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_DEPTH; ?></td>
	<td><input id="column_all_resources" name="column_all_resources" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_RESOURCES; ?></td>
	</tr>
	<tr>
	<td><input id="column_all_resis" name="column_all_resis" checked dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_ALL_RESIS; ?></td>
	<td><input id="column_fleet_resis" name="column_fleet_resis" dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_FLEET_SCORE; ?></td>
		</tr>
	<tr>
	<td><input id="column_defence_resis" name="column_defence_resis" dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;"><?php echo REPORTS_DEFENCE_SCORE; ?></td>
	<td colspan="2"></td>
	</tr>
	<tr><td colspan="2"><a class="link" href="#"	onclick="galaxytool.Reports.columnSelection(1,true)"><?php echo COMBATS_CHECK_ALL; ?></a>/
	    <a class="link" href="#" onclick="galaxytool.Reports.columnSelection(1,false)"><?php echo COMBATS_UNCHECK_ALL; ?></a></td>
	</tr>
	</table>
	</div>
	<?php
	$i = 1;
	foreach($all_db_keys as $array) {
		switch($i) {
			case 1: $title = REPORTS_RESOURCES; break;
			case 2: $title = REPORTS_FLEET; break;
			case 3: $title = REPORTS_DEFENCE; break;
			case 4: $title = REPORTS_BUILDINGS; break;
			case 5: $title = REPORTS_TECHNOLOGY; break;
			default: $title = ""; break;
		}
		$i++;

		$open = ($i > 3) ? "false" : "true";

		echo '<div id="columnspane'.$i.'" dojoType="dijit.TitlePane" title="'.$title.'" open="'.$open.'">';
		echo '<table><tr>';
		$j = 0;
		foreach($array as $db_key) {
			if ($j % 2 == 0 && $j > 0) {
				echo "</tr><tr>\n";
			}
			$checked = ($i == 2) ? " checked " : ""; // resources
			echo '<td><input id="column_'.$db_key.'" name="column_'.$db_key.'" '.$checked.' dojoType="dijit.form.CheckBox" value="true"></td><td style="width: 250px;">'.$flipped_probe_array[$db_array[$db_key]]."</td>\n";
			$j++;
		}
		echo '<tr><td colspan="2"><a class="link" href="#"	onclick="galaxytool.Reports.columnSelection('.$i.',true)">'.COMBATS_CHECK_ALL.'</a>/
	    <a class="link" href="#" onclick="galaxytool.Reports.columnSelection('.$i.',false)">'.COMBATS_UNCHECK_ALL.'</a></td>';
		echo '</tr></table>';
		echo '</div>';
	}
	?>
	<button dojoType="dijit.form.Button" type="button" id="columns_button" onClick="galaxytool.Reports.changeLayout()"><?php echo GENERAL_APPLY; ?></button>
	</form>
    </div>
    </div>
</div>
<div id="ReportDialog" dojoType="dijit.Dialog" style="min-width: 740px;" title="">
    <div dojoType="dijit.layout.ContentPane" title="">
    </div>
</div>
<div id="NoticeDialog" dojoType="dijit.Dialog" style="min-width: 540px;" title="<?php echo NOTICE_TITLE; ?>">
	<img src="../images/edit.png" class="hyperlink" id="NoticeDialogEdit" width="24" height="24">
	<div dojoType="dijit.layout.ContentPane" id="NoticeDialogContent" href="" style="min-height:400px;">
	</div>
</div>
<script type="text/javascript" src="javascript/form_validations_AMD.js"></script>
<script type="text/javascript" src="javascript/form_save_AMD.js"></script>
<script type="text/javascript"	src="javascript/report_fetch_AMD.js"></script>
<!-- TODO: add later <script type="text/javascript" src="javascript/notices_AMD.js"></script>  -->
<script type="text/javascript" src="javascript/reports.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages, true);
?>