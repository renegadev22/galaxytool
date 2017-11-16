<?php
require "_general_header.inc.php";

if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch) !== true) {
	$error_page_code = "permission";
	include GALAXYTOOL_ROOT."/secret/errorpage.php";
	exit();
}

try {
	$msg_obj    = new Messages($messagetable,$noticetable,$playertable);
	$notices    = new Notices($noticetable, $playertable);
} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}
echo Layout::make_header(NOTICE_TITLE);


if (isset($_GET['action'])) {
	if ($_GET['action'] == "search" || $_GET['action'] == "searchres") {
		$text = (isset($_POST['searchtext'])) ? $_POST['searchtext'] : "";
		?>
			<form id="notice1" name="notice" method="post" action="notices.php?action=searchres" accept-charset="utf-8">
		<?php
		echo Layout::start_block(NOTICE_SEARCH);
		echo Layout::get_formsave_buttons("notice1");
		?>
			<div style="padding: 10px;">
			<input type="text" name="searchtext" value="" dojoType="dijit.form.TextBox" trim="true" id="searchtext" style="width:300px;">
			<button dojoType="dijit.form.Button" type="submit" name="formsubmit"><?php echo NOTICE_SEARCH_SHORT; ?></button>
			</div>
		<?php echo Layout::close_block(); ?>
			</form>
		<?php
	}

	if ($_GET['action'] == "searchres") {

		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
		$entries_per_page = (isset($_GET['entries'])) ? $_GET['entries'] : 20;
		$entries_per_page = (isset($_POST['entries'])) ? $_POST['entries'] : 20;
		$textarray = array();

		if (isset($_POST['searchtext']) && !empty($_POST['searchtext'])) {
			if (isset($_SESSION['s_noticesearcharray'])||isset($_SESSION['s_hits'])) {
				unset($_SESSION['s_noticesearcharray']);
				unset($_SESSION['s_hits']);
			}
			$text = stripslashes($_POST['searchtext']);
			$textarray = explode(" ",$text);
			$_SESSION['s_noticesearcharray'] = $textarray;
			$_SESSION['s_hits'] = $entries_per_page;
		} else {
			if (isset($_SESSION['s_noticesearcharray'])) {
				$textarray = $_SESSION['s_noticesearcharray'];
			}
			if (isset($_SESSION['s_hits'])) {
				$entries_per_page = $_SESSION['s_hits'];
			}
		}


		if (count($textarray) > 0) {
			$query = "SELECT count(*) as anzahl
					FROM $noticetable n, $playertable p
					WHERE n.player_id=p.id AND ";
			$i = 0;
			foreach ($textarray as $word) {
				$query .= " n.noticetext LIKE '%:word".$i."%' AND ";
				$i++;
			}
			$query = substr($query,0,strlen($query)-4);
			$query .= "ORDER BY n.last_update DESC";
			$limit = " LIMIT ".(($page-1)*$entries_per_page).",".$entries_per_page;
			
			$stmt = DB::getDB()->prepare($query);
			$i = 0;
			foreach ($textarray as $word) {
				$stmt->bindParam(":word".$i, $word);
				$i++;
			}
			$res = $stmt->execute();
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$anzahl = $line->anzahl;
			$query = str_replace("count(*) as anzahl"," n.*, p.playername,p.id as player_id, DATE_FORMAT(CONVERT_TZ(last_update, '+00:00', '".$_SESSION['s_timezone_offset']."'), '%H:%i:%s - %d. %m. %Y') as lastupdate ",$query).$limit;
			$stmt = DB::getDB()->query($query);

			$i = 0;
			$found = false;
		} else {
			$anzahl = 0;
		}
		?>
		<table cellpadding="1" cellspacing="0" border="0" align="center" width="95%"><tr><td>
		<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<?php

		if ($anzahl > 0) {
			$to = ($page*$entries_per_page < $anzahl) ? $page*$entries_per_page : $anzahl;
			echo "<tr><td align=\"center\" class=\"tblhead\" colspan=\"2\">".NOTICE_HITS.": ".(($page-1)*$entries_per_page+1)."-".$to." ".NOTICE_OF." $anzahl<br />";
			if ($anzahl > $entries_per_page) {
				draw_pagenumbers($page,$anzahl,$entries_per_page,$_SERVER['PHP_SELF']."?action=searchres","page");
			}
			echo "</td></tr>";

			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				// display every entry
				echo '<tr><td style="width:150px;">'.NOTICE_DATE.':</td><td>'.$line->lastupdate.'</td></tr>'."\n";
				echo '<tr><td>'.NOTICE_PLAYERNAME.'</a>:</td><td><a class="link" href="playerinformation.php?id='.$line->player_id.'">'.$line->playername.'</a>';
				echo '</td></tr>'."\n";
				echo '<tr><td>'.NOTICE_TEXT.':<div>';
				echo " <a class=\"menulink\"  style=\"font-size:7pt;\" href=\"notices.php?action=edit&amp;player_id=$line->player_id\">".NOTICE_EDIT." /</a>";
				echo " <a class=\"menulink\"  style=\"font-size:7pt;\" href=\"notices.php?action=delete&amp;player_id=$line->player_id\"> ".NOTICE_DELETE."</a></div>";
				echo '</td><td>'.Messages::get_bb_2_html(utf8_decode($line->noticetext)).'</td></tr>'."\n";

				if (++$i < $stmt->rowCount()) {
					echo '<tr><td colspan="2"><hr></td></tr>'."\n";
				}
			}
		} else {
			echo '<tr><td>'.NOTICE_NOTHING.'</td></tr>'."\n";
		}

		?>
			</table>
			</td></tr>
			</table>
		<?php
	}

	if ($_GET['action'] == "delete" || $_GET['action'] == "edit" || $_GET['action'] == "view") {
		// get Player ID
		$player_id = (int)$_GET['player_id'];
		if ($_GET['action'] == "delete" && $player_id > 0) {
			if (!isset($text) || empty($text)) {
				$result = $notices->delete_notice($player_id);
				$messages = $notices->get_error_object();
			}
		}

		if ($_GET['action'] == "edit" && $player_id > 0) {
			// retrieve notice
			$notice_content = $notices->get_notice($player_id);
			?>
			<form id="notice_edit" method="post" action="#" onsubmit="return save_notice();" accept-charset="utf-8">
			<input type="hidden" name="player_id" value="<?php echo $player_id; ?>">
		<?php
		echo Layout::start_block(NOTICE_HEADER." [".$notice_content['playername']."]");
		echo Layout::get_formsave_buttons("notice1");
		?>
			<table cellpadding="4" cellspacing="0" border="0" width="100%">
			<tr>
			<td style="width:150px;"><?php echo NOTICE_TEXT; ?><br>(<span id="cntChars">0</span> / 65000 <?php echo NOTICE_CHARS; ?>)</td>
			<td>
			<textarea id="textcontent" name="textcontent" dojoType="dijit.form.Textarea" onKeyUp="count_character();" style="min-height:400px;"><?php echo $notice_content['noticetext']; ?></textarea>
			</td>
			</tr>
			<tr>
			<td style="float: right;"><button dojoType="dijit.form.Button" type="submit" name="submitbutton1"><?php echo NOTICE_SAVE; ?></button></td>
	      	<td><button dojoType="dijit.form.Button" type="reset" onClick="reset();"><?php echo USER_RESET; ?></button></td>
			</tr>
			</table>
		<?php echo Layout::close_block(); ?>
			</form>

			<?php
		}

		if ($_GET['action'] == "view") {
			// get entry of that player
			$notice_content = $notices->get_notice($player_id);

			echo Layout::start_block(NOTICE_RESULTS." (".$notice_content['playername'].")");
			?>
			<table cellpadding="4" cellspacing="0" border="0" width="100%">
			<?php
			// display every entry
			echo '<tr><td>'.NOTICE_DATE.':</td><td>'.$notice_content['updatetime'].'</td></tr>'."\n";
			echo '<tr><td>'.NOTICE_PLAYERNAME.':</td><td>'.$notice_content['playername'];
			echo '</td></tr>'."\n";
			echo '<tr><td>'.NOTICE_TEXT.':</td><td>'.Messages::get_bb_2_html(utf8_decode($notice_content['noticetext'])).'</td></tr>'."\n";
			echo '<tr><td colspan="2" align="center"><a class="menulink" href="notices.php?action=edit&amp;player_id='.$player_id.'">('.NOTICE_EDIT.'</a> / <a class="menulink" href="notices.php?action=delete&amp;player_id='.$player_id.'">'.NOTICE_DELETE.')</a></td></tr>';
			?>
			</table>
			<?php
			echo Layout::close_block();
		}
	}

} else {
	echo "<div align=\"center\">Keine Aktion festgelegt! / No Action given!!</div>";
}
?>
<script type="text/javascript"	src="javascript/notices.js"></script>
<?php
echo Layout::make_footer($global_universe,$messages);
?>