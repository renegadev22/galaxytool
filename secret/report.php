<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_probeview) !== true) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}
try {
	$probe_helper        = new ProbeLanguages();
	$top_array           = $probe_helper->get_flipped_top_array();
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}

echo Layout::make_header(REPORTS_TITLE,false,"",true);

echo Layout::start_block(REPORTS_TITLE);
?>
<div id="ReportInline" style="min-width: 740px;"></div>
<?php
echo Layout::close_block();
?>
<script type="text/javascript"	src="javascript/report_fetch_AMD.js"></script>
<script type="text/javascript">
<?php
$moon = (isset($_GET['moon']) && $_GET['moon'] == "true") ? "true" : "false";
if (isset($_GET['coordinates']) && preg_replace("/\d+\:\d+\:\d+/","",$_GET['coordinates']) == "") {
$coordinates = $_GET['coordinates'];
?>

require([ "dojo/parser", 
          "dojo/ready", 
          "dojo/on", 
          "dojo/dom", 
          "dojo/dom-attr",
		  "dojo/NodeList-dom",
		  "dijit/Dialog",
		  "dijit/TitlePane",
		  "dijit/layout/ContentPane",
		  "dijit/layout/BorderContainer",
		  "dijit/form/DropDownButton",
		  "dijit/form/Select",
		  ], 
		function(parser, ready, on, dom, attr) {
			ready(function() {
				galaxytool.ReportFetch.showReport('<?php echo $coordinates; ?>',<?php echo $moon; ?>,true);
			});
		});
<?php
}
?>
</script>
<?php
echo Layout::make_footer($global_universe,$messages,true);
?>