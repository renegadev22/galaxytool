<?php
if (!isset($content_type)) $content_type = "application/json";
header("content-type: $content_type; charset=utf-8");
header("Pragma: no-cache");
header("Expires: 0");

chdir("../");
require "../config/config.php";
require "../config/attributes.php";
session_start();
$NO_PAGE_FORWARD = true;
require GALAXYTOOL_ROOT."/secret/includes/logincheck.inc.php";
if (isset($error_page_code) && $error_page_code == "timeout") exit("");

if (!isset($_SESSION['lang'])) $_SESSION['lang'] = $default_language;
Galaxytool::load_language_file($_SESSION['lang']);