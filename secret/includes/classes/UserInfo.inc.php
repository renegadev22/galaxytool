<?php
/**
 * Specific methods to gain information about Galaxytool user.
 * @author eX0du5
 *
 */
class UserInfo extends GenericSuperclass {

	var $dbtablename = null;
	var $systemtablename = null;
	var $utablename  = null;
	var $reporttable = null;
	var $iptablename = null;
	var $fleetmovetable = null;
	var $combattable = null;
	var $messagetable = null;
	var $playertable  = null;
	var $allytable    = null;


	public function __construct( $dbtablename, $systemtablename, $utablename, $reporttable, $iptablename, $fleetmovetable, $combattable, $messagetable, $playertable, $allytable) {
		parent::__construct();

		if ($dbtablename == "") throw new InvalidArgumentException("Tablename missing for galaxytable");
		$this->dbtablename = $dbtablename;

		if ($systemtablename == "") throw new InvalidArgumentException("Tablename missing for systemtable");
		$this->systemtablename = $systemtablename;

		if ($utablename == "") throw new InvalidArgumentException("Tablename missing for usertable");
		$this->utablename = $utablename;

		if ($reporttable == "") throw new InvalidArgumentException("Tablename missing for reporttable");
		$this->reporttable = $reporttable;

		if ($iptablename == "") throw new InvalidArgumentException("Tablename missing for iptable");
		$this->iptablename = $iptablename;

		if ($fleetmovetable == "") throw new InvalidArgumentException("Tablename missing for fleetmovetable");
		$this->fleetmovetable= $fleetmovetable;

		if ($combattable == "") throw new InvalidArgumentException("Tablename missing for combattable");
		$this->combattable = $combattable;

		if ($messagetable == "") throw new InvalidArgumentException("Tablename missing for messagetable");
		$this->messagetable = $messagetable;

		if ($playertable == "") throw new InvalidArgumentException("Tablename missing for playertable");
		$this->playertable = $playertable;

		if ($allytable == "") throw new InvalidArgumentException("Tablename missing for allytable");
		$this->allytable = $allytable;
	}

	/**
	 * Get a list of users online on the same date.
	 * @return boolean|multitype: Array of objects of class TypeUserOnline
	 */
	public function get_today_online() {
		$query = "SELECT u.username,p.id FROM $this->utablename u LEFT ".
		"JOIN $this->playertable p ".
		"ON (u.ogame_playerid=p.ogame_playerid AND u.ogame_playerid IS NOT null) ".
		"WHERE last_action > :last_action";

		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":last_action", date("Y-m-d")." 00:00:00");
		$res = $this->execute($stmt);
		if ($res === false) return false;
		$today = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if (trim($line->id) != "") {
				array_push($today, new TypeUserOnline($line->id, $line->username));
			} else {
				array_push($today, new TypeUserOnline(0, $line->username));
			}
		}
		return $today;
	}

	/**
	 * Get a list of users online within the last 5 minutes.
	 * @return boolean|multitype: Array of objects of class TypeUserOnline
	 */
	public function get_now_online() {
		$query = "SELECT u.username,p.id FROM $this->utablename u ".
		"LEFT JOIN $this->playertable p ".
		"ON (u.ogame_playerid=p.ogame_playerid AND u.ogame_playerid IS NOT NULL) ".
		"WHERE last_action > :last_action"; // ignore seconds - better chance for query cache
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":last_action", date("Y-m-d H:i",time() - 300).":00");
		$res = $this->execute($stmt);
		if ($res === false) return false;

		$online = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if (trim($line->id) != "") {
				array_push($online, new TypeUserOnline($line->id, $line->username));
			} else {
				array_push($online, new TypeUserOnline(0, $line->username));
			}
		}
		return $online;
	}

	/**
	 * Get the total aggregated number of logins of all user.
	 * @return Int
	 */
	public function get_overall_logins() {
		$query = "SELECT sum(logins) as overall FROM $this->utablename WHERE id > 0";
		$stmt = $this->query($query);
		if ($stmt === false) return 0;

		$line = $stmt->fetch(PDO::FETCH_OBJ);
		return $line->overall;
	}

	public function get_user_logins() {
		$query = "SELECT logins FROM $this->utablename WHERE id = :id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		$res = $this->execute($stmt);
		if ($res === false) return 0;

		$line = $stmt->fetch(PDO::FETCH_OBJ);
		return $line->logins;
	}

	/**
	 * Get an array with admin and email as key and the number of user with that status as value.
	 * @return boolean|multitype: Array with admin and email as key
	 */
	public function get_admin_email_user() {
		$query =    "SELECT id,
					(SELECT COUNT(*) FROM $this->utablename WHERE status = 'admin') as admin,
					(SELECT COUNT(*) FROM $this->utablename WHERE status = 'email') as email
					FROM $this->utablename WHERE id=1";
		$stmt = $this->query($query);
		if ($stmt === false) return false;
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$result["admin"] = $line->admin;
		$result["email"] = $line->email;
		return $result;
	}

	/**
	 * Return an array of usernames (array key) with its ID (array value) sorted by
	 * username (case independent).
	 * @return boolean|multitype:
	 */
	public function get_user_with_id() {
		// get all galaxytool user
		$query = "SELECT id, username FROM $this->utablename";
		$stmt = $this->query($query);
		if ($stmt === false) return false;
		$gt_user = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$gt_user[$line->username] = $line->id;
		}
		// sort array by username
		uksort($gt_user, array($this, 'compare_user_ci'));

		return $gt_user;
	}

	/**
	 * Return an associative array containing all information required for first tab of userinfo.php
	 * @return multitype:
	 */
	public function getUserInfo1Data() {
		$query = "SELECT u.*,DATE_FORMAT(CONVERT_TZ(lastlogin, '+00:00', '".$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."'), '%Y-%m-%d %H:%i:%s') as last_login_formated, ".
		         " p.playername, p.id as pid, a.id as aid, a.allyname".
		         " FROM $this->utablename u LEFT JOIN $this->playertable p ON (p.ogame_playerid = u.ogame_playerid)".
		         " LEFT JOIN $this->allytable a ON (a.ogame_allyid = u.ogame_allyid)";
		$stmt = $this->query($query);
		$first_item = true;
		$content = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			// User Info
			$url            = "";
			$status_content = "";
			$status_style   = "";
			switch ($line->status) {
				case "email":
					$status_content = $line->status;
					$status_style = "traffic_light_red";
					if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) === true) {
						$url = "userinfo.php?activate=".$line->id;
						$status_style = "redlink";
					}
					break;
				case "admin":
					$status_style = "traffic_light_yellow";
					$status_content = $line->status;
					$status_style = "traffic_light_yellow";
					if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_userman) === true) {
						$url = "userinfo.php?activate=".$line->id;
						$status_style = "yellowlink";
					}
					break;
				case "active":
					$status_style = "traffic_light_green";
					$status_content = $line->status;
					break;
				default: throw new InvalidArgumentException();
			}
			if ($line->lastlogin == "0000-00-00 00:00:00") {
				$lastlogin = USERINFO_NOLOGIN;
			} else {
				$lastlogin = $line->last_login_formated;
			}

			array_push($content,
				array(
                    "username"=>$line->username,
                    "ingame"=>$line->playername,
                    "allytag"=>$line->allyname,
                    "pid"=>$line->pid,
                    "aid"=>$line->aid,
                    "status_content"=>$status_content,
                    "status_style"=>$status_style,
                    "url"=>$url,
                    "logins"=>$line->logins,
                    "last_login"=>$lastlogin
                )
           );
		}
		return $content;
	}

	/**
	 * Return an associative array containing all information required for second tab of userinfo.php
	 * @return multitype:
	 */
	public function getUserInfo2Data() {
		// number of reports
		$query = "SELECT user_id,COUNT(*) as anzahl FROM $this->reporttable GROUP BY user_id";
		$stmt = $this->query($query);
		$userinfo = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->user_id > 0) {
				$userinfo[$line->user_id]["reports"] = $line->anzahl;
			}
		}

		// number of systems
		$query = "SELECT user_id,COUNT(*) as anzahl FROM $this->systemtablename GROUP BY user_id";
		$stmt = $this->query($query);
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$userinfo[$line->user_id]["systems"] = $line->anzahl;
		}
		$query = "SELECT COUNT(*) as anzahl FROM $this->systemtablename";
		$stmt = $this->query($query);
		$number_of_systems = 1; // to avoid division by zero

		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$number_of_systems = $line->anzahl;
		}

		// number of fleet movements
		$query = "SELECT user_id,COUNT(*) as anzahl FROM $this->fleetmovetable GROUP BY user_id";
		$stmt = $this->query($query);
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->user_id > 0) {
				$userinfo[$line->user_id]["fleetmoves"] = $line->anzahl;
			}
		}

		// number of combat reports
		$query = "SELECT userid,COUNT(*) as anzahl FROM $this->combattable GROUP BY userid";
		$stmt = $this->query($query);
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->userid > 0) {
				$userinfo[$line->userid]["combats"] = $line->anzahl;
			}
		}

		// number of ingame messages
		$query = "SELECT userid,COUNT(*) as anzahl FROM $this->messagetable GROUP BY userid";
		$stmt = $this->query($query);
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->userid > 0) {
				$userinfo[$line->userid]["messages"] = $line->anzahl;
			}
		}

		$content = array();
		$query = "SELECT id,username, last_submit FROM $this->utablename";
		$stmt = $this->query($query);
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$systems         = 0;
			$systems_percent = 0;
			if(isset($userinfo[$line->id]["systems"])) {
				$systems         = ($userinfo[$line->id]["systems"]);
				$systems_percent = round(($userinfo[$line->id]["systems"]/$number_of_systems*100),1);
			}
			$reports     = (isset($userinfo[$line->id]["reports"]))    ? $userinfo[$line->id]["reports"]    : 0;
			$fleetmoves  = (isset($userinfo[$line->id]["fleetmoves"])) ? $userinfo[$line->id]["fleetmoves"] : 0;
			$combats     = (isset($userinfo[$line->id]["combats"]))    ? $userinfo[$line->id]["combats"]    : 0;
			$messages    = (isset($userinfo[$line->id]["messages"]))   ? $userinfo[$line->id]["messages"]   : 0;
			$last_update = ($line->last_submit <> '0000-00-00') ? $line->last_submit : "";

			array_push($content,
			  array(
                "username"=>$line->username,
                "systems"=>$systems,
                "systems_percent"=>$systems_percent,
                "reports"=>$reports,
                "fleetmoves"=>$fleetmoves,
                "combats"=>$combats,
                "messages"=>$messages,
				"last_update"=>$last_update
              )
            );
		}

		return $content;
	}

	/**
	 * Return an associative array containing information about username, galaxy and counted updates in that galaxy.
	 * @return multitype:
	 */
	public function getSystemInfoData() {

		$query = "SELECT u.username,s.galaxy,count(*) as counter ".
		         "FROM $this->systemtablename s, $this->utablename u ".
		         "WHERE u.id = s.user_id ".
		         "GROUP BY s.galaxy, u.username";
		$stmt = $this->query($query);
		$i=0;
		$content = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$i++;
			array_push($content,
				array(
			        "id"=>$i,
                    "username"=>$line->username,
                    "galaxy"=>$line->galaxy,
                    "counter"=>$line->counter
                )
			);
		}

		return $content;
	}

	/**
	 * Get a JSON formatted list of IP addresses and login time for provided user id.
	 * @param Int $userid Galaxytool UserID
	 * @return boolean|string
	 */
	public function getIPDetails($userid) {
		if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_userman)) return false;
		if (!is_numeric($userid)) return false;
		$userid = intval($userid);
		if ($userid < 1) return false;

		$return_value =
		"{ identifier: 'id',\n".
		"items: [\n";

		$query = "SELECT id, ip, logintime ".
		" FROM $this->iptablename ".
		" WHERE userid=:user_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $userid);
		$res = $this->execute($stmt);

		$first_item = true;
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($first_item) $first_item = false; else $return_value .= ",";

			$return_value .= "{ id:'$line->id',".
			" ip:'".$line->ip."',".
			" logintime:'".$line->logintime."',".
			" }\n";
		}
		$return_value .= "]}\n";

		return $return_value;
	}

	/**
	 * Comparison function required to sort usernames in a case insensitive manner.
	 * @param String $a
	 * @param String $b
	 * @return number
	 */
	private function compare_user_ci($a, $b) {
	    $a = strtolower($a);
	    $b = strtolower($b);
	    return strcasecmp($a, $b);
	}
}

?>