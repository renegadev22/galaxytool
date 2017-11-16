<?php
class ActivityParser extends XMLParserGlobal{

	const type_galaxyview    = "galaxyview";
	const type_scan          = "scan";
	const type_message       = "message";
	const type_manual        = "manual";
	const type_combat_report = "combat_report";
	const type_allypage      = "alliance_page";

	private $activitytable = "";
	private $activity_collection = array();


	function __construct($player_activitytable,$playertable,$utablename,$universe) {
		//$this->xml_schema = "xml_schema/fleet_movement.xsd"; - no own parser needed so far
		//  call super constructor
		$result = parent::__construct("DUMMY_TABLE_NAME",$playertable,$utablename,$universe);
		if ($result === false) {
			return false;
		}

		// local setup
		if (trim($player_activitytable) == "") return false;

		$this->activitytable = $player_activitytable;

		return $this;
	}

	/**
	 * Insert all collected activities into database
	 *
	 * @return Boolean
	 */
	public function insert_into_database() {
		if (count($this->activity_collection) == 0) return true;

		// check if we have any ogame_playerids provided
		$query = "SELECT id, ogame_playerid FROM $this->playertable WHERE ogame_playerid IN(";
		$ogame_playerids_found = false;
		foreach ($this->activity_collection as $entry) {
			if (!empty($entry['ogame_playerid'])) {
				$ogame_playerids_found = true;
				$query .= "'".intval($entry['ogame_playerid'])."',";
			}
		}
		$ogameid_mapping = array();
		if ($ogame_playerids_found) {
			$query = substr($query, 0, strlen($query) - 1); // remove comma
			$query .= ")";
			$stmt = $this->query($query);
			if (!$stmt) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while reading players by ogame playerid");
				$this->error_object->add_child_message($this->get_db_error_object());
				return false;
			}
			while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
				$ogameid_mapping[$line->ogame_playerid] = $line->id;
			}
		}

		$query = "INSERT IGNORE INTO $this->activitytable (player_id, activity_date, hour, minute, weekday, activity_type) VALUES ";

		foreach ($this->activity_collection as $entry) {
			$query .= "(";

			if (!empty($entry['ogame_playerid'])) {
				$query .= $ogameid_mapping[$entry['ogame_playerid']].",";
			} else {
				$query .= $entry['player_id'].",";
			}

			$query .= "'".$entry['year']."-";
			$query .= $entry['month']."-";
			$query .= $entry['day']."',";
			$query .= $entry['hour'].",";
			$query .= $entry['minute'].",";
			$query .= $entry['weekday'].",";
			$query .= "'".$entry['type']."'),";
		}

		// remove last comma
		$query = substr($query,0,strlen($query)-1);

		$stmt = $this->query($query);
		if (!$stmt) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "DB error occurred while inserting activity details");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		return true;
	}

	public function collect_manual_activity($player_id, $year, $month, $day, $hour, $minute, $weekday ) {
		$year    = intval($year);
		$month   = intval($month);
		$day     = intval($day);
		$hour    = intval($hour);
		$minute  = intval($minute);
		$weekday = intval($weekday);

		return $this->buffer_activity($year,$month,$day,$hour,$minute,$weekday,$player_id, null, ActivityParser::type_manual );
	}

	/**
	 * Collect activity information from a galaxyview for one specific user entry.
	 *
	 * @param DOMNode $activity_DOMNode XML node to be parsed
	 * @param int $player_id Galaxytool playerid (optional if $ogame_playerid is provided)
	 * @param string $type Activity type
	 * @param int $ogame_playerid OGame playerid (optional if $player_id is provided)
	 * @return Boolean
	 */
	public function collect_activity(DOMElement $activity_DOMNode,$player_id,$type,$ogame_playerid=null) {
		if ($activity_DOMNode == null) return true; // nothing to do but nothing bad happened

		if (empty($player_id) && empty($ogame_playerid)) throw new InvalidArgumentException("Invalid method call");

		$year    = intval($activity_DOMNode->getAttribute("year"));
		$month   = intval($activity_DOMNode->getAttribute("month"));
		$day     = intval($activity_DOMNode->getAttribute("day"));
		$hour    = intval($activity_DOMNode->getAttribute("hour"));
		$minute  = intval($activity_DOMNode->getAttribute("minute"));
		$weekday = intval($activity_DOMNode->getAttribute("weekday"));

		return $this->buffer_activity($year,$month,$day,$hour,$minute,$weekday,$player_id,$ogame_playerid,$type);

	}


	/**
	 * Add one activity entry to buffer to be inserted into database later.
	 *
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @param int $hour
	 * @param int $minute
	 * @param int $weekday
	 * @param int $player_id
	 * @param int $ogame_playerid
	 * @param String $activity_type
	 * @return Boolean
	 */
	private function buffer_activity($year, $month, $day, $hour, $minute, $weekday, $player_id, $ogame_playerid, $activity_type) {

		if ($year < 2010 || $year > 2100) return false;
		if ($month < 1 || $month > 12)    return false;
		if ($day < 1 || $day > 31)        return false;
		if ($hour < 0 || $hour > 23)      return false;
		if ($minute < 0 || $minute > 59)  return false;
		if ($weekday < 0 || $weekday > 6) return false; // = Sunday
		if (!empty($player_id) && $player_id < 1 || !empty($ogame_playerid) && $ogame_playerid < 1) return false;
		if (strtotime("$year-$month-$day $hour:$minute") > time() + 24*60*60) {
			//prohibiting activity in the distant future
			$this->error_object = new ErrorObject(ErrorObject::severity_error, DETAILEDINFO_DATE_IN_FUTURE);
			return false;
		}

		if (
			$activity_type != ActivityParser::type_combat_report &&
			$activity_type != ActivityParser::type_galaxyview &&
			$activity_type != ActivityParser::type_manual &&
			$activity_type != ActivityParser::type_message &&
			$activity_type != ActivityParser::type_scan &&
			$activity_type != ActivityParser::type_allypage
		) return false;

		if ($weekday == 0) $weekday = 7;

		if ($minute > 52) {
			$time = strtotime("$year-$month-$day $hour:$minute");
			$time += 10*60; // add 10 minutes to get next full hour (day, month or even year)

			$year   = date("Y",$time);
			$month  = date("m",$time);
			$day    = date("d",$time);
			$hour   = date("H",$time);
			$minute = 0;
		} elseif ($minute < 8) {
			$minute = 0;
		} elseif ($minute >= 8 && $minute < 23) {
			$minute = 15;
		} elseif ($minute >= 23 && $minute < 38) {
			$minute = 30;
		} else {
			$minute = 45;
		}

		$entry['year']           = $year;
		$entry['month']          = $month;
		$entry['day']            = $day;
		$entry['hour']           = $hour;
		$entry['minute']         = $minute;
		$entry['weekday']        = $weekday;
		$entry['player_id']      = $player_id;
		$entry['ogame_playerid'] = $ogame_playerid;
		$entry['type']           = $activity_type;

		array_push($this->activity_collection, $entry);

		return true;
	}

}