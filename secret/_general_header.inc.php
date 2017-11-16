<?php
header("content-type: text/html; charset=utf-8");
require "../config/config.php";
require "../config/attributes.php";
session_start();

require GALAXYTOOL_ROOT."/secret/includes/logincheck.inc.php";
$messages = null;

if (isset($new_language))
	Galaxytool::load_language_file($new_language);
else
	Galaxytool::load_language_file($_SESSION['lang']);
