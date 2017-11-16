<?php
header("content-type: text/html; charset=utf-8");

$fullpath = realpath('.');
// we need to define the Galaxytool_root constant to be able to include the next files
define("GALAXYTOOL_ROOT",$fullpath);

require GALAXYTOOL_ROOT . "/secret/includes/autoloader.class.php";
spl_autoload_register('AutoLoader::ClassLoader');
spl_autoload_register('AutoLoader::ModelLoader');

require "secret/version.php";
$usePHPMailer = false; // required by general.inc.php - but not for installer; but could throw notice message

session_name(preg_replace("/[^a-zA-Z0-9_]/i", "", GALAXYTOOL_ROOT));
session_start();

$_SESSION[GALAXYTOOL_ROOT] = "install.php";

if (isset($_GET['language'])) {
	Galaxytool::set_language($_GET['language']);
	$_SESSION['lang_manually'] = true;
}

if (!isset($_SESSION['lang'])) $_SESSION['lang'] = "english";
Galaxytool::load_language_file($_SESSION['lang']);

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo INSTALL_TITLE . " " . VERSION; ?></title>
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
var TEXT_INSTALL_STEPS = new Array("dummy",'.json_encode(INSTALL_STEP1).',
'.json_encode(INSTALL_STEP2).',
'.json_encode(INSTALL_STEP3).',
'.json_encode(INSTALL_STEP4).',
'.json_encode(INSTALL_STEP5).',
'.json_encode(INSTALL_STEP6).',
'.json_encode(INSTALL_STEP7).',
'.json_encode(INSTALL_STEP8).');
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
		<?php echo INSTALL_TITLE . " " . VERSION; ?>
		</div>
		<div dojoType="dijit.layout.ContentPane" region="center">
        <div dojoType="dijit.layout.BorderContainer" design="sidebar" gutters="true" id="outerborderContainer">
        <div dojoType="dijit.layout.ContentPane" region="top">
		<?php
		echo Layout::start_block(INSTALL_PROGRESS);
		?>
             <div id="progress_step1" class="step_enabled"><?php echo INSTALL_STEP . " 1: " . INSTALL_STEP1; ?></div>
             <div id="progress_step2" class="step_disabled">
             <?php echo INSTALL_STEP . " 2: " . INSTALL_STEP2; ?></div>
             <div id="progress_step3" class="step_disabled">
             <?php echo INSTALL_STEP . " 3: " . INSTALL_STEP3; ?></div>
             <div id="progress_step4" class="step_disabled">
             <?php echo INSTALL_STEP . " 4: " . INSTALL_STEP4; ?></div>
             <div id="progress_step5" class="step_disabled">
             <?php echo INSTALL_STEP . " 5: " . INSTALL_STEP5; ?></div>
             <div id="progress_step6" class="step_disabled">
             <?php echo INSTALL_STEP . " 6: " . INSTALL_STEP6; ?></div>
             <div id="progress_step7" class="step_disabled">
             <?php echo INSTALL_STEP . " 7: " . INSTALL_STEP7; ?></div>
             <div id="progress_step8" class="step_disabled">
             <?php echo INSTALL_STEP . " 8: " . INSTALL_STEP8; ?></div>
        <?php
		echo Layout::close_block();
		?>
            </div>
            <div dojoType="dijit.layout.ContentPane" region="center">
<?php
		echo Layout::start_block(INSTALL_PROGRESS,"install_progress_title");
?>
<div dojoType="dijit.layout.ContentPane" id="CenterContentPane" region="center" style="min-height: 350px;">
	<div id="messageArea" style="display: none;">
	<div id="messageAreaContent">
	</div>
	</div>

	<div id="step1" dojoType="dijit.layout.ContentPane">
	<div><?php echo L_LANGUAGE." ".Layout::getHeaderLanguageDropDown("./images/flags/","install.php"); ?></div>
	<br/>
	<?php
	if (version_compare(phpversion(), "5.1.2", '>=')) {
		echo INSTALL_STEP1_WELCOME;
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
		<?php
		if ($_SESSION['lang'] == "german") {
			$install_text = str_replace("&1",'<a target="_blank" href="http://de.wiki.galaxytool.eu/index.php/Schreibrechte_setzen">wiki</a>',INSTALL_STEP2_DESCRIPTION2);
		} else {
			$install_text = str_replace("&1",'<a target="_blank" href="http://en.wiki.galaxytool.eu/index.php/How_to_set_writable_permissions">wiki</a>',INSTALL_STEP2_DESCRIPTION2);
		}

		echo INSTALL_STEP2_DESCRIPTION.'<br>'.
		$install_text.'<br>';
		?>
		<div id="step2_attributes">attributes.php</div>
		<div id="step2_config">config.php</div>
	</div>

	<div id="step3" dojoType="dijit.layout.ContentPane" style="display:none;">
		<form id="step3_form">
		<table border="0">
		<tr>
		<td><?php echo INSTALL_STEP3_SERVER; ?></td>
		<td><input type="text" name="server" value="localhost" dojoType="dijit.form.ValidationTextBox" trim="true" id="server"
		propercase="false" style="width:130px;" required="true" promptMessage="<?php echo INSTALL_STEP3_ENTER_SERVER; ?>"></td>
		</tr>
		<tr>
		<td><?php echo INSTALL_STEP3_USERNAME; ?></td>
		<td><input type="text" name="username" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="username"
		style="width:130px;" required="true" promptMessage="<?php echo INSTALL_STEP3_ENTER_USERNAME; ?>"></td>
		</tr>
		<tr>
		<td><?php echo INSTALL_STEP3_PASSWORD; ?></td>
		<td><input type="password" name="password" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="password"
		style="width:130px;" required="true" promptMessage="<?php echo INSTALL_STEP3_ENTER_PASSWORD; ?>"></td>
		</tr>
		<tr>
		<td><?php echo INSTALL_STEP3_DBNAME; ?></td>
		<td><input type="text" name="dbname" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="dbname"
		style="width:130px;" required="true" promptMessage="<?php echo INSTALL_STEP3_ENTER_DBNAME; ?>"></td>
		</tr>
		<tr>
		<td><?php echo INSTALL_STEP3_PREFIX; ?></td>
		<td><input type="text" name="prefix" value="" data-dojo-type="dijit/form/ValidationTextBox" data-dojo-props="pattern:'[A-Za-z0-9_]*'" trim="true" id="prefix"
		style="width:130px;" promptMessage="<?php echo INSTALL_STEP3_ENTER_PREFIX; ?>"></td>
		</tr>
		</table>
		</form>
	</div>


	<div id="step4" dojoType="dijit.layout.ContentPane" style="display:none;">
		<form id="step4_form">
		<table border="0">
		<?php
		if (ini_get("allow_url_fopen") == 1) {
		?>
		<tr>
		<td style="vertical-align: top;"><?php echo INSTALL_STEP4_URL; ?></td>
		<td><input type="text" name="url" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="url"
		style="width:200px;" required="true" missingMessage="<?php echo INSTALL_STEP4_URL_MISSING; ?>" promptMessage="<?php echo INSTALL_STEP4_ENTER_URL; ?>">
		<button dojoType="dijit.form.Button" type="button" id="checkUrlButton" onClick="fetchOGameUrlSettings()">
	            <?php echo INSTALL_STEP4_GETSETTINGS; ?>
	    </button>
		<div><?php echo OGAME_URL_DETAILS; ?></div>
		</td>
		</tr>
		<?php
		} else {
			// add hidden field later
			$hidden_field = '<div style="display:none"><input type="text" name="url" value="" dojoType="dijit.form.ValidationTextBox" required="false" id="url"></div>';
		}
		?>
		<tr>
		<tr>
		<td><?php
		if (isset($hidden_field)) echo $hidden_field;
		echo INSTALL_STEP4_UNIVERSE; ?></td>
		<td><input type="text" name="universe" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="universe"
		propercase="true" style="width:200px;" required="true" missingMessage="<?php echo INSTALL_STEP4_UNIVERSE_MISSING; ?>" promptMessage="<?php echo INSTALL_STEP4_ENTER_UNIVERSE; ?>"></td>
		</tr>
		<tr>
		<td><?php echo INSTALL_STEP4_DEF_TO_DEBRIS; ?></td>
		<td><input type="text" name="def_to_debris" dojoType="dijit.form.CheckBox" id="def_to_debris"></td>
		</tr>
		<tr>
		<td><?php echo INSTALL_STEP4_DEBRIS_RATE; ?></td>
			<td><input type="text" name="debris_rate" value="30" dojoType="dijit.form.NumberSpinner" smallDelta="1"
        	constraints="{min:0,max:100,places:0}" id="debris_rate" style="width:130px;"></td>
		</tr>
		<tr>
		<td><?php echo INSTALL_STEP4_SPEED_RATE; ?></td>
		<td><input type="text" name="speed_rate" value="1" dojoType="dijit.form.NumberSpinner" id="speed_rate" style="width:130px;"></td>
		</tr>
		</table>
		</form>
	</div>


	<div id="step5" dojoType="dijit.layout.ContentPane" style="display: none;">
			<table border="0" cellpadding="0" cellspacing="5">
			<tr>
			<td style="width: 200px;"><?php echo INSTALL_STEP5_TOOLNAME; ?></td>
			<td><input type="text" name="toolname" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="toolname"
			style="width:150px;" required="true" missingMessage="<?php echo INSTALL_STEP5_ENTER_TOOLNAME; ?>" promptMessage="<?php echo INSTALL_STEP5_ENTER_TOOLNAME; ?>"></td>
			</tr>
			<tr>
			<td><?php echo INSTALL_STEP5_LANGUAGE; ?></td>
			<td>
			<?php
			echo Layout::getLanguageDropDown("step5_language","padding: 1px; width:148px;","images/flags/","index.php",false);
			?>
			</td>
			</tr>
			<tr>
			<td><?php echo INSTALL_STEP5_EMAIL_TO; ?></td>
			<td><input type="text" name="email_to" value="" data-dojo-type="dijit/form/ValidationTextBox"
   			data-dojo-props="pattern: dojox.validate.regexp.emailAddress" id="email_to" required="true" style="width:150px;"
   			missingMessage="<?php echo INSTALL_STEP5_ENTER_EMAIL_TO; ?>" promptMessage="<?php echo INSTALL_STEP5_ENTER_EMAIL_TO; ?>"></td>
			</tr>
			<tr>
			<td><?php echo INSTALL_STEP5_EMAIL_FROM; ?></td>
			<td><input type="text" name="email_from" value="" data-dojo-type="dijit/form/ValidationTextBox"
			data-dojo-props="pattern: dojox.validate.regexp.emailAddress" id="email_from" required="true" style="width:150px;"
			missingMessage="<?php echo INSTALL_STEP5_ENTER_EMAIL_FROM; ?>" promptMessage="<?php echo INSTALL_STEP5_ENTER_EMAIL_FROM; ?>"></td>
			</tr>
			<tr>
			<td><?php echo INSTALL_STEP5_MAXSHOUTS; ?></td>
			<td><input type="text" name="maxshouts" value="15" dojoType="dijit.form.NumberSpinner" smallDelta="1"
        	constraints="{min:0,max:20,places:0}" id="maxshouts" style="width:150px;"></td>
			</tr>
			<tr>
			<td><?php echo INSTALL_STEP5_USE_PHPMAILER; ?></td>
			<td><input name="phpmailer" id="phpmailer" jsId="phpmailer" dojoType="dijit.form.CheckBox" onclick="switch_phpmailer()"></td>
			</tr>
			<tr>
			<td colspan="2" id="phpmailer_details" style="display: none;">
				<table border="0" cellpadding="0" cellspacing="0">
				<tr>
				<td style="width: 200px;"><?php echo INSTALL_PHPMAILER_HOST; ?></td>
				<td style="padding-left:5px; padding-top: 5px;"><input type="text" name="smpt_host" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="smpt_host"
				style="width:150px;" required="true" promptMessage="<?php echo INSTALL_PHPMAILER_HOST_EXAMPLE; ?>"></td>
				</tr>
				<tr>
				<td style="width: 200px;"><?php echo INSTALL_PHPMAILER_USER; ?></td>
				<td style="padding-left:5px; padding-top: 5px;"><input type="text" name="smpt_user" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="smpt_user"
				style="width:150px;" required="true" promptMessage="<?php echo INSTALL_PHPMAILER_USER_EXAMPLE; ?>"></td>
				</tr>
				<tr>
				<td style="width: 200px;"><?php echo INSTALL_PHPMAILER_PASS; ?></td>
				<td style="padding-left:5px; padding-top: 5px;"><input type="text" name="smpt_pass" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="smpt_pass"
				style="width:150px;" required="true" promptMessage="<?php echo INSTALL_STEP3_ENTER_PASSWORD; ?>"></td>
				</tr>
				<tr>
				<td style="width: 200px;"><?php echo INSTALL_PHPMAILER_SECURE; ?></td>
				<td style="padding-left:5px; padding-top: 5px;"><input type="text" name="smpt_secure" value="" dojoType="dijit.form.ValidationTextBox" trim="true" id="smpt_secure"
				style="width:150px;"></td>
				</tr>
				<tr>
				<td style="width: 200px;"><?php echo INSTALL_PHPMAILER_PORT; ?></td>
				<td style="padding-left:5px; padding-top: 5px;"><input type="text" name="smpt_port" value="" dojoType="dijit.form.NumberSpinner" smallDelta="1"
	        	constraints="{min:1,max:65535,places:0}" id="smpt_port" style="width:150px;"></td>
				</tr>
				</table>
			</td>
			</tr>
			</table>
	</div>

	<div id="step6" dojoType="dijit.layout.ContentPane" style="display:none;">
	<?php echo INSTALL_STEP6_INTRO; ?>
	<table style="margin-top: 20px;">
	<tr><td style="vertical-align: text-top;"><?php echo USER_PASSWORD; ?></td>
	<td>
	<input type="password" name="password1" value="" dojoType="dijit.form.ValidationTextBox" required="true" trim="true" id="password1" style="width:200px;"
	invalidMessage="bla<?php echo REGISTER_ERROR5; ?>" onchange="check_password_strength()" onkeyup="check_password_strength()"><br>
	<img id="password_strength" class="password_strength" src="images/img_trans.gif" width="1" height="1" title="dummy" />
	</td>
	</tr>
	<tr><td><?php echo USER_PASSWORD_CONFIRM; ?></td>
	<td>
	<input type="password" name="password2" value="" dojoType="dijit.form.ValidationTextBox" required="true" trim="true" id="password2" style="width:200px;"
	invalidMessage="<?php echo REGISTER_ERROR5; ?>">
	</td>
	</tr>
	</table>

	</div>

	<div id="step7" dojoType="dijit.layout.ContentPane" style="display:none;">
	</div>

	<div id="step8" dojoType="dijit.layout.ContentPane" style="display:none;">
	<h3><?php echo INSTALL_STEP8_INTRO; ?></h3>
	<div><?php echo INSTALL_STEP8_LOAD_DATA; ?>&nbsp;<span id="step8download"><img id="step8loading" src="images/loading_small.gif" width="16" height="16" title="loading" /></span></div>
	<div style="margin-top: 30px;"><?php echo INSTALL_STEP8_DELETE_FILE; ?></div>
	<div><?php echo INSTALL_STEP8_LOGON; ?></div>
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


<script type="text/javascript" src="secret/javascript/install.js">
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