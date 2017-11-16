<?php
require "_general_header.inc.php";

$version = VERSION;
$latest_version = @file_get_contents("http://www.galaxietool.de/version.txt");

if (isset($latest_version)) {
	if (isset($latest_version) && !empty($latest_version) && (("v".$latest_version) != $version)) {
		echo INDEX_VERSION.':&nbsp;<a href="http://www.galaxytool.eu/" class="external_link" target="external">'.$latest_version."</a>\n";
	} else {
		echo INDEX_LATEST_VERSION."\n";
	}
}