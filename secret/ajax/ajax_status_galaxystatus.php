<?php
$content_type = "text/html";
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_statusview) !== true) exit("no permission");

$galaxy     = (isset($_GET['galaxy'])) ? intval($_GET['galaxy']) : 1;

try {
	$status_obj = new StatusInfo($dbtablename, $systemtablename, $utablename, $playertable, $allytable, $reporttable, $noticetable);
	$max_galaxy = $status_obj->getMaxGalaxy();
} catch (Exception $e) {
	exit("Exception occurred: ".$e->getMessage());
}

?>
<table cellpadding="4" cellspacing="0" border="0" width="100%">
	<tr class="tblhead">
		<td colspan="2">
			<p>
				<?php echo STATUS_DB_STATUS; ?>
				<button dojoType="dijit.form.Button" type="button" id="reload_button" iconClass="reloadicon" showLabel="false" onClick="galaxytool_select_galaxy(dijit.byId('reload_status_tab2').get('value'))"></button>
			</p>
			<?php echo USER_GALAXY; ?>: <?php
			$selection = '<select name="reload_status_tab2" dojoType="dijit.form.Select" id="reload_status_tab2" jsId="reload_status_tab2" '.
					'style="width:50px;" onChange="galaxytool_select_galaxy(dijit.byId(\'reload_status_tab2\').get(\'value\'));">'."\n";
			for ($i=1;$i<=$max_galaxy;$i++) {
				$selected = ($i == $galaxy) ? 'selected="selected"' : "";
				$selection .=  '<option value="'.$i.'" '.$selected.'>'.$i.'</option>'."\n";
			}
			$selection .= "</select>\n";
			?>

			<button onClick="galaxytool_status_scroll_galaxy(false)"
				dojoType="dijit.form.Button" type="button">&lt;</button> <?php echo $selection; ?>
			<button onClick="galaxytool_status_scroll_galaxy(true)"
				dojoType="dijit.form.Button" type="button">&gt;</button>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="firstcolor" width="100%"
			id="galaxy_status_content"></td>
	</tr>
	<tr class="tblhead">
		<td colspan="2"><?php echo STATUS_DB_LEGEND; ?></td>
	</tr>
	<tr>
		<td class="farbe1"><?php echo STATUS_COLOR; ?>1</td>
		<td><?php echo STATUS_AGE1; ?></td>
	</tr>
	<tr>
		<td class="farbe2"><?php echo STATUS_COLOR; ?>2</td>
		<td><?php echo STATUS_AGE2; ?></td>
	</tr>
	<tr>
		<td class="farbe3"><?php echo STATUS_COLOR; ?>3</td>
		<td><?php echo STATUS_AGE3; ?></td>
	</tr>
	<tr>
		<td class="farbe4"><?php echo STATUS_COLOR; ?>4</td>
		<td><?php echo STATUS_AGE4; ?></td>
	</tr>
	<tr>
		<td class="farbe5"><?php echo STATUS_COLOR; ?>5</td>
		<td><?php echo STATUS_AGE5; ?></td>
	</tr>
	<tr>
		<td class="farbe6"><?php echo STATUS_COLOR; ?>6</td>
		<td><?php echo STATUS_AGE6; ?></td>
	</tr>
	<tr>
		<td class="farbe7"><?php echo STATUS_COLOR; ?>7</td>
		<td><?php echo STATUS_AGE7; ?></td>
	</tr>
</table>
