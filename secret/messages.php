<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

echo Layout::make_header(MESSAGES_TITLE);

$store_url = "ajax/ajax_messages.php?type=overview";
$playerid = 0;
if (isset($_GET['playerid'])) {
	$playerid = intval($_GET['playerid']);
	$store_url .= "&playerid=$playerid";
}

	if ($playerid > 0) {
		$playername = "";
		$query = "SELECT playername FROM $playertable WHERE id=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $playerid);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$playername = $line->playername;
		}

		// show text that messages are filted for special player
		echo "<h2>".MESSAGES_PLAYER_FILTER." ".$playername."</h2>";
	}
?>
        <span dojoType="dojo.data.ItemFileWriteStore" jsId="store1" url="<?php echo $store_url; ?>">
        </span>
		<span dojoType="dijit.form.Button" id="filter_button" showLabel="false" iconClass="filtericon">
               <?php echo MESSAGES_FILTER ?>
        </span>
		<span id="filter_pane" style="display:none">
        <input type="text" name="playername" value="*" dojoType="dijit.form.TextBox" trim="true" id="filter_playername" propercase="false" style="width:140px; margin-left:3px;">
        <input type="text" name="subject" value="" dojoType="dijit.form.TextBox" trim="true" id="filter_subject" propercase="false" style="width:400px; margin-left:6px;">
        <input type="text" name="messagetime" value="" dojoType="dijit.form.TextBox" trim="true" id="filter_messagetime" propercase="false" style="width:146px; margin-left:6px;">
        </span>

        <table dojoType="dojox.grid.DataGrid" jsId="grid1" id="grid1" store="store1" query="{ id: '*' }"
        class="startsHidden" style="width: height: 200px; margin: 5 0 0 0;" selectable="true"
        clientSort="true" rowSelector="20px" selectionMode="single" sortinfo="-3"
	    autoHeight="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results); ?>" rowCount="<?php echo $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results); ?>"
    		rowsPerPage="<?php echo (2 * $_SESSION['s_auth']->get_setting(iAuthorization::setting_search_results)); ?>">
            <thead>
                <tr>
                    <th width="150px" field="playername">
                        <?php echo MESSAGES_PLAYERNAME; ?>
                    </th>
                    <th width="400px" field="subject">
                        <?php echo MESSAGES_SUBJECT; ?>
                    </th>
                    <th width="auto" field="messagetime">
                        <?php echo MESSAGES_DATE; ?>
                    </th>
                </tr>
            </thead>
        </table>
        <br>
<?php
echo Layout::start_block(MESSAGES_CONTENT);
?>
	    <div align="right" style="padding: 5px;">
	    <button class="startsHidden" dojoType="dijit.form.Button" type="button" id="publish_button" disabled="true" showLabel="false" iconClass="shareicon">
	        <?php echo MESSAGES_PUBLISH_DETAIL ?>
	    </button>
	    <button class="startsHidden" dojoType="dijit.form.Button" type="button" id="delete_button" disabled="true" iconClass="trashicon" showLabel="false">
	        <?php echo MESSAGES_DELETE ?>
	    </button>
	    </div>
	    <div id="gridContentPane" dojoType="dijit.layout.ContentPane" style="padding-top: 20px; height:350px;">
	    <!-- Content will be loaded on request -->
	    </div>
<?php
echo Layout::close_block();
?>
    <script type="text/javascript" src="javascript/messages.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>