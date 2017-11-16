<?php
/**
 * CRUD services for notices.
 * @author eX0du5
 *
 */
class Notices extends GenericSuperclass {

	private $noticetable = "";
	private $playertable = "";


	function __construct($noticetable, $playertable) {
		parent::__construct();

		if ($noticetable == "") throw new InvalidArgumentException("Notice table empty");
		$this->noticetable = $noticetable;

		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;

		if (!defined("NOTICE_DELETED")) throw new InvalidArgumentException("Language file not loaded");
	}

	/**
	 * Return an array with information about playername, notice text and last update. Text and update are empty if no notice exists for the player.
	 * If the player does not exist, an error message is raised and return = false.
	 * @param Int $playerid
	 * @return boolean|Array
	 */
	public function get_notice($playerid) {
		if (!is_numeric($playerid)) return false;
		if ($playerid < 1) return false;

		$query = "SELECT n.*, p.playername, CONVERT_TZ(n.last_update, '+00:00', '".$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."') as updatetime ".
		         "FROM $this->playertable p LEFT JOIN $this->noticetable n ON (n.player_id = p.id) ".
		         "WHERE p.id=:player_id LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $playerid);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() == 0) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error, NOTICE_NOTHING);
			return false;
		}

		$row = $stmt->fetch(PDO::FETCH_OBJ);
		return array(
			"playername"=>$row->playername,
			"noticetext" => utf8_decode($row->noticetext),
			"updatetime" => $row->updatetime
		);
	}


	/**
	 * Update notice content of a player. This could also mean the creation of the notice.
	 * @param Int $playerid
	 * @param String $text
	 * @return boolean
	 */
	public function update_notice($playerid,$text) {
		if (!is_numeric($playerid)) return false;
		if ($playerid < 1) return false;

		$text = stripslashes(trim($text));
		$text = str_replace("<","&lt;",$text);
		$text = str_replace(">","&gt;",$text);
		$text = utf8_encode($text);

		$text = substr($text, 0, 65000);

		$query = "REPLACE INTO $this->noticetable ".
			     "SET noticetext=:text, player_id=:player_id, last_update=NOW()";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $playerid);
		$stmt->bindParam(":text", $text);
		$res = $this->execute($stmt);
		if (!$res) return false;

		$this->error_object = new ErrorObject(ErrorObject::severity_info, NOTICE_SAVED);
		return true;
	}


	/**
	 * Delete notices for given player
	 * @param Int $playerid
	 * @return boolean
	 */
	public function delete_notice($playerid) {
		if (!is_numeric($playerid)) return false;
		if ($playerid < 1) return false;

		$query = "DELETE FROM $this->noticetable WHERE player_id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $playerid);
		$res = $this->execute($stmt);
		if (!$res) return false;
		if ($stmt->rowCount() > 0) {
			$this->error_object = new ErrorObject(ErrorObject::severity_info, NOTICE_DELETED);
			return true;
		}

		$this->error_object = new ErrorObject(ErrorObject::severity_error, NOTICE_NOTHING);
		return false;
	}


}