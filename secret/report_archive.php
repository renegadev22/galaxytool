<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) !== true) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

try {
	$probe_helper = new ProbeLanguages();
	$probe_array  = $probe_helper->get_flipped_probe_array();
	$top_array    = $probe_helper->get_flipped_top_array();
	$msg_obj      = new Messages($messagetable,$noticetable,$playertable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

$header = '
<style type="text/css">
.dojoxGridHeader {
	visibility:hidden;
	position: absolute;
	overflow: hidden;
	cursor: default;
	height: 0px;
}
</style>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
';

echo Layout::make_header(DETAILEDINFO_PLAYERINFO_TITLE, false, $header);

if (!isset($_GET['coordinates'])) {
	exit();
}

$coordinates = $_GET['coordinates'];
$coords = explode(":",$coordinates);
if (count($coords) != 3) exit("Wrong coordinates");
foreach ($coords as &$coordinate) {
	$coordinate = intval($coordinate);
}

$coordinates = $coords[0].":".$coords[1].":".$coords[2];

if (preg_replace("/\d+\:\d+\:\d+/","",$coordinates) == "") {
	$store_url = "ajax/ajax_report_archive.php?type=coordinates&coordinates=$coordinates";
}
$moon = (isset($_GET['moon']) && $_GET['moon'] == "true") ? "true" : "false";
$store_url .= "&moon=$moon";
$coordinates_with_moon = $coordinates;
if($moon == "true") $coordinates_with_moon.= " M";

if (!isset($store_url)) $store_url = "ajax/ajax_report_archive.php?type=empty";

// get playername and planetname if available (might not be available if cleanup scripts were not executed)
$query = "SELECT planetname, playername, p.id FROM $dbtablename g, $playertable p ".
         "WHERE g.ogame_playerid = p.ogame_playerid AND g.galaxy=:galaxy AND g.system=:system AND g.planet=:planet";
$stmt = DB::getDB()->prepare($query);
$stmt->bindParam(":galaxy", $coords[0]);
$stmt->bindParam(":system", $coords[1]);
$stmt->bindParam(":planet", $coords[2]);
$res = $stmt->execute();

$playername = "";
$planetname = "";
if ($stmt->rowCount() > 0) {
	$line = $stmt->fetch(PDO::FETCH_OBJ);
	$playername = $line->playername;
	$planetname = $line->planetname;
	$playerid   = $line->id;
}
echo '
<script type="text/javascript">
var resources_on_text = "'.$top_array["Resources at"].'";
var archive_confirm_delete = "'.REPORT_ARCHIVE_CONFIRM_DELETE.'";
var report_coordinates = "'.$coordinates_with_moon.'";
var report_when = "'.$probe_helper->report_when.'";
var report_uploaded_by = '.json_encode(REPORTS_UPLOAD_BY).';
var galaxytool_is_moon = '.$moon.';

var galaxytool_language = "'.$_SESSION['lang'].'";
var galaxytool_techs = {
	vbt : '.json_encode($_SESSION['s_auth']->get_tech(iAuthorization::tech_vbt)).',
	impulse : '.json_encode($_SESSION['s_auth']->get_tech(iAuthorization::tech_impulse)).',
	hra : '.json_encode($_SESSION['s_auth']->get_tech(iAuthorization::tech_hra)).',
	waffentech : '.json_encode($_SESSION['s_auth']->get_tech(iAuthorization::tech_weapon)).',
	schildtech : '.json_encode($_SESSION['s_auth']->get_tech(iAuthorization::tech_shield)).',
	rpz : '.json_encode($_SESSION['s_auth']->get_tech(iAuthorization::tech_rpz)).'
};
var galaxytool_def_to_debris = '; echo ($def_to_debris) ? 'true' : 'false'; echo ';
var galaxytool_debris_rate = "'.$debris_rate.'";

var galaxytool_speedsim_text = "'.REPORTS_SPEEDSIM.'";
var galaxytool_dragosim_text = "'.REPORTS_DRAGOSIM.'";
var galaxytool_cargo_capacity_text = "'.REPORT_ARCHIVE_FLEET_CARGO.'";
var galaxytool_phalanx_text = "'.DETAILEDINFO_PHALANX_AREA.'";
var galaxytool_irak_text = "'.REPORT_ARCHIVE_IRAK_RANGE.'";
var galaxytool_total_res_text = '.json_encode(REPORTS_ALL_RESOURCES).';
var galaxytool_delete = '; echo ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete)) ? 'true' : 'false'; echo ';
var galaxytool_open_in_new_window_text = '.json_encode(GENERAL_OPEN_IN_NEW_WINDOW).';
</script>
';
?>
<span dojoType="dojo.data.ItemFileReadStore" jsId="store1" url="<?php echo $store_url; ?>"> </span>
	<?php
	if ($planetname != "" && $playername != "") {
		$title = REPORT_ARCHIVE_DETAILS_FOR;
		$title = str_replace("&1",$planetname,$title);
		$title = str_replace("&2",
					'<a style="font-size:10pt; font-weight:bold;" href="galaxyview.php?gala='.$coords[0].'&system='.$coords[1].'">'.$coordinates_with_moon."</a>",
					$title);
		$title = str_replace("&3",
					'<a style="font-size:10pt; font-weight:bold;" href="playerinformation.php?id='.$playerid.'">'.$playername."</a>",
					$title);
	} else {
		$title =  REPORT_ARCHIVE_COORDINATES." ".$coordinates_with_moon;
	}

	echo Layout::start_block($title);

	echo '
	<div style="margin-top: 10px;">';
	if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete)) {
		echo '
		<button dojoType="dijit.form.Button" type="button" id="delete_report" disabled="false" iconClass="trashicon"
			showLabel="false" onClick="galaxytool_archive_delete()">'.REPORT_ARCHIVE_DELETE.'</button>
			';
	}
	echo '
			&nbsp;&nbsp;&nbsp;&nbsp;'.REPORT_ARCHIVE_CHART_TYPE.':
		<select name="select" dojoType="dijit.form.Select" id="chart_type" jsId="chart_type" style="width:175px">
			<option value="linechart">LineChart</option>
			<option value="annotetedtimeline">AnnotatedTimeLine (Flash)</option>
		</select>
		<button dojoType="dijit.form.Button" type="button" id="show_graph" disabled="false" iconClass="magnifiericon"
			showLabel="false" onClick="galaxytool_drawChart()">'.REPORT_ARCHIVE_DETAILS.'</button>
	</div>
	';
	?>
	<table dojoType="dojox.grid.DataGrid" id="grid1" jsId="grid1" store="store1"
		rowsPerPage="100" autoHeight="100" selectable="true">
		<thead>
			<tr>
				<th width="150px" field="c0" formatter="galaxytool_archive_formatter">&nbsp;</th>
				<th width="75px" field="c1" formatter="galaxytool_archive_formatter2">&nbsp;</th>
				<th width="75px" field="c2" formatter="galaxytool_archive_formatter2">&nbsp;</th>
				<th width="75px" field="c3" formatter="galaxytool_archive_formatter2">&nbsp;</th>
				<th width="75px" field="c4" formatter="galaxytool_archive_formatter2">&nbsp;</th>
			</tr>
		</thead>
	</table>
<?php
echo Layout::close_block();
?>
<div id="ChartDialog" dojoType="dijit.Dialog" title="<?php echo REPORT_ARCHIVE_DETAILS.": $coordinates"; if($moon == "true") echo " M"; ?>">
    <div dojoType="dijit.layout.ContentPane" title="">
    </div>
</div>
<div id="ReportDialog" dojoType="dijit.Dialog" style="min-width: 740px;" title="<?php echo REPORT_ARCHIVE_DETAILS.": $coordinates"; if($moon == "true") echo " M"; ?>">
    <div dojoType="dijit.layout.ContentPane" title="">
    </div>
</div>

<script type="text/javascript" src="javascript/report_display.js">
</script>
<script type="text/javascript" src="javascript/report_archive.js">
</script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>