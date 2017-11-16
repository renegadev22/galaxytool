<?php

/**
 * Data retrieval class for Ally and Player history
 * @author eX0du5
 *
 */
class History extends GenericSuperclass {

	private $dbtablename   = null;
	private $playerhistory = null;
	private $allyhistory   = null;

	const type_score  = "points";
	const type_escore = "epoints";
	const type_fscore = "fpoints";
	const type_rscore = "rpoints";


	public function __construct($dbtablename, $playerhistory, $allyhistory) {
		parent::__construct();

		if ($dbtablename == "") throw new InvalidArgumentException("Galaxy table empty");
		$this->dbtablename = $dbtablename;

		if ($playerhistory == "") throw new InvalidArgumentException("Playerhistory table empty");
		$this->playerhistory = $playerhistory;

		if ($allyhistory == "") throw new InvalidArgumentException("Allyhistory table empty");
		$this->allyhistory = $allyhistory;

	}


	public function get_scores($type, $timespan, array $playerIDs, array $allyIDs) {
		if ($type != History::type_score && $type != History::type_escore && $type != History::type_fscore && $type != History::type_rscore) throw new InvalidArgumentException("Invalid type");
		$timespan = intval($timespan);

		$player_ids = array();
		foreach ($playerIDs as $id) {
			$id = intval($id);
			if ($id > 0) array_push($player_ids, $id);
		}

		$ally_ids = array();
		foreach ($allyIDs as $id) {
			$id = intval($id);
			if ($id > 0) array_push($ally_ids, $id);
		}

		$results = array();

		if ($timespan < 1) {
			// monthly scores

			// players
			if (count($player_ids) > 0) {
				$query = "SELECT player_id,year, month, avg($type) as scores
			          FROM $this->playerhistory
			          WHERE player_id IN ('".implode("','",$player_ids)."')
			          GROUP BY player_id,year,month
			          ORDER BY year,month";

				$stmt = $this->query($query);
				if (!$stmt) return false;
				while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
					$date = $line->year."-".$line->month;
					$results[$date]["p"][$line->player_id] = intval($line->scores);
				}
			}

			// alliances
			if (count($ally_ids) > 0) {
				$query = "SELECT alliance_id,year, month, avg($type) as scores
			          FROM $this->allyhistory
			          WHERE alliance_id IN ('".implode("','",$ally_ids)."')
			          GROUP BY alliance_id,year,month
			          ORDER BY year,month";

				$stmt = $this->query($query);
				if (!$stmt) return false;
				while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
					$date = $line->year."-".$line->month;
					$results[$date]["a"][$line->alliance_id] = intval($line->scores);
				}
			}

		} else {
			// last x days
			$start_date = date("Y-m-d", time() - 86400 * $timespan + $_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset));
			$start_date = explode("-",$start_date);
			$year  = $start_date[0];
			$month = $start_date[1];
			$day   = $start_date[2];

			// players
			if (count($player_ids) > 0) {
				$query = "SELECT player_id,year, month, day, $type as scores
			          FROM $this->playerhistory
			          WHERE player_id IN ('".implode("','",$player_ids)."') AND ( year>$year OR (year=$year AND month>$month) OR (year=$year AND month=$month AND day>$day) )
			          ORDER BY year,month,day";

				$stmt = $this->query($query);
				if (!$stmt) return false;
				while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
					$date = $line->year."-".$line->month."-".$line->day;
					$results[$date]["p"][$line->player_id] = intval($line->scores);
				}
			}

			// alliances
			if (count($ally_ids) > 0) {
				$query = "SELECT alliance_id,year, month, day, $type as scores
			          FROM $this->allyhistory
			          WHERE alliance_id IN ('".implode("','",$ally_ids)."') AND ( year>$year OR (year=$year AND month>$month) OR (year=$year AND month=$month AND day>$day) )
			          ORDER BY year,month,day";

				$stmt = $this->query($query);
				if (!$stmt) return false;
				while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
					$date = $line->year."-".$line->month."-".$line->day;
					$results[$date]["a"][$line->alliance_id] = intval($line->scores);
				}
			}

		}

		return $results;


	}

}
