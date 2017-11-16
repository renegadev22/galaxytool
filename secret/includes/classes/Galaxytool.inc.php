<?php

class Galaxytool {

	public static function get_phpmailer_object() {
		global $usePHPMailer, $_SESSION;
		if (!$usePHPMailer || !defined("GALAXYTOOL_ROOT")) {
			return null;
		}
		chdir(GALAXYTOOL_ROOT.'/secret/phpmailer');
		require "class.phpmailer.php";

		switch ($_SESSION['lang']) {
			case "german"    : $phpmailerlang = "de"; break;
			case "english"   : $phpmailerlang = "en"; break;
			case "spanish"   : $phpmailerlang = "es"; break;
			case "dutch"     : $phpmailerlang = "nl"; break;
			case "balkan"    : $phpmailerlang = "en"; break;
			case "french"    : $phpmailerlang = "fr"; break;
			case "portugues" : $phpmailerlang = "br"; break;
			case "polish"    : $phpmailerlang = "pl"; break;
			case "italian"   : $phpmailerlang = "it"; break;
			case "turkish"   : $phpmailerlang = "tr"; break;
			case "danish"    : $phpmailerlang = "dk"; break;
			case "brazilian" : $phpmailerlang = "br"; break;
			case "russian"   : $phpmailerlang = "ru"; break;
			case "swedish"   : $phpmailerlang = "se"; break;
			case "greek"     : $phpmailerlang = "en"; break;
			case "romanian"  : $phpmailerlang = "ro"; break;
			case "hungarian" : $phpmailerlang = "hu"; break;
			case "czech"     : $phpmailerlang = "cz"; break;
			case "korean"    : $phpmailerlang = "en"; break;
			case "norwegian" : $phpmailerlang = "no"; break;
			case "taiwan"    : $phpmailerlang = "zh_cn"; break;
			case "japan"     : $phpmailerlang = "ja"; break;
			case "chinese"   : $phpmailerlang = "zh_cn"; break;
			case "bulgarian" : $phpmailerlang = "bg"; break;
			case "lithuanian": $phpmailerlang = "en"; break;
			case "latvian"   : $phpmailerlang = "en"; break;
			case "finnish"   : $phpmailerlang = "fi"; break;
			case "slovak"    : $phpmailerlang = "en"; break;
			case "croatian"  : $phpmailerlang = "en"; break;
			case "serbian"   : $phpmailerlang = "en"; break;
			case "slovenian" : $phpmailerlang = "en"; break;
			case "arabic"    : $phpmailerlang = "en"; break;
			default : $phpmailerlang = "en"; break;
		}

		global $phpmailerHost, $phpmailerUser, $phpmailerPass, $phpmailerSMTPSecure, $phpmailerPort, $owner, $email_from, $global_universe;

		$phpmailerU = new PHPMailer() ;						// phpmailer itself for user
		$phpmailerU->SetLanguage($phpmailerlang);
		$phpmailerU->IsSMTP(); 								// send using SMTP
		$phpmailerU->Host     = "$phpmailerHost"; 					// SMTP server to use
		$phpmailerU->SMTPAuth = true; 						// use SMTP Auth
		$phpmailerU->Username = "$phpmailerUser"; 				// SMTP username
		$phpmailerU->Password = "$phpmailerPass";					// SMTP password
		if (is_numeric($phpmailerPort)) $phpmailerU->Port = $phpmailerPort;               // SMTP port to use
		$phpmailerU->SMTPSecure = "$phpmailerSMTPSecure";  // SMTP authentication method
		$phpmailerU->From = "$email_from"; 						// sender EMail
		$phpmailerU->FromName = "Galaxytool $owner Uni $global_universe"; 	// sender name
		$phpmailerU->WordWrap = 80; 							// set word wrap
		$phpmailerU->IsHTML(true); 							// send as HTML

		chdir('../');
		return $phpmailerU;
	}

	public static function set_language($language) {
		switch ($language) {
			case "german"     : $_SESSION['lang']="german"; break;
			case "english"    : $_SESSION['lang']="english"; break;
			case "spanish"    : $_SESSION['lang']="spanish"; break;
			case "dutch"      : $_SESSION['lang']="dutch"; break;
			case "balkan"     : $_SESSION['lang']="balkan"; break;
			case "french"     : $_SESSION['lang']="french"; break;
			case "portugues"  : $_SESSION['lang']="portugues"; break;
			case "polish"     : $_SESSION['lang']="polish"; break;
			case "italian"    : $_SESSION['lang']="italian"; break;
			case "turkish"    : $_SESSION['lang']="turkish"; break;
			case "danish"     : $_SESSION['lang']="danish"; break;
			case "brazilian"  : $_SESSION['lang']="brazilian"; break;
			case "russian"    : $_SESSION['lang']="russian"; break;
			case "swedish"    : $_SESSION['lang']="swedish"; break;
			case "greek"      : $_SESSION['lang']="greek"; break;
			case "romanian"   : $_SESSION['lang']="romanian"; break;
			case "hungarian"  : $_SESSION['lang']="hungarian"; break;
			case "czech"      : $_SESSION['lang']="czech"; break;
			case "korean"     : $_SESSION['lang']="korean"; break;
			case "norwegian"  : $_SESSION['lang']="norwegian"; break;
			case "taiwan"     : $_SESSION['lang']="taiwan"; break;
			case "japan"      : $_SESSION['lang']="japan"; break;
			case "chinese"    : $_SESSION['lang']="chinese"; break;
			case "bulgarian"  : $_SESSION['lang']="bulgarian"; break;
			case "lithuanian" : $_SESSION['lang']="lithuanian"; break;
			case "latvian"    : $_SESSION['lang']="latvian"; break;
			case "finnish"    : $_SESSION['lang']="finnish"; break;
			case "slovak"     : $_SESSION['lang']="slovak"; break;
			case "croatian"   : $_SESSION['lang']="croatian"; break;
			case "serbian"    : $_SESSION['lang']="serbian"; break;
			case "slovenian"  : $_SESSION['lang']="slovenian"; break;
			case "arabic"     : $_SESSION['lang']="arabic"; break;
			default : $_SESSION['lang']="english"; break;
		}
	}

	public static function load_language_file($language) {
		switch ($language) {
			case "german":
				include_once GALAXYTOOL_ROOT."/languages/german.inc.php";
				break;
			case "english":
				include_once GALAXYTOOL_ROOT."/languages/english.inc.php";
				break;
			case "spanish":
				include_once GALAXYTOOL_ROOT."/languages/spanish.inc.php";
				break;
			case "dutch":
				include_once GALAXYTOOL_ROOT."/languages/dutch.inc.php";
				break;
			case "balkan":
				include_once GALAXYTOOL_ROOT."/languages/balkan.inc.php";
				break;
			case "french":
				include_once GALAXYTOOL_ROOT."/languages/french.inc.php";
				break;
			case "portugues":
				include_once GALAXYTOOL_ROOT."/languages/portugues.inc.php";
				break;
			case "polish":
				include_once GALAXYTOOL_ROOT."/languages/polish.inc.php";
				break;
			case "italian":
				include_once GALAXYTOOL_ROOT."/languages/italian.inc.php";
				break;
			case "turkish":
				include_once GALAXYTOOL_ROOT."/languages/turkish.inc.php";
				break;
			case "danish":
				include_once GALAXYTOOL_ROOT."/languages/danish.inc.php";
				break;
			case "brazilian":
				include_once GALAXYTOOL_ROOT."/languages/brazilian.inc.php";
				break;
			case "russian":
				include_once GALAXYTOOL_ROOT."/languages/russian.inc.php";
				break;
			case "swedish":
				include_once GALAXYTOOL_ROOT."/languages/swedish.inc.php";
				break;
			case "greek":
				include_once GALAXYTOOL_ROOT."/languages/greek.inc.php";
				break;
			case "romanian":
				include_once GALAXYTOOL_ROOT."/languages/romanian.inc.php";
				break;
			case "hungarian":
				include_once GALAXYTOOL_ROOT."/languages/hungarian.inc.php";
				break;
			case "czech":
				include_once GALAXYTOOL_ROOT."/languages/czech.inc.php";
				break;
			case "korean":
				include_once GALAXYTOOL_ROOT."/languages/korean.inc.php";
				break;
			case "norwegian":
				include_once GALAXYTOOL_ROOT."/languages/norwegian.inc.php";
				break;
			case "taiwan":
				include_once GALAXYTOOL_ROOT."/languages/taiwan.inc.php";
				break;
			case "japan":
				include_once GALAXYTOOL_ROOT."/languages/japanese.inc.php";
				break;
			case "chinese":
				include_once GALAXYTOOL_ROOT."/languages/chinese.inc.php";
				break;
			case "bulgarian":
				include_once GALAXYTOOL_ROOT."/languages/bulgarian.inc.php";
				break;
			case "lithuanian":
				include_once GALAXYTOOL_ROOT."/languages/lithuanian.inc.php";
				break;
			case "latvian":
				include_once GALAXYTOOL_ROOT."/languages/latvian.inc.php";
				break;
			case "finnish":
				include_once GALAXYTOOL_ROOT."/languages/finnish.inc.php";
				break;
			case "slovak":
				include_once GALAXYTOOL_ROOT."/languages/slovak.inc.php";
				break;
			case "croatian":
				include_once GALAXYTOOL_ROOT."/languages/croatian.inc.php";
				break;
			case "serbian":
				include_once GALAXYTOOL_ROOT."/languages/serbian.inc.php";
				break;
			case "slovenian":
				include_once GALAXYTOOL_ROOT."/languages/slovenian.inc.php";
				break;
			case "arabic":
				include_once GALAXYTOOL_ROOT."/languages/arabic.inc.php";
				break;
			default:
				include_once GALAXYTOOL_ROOT."/languages/english.inc.php";
		}
	}


	public static function get_locale($language) {
		switch ($language) {
			case "german":
				return "de";
			case "english":
				return "en";
			case "spanish":
				return "es";
			case "dutch":
				return "nl";
			case "balkan":
				return "hr-BA";
			case "french":
				return "fr";
			case "portugues":
				return "pt-pt";
			case "polish":
				return "pl";
			case "italian":
				return "it";
			case "turkish":
				return "tr";
			case "danish":
				return "da";
			case "brazilian":
				return "pt-br";
			case "russian":
				return "ru";
			case "swedish":
				return "sv";
			case "greek":
				return "el";
			case "romanian":
				return "ro";
			case "hungarian":
				return "hu";
			case "czech":
				return "cs";
			case "korean":
				return "ko";
			case "norwegian":
				return "nb-NO";
			case "taiwan":
				return "zh-tw";
			case "japan":
				return "ja";
			case "chinese":
				return "zh";
			case "bulgarian":
				return "bg";
			case "lithuanian":
				return "lt";
			case "latvian":
				return "lv";
			case "finnish":
				return "fi";
			case "slovak":
				return "sk";
			case "croatian":
				return "hr";
			case "serbian":
				return "sr";
			case "slovenian":
				return "sl";
			case "arabic":
				return "ar";
			default:
				return "en";
		}
	}

	public static function HTML_redirect($redirect_url, $stylepath="styles.css") {
		$url = urldecode($redirect_url);
		$forward_text = (defined("INDEX_PAGEFORWARD")) ? INDEX_PAGEFORWARD : $url;

		echo '<HTML>
			<HEAD>
				<TITLE>REDIRECT</TITLE>
				<meta http-equiv="content-type" content="text/html; charset=UTF-8">
				<meta http-equiv="refresh" content="0; URL='.$url.'">
				<link rel=stylesheet type="text/css" href="'.$stylepath.'">
			</HEAD>
			<BODY>
				<table cellpadding="0" cellspacing="0" border="0" style="width:250px; margin: auto; height: 100%">
				<tr><td valign="middle">
				<a class="menulink" href="'.$url.'">'.$forward_text.'</a>
				</td>
				</tr>
				</table>
			</BODY>
		  </HTML>';
		exit();
	}

	public static function send_email($email_to, $email_from, $subject, $message) {
		global $usePHPMailer;
		if ($usePHPMailer) {
			$phpmailerU = Galaxytool::get_phpmailer_object();
			$phpmailerU->AddAddress($email_to);
			$phpmailerU->Subject = $subject ;
			$phpmailerU->Body = $message ;
			ob_start();
			$result = @$phpmailerU->Send();
			ob_clean();
		} else {
			$headers = "From: ".$email_from."\r\n" .
					'X-Mailer: PHP/' . phpversion() . "\r\n" .
					"MIME-Version: 1.0\r\n" .
					"Content-Type: text/html; charset=utf-8\r\n" .
					"Content-Transfer-Encoding: 8bit\r\n";
			// Send
			$result = @mail($email_to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);
		}
		return $result;
	}


	public static function update_dragosim_link($link,$key,$value,$defend=true,$fleet_no=0,$no_techs=false) {
		// http://drago-sim.com/index.php?lang=german&numunits[0][0][k_t]=10&numunits[0][1][k_t]=20&num[0]=2 -> two attacker fleets num[0] = number of attacker

		$defend = ($defend === true) ? 1 : 0;
		$fleet_no = intval($fleet_no);

		if (empty($link)) {
			global $def_to_debris, $debris_rate, $speed_rate;

			$link = "http://drago-sim.com/?referrer=galaxytool&amp;";

			// debris ratio needs to be between 0 and 1 at dragosim
			$link .= "debris_ratio=".($debris_rate / 100)."&amp;";

			if ($def_to_debris === true) {
				$link .= "def_tf=0&amp;"; // dragosim wants 0 to set the checkbox as of now
			}

			switch ($_SESSION['lang']) {
				case "german" :
					$link .= "lang=german&amp;";
					break;
				case "polish" :
					$link .= "lang=polish&amp;";
					break;
				case "english" :
					$link .= "lang=english&amp;";
					break;
				case "spanish" :
					$link .= "lang=spanish&amp;";
					break;
				case "dutch" :
					$link .= "lang=dutch&amp;";
					break;
				case "balkan" :
					$link .= "lang=bosnian&amp;";
					break;
				case "french" :
					$link .= "lang=french&amp;";
					break;
				case "portugues" :
					$link .= "lang=portuguese&amp;";
					break;
				case "italian" :
					$link .= "lang=italian&amp;";
					break;
				case "turkish" :
					$link .= "lang=turkish&amp;";
					break;
				case "danish" :
					$link .= "lang=danish&amp;";
					break;
				case "brazilian" :
					$link .= "lang=brazilian&amp;";
					break;
				case "russian" :
					$link .= "lang=russian&amp;";
					break;
				case "swedish" :
					$link .= "lang=swedish&amp;";
					break;
				case "greek" :
					$link .= "lang=greek&amp;";
					break;
				case "romanian" :
					$link .= "lang=romanian&amp;";
					break;
				case "hungarian" :
					$link .= "lang=hungarian&amp;";
					break;
				case "czech" :
					$link .= "lang=czech&amp;";
					break;
				case "korean" :
					$link .= "lang=korean&amp;";
					break;
				case "norwegian" :
					// nothing yet
					break;
				case "taiwan" :
					$link .= "lang=taiwanese&amp;";
					break;
				case "japan" :
					// nothing yet
					break;
				case "chinese" :
					// nothing yet
					break;
				case "bulgarian" :
					$link .= "lang=bulgarian&amp;";
					break;
				case "lithuanian" :
					// nothing yet
					break;
				case "latvian" :
					// not available yet
					break;
				case "finnish" :
					// not available yet
					break;
				case "slovak" :
					$link .= "lang=slovak&amp;";
					break;
				case "croatian" :
					$link .= "lang=bosnian&amp;";
					break;
				case "serbian" :
					// not available yet
					break;
				case "slovenian" :
					// not available yet
					break;
				case "arabic" :
					// not available yet
					break;
				default:
					$link .= "lang=english&amp;";
					break;
			}

			if ($no_techs === false) {
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_weapon) > 0) {
					$link .= "techs[0][0][w_t]=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_weapon)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_shield) > 0) {
					$link .= "techs[0][0][s_t]=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_shield)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_rpz) > 0) {
					$link .= "techs[0][0][r_p]=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_rpz)."&amp;";
				}
			}
		}

		if ($value > 0 || $key == "coordinates" || $key == "enemy_name") {
			switch ($key) {
				case "coordinates": $link .= "v_coords=$value&amp;"; break;
				case "enemy_name":  $link .= "v_planet=$value&amp;"; break;

				case "metal":      $link .= "v_met=$value&amp;"; break;
				case "crystal":    $link .= "v_kris=$value&amp;"; break;
				case "deuterium":  $link .= "v_deut=$value&amp;"; break;

				case "kt":         $link .= "numunits[$defend][$fleet_no][k_t]=$value&amp;"; break;
				case "gt":         $link .= "numunits[$defend][$fleet_no][g_t]=$value&amp;"; break;
				case "lj":         $link .= "numunits[$defend][$fleet_no][l_j]=$value&amp;"; break;
				case "sj":         $link .= "numunits[$defend][$fleet_no][s_j]=$value&amp;"; break;
				case "krz":        $link .= "numunits[$defend][$fleet_no][kr]=$value&amp;"; break;
				case "ss":         $link .= "numunits[$defend][$fleet_no][sc]=$value&amp;"; break;
				case "kolo":       $link .= "numunits[$defend][$fleet_no][ko]=$value&amp;"; break;
				case "rec":        $link .= "numunits[$defend][$fleet_no][re]=$value&amp;"; break;
				case "spio":       $link .= "numunits[$defend][$fleet_no][sp]=$value&amp;"; break;
				case "bomb":       $link .= "numunits[$defend][$fleet_no][bo]=$value&amp;"; break;
				case "sat":        $link .= "numunits[$defend][$fleet_no][so]=$value&amp;"; break;
				case "zerri":      $link .= "numunits[$defend][$fleet_no][z]=$value&amp;"; break;
				case "ds": 		   $link .= "numunits[$defend][$fleet_no][t]=$value&amp;"; break;
				case "skrz": 	   $link .= "numunits[$defend][$fleet_no][sk]=$value&amp;"; break;

				case "rak": 	   $link .= "numunits[$defend][$fleet_no][ra]=$value&amp;"; break;
				case "ll": 		   $link .= "numunits[$defend][$fleet_no][l_l]=$value&amp;"; break;
				case "sl": 		   $link .= "numunits[$defend][$fleet_no][s_l]=$value&amp;"; break;
				case "gauss": 	   $link .= "numunits[$defend][$fleet_no][g]=$value&amp;"; break;
				case "ion": 	   $link .= "numunits[$defend][$fleet_no][i]=$value&amp;"; break;
				case "plasma": 	   $link .= "numunits[$defend][$fleet_no][p]=$value&amp;"; break;
				case "ksk": 	   $link .= "numunits[$defend][$fleet_no][k_s]=$value&amp;"; break;
				case "gsk": 	   $link .= "numunits[$defend][$fleet_no][g_s]=$value&amp;"; break;

				case "waffentech": $link .= "techs[1][0][w_t]=$value&amp;"; break;
				case "schildtech": $link .= "techs[1][0][s_t]=$value&amp;"; break;
				case "rpz": 	   $link .= "techs[1][0][r_p]=$value&amp;"; break;

				case "arak":       $link .= "missiles_available_v=$value&amp;"; break;
				case "irak":       $link .= "missiles_available_a=$value&amp;"; break;

				default: throw new InvalidArgumentException();
			}

		}

		return $link;
	}

	public static function update_osimulate_link($link,$key,$value,$defending=true,$fleet_no=0,$no_techs=false) {
		if (empty($link)) {
			global $def_to_debris, $debris_rate, $speed_rate;
			$link = "http://www.osimulate.com/?";

			// def to debris
			if ($def_to_debris === true) {
				$link .= "defense_debris=30&amp;";
			} else {
				$link .= "defense_debris=0&amp;";
			}

			// debris ratio
			$link .= "perc-df=$debris_rate&amp;";

			// speed factor
			$link .= "uni_speed=$speed_rate&amp;";

			// TODO: allow also plunder rate to be defined from method consumer; but not really needed for osimulate at fleet movements but more at reports
			// which are not used here
			$link .= "plunder_perc=50&amp;";
		}
		$defend = ($defending === true) ? "d" : "a";
		
		//?ship_d0_3_b=4&tech_a0_0=10&tech_d0_1=12&engine_0=10&ship_d0_18_b=1&engine0_0=10&enemy_metal=10.000
		if ($value > 0 || $key == "coordinates" || $key == "enemy_name") {
			switch ($key) {
				case "coordinates": $link .= "enemy_pos=$value&amp;"; break;
				case "enemy_name":  $link .= "enemy_name=$value&amp;"; break;

				case "metal":      $link .= "enemy_metal=$value&amp;"; break;
				case "crystal":    $link .= "enemy_crystal=$value&amp;"; break;
				case "deuterium":  $link .= "enemy_deut=$value&amp;"; break;

				case "kt":         $link .= "ship_".$defend . $fleet_no."_0_b=$value&amp;"; break;
				case "gt":         $link .= "ship_".$defend . $fleet_no."_1_b=$value&amp;"; break;
				case "lj":         $link .= "ship_".$defend . $fleet_no."_2_b=$value&amp;"; break;
				case "sj":         $link .= "ship_".$defend . $fleet_no."_3_b=$value&amp;"; break;
				case "krz":        $link .= "ship_".$defend . $fleet_no."_4_b=$value&amp;"; break;
				case "ss":         $link .= "ship_".$defend . $fleet_no."_5_b=$value&amp;"; break;
				case "kolo":       $link .= "ship_".$defend . $fleet_no."_6_b=$value&amp;"; break;
				case "rec":        $link .= "ship_".$defend . $fleet_no."_7_b=$value&amp;"; break;
				case "spio":       $link .= "ship_".$defend . $fleet_no."_8_b=$value&amp;"; break;
				case "bomb":       $link .= "ship_".$defend . $fleet_no."_9_b=$value&amp;"; break;
				case "sat":        $link .= "ship_".$defend . $fleet_no."_10_b=$value&amp;"; break;
				case "zerri":      $link .= "ship_".$defend . $fleet_no."_11_b=$value&amp;"; break;
				case "ds": 		   $link .= "ship_".$defend . $fleet_no."_12_b=$value&amp;"; break;
				case "skrz": 	   $link .= "ship_".$defend . $fleet_no."_13_b=$value&amp;"; break;

				case "rak": 	   $link .= "ship_".$defend . $fleet_no."_14_b=$value&amp;"; break;
				case "ll": 		   $link .= "ship_".$defend . $fleet_no."_15_b=$value&amp;"; break;
				case "sl": 		   $link .= "ship_".$defend . $fleet_no."_16_b=$value&amp;"; break;
				case "gauss": 	   $link .= "ship_".$defend . $fleet_no."_17_b=$value&amp;"; break;
				case "ion": 	   $link .= "ship_".$defend . $fleet_no."_18_b=$value&amp;"; break;
				case "plasma": 	   $link .= "ship_".$defend . $fleet_no."_19_b=$value&amp;"; break;
				case "ksk": 	   $link .= "ship_".$defend . $fleet_no."_20_b=$value&amp;"; break;
				case "gsk": 	   $link .= "ship_".$defend . $fleet_no."_21_b=$value&amp;"; break;

				case "waffentech": $link .= "tech_".$defend . $fleet_no."_0=$value&amp;"; break;
				case "schildtech": $link .= "tech_".$defend . $fleet_no."_1=$value&amp;"; break;
				case "rpz": 	   $link .= "tech_".$defend . $fleet_no."_2=$value&amp;"; break;

				case "arak":       $link .= "abm_b=$value&amp;"; break;
				case "irak":       $link .= "ipm_b=$value&amp;"; break;

				default: throw new InvalidArgumentException();
			}

			if ($no_techs === false) {
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_vbt) > 0 && !strpos($link,"engine0_0=")) {
					$link .= "engine0_0=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_vbt)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_impulse) > 0 && !strpos($link,"engine0_1=")) {
					$link .= "engine0_1=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_impulse)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_hra) > 0 && !strpos($link,"engine0_2=")) {
					$link .= "engine0_2=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_hra)."&amp;";
				}

				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_weapon) > 0 && !strpos($link,"tech_a0_0=")) {
					$link .= "tech_a0_0=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_weapon)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_shield) > 0 && !strpos($link,"tech_a0_1=")) {
					$link .= "tech_a0_1=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_shield)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_rpz) > 0 && !strpos($link,"tech_a0_2=")) {
					$link .= "tech_a0_2=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_rpz)."&amp;";
				}
			}

			if (!strpos($link,"lang=")) {
				switch ($_SESSION['lang']) {
					case "german" :
						$link .= "lang=de&amp;";
						break;
					case "polish" :
						$link .= "lang=pl&amp;";
						break;
					case "english" :
						$link .= "lang=gb&amp;";
						break;
					case "spanish" :
						$link .= "lang=sp&amp;";
						break;
					case "dutch" :
						$link .= "lang=nl&amp;";
						break;
					case "balkan" :
						$link .= "lang=ba&amp;";
						break;
					case "french" :
						$link .= "lang=fr&amp;";
						break;
					case "portugues" :
						$link .= "lang=pt&amp;";
						break;
					case "italian" :
						$link .= "lang=it&amp;";
						break;
					case "turkish" :
						$link .= "lang=tr&amp;";
						break;
					case "danish" :
						$link .= "lang=dk&amp;";
						break;
					case "brazilian" :
						$link .= "lang=br&amp;";
						break;
					case "russian" :
						$link .= "lang=ru&amp;";
						break;
					case "swedish" :
						$link .= "lang=sv&amp;";
						break;
					case "greek" :
						$link .= "lang=gr&amp;";
						break;
					case "romanian" :
						$link .= "lang=ro&amp;";
						break;
					case "hungarian" :
						$link .= "lang=hu&amp;";
						break;
					case "czech" :
						$link .= "lang=cz&amp;";
						break;
					case "korean" :
						$link .= "lang=kr&amp;";
						break;
					case "norwegian" :
						$link .= "lang=no&amp;";
						break;
					case "taiwan" :
						$link .= "lang=tw&amp;";
						break;
					case "japan" :
						$link .= "lang=ja&amp;";
						break;
					case "chinese" :
						$link .= "lang=cn&amp;";
						break;
					case "bulgarian" :
						$link .= "lang=bg&amp;";
						break;
					case "lithuanian" :
						$link .= "lang=lt&amp;";
						break;
					case "latvian" :
						$link .= "lang=lv&amp;";
						break;
					case "finnish" :
						$link .= "lang=fi&amp;";
						break;
					case "slovak" :
						$link .= "lang=sk&amp;";
						break;
					case "croatian" :
						$link .= "lang=ba&amp;";  //seems to be equal to balkan
						break;
					case "serbian" :
						// nothing yet
						break;
					case "slovenian" :
						$link .= "lang=si&amp;";
						break;
					case "arabic" :
						// nothing yet
						break;
					default:
						$link .= "lang=en&amp;";
						break;
				}

			}

		}
		
		return $link;
	}

	public static function update_speedsim_link($link,$key,$value,$no_techs=false) {
		if (empty($link)) {
			global $def_to_debris, $debris_rate, $speed_rate;
			$link = "http://websim.speedsim.net/?";

			// def to debris
			if ($def_to_debris === true) {
				$link .= "def_to_df=1&amp;";
			} else {
				$link .= "def_to_df=0&amp;";
			}

			// debris ratio
			$link .= "perc-df=$debris_rate&amp;";


		}
		//?ship_d0_3_b=4&tech_a0_0=10&tech_d0_1=12&engine_0=10&ship_d0_18_b=1&engine0_0=10&enemy_metal=10.000
		if ($value > 0 || $key == "coordinates" || $key == "enemy_name") {
			switch ($key) {
				case "coordinates": $link .= "enemy_pos=$value&amp;"; break;
				case "enemy_name":  $link .= "enemy_name=$value&amp;"; break;

				case "metal":      $link .= "enemy_metal=$value&amp;"; break;
				case "crystal":    $link .= "enemy_crystal=$value&amp;"; break;
				case "deuterium":  $link .= "enemy_deut=$value&amp;"; break;

				case "kt":         $link .= "ship_d0_0_b=$value&amp;"; break;
				case "gt":         $link .= "ship_d0_1_b=$value&amp;"; break;
				case "lj":         $link .= "ship_d0_2_b=$value&amp;"; break;
				case "sj":         $link .= "ship_d0_3_b=$value&amp;"; break;
				case "krz":        $link .= "ship_d0_4_b=$value&amp;"; break;
				case "ss":         $link .= "ship_d0_5_b=$value&amp;"; break;
				case "kolo":       $link .= "ship_d0_6_b=$value&amp;"; break;
				case "rec":        $link .= "ship_d0_7_b=$value&amp;"; break;
				case "spio":       $link .= "ship_d0_8_b=$value&amp;"; break;
				case "bomb":       $link .= "ship_d0_9_b=$value&amp;"; break;
				case "sat":        $link .= "ship_d0_10_b=$value&amp;"; break;
				case "zerri":      $link .= "ship_d0_11_b=$value&amp;"; break;
				case "ds": 		   $link .= "ship_d0_12_b=$value&amp;"; break;
				case "skrz": 	   $link .= "ship_d0_13_b=$value&amp;"; break;

				case "rak": 	   $link .= "ship_d0_14_b=$value&amp;"; break;
				case "ll": 		   $link .= "ship_d0_15_b=$value&amp;"; break;
				case "sl": 		   $link .= "ship_d0_16_b=$value&amp;"; break;
				case "gauss": 	   $link .= "ship_d0_17_b=$value&amp;"; break;
				case "ion": 	   $link .= "ship_d0_18_b=$value&amp;"; break;
				case "plasma": 	   $link .= "ship_d0_19_b=$value&amp;"; break;
				case "ksk": 	   $link .= "ship_d0_20_b=$value&amp;"; break;
				case "gsk": 	   $link .= "ship_d0_21_b=$value&amp;"; break;

				case "waffentech": $link .= "tech_d0_0=$value&amp;"; break;
				case "schildtech": $link .= "tech_d0_1=$value&amp;"; break;
				case "rpz": 	   $link .= "tech_d0_2=$value&amp;"; break;

				case "arak":       $link .= "abm_b=$value&amp;"; break;
				case "irak":       $link .= "ipm_b=$value&amp;"; break;

				default: throw new InvalidArgumentException();
			}

			if ($no_techs === false) {
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_vbt) > 0 && !strpos($link,"engine0_0=")) {
					$link .= "engine0_0=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_vbt)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_impulse) > 0 && !strpos($link,"engine0_1=")) {
					$link .= "engine0_1=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_impulse)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_hra) > 0 && !strpos($link,"engine0_2=")) {
					$link .= "engine0_2=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_hra)."&amp;";
				}

				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_weapon) > 0 && !strpos($link,"tech_a0_0=")) {
					$link .= "tech_a0_0=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_weapon)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_shield) > 0 && !strpos($link,"tech_a0_1=")) {
					$link .= "tech_a0_1=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_shield)."&amp;";
				}
				if ($_SESSION['s_auth']->get_setting(iAuthorization::tech_rpz) > 0 && !strpos($link,"tech_a0_2=")) {
					$link .= "tech_a0_2=".$_SESSION['s_auth']->get_setting(iAuthorization::tech_rpz)."&amp;";
				}
			}

			if (!strpos($link,"lang=")) {
				switch ($_SESSION['lang']) {
					case "german" :
						$link .= "lang=de&amp;";
						break;
					case "polish" :
						$link .= "lang=pl&amp;";
						break;
					case "english" :
						$link .= "lang=en&amp;";
						break;
					case "spanish" :
						$link .= "lang=sp&amp;";
						break;
					case "dutch" :
						$link .= "lang=nl&amp;";
						break;
					case "balkan" :
						$link .= "lang=ba&amp;";
						break;
					case "french" :
						$link .= "lang=fr&amp;";
						break;
					case "portugues" :
						$link .= "lang=pt&amp;";
						break;
					case "italian" :
						$link .= "lang=it&amp;";
						break;
					case "turkish" :
						// nothing yet
						break;
					case "danish" :
						$link .= "lang=dk&amp;";
						break;
					case "brazilian" :
						$link .= "lang=pt&amp;"; // no brazil yet, but pt is better than german
						break;
					case "russian" :
						$link .= "lang=ru&amp;";
						break;
					case "swedish" :
						$link .= "lang=sv&amp;";
						break;
					case "greek" :
						$link .= "lang=gr&amp;";
						break;
					case "romanian" :
						$link .= "lang=ro&amp;";
						break;
					case "hungarian" :
						$link .= "lang=hu&amp;";
						break;
					case "czech" :
						$link .= "lang=cz&amp;";
						break;
					case "korean" :
						$link .= "lang=kr&amp;";
						break;
					case "norwegian" :
						$link .= "lang=no&amp;";
						break;
					case "taiwan" :
						$link .= "lang=tw&amp;";
						break;
					case "japan" :
						$link .= "lang=ja&amp;";
						break;
					case "chinese" :
						$link .= "lang=cn&amp;";
						break;
					case "bulgarian" :
						$link .= "lang=bg&amp;";
						break;
					case "lithuanian" :
						$link .= "lang=lt&amp;";
						break;
					case "latvian" :
						$link .= "lang=lv&amp;";
						break;
					case "finnish" :
						$link .= "lang=fi&amp;";
						break;
					case "slovak" :
						$link .= "lang=sk&amp;";
						break;
					case "croatian" :
						$link .= "lang=ba&amp;";  //seems to be equal to balkan
						break;
					case "serbian" :
						// nothing yet
						break;
					case "slovenian" :
						$link .= "lang=si&amp;";
						break;
					case "arabic" :
						// nothing yet
						break;
					default:
						$link .= "lang=en&amp;";
						break;
				}

			}

		}
		return $link;
	}

	public static function get_phalanx_range($moon_array) {
		ksort($moon_array); // sort array by galaxy key
		$phalanx_string = array();

		foreach ($moon_array as $galaxy => $values) {
			usort($values,array('self', "compare_moon_array"));
			$phalanx_string[$galaxy] = "";
			$biggest_max_system = 0;
				
			$valueCount = count($values);
			for ($i=0;$i<$valueCount;$i++) {
				if ($biggest_max_system == 0) {
					$phalanx_string[$galaxy] .= $galaxy.":".$values[$i]['min']." - ";
				} else {
					if ($biggest_max_system < ($values[$i]['min']-1)) { // -1 to have 1:211 - 1:343 + 1:344 - 1:452 like 1:211 - 1:452
						$phalanx_string[$galaxy] .= $galaxy.":$biggest_max_system + $galaxy:".$values[$i]['min']." - ";
					}
				}
				if ($biggest_max_system < $values[$i]['max']) {
					$biggest_max_system = $values[$i]['max'];
				}

				if ($i == $valueCount - 1) { // last entry
					$phalanx_string[$galaxy] .= $galaxy.":".$biggest_max_system;
				}
			}
		}

		return $phalanx_string;
	}

	private static function compare_moon_array($a, $b) {
		if ($a["min"] == $b["min"]) {
			return 0;
		}
		return ($a["min"] < $b["min"]) ? -1 : 1;
	}

	/**
	 * Cleans user input in order to prevent for example XSS attacks
	 * @param $string string clean that has to be cleaned
	 * @return string cleaned string
	 */
	public static function cleanString($string) {
		// the third parameter is necessary for PHP <= 5.3
		return htmlentities($string,null,"UTF-8");
	}
}
