<?php
header("content-type: text/html; charset=utf-8");
require "config/config.php";
require "config/attributes.php";
session_start();

if (isset($_GET['logout'])) {
	// unset session at session handler
	unset($_SESSION['s_auth']);
	unset($_SESSION['s_loggedin']);
	unset($_SESSION['s_serverurl']);
}
  
$show_messages = false;
chdir('secret');
if (isset($_GET['language'])) {
	Galaxytool::set_language($_GET['language']);
	$_SESSION['lang_manually'] = true;
}
if (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] = $default_language;
}
Galaxytool::load_language_file($_SESSION['lang']);
chdir('../');

$path = $_SERVER['PHP_SELF'];
$pos = strrpos($path,"/");
$path = substr($path,0,$pos+1);


if (isset($_POST['username']) && isset($_POST['pass']) || isset($_GET['username']) && isset($_GET['pass'])) {
	// Logon user as requested (direct logon request or newly registered user)
	$username = (isset($_POST['username'])) ? $_POST['username'] : $_GET['username'];
	$password = (isset($_POST['pass']))     ? $_POST['pass']     : $_GET['pass'];

	try {
		$auth = new Authorization($utablename, $playertable, $iptablename, $default_language, $username, $password);

	} catch (Exception $e) {
		exit("Exception occurred: ".$e->getMessage());
	}
	$messages = $auth->get_error_object();
	if ($messages != null) $show_messages = true;
	$_SESSION['s_serverurl']   = $_SERVER['HTTP_HOST'].$path;

} elseif (isset($_GET['action']) && $_GET['action'] == "verify_reset" && isset($_GET['id']) && isset($_GET['email'])) {
	// verification of email reset
	try {
		$class_ref = new UnauthenticatedAccess($utablename, $email_from, $email_to);
	} catch (Exception $e) {
		exit("Exception occurred: ".$e->getMessage());
	}

	$response = $class_ref->reset_password($_GET['email'], $_GET['id']);
	if ($response === false) {
		$messages = $class_ref->get_error_object();
	} else {
		$messages = new ErrorObject(ErrorObject::severity_info, LOSTPW_INFO2);
	}

	$show_messages = true;
} elseif (isset($_GET['action']) && $_GET['action'] == "verify" && isset($_GET['id']) && isset($_GET['email'])) {
	// verification of email reset
	try {
		$class_ref = new UnauthenticatedAccess($utablename, $email_from, $email_to);
	} catch (Exception $e) {
		exit("Exception occurred: ".$e->getMessage());
	}

	$response = $class_ref->confirm_email_for_registration($_GET['email'], $_GET['id']);
	if ($response === false) {
		$messages = $class_ref->get_error_object();
	} else {
		$messages = new ErrorObject(ErrorObject::severity_info, REGISTER_INFO3);
	}

	$show_messages = true;
} elseif (isset($_POST['loginusername']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['email'])) {
	// registration form for new user
	try {
		$class_ref = new UnauthenticatedAccess($utablename, $email_from, $email_to);
	} catch (Exception $e) {
		exit("Exception occurred: ".$e->getMessage());
	}
	$response = $class_ref->register_user($_POST['loginusername'], $_POST['password1'], $_POST['password2'], $_POST['email']);
	if ($response === false) {
		$messages = $class_ref->get_error_object();
	} else {
		// print success message including request to ask admin to unlock the account
		$messages = new ErrorObject(ErrorObject::severity_info, REGISTER_INFO2);
	}
	$show_messages = true;
}



if (!isset($_SESSION['s_loggedin']) || $_SESSION['s_loggedin'] && $_SESSION['s_serverurl'] != $_SERVER['HTTP_HOST'].$path) { // Login page
?>
<!doctype HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title><?php echo PROGRAM_NAME." ".VERSION; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1; charset=UTF-8">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
 	<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/dojo/1.8/dijit/themes/claro/claro.css" />
 	<link rel="stylesheet" type="text/css" href="styles.css" />
	<script data-dojo-config="
			isDebug: true,
            parseOnLoad: false,
			locale:'<?php echo Galaxytool::get_locale($_SESSION['lang']) ?>',
			async: true,
			packages: [{
          			name: 'galaxytool',
        			location: location.pathname.replace(/[^/]+$/, '') + 'secret/javascript/modules'
     		},{
                  	name: 'resource',
                   	location: location.pathname.replace(/[^/]+$/, '') + 'secret/nls'
            }]" src="//ajax.googleapis.com/ajax/libs/dojo/1.8.3/dojo/dojo.js">;
	</script>	
	<script src="secret/javascript/startpage.js"></script>
	<script type="text/javascript">
	galaxytool.StartPage.login_errors = <?php
	if ($show_messages) {
		echo $messages->get_JSON_result();
	} else {
		echo "false";
	}
	?>;
	</script>
</head>
<body class="claro">
	<div id="js_warning">
		<div class="js_warning_hp_inner">
		Please enable Javascript /
		<br />Bitte Javascript aktivieren
		</div>
	</div>
	
	<div id="header_line" class="startsHidden">
		<div id="language_selection">
			<?php echo L_LANGUAGE; ?> <?php echo Layout::getHeaderLanguageDropDown("images/flags/"); ?>
		</div>
	</div>

	<div id="start" class="startsHidden">
		<div id="header">
			<a id="loginBtn" href="javascript:void(0)" onclick="galaxytool.StartPage.registerFade();" title="<?php echo L_REGISTER; ?>"><?php echo L_REGISTER; ?></a>
			<div id="login">
				<form id="subscribeForm" name="subscribeForm" method="post" action="#">
						<h2><?php echo L_REGISTER; ?></h2>

					<div class="input-wrap">
                        <label for="username"><?php echo REGISTER_LOGINNAME; ?>:</label>
						<div class="black-border">
                        <input id="loginusername" type="text"  name="loginusername" value="" />
						</div>
					</div>
					<div class="input-wrap">
                        <label for="password"><?php echo REGISTER_PASSWORD; ?>: </label>

						<div class="black-border">
                            <input type="password" id="password1" name="password1" value="" />
						</div>
						<img id="password_strength" class="password_strength" src="images/img_trans.gif" width="1" height="1" title="dummy" />
					</div>
					<div class="input-wrap">
                        <label for="password"><?php echo REGISTER_PASSWORD_CONFIRM; ?>:</label>
						<div class="black-border">
                            <input type="password" id="password2" name="password2" value="" />

						</div>
					</div>
					<div class="input-wrap">
                        <label for="email"><?php echo REGISTER_EMAIL; ?>:</label>
						<div class="black-border">
                            <input type="text" id="email" name="email" value="" maxlength="50" />
						</div>
					</div>
					<div id="submitWrap">
                        <div onclick="galaxytool.StartPage.validateAndSubmit()">
                            <input type="button" id="regSubmit" value="<?php echo L_REGISTER; ?>" />
                        </div>

					</div>
				</form>
			</div>
		</div>

		<div id="content" class="clearfix">
			<div id="subscribe">
				<form id="loginForm" name="loginForm" method="post" action="index.php">
					<div class="input-wrap">
						<label for="username"><?php echo L_USERNAME; ?>:</label>
						<div class="black-border">
                            <input type="text" id="username" class="" name="username" value="" />
						</div>
					</div>
					<div class="input-wrap">
                        <label for="pass"><?php echo L_PASSWORD; ?>:</label>
						<div class="black-border">
                            <input type="password" class="" id="pass" name="pass" />
						</div>
                    </div>
                    <br>
                    <input type="submit" id="loginSubmit" value="<?php echo INDEX_LOGIN; ?>" />
					<a href="javascript:void(0)" onclick="galaxytool.StartPage.showLostPassword()" id="pwLost" title="Passwort vergessen?"><?php echo L_PWLOST; ?></a>
					<?php
					if (isset($_GET['redirect'])) {
						echo "<input type=\"hidden\" name=\"redirect\" value=\"".$_GET['redirect']."\">\n";
					}
					?>
				</form>
			</div>
			<div id="contentWrap">
				<div id="menu">
					<ul id="tabs">
						<li><a id="tab1" href="javascript:void(0)" onclick="galaxytool.StartPage.showMainContent()" class="current">Home</a></li>
						<li><a id="tab2" href="javascript:void(0)"></a></li>
						<li><a id="tab3" href="http://www.galaxytool.eu" target="_blank">Wiki</a></li>
					</ul>
					<a id="tab4" href="http://board.galaxytool.eu" target="_blank">Board</a>
					<br class="clearfloat" />

				</div>
				<div id="tabContent">
                   	<div id="mainContent">
                        <div class="inner-box clearfix">
        				<h2>OGame - Galaxytool</h2>
						<p><?php echo STARTPAGE_GALAXYTOOL_DESCR; ?></p>
						</div>
					</div>
                   	<div id="messageArea">
                        <div class="inner-box clearfix">
        				<h2>OGame - Galaxytool</h2>
						<div id="messageAreaContent"></div>
						</div>
					</div>
                   	<div id="loadingArea">
                        <div class="inner-box clearfix">
        				<h2>OGame - Galaxytool</h2>
						<div id="loadingAreaContent"  style="width: 100%; height: 100px;"><img src="images/loading.gif" style="display:block; margin: 30px auto;" /></div>
						</div>
					</div>
					<div id="passwordLost">
						<div class="inner-box clearfix">
							<h2><?php echo L_PWLOST; ?></h2>
							<form id="pwLostForm" name="pwLostForm" action="#">
								<div class="input-wrap">
                                    <label for="email"><?php echo LOSTPW_EMAIL; ?>:</label>
									<div class="black-border">
                                        <input type="text" name="email" value="" maxlength="255" />
									</div>
								</div>
								<a href="javascript:void(0)" id="formSubmit" onclick="galaxytool.StartPage.resetPassword()"><?php echo LOSTPW_BUTTON1; ?></a>
							</form>
							<div id="pwLostInfo">
								<h4><?php echo L_PWLOST."?"; ?></h4>
                                <p><?php echo LOSTPW_INFO1; ?></p>

							</div>
						</div>
					</div>
				</div>
				<div id="contentFooter"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById("js_warning").style.display = "none";
	</script>
</body>
</html>
<?php
} else {
	if (isset($userpass) && $userpass == "galatool") {
		$page_forward = "secret/change_password.php";
	} elseif(isset($_POST['redirect'])) {
		$redirect = $_POST['redirect'];
		$current_page = $_SERVER['REQUEST_URI'];
		$current_page = str_replace("index.php","",$current_page);
		if (substr($redirect,0,strlen($current_page)) == $current_page) {
			$page_forward = urldecode($redirect);
		} else {
			$page_forward = "secret/index.php";
		}
	} else {
		$page_forward = "secret/index.php";
	}
	Galaxytool::HTML_redirect($page_forward, "secret/styles.css");

}
?>