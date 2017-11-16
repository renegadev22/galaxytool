<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_statusview) !== true) exit("no permission");

$galaxy     = (isset($_GET['galaxy'])) ? intval($_GET['galaxy']) : 1;

try {
	$status_obj = new StatusInfo($dbtablename, $systemtablename, $utablename, $playertable, $allytable, $reporttable, $noticetable);
	$status     = $status_obj->getGalaxyStatus($galaxy);
} catch (Exception $e) {
	exit("Exception occurred: ".$e->getMessage());
}

$galaxiearray = $status[0];
$userarray    = $status[1];
unset($status);

$tablestring   = "<table width=\"99%\" align=\"center\">";
$tooltipstring = "";

for ($j=1;$j<=50;$j++) {
	$tablestring .= "<tr>\n";
	for ($i=0;$i<10;$i++) {
		$key = $j+$i*50;
		if ($key == 500) {
			$tablestring .= "<td width=\"11%\">&nbsp;</td>\n";
			break;
		}
		$title = $userarray[$key];
		if ($galaxiearray[$key] == 0) $tablestring .= "<td id=\"$key\" class=\"farbe7\" width=\"11%\"><del>$galaxy:".($key)."</del></td>\n";     // no entry
		elseif ($galaxiearray[$key] < (time() - 86400*30)) $tablestring .= "<td width=\"11%\"><a id=\"$key\" href=\"galaxyview.php?gala=$galaxy&amp;system=".($key)."\" class=\"farbe6\">$galaxy:".($key)."</a></td>\n"; // 1 month or more
		elseif ($galaxiearray[$key] < (time() - 86400*14)) $tablestring .= "<td width=\"11%\"><a id=\"$key\" href=\"galaxyview.php?gala=$galaxy&amp;system=".($key)."\" class=\"farbe5\">$galaxy:".($key)."</a></td>\n"; // 2-4 weeks
		elseif ($galaxiearray[$key] < (time() - 86400*7)) $tablestring .= "<td width=\"11%\"><a id=\"$key\" href=\"galaxyview.php?gala=$galaxy&amp;system=".($key)."\" class=\"farbe4\">$galaxy:".($key)."</a></td>\n"; // 1-2 weeks
		elseif ($galaxiearray[$key] < (time() - 86400*4)) $tablestring .= "<td width=\"11%\"><a id=\"$key\" href=\"galaxyview.php?gala=$galaxy&amp;system=".($key)."\" class=\"farbe3\">$galaxy:".($key)."</a></td>\n"; // 4-7 days
		elseif ($galaxiearray[$key] < (time() - 86400*2)) $tablestring .= "<td width=\"11%\"><a id=\"$key\" href=\"galaxyview.php?gala=$galaxy&amp;system=".($key)."\" class=\"farbe2\">$galaxy:".($key)."</a></td>\n"; // 2-4 days
		else $tablestring .= "<td width=\"11%\"><a id=\"$key\" href=\"galaxyview.php?gala=$galaxy&amp;system=".($key)."\" class=\"farbe1\">$galaxy:".($key)."</a></td>\n";

		$tooltipstring .= '<div dojoType="dijit.Tooltip" connectId="'.$key.'">'.$title.'</div>';


	}
	$tablestring .= "</tr>\n";
}
$tablestring .="</table>\n";

echo $tablestring."\n".$tooltipstring;

?>