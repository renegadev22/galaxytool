<?php
if (!isset($_SESSION['lang'])) Galaxytool::load_language_file("english");

if ($error_page_code == "timeout") {
	// add parameter logout to delete remaining session data (e.g. after forced timeout at upgrade)
	echo '
		<HTML>
		<HEAD>
			<TITLE>Timeout</TITLE>
			<meta http-equiv="refresh" content="0; URL=../index.php?logout&redirect='.urlencode($_SERVER['REQUEST_URI']).'">
			<link rel=stylesheet type="text/css" href="styles.css">
		</HEAD>
		<BODY>
		<script>
			if (location.hash != "") {
   				location.href = \'../index.php?logout&redirect='.urlencode($_SERVER['REQUEST_URI']."#").'\'+location.hash.replace(/#/, "");
			}
		</script>
		</BODY>
		</HTML>
	';
} elseif ($error_page_code == "permission") {
	echo '
		<HTML>
		<HEAD>
			<TITLE>Permissions</TITLE>
			<link rel=stylesheet type="text/css" href="styles.css">
		</HEAD>
		<BODY>
			<table cellpadding="0" cellspacing="0" border="0" style="width:250px;" align="center" height="100%">
			<tr><td valign="middle">
			<a class="menulink" href="javascript:history.back();">'.ERRORPAGE_PERMISSION_DENIED.'</a>
			</td>
			</tr>
		</BODY>
	  </HTML>
	';
}

?>