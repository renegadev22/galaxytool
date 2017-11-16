<?php

class Shoutbox extends GenericSuperclass {

	private $shouttable;					// database table name for news

	function __construct($shouttable) {
		parent::__construct();

		if (empty($shouttable)) throw new InvalidArgumentException("Shoutbox table empty");
		$this->shouttable = $shouttable;
	}


	public function delete_entry($id) {
		if (!is_numeric($id) || $id < 1) return false;
		if ($_SESSION['s_auth']->get_permission(iAuthorization::permission_candelete) != true) return false; // no permission

		$query = "DELETE FROM $this->shouttable WHERE id=:id LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":id", $id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		return true;
	}


	public function insert_entry($comment, $username, $maxshouts) {
		if (strlen($comment > 255)) $comment = substr($comment,0,255);

		if (empty($comment)) {
			return false;
		}

		$query = "INSERT INTO $this->shouttable (username,shouttext,shoutdate) VALUES (:username,:shouttext,NOW())";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":shouttext", $comment);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		$query = "SELECT id,shoutdate FROM $this->shouttable WHERE id > 0";
		$stmt = $this->query($query);
		if ($stmt === false) return false;
		$number = $stmt->rowCount();
		if ($number > $maxshouts) {
			// sort by shoutdate asc
			$shouts_sorted = array();
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$shouts_sorted[$line->id] = $line->shoutdate;
			}
			asort($shouts_sorted);
			unset($res);

			$where = " id IN (";
			$i = 0;
			foreach($shouts_sorted as $id => $shoutdate) {
				if ($i < ($number-$maxshouts)) $where .= $id.",";
				else break;
				$i++;
			}
			$where = substr($where,0,strlen($where)-1).")";
			$query = "DELETE FROM $this->shouttable WHERE ".$where;
			$res = $this->exec($query);
			if ($res === false) return false;
		}
		return true;
	}

	public function read_data($timezone_offset, $json = false) {
		$query = "SELECT *,CONVERT_TZ(shoutdate, '+00:00', '".$timezone_offset."') as shoutdate FROM $this->shouttable WHERE id > 0";
		$stmt = $this->query($query);
		if ($stmt === false) return false;
		$shout_entries = array();
		$shouts_sorted = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$shout_entries[$line->id]["date"]      = $line->shoutdate;
			$shout_entries[$line->id]["username"]  = $line->username;
			$shout_entries[$line->id]["shouttext"] = $line->shouttext;
			$shouts_sorted[$line->id]              = $line->shoutdate;
		}
		asort($shouts_sorted);

		$return_value =
		"{ \"identifier\": \"id\",\n".
		"\"label\": \"id\",\n".
		"\"items\": [\n";

		$return_array = array();
		foreach($shouts_sorted as $id => $shoutdate) {
			$return_array[$id]["date"]      = substr($shout_entries[$id]["date"],5,11);
			$return_array[$id]["username"]  = $shout_entries[$id]["username"];
			$return_array[$id]["shouttext"] = $shout_entries[$id]["shouttext"];

			if ($json !== false) {
				$return_value .= "{ \"id\":\"".$id."\",
				\"date\":".json_encode($return_array[$id]["date"]).",
				\"username\":".json_encode($return_array[$id]["username"]).",
				\"shouttext\":".json_encode($return_array[$id]["shouttext"])." },\n";
			}
		}

		if ($json === false) {
			return $return_array;
		} else {
			if (count($return_array) > 0) {
				$return_value = substr($return_value,0,strlen($return_value)-2)."\n";
			}
			$return_value .= "]}\n";

			return $return_value;
		}

	}

}