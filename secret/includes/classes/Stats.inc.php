<?php

/**
 * CRUD services for OGame statistics within the Galaxytool. Delivers all required data
 * to display or update statistics pages.
 * @author eX0du5
 *
 */
class Stats extends GenericSuperclass {

	private $utablename  = null;
	private $playertable = null;
	private $allytable = null;

	const ascending  = "ASC";
	const descending = "DESC";

	public function __construct( $utablename, $playertable, $allytable ) {
		parent::__construct();

		if ($utablename == "") throw new InvalidArgumentException("User table empty");
		$this->utablename = $utablename;

		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;

		if ($allytable == "") throw new InvalidArgumentException("Ally table empty");
		$this->allytable = $allytable;

		return true;
	}

	public function getPlayerStats($start, $count, $sort, $sortorder, $inactive, $vacation, $noob) {
		$start = intval($start);
		$count = intval($count);

		if (!defined("PLAYER_BANNED")) return false;
		if ($start < 0) return false;
		if ($count < 0) return false;
		if ($inactive != "i" && $inactive != "I" && $inactive != "true" && $inactive != "false" && $inactive != null) return false;
		if ($vacation != "true" && $vacation != "false" && $vacation != null) return false;
		if ($noob != "true" && $noob != "false" && $noob != null) return false;

		switch ($sort) {
			case "rank": $sort = "rank"; break;
			case "hrank": $sort = "hrank"; break;
			case "name": $sort = "playername"; break;
			case "status": $sort = "rank"; break; // no sort by status string possible
			case "allyname": $sort = "allyname"; break;
			case "score": $sort = "points"; break;
			case "fleet": $sort = "fpoints"; break;
			case "research": $sort = "rpoints"; break;
			case "economy": $sort = "epoints"; break;
			case "honour": $sort = "hpoints"; break;
			case "fbrank" : break;
			case "fb": $sort = "fbpoints"; break;
			case "fd": $sort = "fdpoints"; break;
			case "fl": $sort = "flpoints"; break;

			default: return false;
		}

		if ($sortorder != Stats::ascending && $sortorder != Stats::descending) return false;

		$where_selection = ""; // starts with AND
		if ($inactive != null) {
			if ($inactive == "true") {
				$where_selection .= " AND inactive='true'"; // returns also long inactive players
			} elseif ($inactive == "i") {
				$where_selection .= " AND inactive='true' AND long_inactive='false'"; // only i
			} elseif ($inactive == "I") {
				$where_selection .= " AND long_inactive='true'";
			} elseif ($inactive == "false") {
				$where_selection .= " AND inactive='false'"; // covers also long_inactive = false
			}
		}
		if ($vacation != null) {
			$where_selection .= " AND vacation=".DB::getDB()->quote($vacation);
		}
		if ($noob != null) {
			$where_selection .= " AND noob=".DB::getDB()->quote($noob);
		}

		// determine number of rows
		$query = "SELECT count(*)as counter FROM $this->playertable WHERE rank > 0 $where_selection";
		$stmt = $this->query($query);
		if (!$stmt) return false;
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$counter = $line->counter;

		$query = "SELECT u.username, p.*,DATE_FORMAT(CONVERT_TZ(p.last_stats_update, '+00:00',".
		" '".$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."'), '%d. %m. %Y - %H:%i:%s') as last_stats_update, ".
		" a.allyname, a.diplomatic_status as dipl_status".
		" FROM $this->playertable p".
		" LEFT JOIN $this->allytable a ON (p.alliance_id = a.id)".
		" LEFT JOIN $this->utablename u ON (p.user_id = u.id)".
		" WHERE p.rank > 0 AND p.banned='false' $where_selection ORDER BY $sort $sortorder LIMIT $start,$count";
		$stmt = $this->query($query);
		if (!$stmt) return false;

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"numRows: $counter,\n".
		"items: [\n";

		$first_item = true;
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($first_item) $first_item = false;
			else $return_value .= ",";

			$status = ($line->banned == "true") ? PLAYER_BANNED : "";
			$status .= ($line->vacation == "true") ? PLAYER_VACATION_MODE : "";
			$status .= ($line->noob == "true") ? PLAYER_NOOB : "";
			$status .= ($line->inactive == "true") ? PLAYER_INACTIVE : "";
			$status .= ($line->long_inactive == "true") ? PLAYER_LONG_INACTIVE : "";

			$return_value .= "{ id:'$line->id',".
			" rank:'$line->rank',".
			" erank:'$line->erank',".
			" rrank:'$line->rrank',".
			" frank:'$line->frank',".
			" hrank:'$line->hrank',".
			" fbrank:'$line->fbrank',".
			" fdrank:'$line->fdrank',".
			" flrank:'$line->flrank',".
			" name: ".json_encode($line->playername).",".
			" status:'$status',".
			" allyname:".json_encode($line->allyname).",".
			" a_id:'$line->alliance_id',".
			" score:'$line->points',".
			" economy:'$line->epoints',".
			" fleet:'$line->fpoints',".
			" research:'$line->rpoints',".
			" honour:'$line->hpoints',".
			" fb:'$line->fbpoints',".
			" fd:'$line->fdpoints',".
			" fl:'$line->flpoints',".
			" last_update:'$line->last_stats_update',".
			" username:'$line->username',".
			" p_status:'$line->diplomatic_status',".
			" a_status:'$line->dipl_status'".
			" }\n";
		}


		$return_value .= "]}\n";


		return $return_value;
	}

	public function getAllyStats($start, $count, $sort, $sortorder) {

		$start = intval($start);
		$count = intval($count);

		if (!defined("PLAYER_BANNED")) return false;// no language file loaded
		if ($start < 0) return false;
		if ($count < 0) return false;

		switch ($sort) {
			case "rank": $sort = "rank"; break;
			case "hrank": $sort = "hrank"; break;
			case "member": $sort = "members"; break;
			case "allyname": $sort = "allyname"; break;
			case "score": $sort = "points"; break;
			case "fleet": $sort = "fpoints"; break;
			case "research": $sort = "rpoints"; break;
			case "economy": $sort = "epoints"; break;
			case "honour": $sort = "hpoints"; break;
			case "fbrank" : break;
			case "fb": $sort = "fbpoints"; break;
			case "fd": $sort = "fdpoints"; break;
			case "fl": $sort = "flpoints"; break;

			default: return false;
		}

		if ($sortorder != Stats::ascending && $sortorder != Stats::descending) return false;

		// determine number of rows
		$query = "SELECT count(*)as counter FROM $this->allytable WHERE rank > 0";
		$stmt = $this->query($query);
		if (!$stmt) return false;

		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$counter = $line->counter;

		$query = "SELECT a.*, DATE_FORMAT(CONVERT_TZ(last_update, '+00:00', '".$_SESSION['s_auth']->get_setting(iAuthorization::setting_timezone_offset)."') , '%d. %m. %Y - %H:%i:%s') as last_update, ".
		" u.username ".
		" FROM $this->allytable a".
		" LEFT JOIN $this->utablename u ON (a.user_id = u.id)".
		" WHERE a.rank > 0 ORDER BY $sort $sortorder LIMIT $start,$count";
		$stmt = $this->query($query);
		if (!$stmt) return false;

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"numRows: $counter,\n".
		"items: [\n";

		$first_item = true;
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($first_item) $first_item = false;
			else $return_value .= ",";

			$return_value .= "{ id:'$line->id',".
			" rank:'$line->rank',".
			" erank:'$line->erank',".
			" rrank:'$line->rrank',".
			" frank:'$line->frank',".
			" hrank:'$line->hrank',".
			" fbrank:'$line->fbrank',".
			" fdrank:'$line->fdrank',".
			" flrank:'$line->flrank',".
			" member:'$line->members',".
			" allyname:".json_encode($line->allyname).",".
			" score:'$line->points',".
			" economy:'$line->epoints',".
			" fleet:'$line->fpoints',".
			" research:'$line->rpoints',".
			" honour:'$line->hpoints',".
			" fb:'$line->fbpoints',".
			" fd:'$line->fdpoints',".
			" fl:'$line->flpoints',".
			" last_update:'$line->last_update',".
			" username:'$line->username',".
			" a_status:'$line->diplomatic_status'".
			" }\n";
		}


		$return_value .= "]}\n";


		return $return_value;

	}

	public function getAllyGraph($alliance_id) {
		$alliance_id = intval($alliance_id);

		if (!defined("PLAYER_BANNED")) return false;// no language file loaded
		if ($alliance_id < 1) return false;

		$content = "";

		$query = "SELECT points,epoints,fpoints,rpoints FROM $this->allytable WHERE id=:alliance_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":alliance_id", $alliance_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		$line = $stmt->fetch(PDO::FETCH_OBJ);
		$ally_points  = $line->points;
		$ally_epoints = $line->epoints;
		$ally_fpoints = $line->fpoints;
		$ally_rpoints = $line->rpoints;

		$query = "SELECT playername, points, epoints, fpoints, rpoints ".
		" FROM $this->playertable ".
		" WHERE alliance_id=:alliance_id ".
		" ORDER BY points DESC LIMIT 10";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":alliance_id", $alliance_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		$points  = array();
		$legend  = array();
		$epoints = array();
		$elegend = array();
		$fpoints = array();
		$flegend = array();
		$rpoints = array();
		$rlegend = array();

		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->points > 0) {
				array_push($legend,urlencode($line->playername));
				array_push($points,$line->points);
				$ally_points -= $line->points;
			}
			if ($line->epoints > 0) {
				array_push($elegend,urlencode($line->playername));
				array_push($epoints,$line->epoints);
				$ally_epoints -= $line->epoints;
			}
			if ($line->fpoints > 0) {
				array_push($flegend,urlencode($line->playername));
				array_push($fpoints,$line->fpoints);
				$ally_fpoints -= $line->fpoints;
			}
			if ($line->rpoints > 0) {
				array_push($rlegend,urlencode($line->playername));
				array_push($rpoints,$line->rpoints);
				$ally_rpoints -= $line->rpoints;
			}
		}

		// Score Pie
		if ($ally_points > 0) {
			array_push($legend,STATS_UNKNOWN);
			array_push($points,$ally_points); // add the rest of all points
		}

		if ($ally_epoints > 0) {
			array_push($elegend,STATS_UNKNOWN);
			array_push($epoints,$ally_epoints); // add the rest of all points
		}

		if ($ally_fpoints > 0) {
			array_push($flegend,STATS_UNKNOWN);
			array_push($fpoints,$ally_fpoints); // add the rest of all points
		}

		if ($ally_rpoints > 0) {
			array_push($rlegend,STATS_UNKNOWN);
			array_push($rpoints,$ally_rpoints); // add the rest of all points
		}

		/* Google API for pie charts */
		$picture_url = 'https://chart.googleapis.com/chart'.
		'?chs=400x275'. // width + height
		'&chf=bg,s,13181D'. // bg color
		'&chxs=0,4F9FC8,10'. // legend color and text size
		'&chts=4F9FC8,16.5'. // title color and size
		'&cht=p3'.
		'&chco=FF0000,00FF00|00CC00,0000FF|000066,FF00FF'. // color
		'&chma=70,70'.
		'&chxt=x';

		if (count($points) > 0) {
			$points_url = $picture_url .
			'&chtt='.urlencode(STATS_SCORE).
			'&chds=0,'.max($points). //range
			'&chd=t:'.implode(",",$points). // data
			'&chl='.implode("|",$legend); // legend separated by |
			$content .= '<div><img src="'.$points_url.'" width="400" height="275" border="0" /></div>';
		}
		if (count($epoints) > 0) {
			$epoints_url = $picture_url .
			'&chtt='.urlencode(STATS_ECONOMY).
			'&chds=0,'.max($epoints). //range
			'&chd=t:'.implode(",",$epoints). // data
			'&chl='.implode("|",$elegend); // legend separated by |
			$content .= '<div><img src="'.$epoints_url.'" width="400" height="275" border="0" /></div>';
		}
		if (count($fpoints) > 0) {
			$fpoints_url = $picture_url .
			'&chtt='.urlencode(STATS_MILITARY).
			'&chds=0,'.max($fpoints). //range
			'&chd=t:'.implode(",",$fpoints). // data
			'&chl='.implode("|",$flegend); // legend separated by |
			$content .= '<div><img src="'.$fpoints_url.'" width="400" height="275" border="0" /></div>';
		}

		if (count($rpoints) > 0) {
			$rpoints_url = $picture_url .
			'&chtt='.urlencode(STATS_RESEARCH).
			'&chds=0,'.max($rpoints). //range
			'&chd=t:'.implode(",",$rpoints). // data
			'&chl='.implode("|",$rlegend); // legend separated by |
			$content .= '<div><img src="'.$rpoints_url.'" width="400" height="275" border="0" /></div>';
		}

		/* End Google API preparation */
		return $content;
	}

	public function change_player($player_id, $new_status) {
		$player_id = intval($player_id);
		if ($player_id < 1) return "";

		switch ($new_status) {
			case "neutral": $status = "neutral"; break;
			case "boycott": $status = "boycott"; break;
			case "nap":     $status = "nap";     break;
			case "ally":    $status = "ally";    break;
			case "war":     $status = "war";     break;
			case "own":     $status = "own";     break;
			case "wing":    $status = "wing";    break;
			case "nothing": $status = "nothing"; break;
			default: return "wrong status";
		}
		$query = "UPDATE $this->playertable SET diplomatic_status=:status WHERE id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":status", $status);
		$stmt->bindParam(":player_id", $player_id);
		$res = $this->execute($stmt);
		return $res;
	}

	public function change_alliance($alliance_id, $new_status) {
		$alliance_id = intval($alliance_id);
		if ($alliance_id < 1) return "";

		switch ($new_status) {
			case "neutral": $status = "neutral"; break;
			case "boycott": $status = "boycott"; break;
			case "nap":     $status = "nap";     break;
			case "ally":    $status = "ally";    break;
			case "war":     $status = "war";     break;
			case "own":     $status = "own";     break;
			case "wing":    $status = "wing";    break;
			case "nothing": $status = "nothing"; break;
			default: return "wrong status";
		}

		$query = "UPDATE $this->allytable SET diplomatic_status=:status WHERE id=:alliance_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":status", $status);
		$stmt->bindParam(":alliance_id", $alliance_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		$query = "UPDATE $this->playertable SET diplomatic_status=:status WHERE alliance_id=:alliance_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":status", $status);
		$stmt->bindParam(":alliance_id", $alliance_id);
		$res = $this->execute($stmt);
		return $res;
	}

	public function alliance_delete($alliance_id) {
		$alliance_id = intval($alliance_id);
		if ($alliance_id < 1) return "";

		$query = "UPDATE $this->allytable SET rank=0, points=0, frank=0, fpoints=0, rrank=0, rpoints=0, members=0, last_update=NOW(),diplomatic_status='nothing' WHERE id=:alliance_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":alliance_id", $alliance_id);
		$res = $this->execute($stmt);
		return $res;
	}

	public function player_delete($player_id, $playerhistory, $noticetable, $dbtablename, $combatparty, $combattable, $player_activity, $messagetable) {
		$player_id= intval($player_id);
		if ($player_id < 1) return false;

		$query = "SELECT ogame_playerid FROM ".$this->playertable." WHERE id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $player_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		$line = $stmt->fetch(PDO::FETCH_OBJ);
		if ($stmt->rowCount() < 1) return false;
		$ogame_playerid = $line->ogame_playerid;
		
		
		$query = "DELETE FROM $this->playertable WHERE id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $player_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;

		// delete referenced information
		$query = "DELETE FROM $playerhistory WHERE player_id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $player_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		 
		$query = "DELETE FROM $noticetable WHERE player_id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $player_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		 
		$query = "DELETE FROM $dbtablename WHERE ogame_playerid=:ogame_playerid";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":ogame_playerid", $ogame_playerid);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		 
		$query = "SELECT combat_id FROM $combatparty WHERE player_id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $player_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		 
		$combat_ids = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			array_push($combat_ids,$line->combat_id);
		}
		if (count($combat_ids) > 0) {
			$query = "DELETE FROM $combattable WHERE id IN (".implode(",",$combat_ids).")";
			$res = $this->exec($query);
			if ($res === false) return false;

			$query = "DELETE FROM $combatparty WHERE combat_id IN (".implode(",",$combat_ids).")";
			$res = $this->exec($query);
			if ($res === false) return false;

		}
		 
		$query = "DELETE FROM $player_activity WHERE player_id=:player_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id", $player_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		 
		$query = "DELETE FROM $messagetable WHERE player_id_from=:player_id1 OR player_id_to=:player_id2";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":player_id1", $player_id);
		$stmt->bindParam(":player_id2", $player_id);
		$res = $this->execute($stmt);
		if ($res === false) return false;
		 
		return true;
	}

}
?>