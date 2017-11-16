<?php

/**
 * This class manages all user specific changes or user creation and deletion.
 * @author eX0du5
 *
 */
class UserManagement extends GenericSuperclass {

	private $utablename     = null;
	private $playertable    = null;
	private $iptablename    = null;
	private $combatparty    = null;
	private $combattable    = null;
	private $fleetmovetable = null;
	private $messagetable   = null;
	private $email_from     = null;


	public function __construct($utablename, $iptablename, $combatparty, $combattable, $fleetmovetable, $messagetable, $email_from) {
		parent::__construct();

		if ($utablename == "") throw new InvalidArgumentException("User table empty");
		$this->utablename = $utablename;

		if ($iptablename == "") throw new InvalidArgumentException("IP table empty");
		$this->iptablename = $iptablename;

		if ($combatparty == "") throw new InvalidArgumentException("Combat party table empty");
		$this->combatparty = $combatparty;

		if ($combattable == "") throw new InvalidArgumentException("Combat table empty");
		$this->combattable = $combattable;

		if ($fleetmovetable == "") throw new InvalidArgumentException("Fleetmovement table empty");
		$this->fleetmovetable = $fleetmovetable;

		if ($messagetable == "") throw new InvalidArgumentException("Message table empty");
		$this->messagetable = $messagetable;

		if ($email_from == "" || preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email_from) != "") throw new InvalidArgumentException("Invalid email_from: ".$email_from);
		$this->email_from = $email_from;

		if (!defined("USER_ERROR1")) throw new InvalidArgumentException("Language file not loaded");
	}


	/**
	 * Deletes all user information from the system including user account, IP information
	 * combat reports, fleet movements and messages.
	 * @param Int $id
	 * @param String $old_password
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function delete_user_by_password($id, $old_password=null) {
		$old_password = md5(trim(stripslashes($old_password)));
		if (!is_numeric($id)) {
			throw new InvalidArgumentException("Invalid ID for deletion: ".$id);
		}

		$query = "SELECT id FROM $this->utablename WHERE userpass=md5( CONCAT( password_salt, :oldpass, md5(password_salt) ) ) AND id=:id AND is_admin='false'";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":oldpass", $old_password);
		$stmt->bindParam(":id", $id);
		
		$stmt = $this->execute($stmt);
		if ($stmt === false) return false;
		if ($stmt->rowCount() == 0) {
			return false;
		}

		return $this->delete_user($id);
	}

	public function delete_user($id) {
		if (!is_numeric($id)) {
			throw new InvalidArgumentException("Invalid ID for deletion: ".$id);
		}
		// delete user account (but not an admin account)
		$query = "DELETE FROM $this->utablename WHERE id=:id AND is_admin = 'false'";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		// delete IP entries
		$query = "DELETE FROM $this->iptablename WHERE userid=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		// delete combat reports
		$query = "DELETE FROM $this->combatparty WHERE combat_id IN (SELECT id FROM $this->combattable WHERE userid=:id)";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		$query = "DELETE FROM $this->combattable WHERE userid=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		// delete fleet movements
		$query = "DELETE FROM $this->fleetmovetable WHERE user_id=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		// delete messages
		$query = "DELETE FROM $this->messagetable WHERE userid=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		return true;
	}


	/**
	 * Update user specific options
	 * @param Int $id
	 * @param String $oldpass
	 * @param String $newpass1
	 * @param String $newpass2
	 * @param String $ogame_playerid
	 * @param String $ogame_allyid
	 * @param String $stylepath
	 * @param String $email
	 * @param String $timezone
	 * @param String $ogame_offset
	 * @param String $search_results
	 * @param String $getting_started
	 * @param String $plugin_info
	 * @param String $user_language
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function change_options($id, $oldpass, $newpass1, $newpass2, $ogame_playerid, $ogame_allyid, $stylepath, $email, $timezone, $ogame_offset, $search_results, $getting_started, $plugin_info, $user_language) {
		if (!is_numeric($id) || $id < 1) throw new InvalidArgumentException("Invalid ID");
		if ($id != $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid) &&
			$_SESSION['a_auth']->get_permission(iAuthorization::permission_userman !== true)) {
			// no permission to maintain other user settings
			$this->error_object = new ErrorObject(ErrorObject::severity_error, USER_ERROR2);
			return false;
		}

		$oldpass         = trim(stripslashes($oldpass));
		$newpass1        = trim(stripslashes($newpass1));
		$newpass2        = trim(stripslashes($newpass2));
		$ogame_playerid  = intval(trim($ogame_playerid));
		$ogame_allyid    = intval(trim($ogame_allyid));
		$stylepath       = trim(stripslashes($stylepath));
		$email           = trim(stripslashes($email));
		$timezone        = stripslashes($timezone);
		$ogame_offset    = stripslashes($ogame_offset);
		
		if ($ogame_playerid < 1) $ogame_playerid = "NULL";
		if ($ogame_allyid < 1) $ogame_allyid = "NULL";

		$search_results  = (int)trim(stripslashes($search_results));
		$getting_started = trim(stripslashes($getting_started));
		$plugin_info     = trim(stripslashes($plugin_info));

		if (empty($email) || preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email) != "") {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, USER_ERROR2);
			return false;
		}
		if (!empty($newpass1) && !empty($newpass2) && $newpass1 != $newpass2) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, PW_MISMATCH);
			return false;
		}

		if ($getting_started != "expand" && $getting_started != "collapse" && $getting_started != "hidden") $getting_started = "expand";
		if ($plugin_info != "expand" && $plugin_info != "collapse" && $plugin_info != "hidden") $plugin_info = "expand";
		// language setting
		$user_language = trim(stripslashes($user_language));
		if ($user_language == "null") $user_language = "NULL"; else $user_language = DB::getDB()->quote($user_language);


		// Update settings
		$query = "UPDATE $this->utablename SET ";
		if ($newpass1 == $newpass2 && !empty($newpass1)) {
			// set new password
			$query .= "userpass=md5( CONCAT( password_salt, '".md5($newpass1)."', md5(password_salt) ) ),";
		}
		$query .= "timezone_offset=".DB::getDB()->quote($timezone).",ogame_offset=".DB::getDB()->quote($ogame_offset).",stylepath=".DB::getDB()->quote($stylepath).",ogame_playerid=$ogame_playerid,";
		$query .= "ogame_allyid=$ogame_allyid,email=".DB::getDB()->quote($email).",search_results='$search_results', language=$user_language,";
		$query .= "getting_started='$getting_started', plugin_info='$plugin_info' ";
		$query .= " WHERE id='".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)."'";
		
		if ($id == $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)) {
			// for own user compare with old password
			$query .= " AND userpass=md5( CONCAT( password_salt, '".md5($oldpass)."', md5(password_salt) ) )";
		}

		$stmt = $this->query($query);
		if ($stmt === false) return false;
		if ($stmt->rowCount() < 1) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, PW_ERROR);
			return false;
		}

		$this->error_object = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);

		// update session vars
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_search_results, $search_results);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_timezone_offset, $timezone);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_ogame_offset, $ogame_offset);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_getting_started, $getting_started);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_plugin_info, $plugin_info);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_ogame_playerid, $ogame_playerid);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_ogame_allyid, $ogame_allyid);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_stylepath, $stylepath);
		$_SESSION['s_auth']->set_setting(iAuthorization::setting_email, $email);
		if ($user_language != "null") {
			$_SESSION['lang'] = str_replace("'","",$user_language);
		}

		return true;
	}

	/**
	 * Create a new user in the user management section. User is directly active.
	 * @param unknown_type $username
	 * @param unknown_type $userpass
	 * @param unknown_type $stylepath
	 * @param unknown_type $ogame_playerid
	 * @param unknown_type $ogame_allyid
	 * @param unknown_type $email
	 * @param unknown_type $cansearch
	 * @param unknown_type $caninsert
	 * @param unknown_type $candelete
	 * @param unknown_type $statusview
	 * @param unknown_type $probeview
	 * @param unknown_type $userman
	 * @param unknown_type $allyhistory
	 * @param unknown_type $diplomatic
	 * @param unknown_type $fleetinfo
	 * @param unknown_type $activities
	 * @param unknown_type $maintenance
	 * @return boolean
	 */
	public function create_new_user($username,$userpass,$stylepath,$ogame_playerid,$ogame_allyid,$email,
	                                $cansearch,$caninsert,$candelete,$statusview,$probeview,$userman,$allyhistory,
	                                $diplomatic,$fleetinfo,$activities,$maintenance) {

		if (preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email) != "") {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, USER_ERROR2);
			return false;
		}

	    $username  = stripslashes(trim($username));
        $username  = str_replace("<", "", $username);
        $username  = str_replace(">", "", $username);
                
	    if (empty($username)) throw new InvalidArgumentException("Empty username"); // should not happen, required field in JS; only manipulation of code can stop here

	    $userpass  = md5(stripslashes(trim($userpass)));
	    $stylepath = stripslashes(trim($stylepath));
	    if (empty($stylepath)) $stylepath = "styles.css";
	    $ogame_playerid = intval(trim($ogame_playerid));
	    $ogame_allyid   = intval(trim($ogame_allyid));
	    if ($ogame_playerid < 1) $ogame_playerid = 0;
	    if ($ogame_allyid < 1) $ogame_allyid = 0;

	    $email     = stripslashes(trim($email));
	    if (empty($email)) {
	    	$this->error_object = new ErrorObject(ErrorObject::severity_error, USER_ERROR2);
	    	return false;
	    }
	    // avoid duplicate email entries? -> not really needed
		// generate salt
		$password_salt = substr(md5(time()),rand(0,26),10);


		$cansearch    = ($cansearch == "true")   ? "true" : "false";
		$caninsert    = ($caninsert == "true")   ? "true" : "false";
		$candelete    = ($candelete == "true")   ? "true" : "false";
		$statusview   = ($statusview == "true")  ? "true" : "false";
		$probeview    = ($probeview == "true")   ? "true" : "false";
		$userman      = ($userman == "true")     ? "true" : "false";
		$allyhistory  = ($allyhistory == "true") ? "true" : "false";
		$diplomatic   = ($diplomatic == "true")  ? "true" : "false";
		$fleetinfo    = ($fleetinfo == "true")  ? "true" : "false";
		$activities   = ($activities == "true")  ? "true" : "false";
		$maintenance  = ($maintenance == "true")  ? "true" : "false";

		$query = "INSERT INTO $this->utablename (username,userpass,password_salt,stylepath,ogame_playerid,ogame_allyid,email,links,".
		         "cansearch,caninsert,candelete,statusview,probeview,userman,allyhistory,diplomatic,fleetinfo,activities,maintenance,status) ".
				 "VALUES (:username,md5( CONCAT( :password_salt, :userpass, :password_salt_md5 ) ),:password_salt2,:stylepath,:ogame_playerid,:ogame_allyid,:email".
		         ",'Galaxytool;http://www.galaxytool.eu','$cansearch','$caninsert','$candelete','$statusview','$probeview','$userman','$allyhistory',".
		         "'$diplomatic','$fleetinfo','$activities','$maintenance','active')";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password_salt", $password_salt);
		$stmt->bindParam(":userpass", $userpass);
		$stmt->bindParam(":password_salt_md5", md5($password_salt));
		$stmt->bindParam(":password_salt2", $password_salt);
		$stmt->bindParam(":stylepath", $stylepath);
		$stmt->bindParam(":ogame_playerid", $ogame_playerid);
		$stmt->bindParam(":ogame_allyid", $ogame_allyid);
		$stmt->bindParam(":email", $email);
		
		$res = $this->execute($stmt);
		/*if ($res === false &&  $this->get_mysql_error_number() == "1062") {
			// ER_DUP_ENTRY
			$this->reset_mysql_error();
			$this->error_object = new ErrorObject(ErrorObject::severity_error, USER_EXISTS);
			return false;
		} else*/if ($res === false) {
			return false;
		}

		$this->error_object = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);
		return true;
	}

	public function update_user($id,$username,$pass1, $pass2, $stylepath,$ogame_playerid,$ogame_allyid,$email,
	                        $cansearch,$caninsert,$candelete,$statusview,$probeview,$userman,$allyhistory,
	                        $diplomatic,$fleetinfo,$activities,$maintenance) {

	    if (!is_numeric($id) || $id < 1) throw new InvalidArgumentException("Invalid ID");

		if (preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email) != "") {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, USER_ERROR2);
			return false;
		}
		if ($pass1 != $pass2) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, USER_ERROR2);
			return false;
		}

	    $username  = DB::getDB()->quote(stripslashes(trim($username)));
        $username  = str_replace("<", "", $username);
        $username  = str_replace(">", "", $username);
                
	    if (empty($username)) throw new InvalidArgumentException("Empty username"); // should not happen, required field in JS; only manipulation of code can stop here
	    if (!empty($pass1)) {
	    	$userpass  = md5(stripslashes(trim($pass1)));
	    } else {
	    	$userpass = "";
	    }
	    $stylepath = DB::getDB()->quote(stripslashes(trim($stylepath)));
	    if (empty($stylepath)) $stylepath = "styles.css";
	    $ogame_playerid = intval(trim($ogame_playerid));
	    $ogame_allyid   = intval(trim($ogame_allyid));
	    if ($ogame_playerid < 1) $ogame_playerid = "NULL";
	    if ($ogame_allyid < 1) $ogame_allyid = "NULL";

	    $email     = DB::getDB()->quote(stripslashes(trim($email)));
	    $email_change = "email=email";
		if ($id == $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)) {
			// email changes are allowed for own user id
			$email_change = "email=$email";
		}

		$cansearch    = ($cansearch == "true")   ? "true" : "false";
		$caninsert    = ($caninsert == "true")   ? "true" : "false";
		$candelete    = ($candelete == "true")   ? "true" : "false";
		$statusview   = ($statusview == "true")  ? "true" : "false";
		$probeview    = ($probeview == "true")   ? "true" : "false";
		$userman      = ($userman == "true")     ? "true" : "false";
		$allyhistory  = ($allyhistory == "true") ? "true" : "false";
		$diplomatic   = ($diplomatic == "true")  ? "true" : "false";
		$fleetinfo    = ($fleetinfo == "true")  ? "true" : "false";
		$activities   = ($activities == "true")  ? "true" : "false";
		$maintenance  = ($maintenance == "true")  ? "true" : "false";
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_is_admin) !== true) {
			// only admin can change this setting
			$maintenance = "maintenance";
		} else {
			$maintenance = "'".$maintenance."'";
		}

		$admin_protection = "";
		if ($cansearch == "false" || $caninsert == "false" || $candelete == "false" || $statusview == "false" || $probeview == "false" || $userman == "false" ||
		    $allyhistory == "false" || $diplomatic == "false" || $fleetinfo == "false" || $activities == "false" || $maintenance == "false") {
		   	// do not allow changes at admin permissions
			$admin_protection = " AND is_admin='false'";
		}

		$query = "UPDATE $this->utablename ".
				 "SET username=$username,$email_change,stylepath=$stylepath,ogame_playerid=$ogame_playerid,ogame_allyid=$ogame_allyid,".
		         "cansearch='$cansearch',caninsert='$caninsert',candelete='$candelete',statusview='$statusview',probeview='$probeview',".
		         "userman='$userman', allyhistory='$allyhistory', diplomatic='$diplomatic', fleetinfo='$fleetinfo', activities='$activities', ".
		         "maintenance=$maintenance ";
		if (!empty($userpass)) $query .= ", userpass=md5( CONCAT( password_salt, '$userpass', md5(password_salt) ) ) ";
		$query .= " WHERE id=$id ".$admin_protection;

		$res = $this->exec($query);
		if ($res === false) return false;

		$this->error_object = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);
		return true;
	}

	/**
	 * Get user specific data required for display/change at user management page.
	 * @param Int $user_id
	 * @return boolean|Array
	 */
	public function get_user_data($user_id) {
		$user_id = intval($user_id);
		if ($user_id < 1) return false;

		$query = "SELECT username,ogame_playerid,ogame_allyid,stylepath,email,is_admin, ".
				 "cansearch,caninsert,candelete,statusview,probeview,userman,allyhistory,diplomatic,fleetinfo,activities,maintenance ".
				 " FROM $this->utablename WHERE id=:user_id LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $user_id);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) {
			return false;
		}
		$line = $stmt->fetch(PDO::FETCH_OBJ);

		$content["username"]       = $line->username;
		$content["ogame_playerid"] = $line->ogame_playerid;
		$content["ogame_allyid"]   = $line->ogame_allyid;
		$content["stylepath"]      = $line->stylepath;
		$content["email"]          = $line->email;
		$content["is_admin"]       = $line->is_admin;

		$content["permission"][iAuthorization::permission_cansearch]    = $line->cansearch;
		$content["permission"][iAuthorization::permission_caninsert]    = $line->caninsert;
		$content["permission"][iAuthorization::permission_candelete]    = $line->candelete;
		$content["permission"][iAuthorization::permission_statusview]   = $line->statusview;
		$content["permission"][iAuthorization::permission_probeview]    = $line->probeview;
		$content["permission"][iAuthorization::permission_userman]      = $line->userman;
		$content["permission"][iAuthorization::permission_history]      = $line->allyhistory;
		$content["permission"][iAuthorization::permission_diplomatic]   = $line->diplomatic;
		$content["permission"][iAuthorization::permission_fleetinfo]    = $line->fleetinfo;
		$content["permission"][iAuthorization::permission_activities]   = $line->fleetinfo;
		$content["permission"][iAuthorization::permission_maintenance]  = $line->maintenance;

		return $content;
	}

	public function get_user_data_json($user_id) {
		$user_id = intval($user_id);
		if ($user_id < 1) return false;

		$user_data = $this->get_user_data($user_id);
		if ($user_data === false) return false;

		$content = "{".
		"identifier: 'username',".
		"label: 'username',".
		"username: '".$user_data['username']."',".
		"ogame_playerid: '".$user_data['ogame_playerid']."',".
		"ogame_allyid: '".$user_data['ogame_allyid']."',".
		"stylepath: '".$user_data['stylepath']."',".
		"email: '".$user_data['email']."',".
		"is_admin: '".$user_data['is_admin']."',".
		iAuthorization::permission_cansearch.": '".$user_data["permission"][iAuthorization::permission_cansearch]."',".
		iAuthorization::permission_caninsert.": '".$user_data["permission"][iAuthorization::permission_caninsert]."',".
		iAuthorization::permission_candelete.": '".$user_data["permission"][iAuthorization::permission_candelete]."',".
		iAuthorization::permission_statusview.": '".$user_data["permission"][iAuthorization::permission_statusview]."',".
		iAuthorization::permission_probeview.": '".$user_data["permission"][iAuthorization::permission_probeview]."',".
		iAuthorization::permission_userman.": '".$user_data["permission"][iAuthorization::permission_userman]."',".
		iAuthorization::permission_history.": '".$user_data["permission"][iAuthorization::permission_history]."',".
		iAuthorization::permission_diplomatic.": '".$user_data["permission"][iAuthorization::permission_diplomatic]."',".
		iAuthorization::permission_fleetinfo.": '".$user_data["permission"][iAuthorization::permission_fleetinfo]."',".
		iAuthorization::permission_activities.": '".$user_data["permission"][iAuthorization::permission_activities]."',".
		iAuthorization::permission_maintenance.": '".$user_data["permission"][iAuthorization::permission_maintenance]."'".
		"}";

		return $content;
	}

	/**
	 * Update user settings with own hyperlinks.
	 * @param String $links
	 * @return boolean
	 */
	public function change_links($links) {
		// check if all links are correct
		$links = strip_tags($links);
		$links_lines = explode("\n",$links);
		$nav_object = new Navigation();
		foreach ($links_lines as $link_line) {
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
					unset($valid);
					$valid = $nav_object->is_valid_url($line_parts[1]);
					if ($valid !== true) {
						if ($this->error_object == null) {
							$this->error_object = new ErrorObject(ErrorObject::severity_warning, str_replace("&1", $line_parts[1], USER_INVALID_URL) );
						} else {
							$this->error_object->add_child_message( new ErrorObject(ErrorObject::severity_warning, str_replace("&1", $line_parts[1], USER_INVALID_URL) ) );
						}

					}
				}
			}
		}

		// Query
		$query = "UPDATE $this->utablename SET links=:links WHERE id=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":links", $links);
		$stmt->bindValue(":id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		$res = $this->execute($stmt);
		if ($res === false) return false;

		$_SESSION['s_auth']->set_setting(iAuthorization::setting_links, $links);

		if ($this->error_object == null) {
			$this->error_object = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);
		} else {
			$this->error_object->add_child_message( new ErrorObject(ErrorObject::severity_info, UPDATE_DONE) );
		}
		return true;
	}

	/**
	 * Change BB Code settings for a user.
	 * @param String $user_id
	 * @param String $bb_coordinates
	 * @param String $bb_moon
	 * @param String $bb_debris
	 * @param String $bb_ally
	 * @param String $bb_allydetails
	 * @param String $bb_playername
	 * @param String $bb_banned
	 * @param String $bb_vacation
	 * @param String $bb_noob
	 * @param String $bb_inactive
	 * @param String $bb_longinactive
	 * @param String $bb_outlaw
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function change_bb_codes($user_id, $bb_coordinates,$bb_moon,$bb_debris,$bb_ally,$bb_allydetails,$bb_playername,$bb_banned,$bb_vacation,$bb_noob,$bb_inactive,$bb_longinactive,$bb_outlaw) {
		if (!is_numeric($user_id) || $user_id < 1) throw new InvalidArgumentException("Invalid UserID ".$user_id);

		$query = "UPDATE $this->utablename SET ".
				 "bb_coordinates=:bb_coordinates, ".
		         "bb_moon=:bb_moon, ".
		         "bb_debris=:bb_debris, ".
		         "bb_ally=:bb_ally, ".
		         "bb_allydetails=:bb_allydetails, ".
		         "bb_playername=:bb_playername, ".
		         "bb_banned=:bb_banned, ".
		         "bb_vacation=:bb_vacation, ".
		         "bb_noob=:bb_noob, ".
		         "bb_inactive=:bb_inactive , ".
		         "bb_longinactive=:bb_longinactive, ".
				 "bb_outlaw=:bb_outlaw ".
		         "WHERE id=:user_id";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":bb_coordinates", $bb_coordinates);
		$stmt->bindParam(":bb_moon", $bb_moon);
		$stmt->bindParam(":bb_debris", $bb_debris);
		$stmt->bindParam(":bb_ally", $bb_ally);
		$stmt->bindParam(":bb_allydetails", $bb_allydetails);
		$stmt->bindParam(":bb_playername", $bb_playername);
		$stmt->bindParam(":bb_banned", $bb_banned);
		$stmt->bindParam(":bb_vacation", $bb_vacation);
		$stmt->bindParam(":bb_noob", $bb_noob);
		$stmt->bindParam(":bb_inactive", $bb_inactive);
		$stmt->bindParam(":bb_longinactive", $bb_longinactive);
		$stmt->bindParam(":bb_outlaw", $bb_outlaw);
		$stmt->bindParam(":user_id", $user_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		$this->error_object = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);
		return true;
	}

	/**
	 * Delete user specific data owned by a Galaxytool user
	 * @param Int $combat_reports
	 * @param boolean $fleetmovements
	 * @param Int $messages
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	function delete_user_data($combat_reports=null, $fleetmovements=false, $messages=null) {
		if ($combat_reports != null && !is_numeric($combat_reports)) throw new InvalidArgumentException("Invalid data1");
		if ($fleetmovements != false && $fleetmovements!= true)      throw new InvalidArgumentException("Invalid data2");
		if ($messages != null       && !is_numeric($messages))       throw new InvalidArgumentException("Invalid data3");

		$id = $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid);
		$timezone = explode(":",$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
		if ($timezone[0] > 0) {
			$timezone = $timezone[0] * 3600 + $timezone[1] * 60;
		} else {
			$timezone = $timezone[0] * 3600 - $timezone[1] * 60;
		}

		$this->error_object = new ErrorObject(ErrorObject::severity_info, UPDATE_DONE);

		if ($combat_reports != null) {
			// delete combat reports older than x days
			$parameter = (int)$combat_reports;
			$time      = date("y-m-d H:i:s",time() - 86400 * $parameter + $timezone);

			$query = "DELETE FROM $this->combatparty WHERE combat_id IN (SELECT id FROM $this->combattable WHERE userid=:id AND combattime < :time)";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":id", $id);
			$stmt->bindParam(":time", $time);
			$res = $this->execute($stmt);
			if ($res === false) return false;
			$results = $stmt->rowCount();

			if ($results > 0) {
				$query = "DELETE FROM $this->combattable WHERE userid=:id AND combattime < :time";
				$stmt = DB::getDB()->prepare($query);
				$stmt->bindParam(":id", $id);
				$stmt->bindParam(":time", $time);
				$res = $this->execute($stmt);
				if ($res === false) return false;
				$results = $stmt->rowCount();

			}
			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, str_replace("&1",$parameter,USER_DELETE_MY_COMBAT_REPORTS)." ($results)"));
		}

		if ($fleetmovements != null) {
			// delete fleet movements
			$query = "DELETE FROM $this->fleetmovetable WHERE user_id='$id'";
			$stmt = DB::getDB()->prepare($query);
				$stmt->bindParam(":id", $id);
				$res = $this->execute($stmt);
			if ($res === false) return false;
			$results = $stmt->rowCount();

			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, USER_DELETE_MY_FLEETMOVES." ($results)"));
		}

		if ($messages != null) {
			// delete messages older than x days
			$parameter = (int)$messages;
			$time      = date("y-m-d H:i:s",time() - 86400 * $parameter + $timezone);

			$query = "DELETE FROM $this->messagetable WHERE userid=:id AND messagetime < :time";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":id", $id);
			$stmt->bindParam(":time", $time);
			$res = $this->execute($stmt);
			if ($res === false) return false;
			$results = $stmt->rowCount();

			$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_info, str_replace("&1",$parameter,USER_DELETE_MY_MESSAGES)." ($results)"));
		}

		return true;
	}

	/**
	 * This method expects a valid $user_id (not provided via input form) and returns
	 * an array of BB codes.
	 * @param Int $user_id
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function get_bb_codes($user_id) {
		if (!is_numeric($user_id) || $user_id < 1) throw new InvalidArgumentException("Invalid UserID ".$user_id);

		$query = "SELECT bb_coordinates, bb_moon, bb_debris, bb_ally, bb_allydetails, bb_playername, bb_banned, bb_vacation, bb_noob, bb_inactive , bb_longinactive, bb_outlaw ".
		         "FROM $this->utablename WHERE id=:user_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $user_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		if ($stmt->rowCount() != 1) {
			throw new InvalidArgumentException("Invalid UserID ".$user_id);
		}
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		return array(
			"bb_coordinates" => $line->bb_coordinates,
			"bb_moon" => $line->bb_moon,
			"bb_debris" => $line->bb_debris,
			"bb_ally" => $line->bb_ally,
			"bb_allydetails" => $line->bb_allydetails,
			"bb_playername" => $line->bb_playername,
			"bb_banned" => $line->bb_banned,
			"bb_vacation" => $line->bb_vacation,
			"bb_noob" => $line->bb_noob,
			"bb_inactive" => $line->bb_inactive,
			"bb_longinactive" => $line->bb_longinactive,
			"bb_outlaw" => $line->bb_outlaw
		);
	}


	/**
	 * Activate a Galaxytool user account.
	 * @param Int $userid
	 * @return boolean
	 */
	public function activate_user($userid) {
		$userid = intval($userid);
		$query = "UPDATE $this->utablename SET status='active' WHERE id=:user_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $userid);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() < 1) return false;
		return true;
	}

	/**
	 * Send an email to the registered user to inform him about the activation of his account.
	 * @param Int $userid
	 * @return boolean
	 */
	public function send_activation_notification($userid) {
		if (!defined("USERINFO_ACTIVATED")) throw new InvalidArgumentException("This method must be called with loaded language file");
		$userid = intval($userid);
		$query = "SELECT email FROM $this->utablename WHERE id=':user_id'";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $userid);
		$res = $this->execute($stmt);
		if ($stmt->rowCount() < 1) return true; // do not bother admin if user got deleted meanwhile
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		if ($line->email == "") return true; // do not bother admin if user has no email

		$result = Galaxytool::send_email($line->email, $this->email_from, USERINFO_ACTIVATED, USERINFO_ACTIVATIONTEXT);
		return $result;
	}

}
