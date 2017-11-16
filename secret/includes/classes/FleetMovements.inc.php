<?php


/**
 * Handle read and delete services for fleet movements fetched from OGame.
 * @author eX0du5
 *
 */
class FleetMovements extends GenericSuperclass {

	private $fleetmovetable;				// database table name for fleet movements
	private $playertable;					// database table name for playernames
	private $galaxytable;					// database table name for galaxy views
	private $flipped_probe_array;			// needed to get translated entity list
	private $ogame_offset;                  // time difference between ogame server and user

	function __construct($fleetmovetable, $playertable, $galaxytable ,array $flipped_probe_array) {
		parent::__construct();

		if ($fleetmovetable == "") throw new InvalidArgumentException("Fleet move table empty");
		$this->fleetmovetable = $fleetmovetable;
		if ($playertable == "") throw new InvalidArgumentException("Player table empty");
		$this->playertable = $playertable;
		if ($galaxytable == "") throw new InvalidArgumentException("Galaxy table empty");
		$this->galaxytable = $galaxytable;

		if (count($flipped_probe_array) == 0) return false;
		$this->flipped_probe_array = $flipped_probe_array;

		if ($_SESSION['s_auth']->get_setting(iAuthorization::setting_ogame_offset) == "+00:00") {
			$this->ogame_offset = 0;
		} else {
			$hour_minutes       = explode(":", $_SESSION['s_auth']->get_setting(iAuthorization::setting_ogame_offset));
			$this->ogame_offset = intval($hour_minutes[0]);
			if ($hour_minutes[1] == "30") {
				if ($this->ogame_offset < 0) {
					$this->ogame_offset -= 0.5;
				} else {
					$this->ogame_offset += 0.5;
				}
			}
		}

	}
	
	/**
	 * Delete fleet by ID
	 * @param int $fleet_id
	 * @param int $sub_fleet_id
	 * @return boolean
	 */
	public function delete_fleet($fleet_id, $sub_fleet_id) {
		$fleet_id     = intval($fleet_id);
		$sub_fleet_id = intval($sub_fleet_id);

		if ($fleet_id < 1) return false;
		if ($sub_fleet_id < 1) $sub_fleet_id = 0; // to make sure that no parts of ACS fleet are deleted

		$query = "DELETE FROM $this->fleetmovetable WHERE fleet_id=:fleet_id AND sub_fleet_id=:subfleet_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":fleet_id", $fleet_id);
		$stmt->bindParam(":subfleet_id", $sub_fleet_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		return true;
	}


	/**
	 * Get all fleet movements from database sorted by arrival time.
	 *
	 * @return Array of Fleets
	 */
	public function fetch_all() {
		$query = "SELECT p1.playername, p1.diplomatic_status, p1.id as playerid,
                  p2.playername as target_player, p2.diplomatic_status as target_status, p2.id as target_playerid,
                  f.*
			FROM $this->fleetmovetable f
			LEFT JOIN $this->galaxytable g1 ON (f.origin_galaxy=g1.galaxy AND f.origin_system=g1.system AND f.origin_planet=g1.planet)
			LEFT JOIN $this->playertable p1 ON (g1.ogame_playerid = p1.ogame_playerid)

			LEFT JOIN $this->galaxytable g2 ON (f.destination_galaxy=g2.galaxy AND f.destination_system=g2.system AND f.destination_planet=g2.planet)
			LEFT JOIN $this->playertable p2 ON (g2.ogame_playerid = p2.ogame_playerid)";
		
		$stmt = $this->query($query);
		if (!$stmt) return false;

		return $this->create_fleet_array($stmt);
	}

	/**
	 * Get specific fleet movement from database
	 *
	 * @param int $fleet_id
	 * @return Array with one fleet
	 */
	public function fetch_fleet($fleet_id) {
		$fleet_id = intval($fleet_id);
		if ($fleet_id < 1) return false;
		$query = "SELECT p1.playername, p1.diplomatic_status, p1.id as playerid,
                  p2.playername as target_player, p2.diplomatic_status as target_status, p2.id as target_playerid,
                  f.*
			FROM $this->fleetmovetable f
			LEFT JOIN $this->galaxytable g1 ON (f.origin_galaxy=g1.galaxy AND f.origin_system=g1.system AND f.origin_planet=g1.planet)
			LEFT JOIN $this->playertable p1 ON (g1.ogame_playerid = p1.ogame_playerid)

			LEFT JOIN $this->galaxytable g2 ON (f.destination_galaxy=g2.galaxy AND f.destination_system=g2.system AND f.destination_planet=g2.planet)
			LEFT JOIN $this->playertable p2 ON (g2.ogame_playerid = p2.ogame_playerid)
			WHERE fleet_id=:fleet_id";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":fleet_id", $fleet_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		return $this->create_fleet_array($stmt);
	}

	/**
	 * Get fleet movements for a specific planet
	 *
	 * @param int $galaxy
	 * @param int $system
	 * @param int $planet
	 * @return Array of fleets
	 */
	public function fetch_planet($galaxy,$system,$planet) {
		$galaxy = intval($galaxy);
		$system = intval($system);
		$planet = intval($planet);
		if ($galaxy < 1) return false;
		if ($system < 1) return false;
		if ($planet < 1) return false;

		$query = "SELECT p1.playername, p1.diplomatic_status, p1.id as playerid,
                  p2.playername as target_player, p2.diplomatic_status as target_status, p2.id as target_playerid,
                  f.*
			FROM $this->fleetmovetable f
			LEFT JOIN $this->galaxytable g1 ON (f.origin_galaxy=g1.galaxy AND f.origin_system=g1.system AND f.origin_planet=g1.planet)
			LEFT JOIN $this->playertable p1 ON (g1.ogame_playerid = p1.ogame_playerid)

			LEFT JOIN $this->galaxytable g2 ON (f.destination_galaxy=g2.galaxy AND f.destination_system=g2.system AND f.destination_planet=g2.planet)
			LEFT JOIN $this->playertable p2 ON (g2.ogame_playerid = p2.ogame_playerid)".
		"WHERE origin_galaxy=:origin_galaxy AND origin_system=:origin_system AND origin_planet=:origin_planet OR ".
		"destination_galaxy=:destination_galaxy AND destination_system=:destination_system AND destination_planet=:destination_planet";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":origin_galaxy", $galaxy);
		$stmt->bindParam(":origin_system", $system);
		$stmt->bindParam(":origin_planet", $planet);
		$stmt->bindParam(":destination_galaxy", $galaxy);
		$stmt->bindParam(":destination_system", $system);
		$stmt->bindParam(":destination_planet", $planet);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		return $this->create_fleet_array($stmt);
	}

	/**
	 * Check if there are any fleet movements within a given system.
	 *
	 * @param int $galaxy
	 * @param int $system
	 * @return Array with 16 entries, 1-15 reflect planets and have true or false
	 */
	public function check_fleet_movement($galaxy,$system) {
		$galaxy = intval($galaxy);
		$system = intval($system);
		if ($galaxy < 1) return false;
		if ($system < 1) return false;

		$query = "SELECT origin_galaxy, origin_system, origin_planet, destination_galaxy, destination_system, destination_planet ".
		"FROM $this->fleetmovetable ".
		"WHERE origin_galaxy=:origin_galaxy and origin_system=:origin_system OR destination_galaxy=:destination_galaxy AND destination_system=:destination_system";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":origin_galaxy", $galaxy);
		$stmt->bindParam(":origin_system", $system);
		$stmt->bindParam(":destination_galaxy", $galaxy);
		$stmt->bindParam(":destination_system", $system);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		$fleet_moves = array();
		for ($i=0;$i<=15;$i++) {
			$fleet_moves[$i] = false;
		}
		while($line = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($line->origin_galaxy == $galaxy && $line->origin_system == $system) {
				$fleet_moves[$line->origin_planet] = true;
			}
			if ($line->destination_galaxy == $galaxy && $line->destination_system == $system) {
				$fleet_moves[$line->destination_planet] = true;
			}
		}
		return $fleet_moves;
	}
	
	/**
	 * Transfer database request into internal array format and sort by arrival time.
	 * @param PDOStatement $stmt
	 * @return Array of Fleets
	 */
	private function create_fleet_array(PDOStatement $stmt) {
		$fleets = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$line['ships'] = $line['kt'] + $line['gt'] + $line['lj'] + $line['sj'] + $line['krz'] + $line['ss'] + $line['kolo'] + $line['rec'] + $line['spio'] + $line['bomb'] + $line['zerri'] + $line['ds'] + $line['skrz'] + $line['irak'];

			// calculate arrival time according to user Ogame offset settings
			$timestamp = strtotime($line['arrival_time']) + $this->ogame_offset * 3600;
			$line['arrival_time'] = date("Y-m-d H:i:s",$timestamp);

			// same for scantime
			$timestamp = strtotime($line['scantime']) + $this->ogame_offset * 3600;
			$line['scantime'] = date("Y-m-d H:i:s",$timestamp);

			$fleets[] = $line;

			// store column to allow sorting
			$arrival_time[]  = $line['arrival_time'];
		}
		if (count($fleets) == 0) return $fleets;

		// sort data
		array_multisort($arrival_time, SORT_ASC, $fleets);

		return $fleets;
	}

	/**
	 * Return HTML content for human readable mission description
	 *
	 * @param String $mission
	 * @return String HTML content
	 */
	public function get_mission($mission) {
		switch($mission) {
			case 'expedition':       return '<span class="expedition">'.FLEETS_MISSION_EXPEDITION."</span>"; break;
			case 'colonization':     return '<span class="colonization">'.FLEETS_MISSION_COLONIZATION."</span>"; break;
			case 'recycle':          return '<span class="recycle">'.FLEETS_MISSION_RECYCLE."</span>"; break;
			case 'transport':        return '<span class="transport">'.FLEETS_MISSION_TRANSPORT."</span>"; break;
			case 'deployment':       return '<span class="deployment">'.FLEETS_MISSION_DEPLOYMENT."</span>"; break;
			case 'espionage':        return '<span class="espionage">'.FLEETS_MISSION_ESPIONAGE."</span>"; break;
			case 'acs_defend':       return '<span class="acs_defend">'.FLEETS_MISSION_ACS_DEFEND."</span>"; break;
			case 'attack':           return '<span class="attack">'.FLEETS_MISSION_ATTACK."</span>"; break;
			case 'acs_attack':       return '<span class="acs_attack">'.FLEETS_MISSION_ACS_ATTACK."</span>"; break;
			case 'moon_destruction': return '<span class="moon_destruction">'.FLEETS_MISSION_MOON_DESTRUCTION."</span>"; break;
			case 'missile_attack':   return '<span class="missile_attack">'.FLEETS_MISSION_MISSILE_ATTACK."</span>"; break;
			default: throw new InvalidArgumentException();
		}
	}


	public function get_planet_icon($planetinfo, $planetname, $mission="") {
		switch($mission) {
			case 'expedition': return "<img alt=\"$planetname\" title=\"$planetname\" src=\"../images/OGame/unbekanntes_ziel.gif\" />"; break;
			case 'recycle':    return "<img alt=\"$planetname\" title=\"$planetname\" src=\"../images/OGame/tf_a.gif\" />"; break;
			default: break;
		}

		switch ($planetinfo) {
			case 'false':
				return "<img alt=\"$planetname\" title=\"$planetname\" src=\"../images/planet.png\" />";
			case 'true':
				return "<img alt=\"$planetname\" title=\"$planetname\" src=\"../images/moon.png\" />";
			default:
				return "<img alt=\"$planetname\" title=\"$planetname\" src=\"../images/questionmark.png\" />";
		}
	}

	/**
	 * Convert internal fleet array into a list of entities with translated shipname and quantity if quantity > 0.
	 *
	 * @param Array $line Line of Fleet Array
	 * @return Array of entities with name and quantity
	 */
	public function get_entities(array $line) {

		$kt_text    = F_SMALLCARGOSHIP;
		$gt_text    = F_LARGECARGOSHIP;
		$lj_text    = F_LIGHFIGHTER;
		$sj_text    = F_HEAVYFIGHTER;
		$krz_text   = F_CRUISER;
		$ss_text    = F_BATTLESHIP;
		$kolo_text  = F_COLONYSHIP;
		$rec_text   = F_RECYCLER;
		$spio_text  = F_ESPIONAGEPROBE;
		$bomb_text  = F_BOMBER;
		$zerri_text = F_DESTROYER;
		$ds_text    = F_DEATHSTAR;
		$skrz_text  = F_BATTLECRUISER;
		$irak_text  = D_INTERPLANETARYMISSILE;
		if ($_SESSION['lang'] != "english") {
			$kt_text    = $this->flipped_probe_array[F_SMALLCARGOSHIP];
			$gt_text    = $this->flipped_probe_array[F_LARGECARGOSHIP];
			$lj_text    = $this->flipped_probe_array[F_LIGHFIGHTER];
			$sj_text    = $this->flipped_probe_array[F_HEAVYFIGHTER];
			$krz_text   = $this->flipped_probe_array[F_CRUISER];
			$ss_text    = $this->flipped_probe_array[F_BATTLESHIP];
			$kolo_text  = $this->flipped_probe_array[F_COLONYSHIP];
			$rec_text   = $this->flipped_probe_array[F_RECYCLER];
			$spio_text  = $this->flipped_probe_array[F_ESPIONAGEPROBE];
			$bomb_text  = $this->flipped_probe_array[F_BOMBER];
			$zerri_text = $this->flipped_probe_array[F_DESTROYER];
			$ds_text    = $this->flipped_probe_array[F_DEATHSTAR];
			$skrz_text  = $this->flipped_probe_array[F_BATTLECRUISER];
			$irak_text  = $this->flipped_probe_array[D_INTERPLANETARYMISSILE];
		}

		// create array containing fleet text and amount if amount > 0
		$entities = array(); // initialize array
		if ($line['kt'] > 0)    $entities[] = array($kt_text,$line['kt']);
		if ($line['gt'] > 0)    $entities[] = array($gt_text,$line['gt']);
		if ($line['lj'] > 0)    $entities[] = array($lj_text,$line['lj']);
		if ($line['sj'] > 0)    $entities[] = array($sj_text,$line['sj']);
		if ($line['krz'] > 0)   $entities[] = array($krz_text,$line['krz']);
		if ($line['ss'] > 0)    $entities[] = array($ss_text,$line['ss']);
		if ($line['kolo'] > 0)  $entities[] = array($kolo_text,$line['kolo']);
		if ($line['rec'] > 0)   $entities[] = array($rec_text,$line['rec']);
		if ($line['spio'] > 0)  $entities[] = array($spio_text,$line['spio']);
		if ($line['bomb'] > 0)  $entities[] = array($bomb_text,$line['bomb']);
		if ($line['zerri'] > 0) $entities[] = array($zerri_text,$line['zerri']);
		if ($line['ds'] > 0)    $entities[] = array($ds_text,$line['ds']);
		if ($line['skrz'] > 0)  $entities[] = array($skrz_text,$line['skrz']);
		if ($line['irak'] > 0)  $entities[] = array($irak_text,$line['irak']);

		return $entities;
	}

	/**
	 * Create link for simulation at websim.speedsim.net
	 *
	 * @param Array $line Fleet entry
	 * @return String - URL
	 */
	public function get_speedsimlink($line) {
		$link = "";

		if ($line['kt'] > 0)    $link = Galaxytool::update_speedsim_link($link,"kt",$line['kt'],true);
		if ($line['gt'] > 0)    $link = Galaxytool::update_speedsim_link($link,"gt",$line['gt'],true);
		if ($line['lj'] > 0)    $link = Galaxytool::update_speedsim_link($link,"lj",$line['lj'],true);
		if ($line['sj'] > 0)    $link = Galaxytool::update_speedsim_link($link,"sj",$line['sj'],true);
		if ($line['krz'] > 0)   $link = Galaxytool::update_speedsim_link($link,"krz",$line['krz'],true);
		if ($line['ss'] > 0)    $link = Galaxytool::update_speedsim_link($link,"ss",$line['ss'],true);
		if ($line['kolo'] > 0)  $link = Galaxytool::update_speedsim_link($link,"kolo",$line['kolo'],true);
		if ($line['rec'] > 0)   $link = Galaxytool::update_speedsim_link($link,"rec",$line['rec'],true);
		if ($line['spio'] > 0)  $link = Galaxytool::update_speedsim_link($link,"spio",$line['spio'],true);
		if ($line['bomb'] > 0)  $link = Galaxytool::update_speedsim_link($link,"bomb",$line['bomb'],true);
		if ($line['zerri'] > 0) $link = Galaxytool::update_speedsim_link($link,"zerri",$line['zerri'],true);
		if ($line['ds'] > 0)    $link = Galaxytool::update_speedsim_link($link,"ds",$line['ds'],true);
		if ($line['skrz'] > 0)  $link = Galaxytool::update_speedsim_link($link,"skrz",$line['skrz'],true);
		if ($line['irak'] > 0)  $link = Galaxytool::update_speedsim_link($link,"irak",$line['irak'],true);

		return $link;
	}

	/**
	 * Create link for simulation at drago-sim.com
	 *
	 * @param Array $line Fleet entry
	 * @param Int $fleet_counter Fleet number starting with zero
	 * @return String - URL
	 */
	public function get_dragosimlink($line,$link="",$fleet_counter=0) {

		if ($line['kt'] > 0)    $link = Galaxytool::update_dragosim_link($link,"kt",$line['kt'],false,$fleet_counter,true);
		if ($line['gt'] > 0)    $link = Galaxytool::update_dragosim_link($link,"gt",$line['gt'],false,$fleet_counter,true);
		if ($line['lj'] > 0)    $link = Galaxytool::update_dragosim_link($link,"lj",$line['lj'],false,$fleet_counter,true);
		if ($line['sj'] > 0)    $link = Galaxytool::update_dragosim_link($link,"sj",$line['sj'],false,$fleet_counter,true);
		if ($line['krz'] > 0)   $link = Galaxytool::update_dragosim_link($link,"krz",$line['krz'],false,$fleet_counter,true);
		if ($line['ss'] > 0)    $link = Galaxytool::update_dragosim_link($link,"ss",$line['ss'],false,$fleet_counter,true);
		if ($line['kolo'] > 0)  $link = Galaxytool::update_dragosim_link($link,"kolo",$line['kolo'],false,$fleet_counter,true);
		if ($line['rec'] > 0)   $link = Galaxytool::update_dragosim_link($link,"rec",$line['rec'],false,$fleet_counter,true);
		if ($line['spio'] > 0)  $link = Galaxytool::update_dragosim_link($link,"spio",$line['spio'],false,$fleet_counter,true);
		if ($line['bomb'] > 0)  $link = Galaxytool::update_dragosim_link($link,"bomb",$line['bomb'],false,$fleet_counter,true);
		if ($line['zerri'] > 0) $link = Galaxytool::update_dragosim_link($link,"zerri",$line['zerri'],false,$fleet_counter,true);
		if ($line['ds'] > 0)    $link = Galaxytool::update_dragosim_link($link,"ds",$line['ds'],false,$fleet_counter,true);
		if ($line['skrz'] > 0)  $link = Galaxytool::update_dragosim_link($link,"skrz",$line['skrz'],false,$fleet_counter,true);
		if ($line['irak'] > 0)  $link = Galaxytool::update_dragosim_link($link,"irak",$line['irak'],false,$fleet_counter,true);

		return $link;
	}

	/**
	 * Create link for simulation at www.osimulate.com
	 *
	 * @param Array $line Fleet entry
	 * @return String - URL
	 */
	public function get_osimulatelink($line,$link="",$fleet_counter=0) {
		
		if ($line['kt'] > 0)    $link = Galaxytool::update_osimulate_link($link,"kt",$line['kt'],false,$fleet_counter,true);
		if ($line['gt'] > 0)    $link = Galaxytool::update_osimulate_link($link,"gt",$line['gt'],false,$fleet_counter,true);
		if ($line['lj'] > 0)    $link = Galaxytool::update_osimulate_link($link,"lj",$line['lj'],false,$fleet_counter,true);
		if ($line['sj'] > 0)    $link = Galaxytool::update_osimulate_link($link,"sj",$line['sj'],false,$fleet_counter,true);
		if ($line['krz'] > 0)   $link = Galaxytool::update_osimulate_link($link,"krz",$line['krz'],false,$fleet_counter,true);
		if ($line['ss'] > 0)    $link = Galaxytool::update_osimulate_link($link,"ss",$line['ss'],false,$fleet_counter,true);
		if ($line['kolo'] > 0)  $link = Galaxytool::update_osimulate_link($link,"kolo",$line['kolo'],false,$fleet_counter,true);
		if ($line['rec'] > 0)   $link = Galaxytool::update_osimulate_link($link,"rec",$line['rec'],false,$fleet_counter,true);
		if ($line['spio'] > 0)  $link = Galaxytool::update_osimulate_link($link,"spio",$line['spio'],false,$fleet_counter,true);
		if ($line['bomb'] > 0)  $link = Galaxytool::update_osimulate_link($link,"bomb",$line['bomb'],false,$fleet_counter,true);
		if ($line['zerri'] > 0) $link = Galaxytool::update_osimulate_link($link,"zerri",$line['zerri'],false,$fleet_counter,true);
		if ($line['ds'] > 0)    $link = Galaxytool::update_osimulate_link($link,"ds",$line['ds'],false,$fleet_counter,true);
		if ($line['skrz'] > 0)  $link = Galaxytool::update_osimulate_link($link,"skrz",$line['skrz'],false,$fleet_counter,true);
		if ($line['irak'] > 0)  $link = Galaxytool::update_osimulate_link($link,"irak",$line['irak'],false,$fleet_counter,true);

		return $link;
	}

	/**
	 * Create link for simulation of ACS battles at drago-sim.com
	 *
	 * @param Array $fleets Fleet entries
	 * @return String - URL
	 */
	public function get_dragosim_acs_link(array $fleets) {
		$dragosim_acs_link = "";

		$fleet_counter = 0;
		foreach ($fleets as $line) {
			$dragosim_acs_link = $this->get_dragosimlink($line,$dragosim_acs_link,$fleet_counter);
			$fleet_counter++;
		}
		return $dragosim_acs_link."&num[0]=".count($fleets);
	}
	
	/**
	 * Create link for simulation of ACS battles at OSimulate.com
	 *
	 * @param Array $fleets Fleet entries
	 * @return String - URL
	 */
	public function get_osimulate_acs_link(array $fleets) {
		$osimulate_acs_link = "";
	
		// TODO: how can we separate attacker from defending fleet?
		$fleet_counter = 0;
		foreach ($fleets as $line) {
			$osimulate_acs_link = $this->get_osimulatelink($line,$osimulate_acs_link,$fleet_counter);
			$fleet_counter++;
		}
		return $osimulate_acs_link;
	}

}

?>