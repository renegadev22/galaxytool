<?php


class XMLParserGlobal extends DBHandler {

	const content_type_allypage         = "allypage";
	const content_type_stats            = "stats";
	const content_type_galaxyview       = "galaxyview";
	const content_type_planetinfo       = "planetinfo";
	const content_type_reports          = "reports";
	const content_type_ally_stats       = "ally_stats";
	const content_type_player_stats     = "player_stats";
	const content_type_ally_highscore   = "ally_highscore";
	const content_type_player_highscore = "player_highscore";
	const content_type_fleet_movement   = "fleet_movement";
	const content_type_espionage        = "espionage";
	const content_type_combat_report    = "combat_report";
	const content_type_message          = "message";

	protected $xml_schema         = "";
	protected $playertable        = "";
	protected $allytable          = "";
	protected $utablename         = "";
	protected $error_object       = null;
	protected $own_ogame_playerid = 0;
	protected $universe           = "";
	protected $debug              = false;
	protected $userid             = 0;
	protected $content_type       = "";


	function __construct($allytable,$playertable,$utablename,$universe) {
		parent::__construct();
		
		if (trim($allytable) == "") return false;
		if (trim($playertable) == "") return false;
		if (trim($universe) == "") return false;

		$this->allytable   = $allytable;
		$this->playertable = $playertable;
		$this->utablename  = $utablename;
		$this->universe    = $universe;

		return $this;
	}

	/**
	 * Return a copy of the error object of that class.
	 *
	 * @return ErrorObject
	 */
	public function get_error_object() {
		return $this->error_object;
	}



	/**
	 * This method validates the XML against the XSD. If successful, it will extract the information from the XML header tag,
	 * perform the universe check, check the content type, user permissions and returns the DomDocument for the XML.
	 *
	 * @param String $xml_content XML content to be validated
	 * @param String $exp_content_type Expected XML content type - must be one of the content_type_* class constants defined in parser_global.inc.php
	 * @return DomDocument
	 */
	protected function validate_header($xml_content, $exp_content_type) {
		global $_SERVER;

		if (trim($xml_content) == "") {
			return false;
		}
		if ($exp_content_type != XMLParserGlobal::content_type_allypage &&
		$exp_content_type != XMLParserGlobal::content_type_stats &&
		$exp_content_type != XMLParserGlobal::content_type_galaxyview &&
		$exp_content_type != XMLParserGlobal::content_type_planetinfo &&
		$exp_content_type != XMLParserGlobal::content_type_reports &&
		$exp_content_type != XMLParserGlobal::content_type_fleet_movement &&
		$exp_content_type != XMLParserGlobal::content_type_espionage  &&
		$exp_content_type != XMLParserGlobal::content_type_combat_report  &&
		$exp_content_type != XMLParserGlobal::content_type_message ) {
			return false;
		}

		libxml_use_internal_errors(true); // use own error handling
		$this->exp_content_type = $exp_content_type;

		$xdoc = new DomDocument;
		@$xdoc->loadXML($xml_content);
		if ($xdoc === false) {
			// not XML
			return false;
		}
		if (@$xdoc->schemaValidate($this->xml_schema) === false) {
			// XML file is invalid
			$this->error_object = new ErrorObject(ErrorObject::severity_info ,"703");

			$errors = libxml_get_errors();
			foreach ($errors as $error) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error, ErrorObject::display_xml_error($error, $xml_content)));
			}
			libxml_clear_errors();

			return false;
		}

		// get header attributes
		$header_items = $xdoc->getElementsByTagName("header"); // there is exactly one
		$language     = $header_items->item(0)->getAttribute("language");
		$version      = $header_items->item(0)->getAttribute("version");
		$universe     = $header_items->item(0)->getAttribute("universe");
		$debug        = $header_items->item(0)->getAttribute("debug");
		$username     = ($header_items->item(0)->hasAttribute("username")) ? $header_items->item(0)->getAttribute("username") : "";
		$password     = ($header_items->item(0)->hasAttribute("password")) ? $header_items->item(0)->getAttribute("password") : "";
		$token        = ($header_items->item(0)->hasAttribute("token")) ? $header_items->item(0)->getAttribute("token") : "";
		$content_type = $header_items->item(0)->getAttribute("content_type");
		unset($header_items);

		// load language file
		switch ($language) {
			case "german"     : require_once GALAXYTOOL_ROOT."/languages/german.inc.php"; break;
			case "english"    : require_once GALAXYTOOL_ROOT."/languages/english.inc.php"; break;
			case "spanish"    : require_once GALAXYTOOL_ROOT."/languages/spanish.inc.php"; break;
			case "dutch"      : require_once GALAXYTOOL_ROOT."/languages/dutch.inc.php"; break;
			case "balkan"     : require_once GALAXYTOOL_ROOT."/languages/balkan.inc.php"; break;
			case "french"     : require_once GALAXYTOOL_ROOT."/languages/french.inc.php"; break;
			case "portugues"  : require_once GALAXYTOOL_ROOT."/languages/portugues.inc.php"; break;
			case "polish"     : require_once GALAXYTOOL_ROOT."/languages/polish.inc.php"; break;
			case "italian"    : require_once GALAXYTOOL_ROOT."/languages/italian.inc.php"; break;
			case "turkish"    : require_once GALAXYTOOL_ROOT."/languages/turkish.inc.php"; break;
			case "danish"     : require_once GALAXYTOOL_ROOT."/languages/danish.inc.php"; break;
			case "brazilian"  : require_once GALAXYTOOL_ROOT."/languages/brazilian.inc.php"; break;
			case "russian"    : require_once GALAXYTOOL_ROOT."/languages/russian.inc.php"; break;
			case "swedish"    : require_once GALAXYTOOL_ROOT."/languages/swedish.inc.php"; break;
			case "greek"      : require_once GALAXYTOOL_ROOT."/languages/greek.inc.php"; break;
			case "romanian"   : require_once GALAXYTOOL_ROOT."/languages/romanian.inc.php"; break;
			case "hungarian"  : require_once GALAXYTOOL_ROOT."/languages/hungarian.inc.php"; break;
			case "czech"      : require_once GALAXYTOOL_ROOT."/languages/czech.inc.php"; break;
			case "korean"     : require_once GALAXYTOOL_ROOT."/languages/korean.inc.php"; break;
			case "norwegian"  : require_once GALAXYTOOL_ROOT."/languages/norwegian.inc.php"; break;
			case "taiwan"     : require_once GALAXYTOOL_ROOT."/languages/taiwan.inc.php"; break;
			case "japan"      : require_once GALAXYTOOL_ROOT."/languages/japanese.inc.php"; break;
			case "chinese"    : require_once GALAXYTOOL_ROOT."/languages/chinese.inc.php"; break;
			case "bulgarian"  : require_once GALAXYTOOL_ROOT."/languages/bulgarian.inc.php"; break;
			case "lithuanian" : require_once GALAXYTOOL_ROOT."/languages/lithuanian.inc.php"; break;
			case "latvian"    : require_once GALAXYTOOL_ROOT."/languages/latvian.inc.php"; break;
			case "finnish"    : require_once GALAXYTOOL_ROOT."/languages/finnish.inc.php"; break;
			case "slovak"     : require_once GALAXYTOOL_ROOT."/languages/slovak.inc.php"; break;
			case "croatian"   : require_once GALAXYTOOL_ROOT."/languages/croatian.inc.php"; break;
			case "serbian"    : require_once GALAXYTOOL_ROOT."/languages/serbian.inc.php"; break;
			case "slovenian"  : require_once GALAXYTOOL_ROOT."/languages/slovenian.inc.php"; break;
			default : require_once GALAXYTOOL_ROOT."/languages/english.inc.php"; break;
		}

		// check version - current minimum required version: 2.6.10
		if (!defined("PLUGIN_VERSION")) return false;
		if (version_compare($version, PLUGIN_VERSION, '>=')) {
			$version_outdated = false;
		} else {
			$version_outdated = true;
		}

		if ($version_outdated) {
			$this->error_object = new ErrorObject(ErrorObject::severity_info ,"702");
			return false;
		}


		// check universe
		if ($universe != $this->universe && (!isset($_SERVER['HTTP_HOST']) || strpos($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'],"galaxytool-hosting.eu/galatool_beta") === false)) {
			$this->error_object = new ErrorObject(ErrorObject::severity_info ,"701");
			$message = str_replace("&1",$universe,PARSER_WRONG_UNIVERSE);
			$message = str_replace("&2",$this->universe,$message);
			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error ,$message));
			return false;
		}

		// check content type
		if ($content_type != $exp_content_type) {
			if (($content_type == XMLParserGlobal::content_type_ally_stats ||
			     $content_type == XMLParserGlobal::content_type_player_stats ||
			     $content_type == XMLParserGlobal::content_type_ally_highscore ||
			     $content_type == XMLParserGlobal::content_type_player_highscore ) &&
			     $exp_content_type == XMLParserGlobal::content_type_stats) {

				$this->content_type = $content_type;
			} elseif ($content_type == XMLParserGlobal::content_type_planetinfo && $exp_content_type == XMLParserGlobal::content_type_reports ) {
				$this->content_type = $content_type;
			} else {
				$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($exp_content_type));
				return false;
			}
		} else {
			$this->content_type = $content_type;
		}

		// set debug options
		if ($debug == "true") {
			$this->debug = true;
		} else {
			$this->debug = false;
		}

		// check permissions
		if ($token != "") {
			$query = "SELECT id, caninsert, ogame_playerid, last_submit FROM $this->utablename WHERE plugin_token=:token AND status='active'";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindValue(":token", urldecode($token));
		} else {
			// missing logon information
			$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($exp_content_type));
			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error ,"No logon information provided"));
			return false;
		}
		$res = $this->execute($stmt);
		if ($res !== false && $stmt->rowCount() > 0) {

			$line                     = $stmt->fetch(PDO::FETCH_OBJ);
			$this->userid             = $line->id;
			$allow_insert             = $line->caninsert;
			$this->own_ogame_playerid = $line->ogame_playerid;
			$last_submit              = $line->last_submit;

			if ($allow_insert != "true") {
				// missing permissions
				$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($exp_content_type));
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error ,"No permission"));
				return false;
			}

			if ($last_submit <> date('Y-m-d')) {
				$query = "UPDATE $this->utablename SET last_submit=CURDATE() WHERE id=:user_id";
				$stmt = DB::getDB()->prepare($query);
				$stmt->bindParam(":user_id", $this->userid);
				$this->execute($stmt);
			}
			/* Testing to prevent something get ugly wrong
			else {
						$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($exp_content_type));
						$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error ,'Was active today'));
			}*/

		} else {
			// wrong username / password or token
			$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($exp_content_type));
			if ($token != "") {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error ,L_TOKENFAILURE));
			} else {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error ,L_LOGINFAILURE));
			}
			return false;
		}

		return $xdoc;
	}

	/**
	 * This method modifies the error_object of the class to provide success or error codes for firefox extension
	 * together with detail information about the messages that occurred.
	 * This method will change the success code to failed if and error or warning message occurred!
	 *
	 * @param Boolean $result
	 */
	protected function check_result($result) {
		if ($result === true) {
			// no errors occured


			if ($this->error_object == null) {
				$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_success_code($this->exp_content_type));
				return;
			}

			// but messages occured
			$old_error_object = $this->error_object;
			if ($old_error_object->get_worst_severity() == ErrorObject::severity_info ) {
				// Info
				$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_success_code($this->exp_content_type));
				$this->error_object->add_child_message($old_error_object);
			} else {
				// Warning and Errors
				$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($this->exp_content_type));
				$this->error_object->add_child_message($old_error_object);
			}

		} else {
			// messages occured
			if ($this->error_object == null) {
				$old_error_object = new ErrorObject(ErrorObject::severity_error , "Unexpected error occurred");
			} else {
				$old_error_object = $this->error_object;
			}
			$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($this->exp_content_type));
			$this->error_object->add_child_message($old_error_object);
		}

	}

	/**
	 * This method modifies the error_object of the class to provide success or error codes for firefox extension
	 * together with detail information about the messages that occurred.
	 * This method will not change the success code even if error or warning messages occurred! This is used for
	 * reports where unknown entities have been submitted but the rest could be processed.
	 *
	 * @param Boolean $result
	 */
	protected function check_result2($result) {
		if ($result === true) {
			// no errors occured (but warnings?)
			if ($this->error_object == null) {
				$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_success_code($this->exp_content_type));
			} else {
				$old_error_object = $this->error_object;
				$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_success_code($this->exp_content_type));
				$this->error_object->add_child_message($old_error_object);
			}

		} else {
			// messages occured
			if ($this->error_object == null) {
				$old_error_object = new ErrorObject(ErrorObject::severity_error , "Unexpected error occurred");
			} else {
				$old_error_object = $this->error_object;
			}
			$this->error_object = new ErrorObject(ErrorObject::severity_info ,$this->get_error_code($this->exp_content_type));
			$this->error_object->add_child_message($old_error_object);
		}

	}

	/**
	 * Returns Status codes used at firefox extension to identify the outcome of request to the Galaxytool.
	 * - 602: problem with inserting galaxy view
	 * - 612: at least one report was wrong
	 * - 622: stats not updated
	 * - 632: allyhistory not updated
	 * - 642: fleet movement not updated
	 * - 652: espionage not updated
	 * - 662: message not updated
	 * - 672: combat report not updated
	 *
	 * @param String $exp_content_type Expected XML content type - must be one of the content_type_* class constants defined in parser_global.inc.php
	 * @return String Status code for error at submission
	 */
	protected function get_error_code($exp_content_type) {
		switch ($exp_content_type) {
			case XMLParserGlobal::content_type_allypage:       return "632";
			case XMLParserGlobal::content_type_stats:          return "622";
			case XMLParserGlobal::content_type_galaxyview:     return "602";
			case XMLParserGlobal::content_type_planetinfo:     return "612";
			case XMLParserGlobal::content_type_reports:        return "612";
			case XMLParserGlobal::content_type_fleet_movement: return "642";
			case XMLParserGlobal::content_type_espionage:      return "652";
			case XMLParserGlobal::content_type_message:        return "662";
			case XMLParserGlobal::content_type_combat_report:  return "672";

			default: return "000";
		}
	}

	/**
	 * Returns Status codes used at firefox extension to identify the outcome of request to the Galaxytool.
	 * - 601: galaxy view inserted
	 * - 611: report inserted
	 * - 621: stats updated
	 * - 631: allyhistory updated
	 * - 641: fleet movement updated
	 * - 651: espionage updated
	 * - 661: message updated
	 * - 671: combat report updated
	 *
	 * @param String $exp_content_type Expected XML content type - must be one of the content_type_* class constants defined in parser_global.inc.php
	 * @return String Status code for success at submission
	 */
	protected function get_success_code($exp_content_type) {
		switch ($exp_content_type) {
			case XMLParserGlobal::content_type_allypage:       return "631";
			case XMLParserGlobal::content_type_stats:          return "621";
			case XMLParserGlobal::content_type_galaxyview:     return "601";
			case XMLParserGlobal::content_type_planetinfo:     return "611";
			case XMLParserGlobal::content_type_reports:        return "611";
			case XMLParserGlobal::content_type_fleet_movement: return "641";
			case XMLParserGlobal::content_type_espionage:      return "651";
			case XMLParserGlobal::content_type_message:        return "661";
			case XMLParserGlobal::content_type_combat_report:  return "671";

			default: return "000";
		}
	}


	/**
	 * Return playername and playerid attribute from provided DOM node instance
	 *
	 * @param DOMNOde $xml_DOMNode
	 */
	protected function get_players_data($xml_DOMNode) {
		$return_value = array();

		if ($xml_DOMNode->hasAttribute("playerid")) {
			$return_value["playerid"] = intval($xml_DOMNode->getAttribute("playerid"));
		} else {
			$return_value["playerid"] = 0;
		}

		if ($xml_DOMNode->hasAttribute("playername")) {
			$return_value["playername"] = $xml_DOMNode->getAttribute("playername");
		} else {
			$return_value["playername"] = "";
		}

		return $return_value;
	}
}

