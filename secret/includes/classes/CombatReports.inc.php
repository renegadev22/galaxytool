<?php
/**
 * CRUD services for combat reports.
 * @author eX0du5
 *
 */
class CombatReports extends GenericSuperclass {

	private $combat_party_table;			// database table name for combat report parties
	private $combat_report_table;			// database table name for combat reports
	private $playertable;					// database table name for players
	private $usertable;                     // database table for galaxytool user

	function __construct($combat_report_table, $combat_party_table, $playertable, $usertable) {
		parent::__construct();

		if ($combat_report_table == "") throw new InvalidArgumentException("Combat Report table empty");
		$this->combat_report_table = $combat_report_table;

		if ($combat_party_table == "") throw new InvalidArgumentException("Combat Party table empty");
		$this->combat_party_table = $combat_party_table;

		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;

		if ($usertable == "") throw new InvalidArgumentException("User table empty");
		$this->usertable = $usertable;
	}

	public function get_search_csv($attacker, $defender, $owner, $public, $date_from, $date_to, $coordinates) {
		$owner    = intval($owner);
		$attacker = str_replace("*", "%", $attacker);
		$defender = str_replace("*", "%", $defender);
		if (preg_replace("/\d\d\d\d-\d\d-\d\d/","",$date_from) != "") { // this will also allow empty dates
			// date not ok
			return "";
		}
		if (preg_replace("/\d\d\d\d-\d\d-\d\d/","",$date_to) != "") { // this will also allow empty dates
			// date not ok
			return "";
		}

		if (CoordinatesHelper::validate_coordinates($coordinates) !== true) return "Wrong coordinates";


		$query = "SELECT pa.playername as attacker, pd.playername as defender, cr.combattime, cr.winner, cr.id, cr.public, u.username, cr.userid, ".
		" CONCAT(cpa.galaxy, ':', cpa.system, ':', cpa.planet) as a_coordinates, ".
		" CONCAT(cpd.galaxy, ':', cpd.system, ':', cpd.planet) as d_coordinates, ".
		" pa.waffentech as a_waffentech, pa.schildtech as a_schildtech, pa.rpz as a_rpz, ".
		" pd.waffentech as d_waffentech, pd.schildtech as d_schildtech, pd.rpz as d_rpz, ".
		" cr.loot_metal, cr.loot_crystal, cr.loot_deuterium, cr.debris_metal, cr.debris_crystal, ".
		" cpa.lost_units as lost_a, cpd.lost_units as lost_d ".
		"FROM $this->combat_report_table cr ".
		"INNER JOIN $this->usertable u ON (cr.userid = u.id) ".
		"INNER JOIN $this->combat_party_table cpa ON (cr.id = cpa.combat_id AND cpa.combat_type='attacker') ".
		"INNER JOIN $this->combat_party_table cpd ON (cr.id = cpd.combat_id AND cpd.combat_type='defender') ".
		"LEFT JOIN $this->playertable pa ON (cpa.player_id = pa.id) ".
		"LEFT JOIN $this->playertable pd ON (cpd.player_id = pd.id) ";

		if ($owner > 0 && $owner != $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)) { // owner explicitly specified, but not own user
			$query .= "WHERE (cr.userid=".$owner." AND cr.public='true')"; // to ensure that only public reports are shown, regardless of selection
		} elseif ($owner < 1) {
			// we have no owner specified
			if ($public == "false") {
				// in this case we can only find our own reports which are not public (strange selection)
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND cr.public='false')";
			} elseif ($public == "true") {
				// user is not of interest, only public ones shall be found
				$query .= "WHERE (cr.public='true')";
			} else {
				// user and public status not of interest -> show all own reports + publuc ones
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." OR cr.public='true')";
			}
		} else {
			// it is our own user
			if ($public == "true") {
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND cr.public='true')";
			} elseif($public == "false") {
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND cr.public='false')";
			} else {
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid).")";
			}
		}

		if ($attacker != "") {
			$query .= " AND pa.playername LIKE ".DB::getDB()->quote($attacker);
		}
		if ($defender != "") {
			$query .= " AND pd.playername LIKE ".DB::getDB()->quote($defender);
		}
		if ($date_from != "") {
			$query .= " AND combattime > '".$date_from." 00:00:00'";
		}
		if ($date_to != "") {
			$query .= " AND combattime < '".$date_to." 23:59:59'";
		}

		// coordinates
		$query .= CoordinatesHelper::get_coordinate_where_statement($coordinates, "cpd");

		$stmt = $this->query($query);
		if (!$stmt) return false;

		$csv_content  = "attacker,attacker coordinates,defender,defender coordinates,combat date,combat time,winner,public,owner,loot metal,loot crystal,loot deuterium,";
		$csv_content .= "debris metal,debris crystal,losses attacker,losses defender,";
		$csv_content .= "attacker weapon tech,attacker shield tech,attacker armour tech,defender weapon tech,defender shield tech,defender armour tech,\n";
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$csv_content .= $line->attacker.",";
			$csv_content .= "=\"".$line->a_coordinates."\",";
			$csv_content .= $line->defender.",";
			$csv_content .= "=\"".$line->d_coordinates."\",";
			$csv_content .= substr($line->combattime, 0, 10).",";
			$csv_content .= substr($line->combattime, 10).",";
			$csv_content .= $line->winner.",";
			$csv_content .= $line->public.",";
			$csv_content .= $line->username.",";
			$csv_content .= $line->loot_metal.",";
			$csv_content .= $line->loot_crystal.",";
			$csv_content .= $line->loot_deuterium.",";
			$csv_content .= $line->debris_metal.",";
			$csv_content .= $line->debris_crystal.",";
			$csv_content .= $line->lost_a.",";
			$csv_content .= $line->lost_d.",";
			$csv_content .= $line->a_waffentech.",";
			$csv_content .= $line->a_schildtech.",";
			$csv_content .= $line->a_rpz.",";
			$csv_content .= $line->d_waffentech.",";
			$csv_content .= $line->d_schildtech.",";
			$csv_content .= $line->d_rpz.",";
			$csv_content .= "\n";
		}

		return $csv_content;
	}

	public function get_search_results($attacker, $defender, $owner, $public, $date_from, $date_to, $coordinates) {
		$owner    = intval($owner);
		$attacker = str_replace("*", "%", $attacker);
		$defender = str_replace("*", "%", $defender);
		if (preg_replace("/\d\d\d\d-\d\d-\d\d/","",$date_from) != "") { // this will also allow empty dates
			// date not ok
			return "";
		}
		if (preg_replace("/\d\d\d\d-\d\d-\d\d/","",$date_to) != "") { // this will also allow empty dates
			// date not ok
			return "";
		}

		if (CoordinatesHelper::validate_coordinates($coordinates) !== true) return "Wrong coordinates";


		$query = "SELECT pa.playername as attacker, pd.playername as defender, cr.combattime, cr.winner, cr.id, cr.public, u.username, cr.userid, ".
		" cr.loot_metal, cr.loot_crystal, cr.loot_deuterium, cr.debris_metal, cr.debris_crystal ".
		"FROM $this->combat_report_table cr ".
		"INNER JOIN $this->usertable u ON (cr.userid = u.id) ".
		"INNER JOIN $this->combat_party_table cpa ON (cr.id = cpa.combat_id AND cpa.combat_type='attacker') ".
		"INNER JOIN $this->combat_party_table cpd ON (cr.id = cpd.combat_id AND cpd.combat_type='defender') ".
		"LEFT JOIN $this->playertable pa ON (cpa.player_id = pa.id) ".
		"LEFT JOIN $this->playertable pd ON (cpd.player_id = pd.id) ";

		if ($owner > 0 && $owner != $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)) { // owner explicitly specified, but not own user
			$query .= "WHERE (cr.userid=".$owner." AND cr.public='true')"; // to ensure that only public reports are shown, regardless of selection
		} elseif ($owner < 1) {
			// we have no owner specified
			if ($public == "false") {
				// in this case we can only find our own reports which are not public (strange selection)
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND cr.public='false')";
			} elseif ($public == "true") {
				// user is not of interest, only public ones shall be found
				$query .= "WHERE (cr.public='true')";
			} else {
				// user and public status not of interest -> show all own reports + publuc ones
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." OR cr.public='true')";
			}
		} else {
			// it is our own user
			if ($public == "true") {
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND cr.public='true')";
			} elseif($public == "false") {
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND cr.public='false')";
			} else {
				$query .= "WHERE (cr.userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid).")";
			}
		}

		if ($attacker != "") {
			$query .= " AND pa.playername LIKE ".DB::getDB()->quote($attacker);
		}
		if ($defender != "") {
			$query .= " AND pd.playername LIKE ".DB::getDB()->quote($defender);
		}
		if ($date_from != "") {
			$query .= " AND combattime > '".$date_from." 00:00:00'";
		}
		if ($date_to != "") {
			$query .= " AND combattime < '".$date_to." 23:59:59'";
		}

		// coordinates
		$query .= CoordinatesHelper::get_coordinate_where_statement($coordinates, "cpd");

		$stmt = $this->query($query);
		if (!$stmt) return false;

		// collect results in array and combine playernames for same combat report
		$combats = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			$combats[$line->id] = array(
			'attacker'   => $line->attacker,
			'defender'   => $line->defender,
			'combattime' => $line->combattime,
			'winner'     => $line->winner,
			'public'     => $line->public,
			'owner'      => $line->username,
			'userid'     => $line->userid,
			'loot_m'     => $line->loot_metal,
			'loot_c'     => $line->loot_crystal,
			'loot_d'     => $line->loot_deuterium,
			'debris_m'   => $line->debris_metal,
			'debris_c'   => $line->debris_crystal
			);
		}
		unset($res);
		unset($line);

		$return_value =
		"{ identifier: 'id',\n".
		"label: 'id',\n".
		"items: [\n";
		if (count($combats) == 0) {
			$return_value .= "";
		} else {
			foreach ($combats as $id => $data) {
				$return_value .= "{ id:'$id',".
				" attacker:".json_encode($data['attacker']).",".
				" defender:".json_encode($data['defender']).",".
				" combattime:".json_encode($data['combattime']).",".
				" winner:".json_encode($data['winner']).",".
				" public:".json_encode($data['public']).",".
				" owner:".json_encode($data['owner']).",".
				" userid:".json_encode($data['userid']).",".
				" loot_m:".json_encode($data['loot_m']).",".
				" loot_c:".json_encode($data['loot_c']).",".
				" loot_d:".json_encode($data['loot_d']).",".
				" debris_m:".json_encode($data['debris_m']).",".
				" debris_c:".json_encode($data['debris_c']).
				" },\n";
			}
			$return_value = substr($return_value,0,strlen($return_value)-2); // remove ,\n
		}
		$return_value .= "]}\n";

		return $return_value;

	}

	public function get_combat_details($combat_id) {
		$return_value = "";

		$combat_id = intval($combat_id);
		if ($combat_id < 1) return false;

		$query = "SELECT * FROM $this->combat_report_table WHERE id=:combat_id AND (userid=:user_id OR public='true') LIMIT 1";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":combat_id", $combat_id);
		$stmt->bindValue(":user_id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) return false;

		$query_parties = "SELECT cp.*,p.playername, p.id as playerid FROM $this->combat_party_table cp LEFT JOIN $this->playertable p ON cp.player_id=p.id WHERE combat_id=:combat_id";
		$stmt2 = DB::getDB()->prepare($query_parties);
		$stmt2->bindParam(":combat_id", $combat_id);
		
		$res2 = $this->execute($stmt2);
		if (!$res2) return false;

		$parties = $stmt2->rowCount();
		if ($parties < 2) return "Not enough combat parties";

		$line1 = $stmt->fetch(PDO::FETCH_OBJ);
		$return_value .= "{ id:'$combat_id', ".
		"combattime:'$line1->combattime',".
		"winner:'$line1->winner',".
		"loot: {m:'".number_format($line1->loot_metal,0,",",".")."',c:'".number_format($line1->loot_crystal,0,",",".")."',d:'".number_format($line1->loot_deuterium,0,",",".")."'},".
		"debris:{m:'".number_format($line1->debris_metal,0,",",".")."',c:'".number_format($line1->debris_crystal,0,",",".")."'},".
		"public:'$line1->public',\n";

		// collect information from parties
		$coordinates = "";
		if ($parties == 2) {
			// Standard attack
			while ($line = $stmt2->fetch(PDO::FETCH_OBJ)) {
				switch ($line->combat_type) {
					case "attacker":
						$attacker = "attacker: [\n {".
						"playername:".json_encode($line->playername).",".
						"playerid:'$line->playerid',".
						"coords:'$line->galaxy:$line->system:$line->planet',".
						"tech: {w:'$line->waffentech',s:'$line->schildtech',a:'$line->rpz'},".
						"lost:'".number_format($line->lost_units,0,",",".")."'\n".
						" }]";

						break;

					case "defender":
						$defender = "defender: [\n {".
						"playername:".json_encode($line->playername).",".
						"playerid:'$line->playerid',".
						"coords:'$line->galaxy:$line->system:$line->planet',\n".
						"tech: {w:'$line->waffentech',s:'$line->schildtech',a:'$line->rpz'},".
						"lost:'".number_format($line->lost_units,0,",",".")."'".
						"}]";

						$coordinates = "c_coords:'$line->galaxy:$line->system:$line->planet'";

						break;

					default: return false;
				}
			}
			$return_value .= $coordinates.",\n".$attacker.",\n".$defender."\n";

		} else {
			// ACS attack or defend - aggregated data
			// lost units only for single party - in case of multi attack + defend, no lost units at all
			// no techs in this case as well
			$attacker = "attacker: [\n";
			$defender = "defender: [\n";
			while ($line = $stmt2->fetch(PDO::FETCH_OBJ)) {
				switch ($line->combat_type) {
					case "attacker":
						if (strlen($attacker) > 20) {
							$attacker .= ",\n";
						}
						$attacker .= "{".
						"playername:".json_encode($line->playername).",".
						"playerid:'$line->playerid',".
						"coords:'$line->galaxy:$line->system:$line->planet',".
						"tech: {w:'$line->waffentech',s:'$line->schildtech',a:'$line->rpz'},".
						"lost:'".number_format($line->lost_units,0,",",".")."'".
						" }";

						break;

					case "defender":
						if (strlen($defender) > 20) {
							$defender .= ",\n";
						}
						$defender .= "{".
						"playername:".json_encode($line->playername).",".
						"playerid:'$line->playerid',".
						"coords:'$line->galaxy:$line->system:$line->planet',".
						"tech: {w:'$line->waffentech',s:'$line->schildtech',a:'$line->rpz'},".
						"lost:'".number_format($line->lost_units,0,",",".")."'".
						"}";

						if ($line->attack_location == "true") {
							$coordinates = "c_coords:'$line->galaxy:$line->system:$line->planet'";
						}

						break;

					default: return false;
				}
			}
			$return_value .= $coordinates.",\n".$attacker."],\n".$defender."]\n";
		}

		$return_value .= "\n}";

		return $return_value;

	}

	public function unpublish_combat_report(array $ids) {
		$collected_ids = array();
		foreach ($ids as $id) {
			$id = intval($id);
			if ($id > 0) array_push($collected_ids,$id);
		}
		if (count($collected_ids) == 0) return true;

		// update content
		$query = "UPDATE $this->combat_report_table SET public='false' WHERE userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND id IN (".implode(",",$collected_ids).")";
		$res = $this->exec($query);
		if ($res === false) return false;

		return true;
	}

	public function publish_combat_report(array $ids) {
		$collected_ids = array();
		foreach ($ids as $id) {
			$id = intval($id);
			if ($id > 0) array_push($collected_ids,$id);
		}
		if (count($collected_ids) == 0) return true;

		// update content
		$query = "UPDATE $this->combat_report_table SET public='true' WHERE userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND id IN (".implode(",",$collected_ids).")";
		$res = $this->exec($query);
		if ($res === false) return false;

		return true;
	}

	public function delete_combat_report(array $ids) {
		$collected_ids = array();
		foreach ($ids as $id) {
			$id = intval($id);
			if ($id > 0) array_push($collected_ids,$id);
		}
		if (count($collected_ids) == 0) return true;

		// get content for deletion (must be selected to have only those IDs for which the user has access!)
		$query = "SELECT id FROM $this->combat_report_table WHERE userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND id IN (".implode(",",$collected_ids).")";
		$stmt = $this->query($query);
		if (!$stmt) return false;

		$ids = array();
		while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			array_push($ids,$line->id);
		}
		if (count($ids) == 0) return true;

		// delete content
		$query = "DELETE FROM $this->combat_report_table WHERE userid=".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)." AND id IN (".implode(",",$collected_ids).")";
		$res = $this->exec($query);
		if ($res === false) return false;

		// delete combat parties too
		$query = "DELETE FROM $this->combat_party_table WHERE combat_id IN (".implode(",",$collected_ids).")";
		$res = $this->exec($query);
		if ($res === false) return false;

		return true;
	}

}
?>