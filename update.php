<?php
header("content-type: text/html; charset=utf-8");

$fullpath = realpath('.');
// we need to define the Galaxytool_root constant to be able to include the next files
require "config/config.php";
if (!defined("GALAXYTOOL_ROOT")) { // introduced in 5.0
	$fullpath = realpath('.');
	// we need to define the Galaxytool_root constant to be able to include the next files
	define("GALAXYTOOL_ROOT",$fullpath);
}

session_name(preg_replace("/[^a-zA-Z0-9_]/i", "", GALAXYTOOL_ROOT));
session_start();

$_SESSION[GALAXYTOOL_ROOT] = "update.php";

chdir(GALAXYTOOL_ROOT."/secret");
require GALAXYTOOL_ROOT."/config/attributes.php"; // until version 4.9 there was a statement: require "../secret/version.php"; inside the file
chdir(GALAXYTOOL_ROOT);
if (!defined("OGAME_URL")) define("OGAME_URL",""); // introduced in 5.0

require_once GALAXYTOOL_ROOT."/secret/includes/classes/Galaxytool.inc.php";
require_once GALAXYTOOL_ROOT."/secret/includes/classes/Layout.inc.php";
if (!defined("VERSION")) require GALAXYTOOL_ROOT."/secret/version.php";

$_SESSION['lang'] = $default_language; // must use default language here to have proper selection at language dropdown
Galaxytool::load_language_file($_SESSION['lang']);

?>
<!doctype HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?php echo UPDATE_TITLE . " " . VERSION; ?></title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/dojo/1.8/dijit/themes/claro/claro.css">
<link rel="stylesheet" type="text/css" href="secret/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/dojo/1.8/dojo/dojo.js"
                data-dojo-config="isDebug: true, parseOnLoad: true">
</script>
<script type="text/javascript" src="secret/javascript/general.js"></script>
<script type="text/javascript" src="secret/javascript/message_handling.js"></script>
<script type="text/javascript">
<?php
echo '
var TEXT_INSTALL_VALIDATE = '.json_encode(INSTALL_VALIDATE).';
var TEXT_INSTALL_CONTINUE = '.json_encode(INSTALL_CONTINUE).';
var TEXT_UPDATE_STEPS = new Array("dummy",'.json_encode(UPDATE_STEP1).',
'.json_encode(UPDATE_STEP2).',
'.json_encode(UPDATE_STEP3).',
'.json_encode(UPDATE_STEP4).');
var TEXT_PW_MISMATCH = '.json_encode(REGISTER_ERROR5).';
var TEXT_UPDATE_DONE = '.json_encode(UPDATE_DONE).';
var TEXT_UPDATE_FAILED = '.json_encode(UPDATE_FAILED).';
';
?>
</script>
        <style type="text/css">
            #headerborderContainer { width: 80%; min-height: 700px; }

            .step_enabled { color: white; font-weight: bold; }
            .step_disabled { color: gray; font-weight: none; }

			.success { color:lightgreen; }
			.failure { color:orange; }
        </style>
</head>
<body class="claro startsHidden">

        <div dojoType="dijit.layout.BorderContainer" gutters="false"
        id="headerborderContainer" style="margin:0 auto; margin-top:50px;">
		<div dojoType="dijit.layout.ContentPane" region="top"
			style="color:#C4C4C4; font-size: 10pt; font-weight:bold; text-decoration:underline;">
		<?php echo UPDATE_TITLE . " " . VERSION; ?>
		</div>
		<div dojoType="dijit.layout.ContentPane" region="center">
        <div dojoType="dijit.layout.BorderContainer" design="sidebar" gutters="true" id="outerborderContainer">
        <div dojoType="dijit.layout.ContentPane" region="top">
		<?php
		echo Layout::start_block(INSTALL_PROGRESS);
		?>
             <div id="progress_step1" class="step_enabled"><?php echo INSTALL_STEP . " 1: " . UPDATE_STEP1; ?></div>
             <div id="progress_step2" class="step_disabled">
             <?php echo INSTALL_STEP . " 2: " . UPDATE_STEP2; ?></div>
             <div id="progress_step3" class="step_disabled">
             <?php echo INSTALL_STEP . " 3: " . UPDATE_STEP3; ?></div>
             <div id="progress_step4" class="step_disabled">
             <?php echo INSTALL_STEP . " 4: " . UPDATE_STEP4; ?></div>
        <?php
		echo Layout::close_block();
		?>
            </div>
            <div dojoType="dijit.layout.ContentPane" region="center">
<?php
		echo Layout::start_block(INSTALL_PROGRESS,"update_progress_title");
?>
<div dojoType="dijit.layout.ContentPane" id="CenterContentPane" region="center" style="min-height: 350px;">
	<div id="messageArea" style="display: none;">
	<div id="messageAreaContent">
	</div>
	</div>

	<div id="step1" dojoType="dijit.layout.ContentPane">
	<?php
	if (version_compare(phpversion(), "5.0.0", '>=')) {
		echo UPDATE_STEP1_WELCOME."<br><br>";
		echo UPDATE_STEP1_BACKUP_FILES."<br>";
		echo UPDATE_STEP1_BACKUP_DB."<br>";
		echo UPDATE_STEP1_PROCEED."<br>";

		$php_failed = false;
	} else {
		echo "<div style=\"color: red;\">".str_replace("&1", $version, INSTALL_STEP1_PHP_FAILED)."</div>";
		$php_failed = true;
	}

	$fopen = ini_get('allow_url_fopen');
	if ($fopen == 0) {
		$php_failed = true;
		echo "<div style=\"color: red;\">".INSTALL_STEP1_FOPEN_FAILED."</div>";
	}

	?>
	</div>

	<div id="step2" dojoType="dijit.layout.ContentPane" style="display:none;">
			<table border="0">
			<tr>
			<td><?php echo UPDATE_STEP2_OLD_VERSION; ?></td>
			<td><div name="old_galaxytool" dojoType="dijit.form.Select" maxheight="400" style="width:100px;" id="old_galaxytool" jsId="old_galaxytool">
			<span value="none">-</span>
			<span value="4.6">4.6</span>
			<span value="4.7">4.7-4.7.1</span>
			<span value="4.8">4.8</span>
			<span value="4.9">4.9-4.9.2</span>
			<span value="5.0">5.0-5.0.2</span>
			</div>
			</td>
			</tr>
			<?php
			if (ini_get('allow_url_fopen') == 1) {
			?>
			<tr>
			<td style="vertical-align: top;"><?php echo INSTALL_STEP4_URL; ?></td>
			<td><input type="text" name="url" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="url"
			style="width:200px;" required="true" missingMessage="<?php echo INSTALL_STEP4_URL_MISSING; ?>" promptMessage="<?php echo INSTALL_STEP4_ENTER_URL; ?>">
			<div><?php echo OGAME_URL_DETAILS; ?></div>
			</td>
			</tr>
			<?php
			} else {
				// add hidden field later
				$hidden_field = '<div style="display:none"><input type="text" name="url" value="" dojoType="dijit.form.ValidationTextBox" required="false" id="url"></div>';
			}
			?>
			</table>
	</div>
	<?php
	if (isset($hidden_field)) echo $hidden_field;
	?>

	<div id="step3" dojoType="dijit.layout.ContentPane" style="display:none;">
	<div><?php echo UPDATE_STEP3_UPDATE_RUNNING; ?>&nbsp;<span id="step3update"><img id="step3update" src="images/loading_small.gif" width="16" height="16" title="loading" /></span></div>
	</div>

	<div id="step4" dojoType="dijit.layout.ContentPane" style="display:none;">
	<h3><?php echo UPDATE_STEP4_INTRO; ?></h3>
	<?php
	if (ini_get("allow_url_fopen") == 1) {
	?>
	<div><?php echo INSTALL_STEP8_LOAD_DATA; ?>&nbsp;<span id="step4download"><img id="step4loading" src="images/loading_small.gif" width="16" height="16" title="loading" /></span></div>
	<?php
	}
	?>
	<div style="margin-top: 30px;"><?php echo INSTALL_STEP8_DELETE_FILE; ?></div>
	</div>
</div>

<?php
echo Layout::close_block();
?>
            </div>
            <div dojoType="dijit.layout.ContentPane" region="bottom">
            <?php if ($php_failed === false) { ?>
	        <button dojoType="dijit.form.Button" type="button" id="nextButton" style="float:right;">
	            <?php echo INSTALL_CONTINUE; ?>
	        </button>
	        <?php } ?>
            </div>
            </div>

		</div>
       </div>


<script type="text/javascript" src="secret/javascript/update.js">
</script>
<script type="text/javascript">
	dojo.ready(function(){
	dojo.query(".startsHidden")
		.style("opacity", 100)
		.removeClass("startsHidden");
	})
</script>
</body>
</html>