<?php
class Layout {

	public static function make_header($page_title, $dojoxgrid = false, $custom_head = "", $amd=false) {
		global $show_ads; // variable is not defined by default but only in hosting environments

		$style_path = (isset($_SESSION['a_auth']))? $_SESSION['a_auth']->get_setting(iAuthorization::setting_stylepath) : "styles.css";
		
		// determine dojo version - stats page requires dojo 1.8.3 because of: https://bugs.dojotoolkit.org/ticket/17086
		if (strpos($_SERVER['PHP_SELF'],"/stats.php") !== false) $dojo = "1.8.3";
		else $dojo = "1.9.1";
		
		$content = '<!doctype HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
		<html>
		<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1; charset=UTF-8">
		<title>' . $page_title . '</title>
		<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
	    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/dojo/1.8/dijit/themes/claro/claro.css">
		';
		if ($dojoxgrid === true) {
			$content .= '<style type="text/css">
            @import "https://ajax.googleapis.com/ajax/libs/dojo/'.$dojo.'/dojox/grid/enhanced/resources/claro/EnhancedGrid.css";
            @import "https://ajax.googleapis.com/ajax/libs/dojo/'.$dojo.'/dojox/grid/enhanced/resources/EnhancedGrid_rtl.css";
        	</style>';
		} else {
			$content .= '<style type="text/css">
            @import "https://ajax.googleapis.com/ajax/libs/dojo/'.$dojo.'/dojox/grid/resources/Grid.css";
            @import "https://ajax.googleapis.com/ajax/libs/dojo/'.$dojo.'/dojox/grid/resources/claroGrid.css";
        	</style>';
		}
		$content .= '<link rel="stylesheet" type="text/css" href="' . $style_path . '">';
		
		if ($amd === true) {
			global $def_to_debris, $debris_rate, $speed_rate;
			$content .= "
			<script data-dojo-config=\"
			isDebug: false,
			parseOnLoad: false,
			locale:'".Galaxytool::get_locale($_SESSION['lang'])."',
			async: true,
			packages: [{
			name: 'galaxytool',
			location: location.pathname.replace(/[^/]+$/, '') + 'javascript/modules'
			},{
			name: 'resource',
			location: location.pathname.replace(/[^/]+$/, '') + 'nls'
			}]\" src=\"//ajax.googleapis.com/ajax/libs/dojo/".$dojo."/dojo/dojo.js\">;
			</script>
			<script type=\"text/javascript\" src=\"javascript/general_AMD.js\"></script>";
			
			$content .= '
			<script type="text/javascript">
				var galaxytool = window.galaxytool || {};
				galaxytool.Settings = {
					Language : '.json_encode($_SESSION['lang']).',
					UserTechs : {
						vbt : '.$_SESSION['s_auth']->get_tech(iAuthorization::tech_vbt).',
						impulse : '.$_SESSION['s_auth']->get_tech(iAuthorization::tech_impulse).',
						hra : '.$_SESSION['s_auth']->get_tech(iAuthorization::tech_hra).',
						waffentech : '.$_SESSION['s_auth']->get_tech(iAuthorization::tech_weapon).',
						schildtech : '.$_SESSION['s_auth']->get_tech(iAuthorization::tech_shield).',
						rpz : '.$_SESSION['s_auth']->get_tech(iAuthorization::tech_rpz).'
					},
					DefToDebris : '. json_encode($def_to_debris).',
					DebrisRate : "'.$debris_rate.'"	,
					SpeedRate : '.json_encode( $speed_rate ).'				
				}
			</script>';
		
		} else {
			$content .= '<script type="text/javascript">
				var dojoConfig = {
					isDebug: false,
					parseOnLoad: true,
					locale:"'.Galaxytool::get_locale($_SESSION['lang']).'",
						packages: [
						{
							name: "resource",
							location: "nls"
						}]
				};
				</script>
				<script src="https://ajax.googleapis.com/ajax/libs/dojo/'.$dojo.'/dojo/dojo.js"></script>
				<script type="text/javascript" src="javascript/general.js"></script>
				<script type="text/javascript" src="javascript/message_handling.js"></script>
				<script type="text/javascript" src="javascript/form_save.js"></script>
				<script type="text/javascript">
				var TEXT_PLAYER_BANNED = '.json_encode(PLAYER_BANNED).';
				var TEXT_PLAYER_VACATION_MODE = '.json_encode(PLAYER_VACATION_MODE).';
				var TEXT_PLAYER_NOOB = '.json_encode(PLAYER_NOOB).';
				var TEXT_PLAYER_INACTIVE = '.json_encode(PLAYER_INACTIVE).';
				var TEXT_PLAYER_LONG_INACTIVE = '.json_encode(PLAYER_LONG_INACTIVE).';
				var TEXT_PLAYER_OUTLAW = '.json_encode(PLAYER_OUTLAW).';
				var TEXT_GENERAL_LOAD_FORM = '.json_encode(GENERAL_LOAD_FORM).';
				var TEXT_GENERAL_SAVE_FORM = '.json_encode(GENERAL_SAVE_FORM).';
				</script>';
		}
		

		$content .= $custom_head . '
		</head>';

		if ($page_title == STATUS_TITLE || $page_title == VIEW_TITLE) {
			if ($amd === true)
				$content .= '<body onKeyDown="galaxytool.GalaxyView.cursorEvent(event);" class="claro" id="GalaxytoolBody">';
			else 
				$content .= '<body onKeyDown="cursorevent(event);" class="claro" id="GalaxytoolBody">';
		} else {
			$content .= '<body class="claro" id="GalaxytoolBody">';
		}

		$content .= Layout::get_JS_Offset("TimezoneOffset", $_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
		$content .= Layout::get_JS_Offset("OgameOffset", $_SESSION['s_auth']->get_setting(iAuthorization::setting_ogame_offset));

		// for timeout issues
		$content .= '<iframe src="session.php" style="display:none; position:absolute; top:0px; left:0px; height:0px; width:0px">';
		$content .= '</iframe>';

		$content .= '
	    <div class="startsHidden" id="appLayout" style="bottom:0px; top: 0px;"
	         data-dojo-type="dijit.layout.BorderContainer"
	         data-dojo-props="design: \'headline\'">
	        <div class="centerPanel"
	             data-dojo-type="dijit.layout.ContentPane"
	             data-dojo-props="region: \'center\'">
		';

		if (isset($show_ads) && $show_ads === true) {
			ob_start();
			@include GALAXYTOOL_ROOT."/hosting/mainframe_top.php";
			$content .= ob_get_clean();
		}

		// content for message area - hidden by default
		$content .= '
			<div id="messageArea" style="display: none;">'.
			Layout::start_block(INDEX_MESSAGES).
			'<div id="messageAreaContent">
			</div>'.
			Layout::close_block().
			'</div>
		';

		// content for galaxytool update check - hidden by default
		$content .= '
			<div id="updateArea" style="display: none;">'.
			Layout::start_block(INDEX_INFO).
			'<div data-dojo-type="dijit.layout.ContentPane" id="updateAreaContent">
			</div>'.
			Layout::close_block().
			'</div>
		';

		return $content;
	}

	public static function make_footer($universe,ErrorObject $message_object=null, $amd=false) {
		global $show_ads; // variable is not defined by default but only in hosting environments

		$content = "";

		$content .= '
		<div id="SaveDialog" dojoType="dijit.Dialog" style="min-width: 340px;" title="">
			<div dojoType="dijit.layout.ContentPane" id="SaveDialogContent" href="" style="min-height:200px;">
			</div>
		</div>
		';

		if ($message_object != null) {
			if ($amd === true) {
				$content .= '
				<script type="text/javascript">
				galaxytool.General.errorMessages = '.$message_object->get_JSON_result().';
				</script>';
			} else {
			
				$content .= '
					<script type="text/javascript">
					var message_list = ';
				$content .= $message_object->get_JSON_result();
				$content .= ";";
	
				$content .= '
					dojo.ready(function(){
						showMessages(message_list);
					});
				';
				$content .= '</script>';
			}
		}

		if (isset($show_ads) && $show_ads === true) {
			ob_start();
			@include GALAXYTOOL_ROOT."/hosting/mainframe_bottom.php";
			$content .= ob_get_clean();
		}
		$content .= "</div>";
		/***************** End of content section ***************************/

		$selection = array("index.php"=>"", "show.php"=>"", "reports.php"=>"", "galaxyview.php"=>"", "stats.php"=>"", "history.php"=>"", "fleet_movements.php"=>"", "combat_reports.php"=>"", "messages.php"=>"");
		foreach($selection as $index => $selected) {
			if (strpos($_SERVER['PHP_SELF'], "/".$index) !== false) {
				$selection[$index] = "selected";
				break;
			}
		}
		$content .= '
	        <div id="topPanel" style="top:0px; height:20px;"
	             data-dojo-type="dijit.layout.ContentPane"
	             data-dojo-props="region: \'top\', splitter: false">
	            <div style="position:relative;">
	            <div style="margin-left:30px; float: left;" id="galaxytool-version">Galaxytool <span class="hyperlink" onclick="galaxytool.General.checkForVersion()">'.VERSION.'</span> '.UNIVERSE.' '.$universe.'</div>
				<a href="status.php">'.MENU_DB_STATUS.'</a>
				<a href="usermanagement.php">'.MENU_USEROPTIONS.'</a>
				<a href="userinfo.php">'.MENU_USEROPTIONS3.'</a>
				<a href="change_password.php">'.MENU_USEROPTIONS2.'</a>
				<a href="administration.php">'.MENU_ADMIN.'</a>
				<span style="margin-left:20px;">'. Layout::getHeaderLanguageDropDown() .'</span>
				<a href="../index.php?logout">'.MENU_LOGOUT.'</a>
				</div>
	        </div>

	        <div id="leftCol" class="edgePanel"
	             data-dojo-type="dijit.layout.ContentPane"
	             data-dojo-props="region: \'left\', splitter: false">

	             <ul id="menutable">
	             <li><a class="menubutton '.$selection['index.php'].'" href="index.php">'.MENU_PAGE.'</a></li>
	             <li><a class="menubutton '.$selection['show.php'].'" href="show.php">'.MENU_DB_SEARCH.'</a></li>
	             <!-- <li><a class="menubutton" href="notices.php?action=search">'.MENU_DB_NOTICES.'</a></li> -->
	             <li><a class="menubutton '.$selection['reports.php'].'" href="reports.php">'.MENU_DB_REPORTS.'</a></li>
	             <li><a class="menubutton '.$selection['galaxyview.php'].'" href="galaxyview.php">'.MENU_GALAXYVIEW.'</a></li>
	             <li><a class="menubutton '.$selection['stats.php'].'" href="stats.php">'.MENU_STATISTICS.'</a></li>
	             <li><a class="menubutton '.$selection['history.php'].'" href="history.php">'.MENU_ALLYHISTORY.'</a></li>
	             <li><a class="menubutton '.$selection['fleet_movements.php'].'" href="fleet_movements.php#all">'.MENU_FLEET_MOVEMENTS.'</a></li>
	             <li><a class="menubutton '.$selection['combat_reports.php'].'" href="combat_reports.php">'.MENU_COMBAT_REPORTS.'</a></li>
	             <li><a class="menubutton '.$selection['messages.php'].'" href="messages.php">'.MENU_MESSAGES.'</a></li>';

		// plugin hyperlinks - consider also "selection" for them!
		$plugin_links = $_SESSION['s_auth']->get_plugin_links();
		if ($plugin_links != null) {
			foreach($plugin_links as $link) {
				$selection = "";
				$target = "";

				$link_filename = substr($link["url"],0,strpos($link["url"], ".")+1); // get URL until file name but not file extension and parameter
				if (strpos($_SERVER['PHP_SELF'], "/".$link_filename) !== false) {

					$selection = "selected";
				}
				if ($link["extern"] == true) {
					$target = 'target="extern"';
				}
				$content .= '<li><a class="menubutton '.$selection.'" '.$target.' href="'.$link["url"].'">'.$link["name"].'</a></li>';
			}
		}


		// user defined links
		$i = 0;
		$user_links = $_SESSION['s_auth']->get_userdefined_links();
		foreach($user_links as $link) {
			if ($i == 0) {
				$content .= '<li style="margin-top: 30px;"><a class="menubutton" href="'.$link["url"].'" target="external">'.$link["name"].'</a></li>';
			} else {
				$content .= '<li><a class="menubutton" href="'.$link["url"].'" target="external">'.$link["name"].'</a></li>';
			}
			$i++;
		}
		unset($user_links);

		switch ($_SESSION['lang']) {
			case "german":
				$downloadpage = "http://de.wiki.galaxytool.eu/index.php/Downloads";
				$helppage = "http://de.wiki.galaxytool.eu/index.php/Bedienung";
				break;
			case "spanish":
				$downloadpage = "http://es.wiki.galaxytool.eu/index.php/Descargar";
				$helppage = "http://es.wiki.galaxytool.eu/index.php/Utilizaci%C3%B3n";
				break;
			default:
				$downloadpage = "http://en.wiki.galaxytool.eu/index.php/Downloads";
				$helppage = "http://en.wiki.galaxytool.eu/index.php/Usage";
				break;
		}



		$content .= '
	             </ul>
				
				<div style="width:100%;">
					<a target="twitter" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.galaxytool-hosting.eu%2F&region=follow_link&screen_name=OGameGalaxytool&tw_p=followbutton&variant=2.0"><img style="margin-left: 50px; margin-top: 20px;" src="../images/twitter-bird-white-on-blue.png" border="0"></a>
				</div>
	        </div>
			
	        <div id="bottomPanel">
				<a href="'.$helppage.'" target="external">'.MENU_HELP.'</a>
				<a href="http://board.galaxytool.eu" target="external">'.MENU_FORUM_THREAD.'</a>
				<a href="'.$downloadpage.'" target="external">'.MENU_DOWNLOADPAGE.'</a>
	        </div>
		';
		$content .= '</div>';

		if ($amd === false) {
		$content .= '
			<script type="text/javascript">
				dojo.ready(function(){
				dojo.query(".startsHidden")
					.style("opacity", 100)
					.removeClass("startsHidden")
				;
			})
			</script>
			';
		}
		if (isset($show_ads) && $show_ads === true) {
			ob_start();
			@include GALAXYTOOL_ROOT."/hosting/antiblock.php";
			$content .= ob_get_clean();
		}
		$content .= '
		</body>
		</html>';

		return $content;
	}

	public static function start_block($title, $id="") {

		$returnvalue = '<table class="main_table">
		 		<tr>
					<td class="main_ol main_cell"></td>
					<td class="main_om main_cell"';
					if ($id != "") $returnvalue .= ' id="'.$id.'" ';
					$returnvalue .='>'.$title.'</td>
					<td class="main_or main_cell"></td>
				</tr>
				<tr>
					<td class="main_ml main_cell"></td>
					<td class="main_middle main_cell">
					';

		return $returnvalue;
	}

	public static function close_block() {
		return '	</td>
					<td class="main_mr main_cell"></td>
				</tr>
				<tr>
					<td class="main_ul main_cell"></td>
					<td class="main_um main_cell"></td>
					<td class="main_ur main_cell"></td>
				</tr>
			</table>';
	}

	public static function getHeaderLanguageDropDown($path="../images/flags/",$target_file="index.php") {
		return Layout::getLanguageDropDown("language",
					"width: 150px; border: 1px solid #191E23; background-color: black; border-collapse: separate; color: #C2C2C2; margin-top:-5px;",
					$path,$target_file
				);
	}

	public static function getLanguageDropDown($id, $add_styles="", $path="../images/flags/", $target_file="index.php", $redirect=true) {
		$content = '<div name="'.$id.'" data-dojo-type="dijit/form/Select" style="'.
				   $add_styles.'" '.
		           'maxheight="400" id="'.$id.'" jsId="'.$id.'" ';
		if ($redirect) {
			$content .= 'onChange="document.location.href=\''.$target_file.'?language=\'+dijit.byId(\''.$id.'\').get(\'value\');"';
		}
		$content .= '>';


		$languages = array(
		array("german","ger-icon.gif","Deutsch"),
		array("english","en-icon.gif","English"),
		array("spanish","es-icon.gif","Español"),
		array("dutch","dutch-icon.gif","Nederlands"),
		array("balkan","balkan-icon.gif","Balkan"),
		array("french","french-icon.gif","Français"),
		array("portugues","pt-icon.gif","Português"),
		array("polish","pl-icon.gif","Polski"),
		array("italian","it-icon.gif","Italiano"),
		array("turkish","tk-icon.gif","Türkçe"),
		array("danish","dk-icon.gif","Dansk"),
		array("brazilian","br-icon.gif","Brazilian"),
		array("russian","ru-icon.gif","Русский"),
		array("swedish","sw-icon.gif","Svenska"),
		array("greek","gr-icon.gif","Ελληνικά"),
		array("romanian","ro-icon.gif","Română"),
		array("hungarian","hu-icon.gif","Magyar"),
		array("czech","cz-icon.gif","Čeština"),
		array("korean","kr-icon.gif","한국어<"),
		array("norwegian","no-icon.gif","Norsk bokmål"),
		array("taiwan","tw-icon.gif","Taiwan"),
		array("japan","jp-icon.gif","日本語"),
		array("chinese","cn-icon.gif","中文 (简体)"),
		array("bulgarian","bg-icon.gif","Български"),
		array("lithuanian","lt-icon.gif","lietuvių kalba"),
		array("latvian","lv-icon.gif","Latvian"),
		array("finnish","fi-icon.gif","Suomi"),
		array("slovak","sk-icon.gif","Slovenčina"),
		array("croatian","hr-icon.gif","Croatian"),
		array("serbian","se-icon.gif","Serbian"),
		array("slovenian","si-icon.gif","Slovenian"),
		array("arabic","arabic-icon.gif","Arabic")
		);
		foreach ($languages as $language) {
			if($_SESSION['lang']==$language[0]) $selected = 'selected="selected"';
			else $selected = ''; 
			$content .=  '<span value="'.$language[0].'" '.$selected.'><div class="flag_'.$language[0].'" style="float: left;"></div>&nbsp;'.$language[2].'</span>';
		}
		$content .= "</div>\n";

		return $content;
	}


	public static function print_messages(ErrorObject $message_object) {
		if ($message_object == null) return;
		$value = Layout::start_block(INDEX_MESSAGES);
		$value .= '<table style="padding: 5px;">';

		$messages = $message_object->get_message_array();
		$image = "";
		foreach ($messages as $message) {
			switch ($message[1]) {
				case ErrorObject::severity_error :
					$image = "images/error.png";
					break;
				case ErrorObject::severity_warning :
					$image = "images/warning.png";
					break;
				case ErrorObject::severity_info :
					$image = "images/info.png";
					break;
				default: throw new InvalidArgumentException();
			}

			$value .= "<tr><td><img src=\"".$image."\"</td><td>".$message[2]."</td></tr>\n";

		}
		$value .= "</table>\n";
		$value .= Layout::close_block();
		return $value;
	}

	public static function get_timezone_selection($id, $type) {
		if ($type != iAuthorization::setting_timezone_offset && $type != iAuthorization::setting_ogame_offset) throw new InvalidArgumentException("Invalid selection type");

		$value = '<select name="'.$id.'" dojoType="dijit.form.Select" id="'.$id.'" jsId="'.$id.'" maxheight="400" style="padding: 1px;">';
		for ($i=23;$i>=0;$i--) {
			if ($i > 9) {
				$print_value  = "-$i:30";
				$print_value2 = "-$i:00";
			} else {
				$print_value  = "-0$i:30";
				$print_value2 = "-0$i:00";
			}

			if ($_SESSION['s_auth']->get_setting($type) == $print_value) {
				$selected = 'selected="selected"';
			} else {
				$selected = "";
			}
			if ($_SESSION['s_auth']->get_setting($type) == $print_value2) {
				$selected2 = 'selected="selected"';
			} else {
				$selected2 = "";
			}

			$value .= "<option value=\"$print_value\" $selected>$print_value</option>\n";
			if ($i > 0) {
				$value .= "<option value=\"$print_value2\" $selected2>$print_value2</option>\n";
			}
		}
		for ($i=0;$i<=23;$i++) {
			if ($i > 9) {
				$print_value  = "+$i:00";
				$print_value2 = "+$i:30";
			} else {
				$print_value  = "+0$i:00";
				$print_value2 = "+0$i:30";
			}

			if ($_SESSION['s_auth']->get_setting($type) == $print_value) {
				$selected = 'selected="selected"';
			} else {
				$selected = "";
			}
			if ($_SESSION['s_auth']->get_setting($type) == $print_value2) {
				$selected2 = 'selected="selected"';
			} else {
				$selected2 = "";
			}

			$value .= "<option value=\"$print_value\" $selected>$print_value</option>\n";
			$value .= "<option value=\"$print_value2\" $selected2>$print_value2</option>\n";
		}
		$value .= '</select>';
		return $value;
	}

	public static function get_formsave_buttons($folder, $amd=false) {
		if ($amd === true) {
			return '
			<img src="../images/save.png" onclick="galaxytool.FormSaveHelper.showSaveScreen(\''.$folder.'\')" style="cursor: pointer;">&nbsp;
			<img src="../images/open.png" onclick="galaxytool.FormSaveHelper.showLoadScreen(\''.$folder.'\')" style="cursor: pointer;">
			';
		}
		return '
		<img src="../images/save.png" onclick="showSaveScreen(\''.$folder.'\')" style="cursor: pointer;">&nbsp;
		<img src="../images/open.png" onclick="showLoadScreen(\''.$folder.'\')" style="cursor: pointer;">
		';
	}

	public static function get_coordinates_control() {
		$html_code = '<input type="text" name="coordinates" value="" dojoType="dijit.form.ValidationTextBox" trim="true"
		               id="coordinates" jsId="coordinates" propercase="false" style="width:130px;">
 			<div dojoType="dijit.form.DropDownButton" iconClass="application_windows_icon" label="">
            <div dojoType="dijit.TooltipDialog">
            	<table border="0" cellpadding="3" cellspacing="0">
            	<tr>
            	<td>'.COMBATS_GALAXY_FROM_TO.'</td>
            	<td>
            	<input type="text" name="galaxy1" id="galaxy1" value="" dojoType="dijit.form.ValidationTextBox"
        		regExp="[\d]+" required="true" invalidMessage="'.COMBATS_INVALID_GALAXY_ENTERED.'"
        		style="width:30px;"></td>
            	<td>-</td>
            	<td>
            	<input type="text" name="galaxy2" id="galaxy2" value="" dojoType="dijit.form.ValidationTextBox"
        		regExp="[\d]*" invalidMessage="'.COMBATS_INVALID_GALAXY_ENTERED.'"
        		style="width:30px;">
            	</td>
            	</tr>
            	<tr>
            	<td>'.COMBATS_SYSTEM_FROM_TO.'</td>
            	<td>
            	<input type="text" name="system1" id="system1" value="" dojoType="dijit.form.ValidationTextBox"
        		regExp="[\d]*" invalidMessage="'.COMBATS_INVALID_SYSTEM_ENTERED.'"
        		style="width:30px;"></td>
            	<td>-</td>
            	<td>
            	<input type="text" name="system2" id="system2" value="" dojoType="dijit.form.ValidationTextBox"
        		regExp="[\d]*" invalidMessage="'.COMBATS_INVALID_SYSTEM_ENTERED.'"
        		style="width:30px;">
            	</td>
            	</tr>
            	<tr>
            	<td>'.COMBATS_PLANET_FROM_TO.'</td>
            	<td>
            	<input type="text" name="planet1" id="planet1" value="" dojoType="dijit.form.ValidationTextBox"
        		regExp="[\d]*" invalidMessage="'.COMBATS_INVALID_PLANET_ENTERED.'"
        		style="width:30px;"></td>
            	<td>-</td>
            	<td>
            	<input type="text" name="planet2" id="planet2" value="" dojoType="dijit.form.ValidationTextBox"
        		regExp="[\d]*" invalidMessage="'.COMBATS_INVALID_PLANET_ENTERED.'"
        		style="width:30px;">
            	</td>
            	</tr>
            	<tr>
            	<td colspan="4">
                <button dojoType="dijit.form.Button" type="button" onClick="galaxytool_apply_coordinates(\'coordinates\')">'.COMBATS_APPLY.'</button>
            	</td>
            	</tr>
            	</table>
            </div>
        </div>
		';
		return $html_code;

	}

	public static function get_player_status_string($banned,$vacation,$noob,$inactive,$long_inactive,$outlaw,$show_as_bb_string=false) {
		$status = "";
		if (!$show_as_bb_string) {
			if ($banned != "false") {
				$status .= "<span class=\"banned\">".PLAYER_BANNED."</span>";
			}
			if ($vacation != "false") {
				$status .= "<span class=\"vacation\">".PLAYER_VACATION_MODE."</span>";
			}
			if ($noob != "false") {
				$status .= "<span class=\"noob\">".PLAYER_NOOB."</span>";
			}
			if ($inactive != "false") {
				$status .= "<span class=\"inactive\">".PLAYER_INACTIVE."</span>";
			}
			if ($long_inactive != "false") {
				$status .= "<span class=\"longinactive\">".PLAYER_LONG_INACTIVE."</span>";
			}
			if ($outlaw != "false") {
				$status .= "<span class=\"outlaw\">".PLAYER_OUTLAW."</span>";
			}

		} else {
			if ($banned != "false") {
				$status .=  "[COLOR=".$_SESSION['s_auth']->get_setting(iAuthorization::bbcode_banned)."]".USER_BB_BANNED."[/COLOR]";
			}
			if ($vacation != "false") {
				$status .=  "[COLOR=".$_SESSION['s_auth']->get_setting(iAuthorization::bbcode_vacation)."]".USER_BB_VACATION."[/COLOR]";
			}
			if ($noob != "false") {
				$status .=  "[COLOR=".$_SESSION['s_auth']->get_setting(iAuthorization::bbcode_noob)."]".USER_BB_NOOB."[/COLOR]";
			}
			if ($inactive != "false") {
				$status .=  "[COLOR=".$_SESSION['s_auth']->get_setting(iAuthorization::bbcode_inactive)."]".USER_BB_INACTIVE."[/COLOR]";
			}
			if ($long_inactive != "false") {
				$status .=  "[COLOR=".$_SESSION['s_auth']->get_setting(iAuthorization::bbcode_longinactive)."]".USER_BB_LONGINACTIVE."[/COLOR]";
			}
			if ($outlaw != "false") {
				$status .=  "[COLOR=".$_SESSION['s_auth']->get_setting(iAuthorization::bbcode_outlaw)."]".USER_BB_OUTLAW."[/COLOR]";
			}
		}

		return $status;
	}
	
    public static function get_player_status_class($banned,$vacation,$noob,$inactive,$long_inactive,$outlaw) {
        /*
         * Sequence: the highest value wins
         *  Administrator
         *  Stronger Player
         *  Weaker Player (newbie)
         *  Outlaw (temporary)
         *  Vacation Mode
         *  Banned
         *  28 days inactive
         *  7 days inactive
         * 
         */
         
         if ($noob != "false") return "noob";
         if ($outlaw != "false") return "outlaw";
         if ($vacation != "false") return "vacation";
         if ($banned != "false") return "banned";
         if ($long_inactive != "false") return "longinactive";
         if ($inactive != "false") return "inactive";
         
         return "nothing";
         
    }

	private static function get_JS_Offset($name, $offset) {
		if (isset($offset)) {
			$hour_minutes = explode(":", $offset);
			$offset = $hour_minutes[0];
			if ($hour_minutes[1] == "30") {
				if ($offset < 0) {
					$offset -= 0.5;
				} else {
					$offset += 0.5;
				}
			}
			return '<script type="text/javascript">var ' . $name . ' = ' . $offset . ';</script>';
		}
		return "";
	}

}
