<?php
require_once GALAXYTOOL_ROOT."/languages/english_probes.inc.php";

/*
* Class to convert the XML content into php variables and to insert the content into
* corresponding datebase tables.
*
*/

class MessageParser extends XMLParserGlobal{

	private $messagetable = "";

	private $activity_parser = null;

	function __construct($messagetable,$utablename,$playertable,$player_activitytable,$universe) {
		$this->xml_schema = "xml_schema/message.xsd";
		//  call super constructor
		$result = parent::__construct("DUMMY_TABLE_NAME",$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}
		if (trim($messagetable) == "") return false;

		// local setup
		$this->messagetable = $messagetable;

		// create object to track player activities
		$this->activity_parser = new ActivityParser($player_activitytable,$playertable,$utablename,$universe);
		if ($this->activity_parser === false) return false;

		return $this;
	}

	/**
	 * Insert XML content into database
	 *
	 * @param string $xml_content
	 * @return boolean
	 */
	public function insert_data($xml_content) {
		$xdoc = $this->validate_header($xml_content,XMLParserGlobal::content_type_message);
		if ($xdoc === false) {
			return false;
		}

		$result = $this->insert_message($xdoc,$this->userid);

		// add error or success messages
		$this->check_result($result);

		return $result;
	}

	/**
	 * Insert all messages by collecting all entries from XML doc
	 *
	 * @param unknown_type $xdoc
	 * @param int $userid
	 * @return boolean
	 */
	private function insert_message($xdoc,$userid) {
		$messages = $xdoc->getElementsByTagName("message");
		$messages_data = array();

		foreach ($messages as $message) {
			// extract information from XML file
			$message_data = $this->get_message_data($message);
			if ($message_data === false) {
				return false;
			}
			// store results
			array_push($messages_data, $message_data);
		}
		unset($messages);
		unset($xdoc);

		if ($this->update_messages_at_database($messages_data,$userid)) {
			return true;
		} else {
			return false;
		}

	}


	/**
	 * Get all information from message XML tag
	 *
	 * @param DOMNode $message_DOMNode
	 * @return array with messages details
	 */
	private function get_message_data($message_DOMNode) {
		$return_value                 = array();
		$return_value["msg_id"]       = intval(trim($message_DOMNode->getAttribute("msg_id")));
		$return_value["datetime"]     = trim($message_DOMNode->getAttribute("datetime"));

		// optional attribute - in case the user wants to submit activities only
		if ($message_DOMNode->hasAttribute("subject")) {
			$return_value["subject"]      = trim($message_DOMNode->getAttribute("subject"));
		}

		$activity = $message_DOMNode->getElementsByTagName("activity"); // exactly one
		$return_value["activity"] = $activity->item(0);

		$content = $message_DOMNode->getElementsByTagName("message_content"); // at max one
		if ($content->length != 0) {
			if (!isset($return_value['subject'])) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: TO, MESSAGE_CONTENT and SUBJECT must be provided at the same time");
				return false;
			}
			$return_value["content"] = htmlspecialchars($content->item(0)->nodeValue);
		} else {
			if (isset($return_value['subject'])) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: TO, MESSAGE_CONTENT and SUBJECT must be provided at the same time");
				return false;
			}
		}

		$from = $message_DOMNode->getElementsByTagName("from"); // exactly one
		$return_value["from"] = $this->get_players_data($from->item(0));

		if ($return_value["from"]["playerid"] == 0) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: FROM must have playerid attribute greater zero");
			return false;
		}
		if ($return_value["from"]["playername"] == "") {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: FROM must not have empty playername attribute");
			return false;
		}

		$to = $message_DOMNode->getElementsByTagName("to"); // at max one
		if ($content->length != 0) {
			if (!isset($return_value['subject']) || !isset($return_value['content'])) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: TO, MESSAGE_CONTENT and SUBJECT must be provided at the same time");
				return false;
			}
			$return_value["to"] = $this->get_players_data($to->item(0));
		} else {
			if (isset($return_value['subject']) || isset($return_value['content'])) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: TO, MESSAGE_CONTENT and SUBJECT must be provided at the same time");
				return false;
			}
		}
		if (isset($return_value["to"])) {
			if ($return_value["to"]["playerid"] == 0) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: TO must have playerid attribute greater zero");
				return false;
			}
			if ($return_value["to"]["playername"] == "") {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: TO must not have empty playername attribute");
				return false;
			}
		}

		return $return_value;
	}

	/**
	 * This complex method will determine galaxytool player ids from database and return an array with ogame_playerid as key and also playername
	 * as key with target galaxytool id. If player entries are not yet on database or playername has changed for provided ogame playerid, the player
	 * will be added or updated.
	 *
	 * @param Message Array $messages_data
	 * @return Array
	 */
	private function get_playerid_for_players($messages_data) {
		$return_value = array();

		// collect playernames and IDs first
		$ogame_playerids   = array();

		$player_id_pos     = array();
		$playername_pos    = array();

		$players           = array();

		$collected_playernames = array();
		$collected_palyerids   = array();

		foreach ($messages_data as $message) {
			// FROM is mandatory and also its playerid must be greater than 0
			if ($message['from']['playerid'] > 0 && !isset($collected_palyerids[$message['from']['playerid']])) {

				array_push($ogame_playerids,$message['from']['playerid']);
				array_push($players,array($message['from']['playerid'],$message['from']['playername']));
				$player_id_pos[$message['from']['playerid']] = $playername_pos[strtolower($message['from']['playername'])] = count($players)-1;

				$collected_palyerids[$message['from']['playerid']] = 1; // just a dummy value
				$collected_playernames[strtolower($message['from']['playername'])] = 1; // just a dummy value
			}

			// TO is optional but if it is provided, the playername and playerid is mandatory and must be greater than 0
			if (isset($message['to']['playerid'])) {
				if (!isset($collected_palyerids[$message['to']['playerid']])) {

					$temp = array(0,"");
					if (isset($message['to']['playerid'])) {
						array_push($ogame_playerids,$message['to']['playerid']);
						$temp[0] = $message['to']['playerid'];

						$collected_palyerids[$message['to']['playerid']] = 1; // just a dummy value
					}

					$temp[1] = $message['to']['playername'];
					array_push($players,$temp);
					if ($temp[0] > 0) $player_id_pos[$message['to']['playerid']] = count($players)-1;
					$playername_pos[strtolower($message['to']['playername'])] = count($players)-1;

					$collected_playernames[strtolower($message['to']['playername'])] = 1; // just a dummy value
				}
			}
		}

		// nothing to determine - skip further processing of this method
		if (count($ogame_playerids) == 0) {
			return array();
		}

		// determine galaxytool palyerids from database which have an ogame playerid
		$query = "SELECT id,playername,ogame_playerid FROM $this->playertable WHERE ";
		if (count($ogame_playerids) > 0) {
			$query .= " ogame_playerid IN ('".implode("','",$ogame_playerids)."') ";
		}

		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred during determination of player IDs");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}


		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->ogame_playerid > 0) {
				// get provided player by ID
				if (isset($player_id_pos[$line->ogame_playerid])) {
					$player = $players[$player_id_pos[$line->ogame_playerid]];
					// add third array entry which contains galaxytool player id
					$players[$player_id_pos[$line->ogame_playerid]][2] = $line->id;

					if ($player[1] != $line->playername) {
						// update needed on playername for given ogame playerid
						$update_query = "UPDATE $this->playertable SET playername=".DB::getDB()->quote($player[1])." WHERE ogame_playerid=".$line->ogame_playerid;
						$stmt2 = $this->$query($update_query);
						if (!$stmt2) {
							$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while updating playername");
							$this->error_object->add_child_message($this->get_db_error_object());
							return false;
						}
					}
				} else {
					// no ogame playerid provided from outside, but exists on DB
					// -> must not happen
					$this->error_object = new ErrorObject(ErrorObject::severity_error , "Technical error: ogame_playerid missing");
					return false;
				}

			}
		}
		// variables no longer needed
		unset($player_id_pos);
		unset($playername_pos);
		unset($ogame_playerids);



		// now we checked all players and added its playerid (if it exists) - create insert query to insert remaining players (if needed)
		$insert_query = "INSERT INTO $this->playertable (ogame_playerid, playername) VALUES ";
		$insert_needed = false;
		for ($i=0; $i<count($players);$i++) {
			if (!isset($players[$i][2])) {
				// entry does not exist on DB level
				if (intval($players[$i][0]) == 0) {
					$insert_query .= "(null,";
				} else {
					$insert_query .= "(".intval($players[$i][0]).",";
				}

				$insert_query .= DB::getDB()->quote($players[$i][1])."),";

				$insert_needed = true;
			}
		}

		if ($insert_needed) {
			// remove last comma
			$insert_query = substr($insert_query,0,strlen($insert_query)-1);

			$stmt = $this->query($insert_query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred during insertion of not existing players");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}

			// create return array
			unset($players);
			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred during reselection of all players");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				if ($line->ogame_playerid > 0) {
					$return_value[$line->ogame_playerid]         = $line->id;
				}
				$return_value[strtolower($line->playername)] = $line->id;
			}
		} else {
			// use players array to create return array
			for ($i=0; $i<count($players);$i++) {
				if ($players[$i][0] > 0) {
					$return_value[$players[$i][0]] = $players[$i][2];
				}
				$return_value[strtolower($players[$i][1])] = $players[$i][2];
			}
		}

		return $return_value;
	}


	private function delete_existing_messages_from_array(array &$messages_data) {
		$message_ids = array();
		foreach ($messages_data as $message) {
			array_push($message_ids,$message['msg_id']);
		}

		// check which IDs exist on DB level
		$query = "SELECT msg_id FROM $this->messagetable WHERE msg_id IN ('".implode("','",$message_ids)."')";
		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while checking for existing messages");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		$existing_messages = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$existing_messages[$line->msg_id] = "";
		}
		unset($stmt);
		unset($line);
		unset($message_ids);


		foreach ($messages_data as $key => &$message) {
			if (isset($existing_messages[$message['msg_id']])) {
				// delete message from array
				unset($messages_data[$key]);
			}
		}

	}


	/**
	 * Insert messages and activities into database - messages are optional whereas activities are mandatory
	 *
	 * @param Messages array $messages_data
	 * @param int $userid UserID at galaxytool
	 * @return boolean
	 */
	private function update_messages_at_database(array $messages_data, $userid) {
		// delete messages from array which are already on DB
		$this->delete_existing_messages_from_array($messages_data);

		if (count($messages_data) == 0) return true; // nothing to do

		// determine player_id from database for FROM and TO
		$player_ids = $this->get_playerid_for_players($messages_data);

		$query = "INSERT INTO $this->messagetable (msg_id, messagetime, subject, player_id_from, player_id_to, message_content, userid) VALUES ";

		$insert_needed = false;
		foreach ($messages_data as $message) {
			// inform activity parser
			if (isset($message['activity']) && $message['activity'] != null) {
							// playerid for "FROM" tag
				if (isset($player_ids[$message['from']['playerid']])) {
					$player_id = intval($player_ids[$message['from']['playerid']]);
				} else {
					$player_id = intval($player_ids[strtolower($message['from']['playername'])]);
				}

				if ($player_id > 0) {
					$this->activity_parser->collect_activity($message['activity'], $player_id, ActivityParser::type_message );
				}
			}

			// collect messages if provided
			if (isset($message['content'])) {
				$query .= "(".$message['msg_id'].",";
				$query .= "'".str_replace(".","-",$message['datetime'])."',";
				$query .= DB::getDB()->quote($message['subject']).",";

				// playerid for "FROM" tag
				if (isset($player_ids[$message['from']['playerid']])) {
					$query .= intval($player_ids[$message['from']['playerid']]).",";
				} else {
					$query .= intval($player_ids[strtolower($message['from']['playername'])]).",";
				}

				// playerid for "TO" tag
				if (isset($player_ids[$message['to']['playerid']])) {
					$query .= intval($player_ids[$message['to']['playerid']]).",";
				} else {
					$query .= intval($player_ids[strtolower($message['to']['playername'])]).",";
				}

				$query .= DB::getDB()->quote($message['content']).",";
				$query .= intval($userid)."),";

				$insert_needed = true;
			}

		}
		if ($insert_needed) {
			// remove last comma
			$query = substr($query,0,strlen($query)-1);
			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting messages");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
		}


		// update activity table
		$result = $this->activity_parser->insert_into_database();

		if ($result === true) {
			return true;
		} else {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "Error while updating player activities");
			$this->error_object->add_child_message($this->activity_parser->get_error_object());
			return false;
		}
	}

}