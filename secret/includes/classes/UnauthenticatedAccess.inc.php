<?php
/**
 * This class contains all user requests that can be made without beeing authentificated to the Galaxytool
 * E.g.
 * - Register at Galaxytool
 * - Request new password
 * @author eX0du5
 *
 */
class UnauthenticatedAccess extends GenericSuperclass {

	private $utablename   = null;
	private $email_from   = "noreply@yourdomain.com";
	private $admin_email  = "admin@yourdomain.com";

	/**
	 * Constructor
	 * @param String $utablename Tablename for user table
	 * @param String $email_from Email address shown as author for sent emails
	 */
	public function __construct($utablename, $email_from, $admin_email) {
		parent::__construct();

		if (!defined("LOSTPW_ERROR2")) throw new Exception('Language file not loaded');

		if ($utablename == "") throw new InvalidArgumentException("User table empty");
		$this->utablename = $utablename;

		if ($email_from == "" || preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email_from) != "") throw new InvalidArgumentException("Invalid email_from: ".$email_from);
		$this->email_from = $email_from;

		if ($admin_email == "" || preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$admin_email) != "") throw new InvalidArgumentException("Invalid admin_email: ".$admin_email);
		$this->admin_email = $admin_email;

	}


	/**
	 * Request the password reset and send an email for confirmation to the requested email address for verification
	 * of password reset.
	 * @param String $email Email address of the recipient / requestor
	 * @return boolean
	 */
	public function request_password_reset($email) {
		$email          = trim(stripslashes($email));
		if (empty($email) || preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email) != "" ) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}

		// get user ID and password hash - there might be several user for the same email address, use the one with smallest ID (usually the oldest account)
		$query = "SELECT id, userpass FROM $this->utablename WHERE email=:email ORDER BY id LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":email", $email);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		if ($stmt->rowCount() != 1) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}
		$line     = $stmt->fetch(PDO::FETCH_OBJ);
		$id       = $line->id;
		$password = $line->userpass;

		// generate new hash of existing hash for unique identification of reset confirmation
		$link = strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=verify_reset&id=".md5($password)."&email=".$email;
		// TODO: currently this method is called from AJAX only but a more generic way is needed to determine index.php from Galaxytool root!
		$link = str_replace("secret/ajax/ajax_startpage.php", "index.php", $link);

		$emailtext = LOSTPW_CONFIRM_RESET_MESSAGE . "\n<br>\n<br> <a href=\"$link\">$link</a>";
		$result = Galaxytool::send_email($email, $this->email_from, LOSTPW_CONFIRM_RESET_SUBJECT, $emailtext);
		if ($result == true) {
			$this->error_object = new ErrorObject(ErrorObject::severity_info, LOSTPW_INFO1);
		} else {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR3);
			return false;
		}
		return true;
	}

	/**
	 * Reset password for user for provided email address.
	 * @param String $email Email address of the recipient / requestor
	 * @param String $reset_key confirmation key to identify correctness of password reset
	 * @return boolean
	 */
	public function reset_password($email, $reset_key) {
		$email          = trim(stripslashes($email));
		if (empty($email) || preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email) != "" ) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}
		$reset_key = trim($reset_key);

		// generate new Password
		$newpassword = substr(md5(time()),rand(0,26),6);
		// get user ID
		$query = "SELECT id, username, userpass FROM $this->utablename WHERE email=:email LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":email", $email);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		if ($stmt->rowCount() != 1) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		// check correctness of password reset request
		if (md5($line->userpass) != $reset_key) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}

		$id = $line->id;
		$username = $line->username;
		// set new password
		$query = "UPDATE $this->utablename SET userpass=md5( CONCAT( password_salt, :password, md5(password_salt) ) ) WHERE id=:id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":password", md5($newpassword));
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;


		$emailtext = LOSTPW_EMAIL_TEXT1.":\n<br>\n<br>".LOSTPW_EMAIL_TEXT2.":\n<br> ".Galaxytool::cleanString($username)."\n<br>".LOSTPW_EMAIL_TEXT3.":\n<br> ".$newpassword."\n";
		$result = Galaxytool::send_email($email, $this->email_from, LOSTPW_EMAIL_SUBJECT, $emailtext);
		if ($result == true) {
			$this->error_object = new ErrorObject(ErrorObject::severity_info, LOSTPW_INFO2);
		} else {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR3);
			return false;
		}
		return true;
	}


	/**
	 * Register a new user at the Galaxytool user database table
	 * @param String $username New username to be used for registration
	 * @param String $password1 Password
	 * @param String $password2 Confirmed password
	 * @param String $email Email address
	 * @return boolean
	 */
	public function register_user($username, $password1, $password2, $email) {

		$username  = trim(stripslashes($username));
		$password1 = trim(stripslashes($password1));
		$password2 = trim(stripslashes($password2));
		$email     = trim(stripslashes($email));

		if (empty($username) || empty($password1) || empty($password2)) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, GENERAL_REQUIRED_FIELDS);
			return false;
		} elseif ($password1 != $password2) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, REGISTER_ERROR5);
			return false;
		} elseif (preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email) != "" ) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, REGISTER_ERROR4);
			return false;
		}

        $username  = str_replace("<", "", $username);
        $username  = str_replace(">", "", $username);

		// check existency for username or email address
		$query = "SELECT username, email FROM $this->utablename WHERE username=:username OR email = :email LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":email", $email);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		if ($stmt->rowCount() > 0) {
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			if ($username == $line->username) {
				// username already used
				$this->error_object = new ErrorObject(ErrorObject::severity_error, REGISTER_ERROR1);
			} else {
				// email address not unique
				$this->error_object = new ErrorObject(ErrorObject::severity_error, REGISTER_EMAIL_USED);
			}
			return false;
		}
		// generate salt
		$password_salt = substr(md5(time()),rand(0,26),10);
		$pw_to_save = md5($password_salt . md5($password1) . md5($password_salt));
		// save data
		$query = "INSERT INTO $this->utablename (username,userpass,password_salt,stylepath,email,links) ".
		         "VALUES (:username,:userpass,:password_salt,'styles.css',:email,'Galaxytool;http://www.galaxytool.eu')";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":userpass", $pw_to_save);
		$stmt->bindParam(":password_salt", $password_salt);
		$stmt->bindParam(":email", $email);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		// send email for verification
		$link = strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=verify&id=".$pw_to_save."&email=".$email;

		$emailtext = REGISTER_EMAILTEXT."\n<br>\n<br><a href=\"$link\">$link</a>";
		$result = Galaxytool::send_email($email, $this->email_from, REGISTER_EMAILVERIFICATION, $emailtext);
		if ($result == true) {
			$this->error_object = new ErrorObject(ErrorObject::severity_info, LOSTPW_INFO2);
		} else {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR3);
			return false;
		}

		// send email to tool admin
		if ($this->admin_email != 'admin@yourdomain.com' && !empty($this->admin_email)) {
			$link = strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
			$link = str_replace("index.php","secret/ajax/ajax_startpage.php?type=admin_email&username=".urlencode($username),$link);
			$content = file_get_contents($link);

			if ($content == "true") {
				$this->error_object = new ErrorObject(ErrorObject::severity_info, LOSTPW_INFO2);
			} else {
				$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR3);
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error, $content));
				return false;
			}
		}

		return true;
	}

	/**
	 * Send email to admin account about new registration - use default tool language instead of user logon language
	 * @param String $username
	 */
	public function send_admin_notification($username) {
		$username = Galaxytool::cleanString($username);

		$link = strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$link = str_replace("secret/ajax/ajax_startpage.php","",$link);

		$emailtext = REGISTER_NEW_MAILTEXT."\n<br>Loginusername: $username\n<br>\n<br>Link: <a href=\"$link\">$link</a>";
		$result = Galaxytool::send_email($this->admin_email, $this->email_from, REGISTER_NEW_SUBJECT, $emailtext);
		return $result;
	}

	/**
	 * Set user status from email to admin if email address was valid
	 * @param String $email Email address
	 * @param String $registration_key Registration key sent via email
	 * @return boolean
	 */
	public function confirm_email_for_registration($email, $registration_key) {
		$email          = trim(stripslashes($email));
		if (empty($email) || preg_replace("/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/","",$email) != "" ) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}
		$registration_key = trim($registration_key);

		$query = "SELECT id, userpass FROM $this->utablename WHERE email=:email";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":email", $email);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		if ($stmt->rowCount() < 1) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}

		$line = $stmt->fetch(PDO::FETCH_OBJ);
		if ($line->userpass != $registration_key) {
			// wrong key
			$this->error_object = new ErrorObject(ErrorObject::severity_error, LOSTPW_ERROR2);
			return false;
		}

		$query = "UPDATE $this->utablename SET status='admin' WHERE id=:id AND status!='active'";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $line->id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		return true;
	}
}