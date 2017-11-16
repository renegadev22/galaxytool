<?php

/**
 * CRUD services for ingame messages of OGame.
 * @author eX0du5
 *
 */
class Messages extends GenericSuperclass {

	private $messagetable;					// database table name for messages
	private $noticetable;					// database table name for notices
	private $playertable;					// database table name for players

	function __construct($messagetable, $noticetable, $playertable) {
		parent::__construct();

		if ($messagetable == "") throw new InvalidArgumentException("Message table empty");
		$this->messagetable = $messagetable;

		if ($noticetable == "") throw new InvalidArgumentException("Notice table empty");
		$this->noticetable = $noticetable;

		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;
	}


	/**
	 * Return all messages of a user. If playerid is provided return messages from or to that user.
	 * @param Int $playerid
	 * @return boolean|JSon
	 */
	public function get_message_overview($playerid=null) {
		$user_id = $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid);
		if (!is_numeric($user_id)) return false;

		// no outer join to filter for messages where player does not exist
		$query = "SELECT m.id, m.messagetime, m.subject, p.playername FROM $this->messagetable m, $this->playertable p WHERE m.userid=:user_id AND m.player_id_from = p.id";
		if ($playerid > 0) {
			$playerid = intval($playerid);
			$query .= " AND m.player_id_from = :player_id";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":player_id", $playerid);
		} else {
			$stmt = DB::getDB()->prepare($query);
		}
		$stmt->bindParam(":user_id", $user_id);
		$res = $this->execute($stmt);
		if (!$res) return false;

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: [\n";
		$items = 0;
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$return_value .= "{
				id:'$line->id',
				playername:".json_encode($line->playername).",
				subject:".json_encode($line->subject).",
				messagetime: ".json_encode($line->messagetime)." },\n";
			$items++;
		}
		if ($items > 0) {
			$return_value = substr($return_value,0,strlen($return_value)-2)."\n";
		}
		$return_value .= "]}\n";

		return $return_value;
	}

	/**
	 * Return the number of entries to be fetched by get_message_overview()
	 * @param Int $playerid
	 * @return number|boolean
	 */
	public function get_message_count($playerid) {
		$user_id = $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid);
		if (!is_numeric($user_id)) return 0;
		$playerid = intval($playerid);

		// do not use count(*) here, we use the identical query as in get_message_overview() as this will be triggered if the user
		// follows the navigation to the message details and the query can be fulfilled by query buffer this way
		$query = "SELECT m.id, m.messagetime, m.subject, p.playername FROM $this->messagetable m, $this->playertable p WHERE m.userid=:user_id AND m.player_id_from = p.id AND m.player_id_from = player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $playerid);
		$stmt->bindParam(":user_id", $user_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		return $stmt->rowCount();
	}



	/**
	 * Return the message content of a given message ID. If the message does not belong to the current user,
	 * an empty string will be returned.
	 * @param Int $message_id
	 * @return boolean|string
	 */
	public function get_message_content($message_id) {
		$user_id = $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid);
		if (!is_numeric($user_id)) return false;
		if (!is_numeric($message_id) || $message_id < 1) return false;

		$query = "SELECT message_content FROM $this->messagetable WHERE userid=:user_id AND id=:message_id";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $user_id);
		$stmt->bindParam(":message_id", $message_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() != 1) {
			return "";
		}
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$content = $line->message_content;

		$content = $this->get_bb_2_html($content);

		return $content;
	}

	/**
	 * Set the public indicator for given message ID so that other users can read the message
	 * content too.
	 * @param Int $message_id
	 * @return boolean|string
	 */
	public function publish_message($message_id) {
		$user_id = $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid);
		if (!is_numeric($user_id)) return false;

		if (!is_numeric($message_id) || $message_id < 1) return false;

		if (!defined("MESSAGES_PUBLISH_HEADER")) return false;

		// get message content
		$query = "SELECT m.*, ps.playername as sender_name, pt.playername as receipt_name
		FROM $this->messagetable m
		LEFT JOIN $this->playertable ps ON (m.player_id_from = ps.id)
		LEFT JOIN $this->playertable pt ON (m.player_id_to = pt.id)
		WHERE m.userid=:user_id AND m.id = :message_id";

		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $user_id);
		$stmt->bindParam(":message_id", $message_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() != 1) {
			return "";
		}
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$message_content = $line->message_content;
		$playerid        = $line->player_id_from;

		// Workaround needed as notices worked with utf8-encode before inserting into DB and no update mechanism in place now
		$message_content = utf8_encode($message_content);

		$content = utf8_encode(MESSAGES_PUBLISH_HEADER);
		$content = str_replace("&sender","[b]$line->sender_name[/b]",$content);
		$content = str_replace("&recipient","[b]$line->receipt_name[/b]",$content);
		$content = str_replace("&date","[b]$line->messagetime[/b]",$content);
		$content = str_replace("&message",$message_content."\n\n",$content);

		// get notice ID
		$query = "SELECT id FROM $this->noticetable WHERE player_id = :player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $playerid);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) {
			// insert
			$query = "INSERT INTO $this->noticetable (player_id, noticetext, last_update) VALUES (:player_id, :content, NOW())";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":player_id", $playerid);
			$stmt->bindParam(":content", $content);
			
		} else {
			// update
			$line = $stmt->fetch(PDO::FETCH_OBJ);
			$id  = $line->id;

			$query = "UPDATE $this->noticetable SET noticetext = CONCAT(:content, noticetext), last_update = NOW() WHERE id=:id";
			$stmt = DB::getDB()->prepare($query);
			$stmt->bindParam(":id", $id);
			$stmt->bindParam(":content", $content);
		}

		$res = $this->execute($stmt);
		if (!$res) return false;

		return true;
	}

	/**
	 * Delete given message if it belongs to the current user.
	 * @param Int $message_id
	 * @return boolean|string
	 */
	public function delete_message($message_id) {
		$user_id = $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid);
		if (!is_numeric($user_id)) return false;

		if (!is_numeric($message_id) || $message_id < 1) return false;

		// delete message content
		$query = "DELETE FROM $this->messagetable WHERE userid=:user_id AND id = :message_id LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":user_id", $user_id);
		$stmt->bindParam(":message_id", $message_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) {
			return "0 entries deleted";
		} else {
			return true;
		}

	}

	/**
	 * Format BB Codes as HTML codes.
	 * @param String $content
	 * @return mixed
	 */
	public static function get_bb_2_html($content) {
		$content = str_replace("\n","<br>\n",$content);

		$content = str_replace("[p]","<p>",$content);
		$content = str_replace("[/p]","</p>",$content);
		$content = str_replace("[b]","<b>",$content);
		$content = str_replace("[/b]","</b>",$content);
		$content = str_replace("[u]","<u>",$content);
		$content = str_replace("[/u]","</u>",$content);
		$content = str_replace("[s]","<s>",$content);
		$content = str_replace("[/s]","</s>",$content);
		$content = str_replace("[i]","<i>",$content);
		$content = str_replace("[/i]","</i>",$content);

		$content = str_replace("[sub]","<sub>",$content);
		$content = str_replace("[/sub]","</sub>",$content);
		$content = str_replace("[sup]","<sup>",$content);
		$content = str_replace("[/sup]","</sup>",$content);


		$content = str_replace("[*]","</li><li>",$content);
		$content = str_replace("[list]</li>","<ul>",$content);
		$content = str_replace("[/list]","</li></ul>",$content);

		$content = preg_replace("#\[color\=(\#[0-9A-F]{0,6}|[A-z]+)\](.*)\[\/color\]#Ui", "<span style=\"color: $1;\">$2</span>", $content);
		$content = preg_replace("#\[size\=([0-9A-F]{0,2})\](.*)\[\/size\]#Ui", "<span style=\"font-size: $1;\">$2</span>", $content);
		$content = preg_replace("#\[font\=(.*)\](.*)\[\/font\]#Ui", "<span style=\"font-family: $1;\">$2</span>", $content);

		$content = preg_replace("#\[url\](https?\:\/\/.+?)\[\/url\]#i", "<a class=\"link\" href=\"$1\">$1</a>", $content);
		$content = preg_replace("#\[url\=(https?\:\/\/.+?)\](.*?)\[\/url\]#i", "<a class=\"link\" href=\"$1\">$2</a>", $content);

		$content = preg_replace("#\[email\](mailto\:.+?)\[\/email\]#i", "<a class=\"link\" href=\"$1\">$1</a>", $content);
		$content = preg_replace("#\[email\=(mailto\:.+?)\](.*?)\[\/email\]#i", "<a class=\"link\" href=\"$1\">$2</a>", $content);

		$content = preg_replace("#\[center\](.*)\[\/center\]#Ui", "<div style=\"text-align: center;\">$1</div>", $content);
		$content = preg_replace("#\[align\=(.*)\](.*)\[\/align\]#Ui", "<div style=\"text-align: $1;\">$2</div>", $content);

		$content = preg_replace("#\[player\=(.*)\](.*)\[\/player\]#Ui", "<a class=\"link\" href=\"playerinformation.php?ogame_id=$1\">$2</a>", $content);

		$content = preg_replace("#\[coordinates\](\[(\d+)\:(\d+)\:\d+\]+)\[\/coordinates\]#i", "<a class=\"link\" href=\"galaxyview.php?gala=$2&system=$3\">$1</a>", $content);

		return $content;
	}

}
?>