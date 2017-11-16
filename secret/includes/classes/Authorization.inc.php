<?php
/**
 * Interface holding constants and methods to be re-used from plugins that need
 * authentification mechanism.
 * @author eX0du5
 *
 */
interface iAuthorization {
	const context_token   = "token_logon";
	const context_direct  = "direct_logon";

	const setting_username        = "username";
	const setting_plugin_token    = "plugin_token";
	const setting_userid          = "userid";
	const setting_ogame_playerid  = "ogame_playerid";
	const setting_ogame_allyid    = "ogame_allyid";
	const setting_loggedin        = "loggedin";
	const setting_stylepath       = "stylepath";
	const setting_timezone_offset = "timezone_offset";
	const setting_ogame_offset    = "ogame_offset";
	const setting_saves           = "saves";
	const setting_serverurl       = "serverurl";
	const setting_hits		      = "hits";
	const setting_search_results  = "search_results";
	const setting_getting_started = "getting_started";
	const setting_plugin_info     = "plugin_info";
	const setting_email           = "email";
	const setting_links           = "links";

	const permission_is_admin    = "is_admin";
	const permission_cansearch   = "cansearch";
	const permission_caninsert   = "caninsert";
	const permission_candelete   = "candelete";
	const permission_statusview  = "statusview";
	const permission_probeview   = "probeview";
	const permission_userman     = "userman";
	const permission_history     = "history";
	const permission_diplomatic  = "diplomatic";
	const permission_fleetinfo   = "fleetinfo";
	const permission_activities  = "activities";
	const permission_maintenance = "maintenance";

	const tech_weapon  = "waffentech";
	const tech_shield  = "schildtech";
	const tech_rpz     = "rpz";
	const tech_vbt     = "vbt";
	const tech_hra     = "hra";
	const tech_impulse = "impulse";

	const bbcode_coordinates  = "bb_coordinates";
	const bbcode_moon         = "bb_moon";
	const bbcode_debris       = "bb_debris";
	const bbcode_ally         = "bb_ally";
	const bbcode_allydetails  = "bb_allydetails";
	const bbcode_playername   = "bb_playername";
	const bbcode_banned       = "bb_banned";
	const bbcode_vacation     = "bb_vacation";
	const bbcode_noob         = "bb_noob";
	const bbcode_inactive     = "bb_inactive";
	const bbcode_longinactive = "bb_longinactive";
	const bbcode_outlaw       = "bb_outlaw";

	/**
	 * This method is called after a user logged in to the galaxytool. The user id
	 * is provided and the Galaxytool authorization object is fully instanciated.
	 * @param int $user_id
	 */
	public function after_logon($user_id);

	/**
	 * This method enables the plugin to return setting parameter to be accessable via
	 * the standard authorization object instance. Whenever a setting name is unknown,
	 * the authorization class will call the plugin methods one after another, until
	 * a result was returned. If the setting parameter is unknown, the method must
	 * return null.
	 * @param String $name
	 */
	public function get_setting($name);

	/**
	 * This method enables the plugin to return permissions to be accessable via
	 * the standard authorization object instance. Whenever a permission name is unknown,
	 * the authorization class will call the plugin methods one after another, until
	 * a result was returned. If the setting parameter is unknown, the method must
	 * return null. In all other cases the method must return true or false.
	 * @param String $name
	 */
	public function get_permission($name);

	/**
	 * Overwrite setting name with new value. This can be required after user adjusted
	 * the user options.
	 * @param String $name
	 * @param unknown_type $new_value
	 */
	public function set_setting($name, $new_value);

}

/**
 * This class is used for all authorization requestest to determine whether a user can logon
 * or has requested permissions.
 * One prerequisite is that $_SESSION['lang'] is already defined with the logon language
 * the user has choosen to show proper error messages on logon failure.
 * @author eX0du5
 *
 */
final class Authorization extends GenericSuperclass implements iAuthorization {

	private $context = null;
	private $utablename   = null;
	private $playertable  = null;
	private $iptablename  = null;
	private $plugin_auth_objects = null;
	private $plugin_navigation_objects = array();
	private $enabled_plugins = array();
	private $userdefined_link_object = null;
	private $global_link_object = null;
	private $logon_version = null;

	private $authorizations   = array();
	private $bb_codes         = array();
	private $techs            = array();
	private $settings         = array();

	/**
	 * Logon user based on username and password or token and set logon context.
	 * Store logon information in session variables and inform plugins via after_logon
	 * method call.
	 * @param unknown $utablename
	 * @param unknown $playertable
	 * @param unknown $iptablename
	 * @param unknown $default_language
	 * @param string $username
	 * @param string $password
	 * @param string $token
	 * @return void
	 * @throws InvalidArgumentException
	 */
	public function __construct($utablename, $playertable, $iptablename, $default_language, $username = null, $password = null, $token = null) {
		parent::__construct();

		if ($utablename == "") throw new InvalidArgumentException("User table empty");
		$this->utablename = $utablename;

		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;

		if ($iptablename == "") throw new InvalidArgumentException("IP table empty");
		$this->iptablename = $iptablename;

		if (!defined("L_LOGINFAILURE")) throw new InvalidArgumentException("Language file not loaded");

		if ($token != null) {
			$this->context       = iAuthorization::context_token;
			$login_error_message = new ErrorObject(ErrorObject::severity_error, L_TOKENFAILURE);

			$this->token = $token;
			$query = "SELECT u.*,p.waffentech, p.schildtech,p.rpz,p.vbt,p.hra,p.impulse FROM $this->utablename u ".
				      "LEFT JOIN $this->playertable p ON (u.ogame_playerid = p.ogame_playerid) ".
			          "WHERE plugin_token=:token AND status='active'";

			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":token", $this->token);
		} else {
			$this->context       = iAuthorization::context_direct;
			$login_error_message = new ErrorObject(ErrorObject::severity_error, L_LOGINFAILURE);

			$username     = trim(stripslashes($username));
			// new password = md5( concat ( salt + password hash + md5( salt) )
			$userpass     = md5(trim(stripslashes($password)));

			$query = "SELECT u.*,p.waffentech, p.schildtech,p.rpz,p.vbt,p.hra,p.impulse FROM $this->utablename u ".
				      "LEFT JOIN $this->playertable p ON (u.ogame_playerid = p.ogame_playerid) ".
			          "WHERE username=:username AND userpass=md5( CONCAT( password_salt, :userpass, md5(password_salt) ) ) AND status='active'";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":userpass", $userpass);
		}
		$res = $this->execute($stmt);
		// check for query errors
		if ($res === false) {
			return;
		}
		// check logon result
		if ($stmt->rowCount() != 1) {
			$this->error_object = $login_error_message;
			return;
		}

		$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
		// store values in internal buffer
		$this->logon($user_data, $default_language);
		// call own after logon method
		$this->after_logon($this->settings["userid"]);

		// call plugin method after_logon for all plugins
		$plugins = new PluginHandler();
		$this->enabled_plugins = $plugins->get_enabled_plugins();

		$this->plugin_auth_objects = $plugins->get_authorization_objects();
		foreach ($this->plugin_auth_objects as $auth_object) {
			$auth_object->after_logon($this->settings["userid"]);
		}

		$this->plugin_navigation_objects = array();
		$navigation_objects = $plugins->get_navigation_objects();
		foreach ($navigation_objects as $navi_object) {

			$plugin_navigation = $navi_object->get_navigation($_SESSION['lang']);
			if ($plugin_navigation instanceof Navigation) {
				array_push($this->plugin_navigation_objects, $plugin_navigation);
			}
		}

		// store instance in session
		$_SESSION['s_auth']     = $this;
		$_SESSION['s_loggedin'] = true;

		$path = $_SERVER['PHP_SELF'];
		$pos = strrpos($path,"/");
		$path = substr($path,0,$pos + 1);
		$_SESSION['s_serverurl'] = $_SERVER['HTTP_HOST'].$path;
	}

	/**
	 * @return string
	 */
	public function get_context() {
		return $this->context;
	}

	/* (non-PHPdoc)
	 * @see iAuthorization::get_setting()
	 */
	public function get_setting($name) {
		if (array_key_exists($name, $this->settings)) {
			return $this->settings[$name];
		} else {
			// check if this is a plugin setting
			// TODO: load plugin files first (require statement)
			foreach ($this->plugin_auth_objects as $auth_object) {
				$value = $auth_object->get_setting($name);
				if ($value != null) return $value;
			}
		}
		return null;
	}

	/* (non-PHPdoc)
	 * @see iAuthorization::get_permission()
	 */
	public function get_permission($name) {
		if ($this->authorizations == null) {
			// logon failed
			return false;
		}

		if (array_key_exists($name, $this->authorizations)) {
			return $this->authorizations[$name];
		} else {
			// check if this is a plugin permission
			// TODO: require_once the plugin file
			foreach ($this->plugin_auth_objects as $auth_object) {
				$value = $auth_object->get_permission($name);
				if ($value != null && ($value === true || $value === false)) return $value;
			}
		}
		return null;
	}

	/**
	 * Return the tech values stored in the session
	 * @param String $name Name of the technology - use interface constants
	 * @return Integer|boolean
	 */
	public function get_tech($name) {
		if (array_key_exists($name, $this->techs)) {
			return $this->techs[$name];
		}
		return false;
	}

	/* (non-PHPdoc)
	 * @see iAuthorization::set_setting()
	 */
	public function set_setting($name, $new_value) {
		if (array_key_exists($name, $this->settings)) {
			$this->settings[$name] = $new_value;
			return true;
		}

		// check if this is a plugin setting
		// TODO: require_once the plugin file
		foreach ($this->plugin_auth_objects as $auth_object) {
			$value = $auth_object->set_setting($name, $new_value);
			if ($value != null) return $value;
		}

		return false;
	}

	/* (non-PHPdoc)
	 * @see iAuthorization::after_logon()
	 */
	public function after_logon($user_id) {
		$query = "UPDATE $this->utablename SET logins=logins+1, lastlogin=NOW() WHERE id=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":id", $this->get_setting(iAuthorization::setting_userid));
		$res = $this->execute($stmt);
		if ($res === false) {
			return;
		}
		$query = "INSERT INTO $this->iptablename (userid,ip,logintime) VALUES (:userid,:ip,NOW())";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":userid", $this->get_setting(iAuthorization::setting_userid));
		$stmt->bindParam(":ip", $_SERVER['REMOTE_ADDR']);
		$res = $this->execute($stmt);
		if ($res === false) {
			return;
		}
		$query = "SELECT id FROM $this->iptablename WHERE userid=:userid ORDER BY logintime ASC";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":userid", $this->get_setting(iAuthorization::setting_userid));
		$res = $this->execute($stmt);
		if ($res === false) {
			return;
		}
		$number = $stmt->rowCount();
		if ($number > 50) {
			$where = " id IN (";
			$i = 0;
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				if ($i < ($number-50)) $where .= $line->id.",";
				else break;
				$i++;
			}
			$where = substr($where,0,strlen($where)-1).")";
			$query = "DELETE FROM $this->iptablename WHERE ".$where;
			$res = $this->exec($query);
			if ($res === false) {
				return;
			}
		}
	}

	/**
	 * Checks if a plugin is enabled via plugins.xml and returns true if this is the case.
	 * @param String $name Plugin name as provided at plugins.xml
	 * @return boolean
	 */
	public function is_plugin_active($name) {
		foreach($this->enabled_plugins as $plugin_name) {
			if ($plugin_name == $name) return true;
		}
		return false;
	}

	public function get_plugin_links() {
		$navigation_array = array();
		foreach ($this->plugin_navigation_objects as $navigation) {
			$links = $navigation->get_navigation_links();
			foreach ($links as $link) {
				array_push($navigation_array, $link);
			}
		}
		return $navigation_array;
	}

	public function get_userdefined_links() {
		$navigation_array = array();

		if ($this->global_link_object instanceof Navigation) {
			$links = $this->global_link_object->get_navigation_links();
			foreach ($links as $link) {
				array_push($navigation_array, $link);
			}
		}

		if ($this->userdefined_link_object instanceof Navigation) {
			$links = $this->userdefined_link_object->get_navigation_links();
			foreach ($links as $link) {
				array_push($navigation_array, $link);
			}
		}

		return $navigation_array;
	}

	public function get_logon_version() {
		return $this->logon_version;
	}

	private function logon(array $user_data, $default_language) {
		$this->settings[iAuthorization::setting_username]        = $user_data["username"];
		$this->settings[iAuthorization::setting_plugin_token]    = $user_data["plugin_token"];
		$this->settings[iAuthorization::setting_userid]          = $user_data["id"];
		$this->settings[iAuthorization::setting_ogame_playerid]  = $user_data["ogame_playerid"];
		$this->settings[iAuthorization::setting_ogame_allyid]    = $user_data["ogame_allyid"];
		$this->settings[iAuthorization::setting_loggedin]        = true;
		$this->settings[iAuthorization::setting_stylepath]       = $user_data["stylepath"];
		$this->settings[iAuthorization::setting_timezone_offset] = $user_data["timezone_offset"];
		$this->settings[iAuthorization::setting_ogame_offset]    = $user_data["ogame_offset"];
		$this->settings[iAuthorization::setting_email]           = $user_data["email"];
		$this->settings[iAuthorization::setting_links]           = $user_data["links"];
		if (!isset($_SESSION['lang_manually'])) {
			// don't overwrite manually chosen languages from start screen
			$_SESSION['lang']              = ($user_data["language"] != null) ? $user_data["language"] : $default_language;
		} else {
			// keep manually defined language - already set to $_SESSION['lang']
			unset($_SESSION['lang_manually']);
		}

		$path = $_SERVER['PHP_SELF'];
		$pos  = strrpos($path,"/");
		$path = substr($path,0,$pos+1);

		$this->settings[iAuthorization::setting_serverurl] = $_SERVER['HTTP_HOST'].$path;

		$this->logon_version = VERSION;

		// websim data
		$this->techs['waffentech'] = (empty($user_data["waffentech"])) ? 0 : $user_data["waffentech"];
		$this->techs['schildtech'] = (empty($user_data["schildtech"])) ? 0 : $user_data["schildtech"];
		$this->techs['rpz']        = (empty($user_data["rpz"])) ? 0 : $user_data["rpz"];
		$this->techs['vbt']        = (empty($user_data["vbt"])) ? 0 : $user_data["vbt"];
		$this->techs['hra']        = (empty($user_data["hra"])) ? 0 : $user_data["hra"];
		$this->techs['impulse']    = (empty($user_data["impulse"])) ? 0 : $user_data["impulse"];

		// copy settings
		$this->authorizations[iAuthorization::permission_is_admin]    = ($user_data["is_admin"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_cansearch]   = ($user_data["cansearch"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_caninsert]   = ($user_data["caninsert"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_candelete]   = ($user_data["candelete"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_statusview]  = ($user_data["statusview"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_probeview]   = ($user_data["probeview"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_userman]     = ($user_data["userman"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_history]     = ($user_data["allyhistory"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_diplomatic]  = ($user_data["diplomatic"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_fleetinfo]   = ($user_data["fleetinfo"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_activities]  = ($user_data["activities"] =="true") ? true : false;
		$this->authorizations[iAuthorization::permission_maintenance] = ($user_data["maintenance"] =="true") ? true : false;

		// copy settings
		$this->settings[iAuthorization::setting_hits]		     = 20;
		$this->settings[iAuthorization::setting_search_results]  = isset($user_data["search_results"])  ? $user_data["search_results"] : 25;
		$this->settings[iAuthorization::setting_getting_started] = isset($user_data["getting_started"]) ? $user_data["getting_started"] : "expand";
		$this->settings[iAuthorization::setting_plugin_info]     = isset($user_data["plugin_info"])     ? $user_data["plugin_info"] : "expand";

		// personal links
		$additional_links_lines = explode("\n",$user_data["links"]);
		$this->userdefined_link_object = new Navigation();
		foreach ($additional_links_lines as $link_line) {
			$line_parts = explode(";",$link_line);
			if (count($line_parts) == 2) {
				if (trim($line_parts[1]) != "") {
					if (substr($line_parts[1],0,7) != "http://" && substr($line_parts[1],0,8) != "https://") {
						if (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])) {
							$line_parts[1] = "https://".$line_parts[1];
						} else {
							$line_parts[1] = "http://".$line_parts[1];
						}
					}
					try {
						$this->userdefined_link_object->set_navigation_link(trim($line_parts[0]), $line_parts[1], true);
					} catch(Exception $e) {
						// ignore invalid URLs
					}
				}
			}
		}

		unset($additional_links_lines);
		unset($line_parts);
		unset($link_line);

		// colors
		$this->bb_codes['bb_coordinates']  = $user_data["bb_coordinates"];
		$this->bb_codes['bb_moon']         = $user_data["bb_moon"];
		$this->bb_codes['bb_debris']       = $user_data["bb_debris"];
		$this->bb_codes['bb_ally']         = $user_data["bb_ally"];
		$this->bb_codes['bb_allydetails']  = $user_data["bb_allydetails"];
		$this->bb_codes['bb_playername']   = $user_data["bb_playername"];
		$this->bb_codes['bb_banned']       = $user_data["bb_banned"];
		$this->bb_codes['bb_vacation']     = $user_data["bb_vacation"];
		$this->bb_codes['bb_noob']         = $user_data["bb_noob"];
		$this->bb_codes['bb_inactive']     = $user_data["bb_inactive"];
		$this->bb_codes['bb_longinactive'] = $user_data["bb_longinactive"];
		$this->bb_codes['bb_outlaw']       = $user_data["bb_outlaw"];

		// global links - from admin account
		if ($this->authorizations["is_admin"] != true) {
			$query = "SELECT links FROM $this->utablename WHERE is_admin='true' LIMIT 1";
			$stmt = $this->query($query);
			
			if ($stmt !== false && $stmt->rowCount() > 0) {
				$admin_data = $stmt->fetch(PDO::FETCH_ASSOC);
				$global_links_lines = explode("\n",$admin_data["links"]);
				$this->global_link_object = new Navigation();
				foreach ($global_links_lines as $link_line) {
					$line_parts = explode(";",$link_line);
					if (count($line_parts) == 2) {
						if (trim($line_parts[1]) != "") {
							if (substr($line_parts[1],0,7) != "http://" && substr($line_parts[1],0,8) != "https://") {
								if (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])) {
									$line_parts[1] = "https://".$line_parts[1];
								} else {
									$line_parts[1] = "http://".$line_parts[1];
								}

							}
							try {
								$this->global_link_object->set_navigation_link(trim($line_parts[0]), $line_parts[1], true);
							} catch(Exception $e) {
								// ignore invalid URLs
							}
						}

					}
				}
			} // else - no admin account any more
		}
	}

}