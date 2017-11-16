<?php
/**
 * PHP parser for the OGame API data provided with differnt XML files
 *
  * @author eX0du5
 *
 */
class OGameAPIParser extends GenericSuperclass {

  const category_player = 1;
  const category_alliance = 2;

  const type_total              = 0;
  const type_Economy            = 1;
  const type_Research           = 2;
  const type_Military           = 3;
  const type_Military_Lost      = 4;
  const type_Military_Built     = 5;
  const type_Military_Destroyed = 6;
  const type_Honor              = 7;

  private $dbtablename = null;
  private $systemtablename = null;
  private $allytable = null;
  private $playertable = null;
  private $global_universe = null;
  private $depth = 0;
  private $fastOverride = true;
  private $lastUpdate = array();

  public function __construct( $global_universe, $dbtablename, $systemtablename, $playertable, $allytable, $combattable, $combatparty, $noticetable, $playerhistory, $player_activity, $messagetable, $fastOverride = false) {
    parent::__construct();

    if ($dbtablename == "") throw new InvalidArgumentException("Galaxy table empty");
    $this->dbtablename = $dbtablename;

    if ($systemtablename == "") throw new InvalidArgumentException("Galaxy table empty");
    $this->systemtablename = $systemtablename;

    if ($playertable == "") throw new InvalidArgumentException("Player table empty");
    $this->playertable = $playertable;

    if ($allytable == "") throw new InvalidArgumentException("Ally table empty");
    $this->allytable = $allytable;

        if ($combattable == "") throw new InvalidArgumentException("Combat table empty");
        $this->combattable = $combattable;

        if ($combatparty == "") throw new InvalidArgumentException("Combat Party table empty");
        $this->combatparty = $combatparty;

        if ($noticetable == "") throw new InvalidArgumentException("Notice table empty");
        $this->noticetable = $noticetable;

        if ($playerhistory == "") throw new InvalidArgumentException("Player History table empty");
        $this->playerhistory = $playerhistory;

        if ($player_activity == "") throw new InvalidArgumentException("Player Activity table empty");
        $this->player_activity = $player_activity;

        if ($messagetable == "") throw new InvalidArgumentException("Message table empty");
        $this->messagetable = $messagetable;

        if ($global_universe == "") throw new InvalidArgumentException("Universe empty");
        $this->global_universe = $global_universe;

        $this->fastOverride = $fastOverride;
     
  }


  /**
   * Load universe and statistics data from OGame API provided at attributes.php and update tool information.
   * @param Integer $user_id
   * @throws InvalidArgumentException
   * @return boolean
   */
  public function load_OGame_data($user_id) {
    if (!defined("OGAME_URL")) throw new InvalidArgumentException("OGame URL not defined");
    $user_id = intval($user_id);
    if ($user_id < 1) throw new InvalidArgumentException("Invalid user id provided");

    $result = $this->load_OGame_universe_data($user_id);
    if ($result === true) {
      $result = $this->load_OGame_statistics_data($user_id);
    }

    return $result;
  }

  /**
   * Load universe data from OGame API provided at attributes.php and update tool information.
   * @param Integer $user_id
   * @throws InvalidArgumentException
   * @return boolean
   */
  public function load_OGame_universe_data($user_id) {
    if (!defined("OGAME_URL")) throw new InvalidArgumentException("OGame URL not defined");
    $user_id = intval($user_id);
    if ($user_id < 1) throw new InvalidArgumentException("Invalid user id provided");

    try {
      // universe data
      $result = $this->refresh_universe_data(OGAME_URL."/api/universe.xml",$user_id);
      if ($result === false) {
        return false;
      }
      unset($result);

    } catch (Exception $e) {
      $this->error_object = new ErrorObject(ErrorObject::severity_error, $e->getMessage() );
      return false;
    }
    return true;
  }

  /**
   * Load statistics data from OGame API provided at attributes.php and update tool information.
   * @param Integer $user_id
   * @throws InvalidArgumentException
   * @return boolean
   */
  public function load_OGame_statistics_data($user_id) {
    if (!defined("OGAME_URL")) throw new InvalidArgumentException("OGame URL not defined");
    $user_id = intval($user_id);
    if ($user_id < 1) throw new InvalidArgumentException("Invalid user id provided");

    try {
      // alliance data
      $result = $this->get_alliance_data(OGAME_URL."/api/alliances.xml");

      if ($result === false || $result == null) {
        return false;
      }
      for ($i=0;$i<=7;$i++) {
        $result = $this->enrich_data($result,OGAME_URL."/api/highscore.xml?category=2&type=$i");
        if ($result === false) {
          return false;
        }
      }
      $result2 = $this->save_allydata($result, $user_id);
      if ($result2 === false) {
        return false;
      }
      unset($result);
      unset($result2);

      // player data
      $result = $this->get_player_data(OGAME_URL."/api/players.xml");
      if ($result === false) {
        return false;
      }
      for ($i=0;$i<=7;$i++) {
        $result = $this->enrich_data($result,OGAME_URL."/api/highscore.xml?category=1&type=$i");
        if ($result === false) {
          return false;
        }
      }
      $result2 = $this->save_playerdata($result, $user_id);
      if ($result2 === false) {
        return false;
      }

            // determine bandit status
            $result3 = $this->setBanditStatus();
            if ($result3 === false) {
                return false;
            }


    } catch (Exception $e) {
      $this->error_object = new ErrorObject(ErrorObject::severity_error, $e->getMessage() );
      return false;
    }

    return true;
  }


  /**
   * Load universe and statistics data from OGame API provided at $url and update tool information.
   * @param String $url
   * @param Integer $user_id
   * @throws InvalidArgumentException
   * @return void|boolean
   */
  protected function refresh_universe_data($url,$user_id) {
    $user_id = intval($user_id);
    if ($user_id < 1) throw new InvalidArgumentException("Invalid user id provided");
    $url = strip_tags($url);
    if (substr($url, -4) != ".xml") throw new InvalidArgumentException("No XML file provided");

    if (!$this->validate_url($url)) return false;

    $planet    = 0;
    $last_update = null;
    $query = "INSERT INTO $this->dbtablename (galaxy, system, planet, ogame_playerid, planetname, moon, moonsize) VALUES ";
    $systemquery = "INSERT INTO $this->systemtablename (galaxy, system, last_update, user_id) VALUES ";
    $query_content = "";
    $system_query_content = "";

    $xml = new XMLReader();
    $xml->open($url);
    $xml->read();
    if ($xml->name != "universe") {
      $this->error_object = new ErrorObject(ErrorObject::severity_error, "Unexpected Error: Invalid XML content at $url - no universe tag found as first tag");
      return;
    }
    $attributes = array();
      while($xml->moveToNextAttribute()) {
        $attributes[$xml->name] = $xml->value;
      }
      if (!array_key_exists("timestamp", $attributes)) {
        $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no timestamp attribute found on universe tag");
        return;
      }
    $last_update = intval(strip_tags($attributes['timestamp']));
    $last_update = date("Y-m-d H:i:s",$last_update);

    if($this->fastOverride === true) {
    	$sql = "SELECT galaxy, system FROM ".$this->systemtablename." WHERE last_update > '$last_update'";
    	$stmt = $this->query($sql);
    	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    		if(!array_key_exists($row['galaxy'], $this->lastUpdate)) $this->lastUpdate[$row['galaxy']] = array();
    		$this->lastUpdate[$row['galaxy']][$row['system']] = true;
    	}
    }
    
      /*
       * clean old data:
       * - remove all entries where no debris field exists
       * - clear all attributes on remaining entries except the debris values
       */
    if ($this->fastOverride === true) {
    	// former default
    	$cleanup_query = "DELETE FROM $this->dbtablename WHERE metal = 0 AND crystal = 0";
	    $res = $this->exec($cleanup_query);
    	if ($res === false) return false;
    	unset($res, $cleanup_query);
    	
    	$cleanup_query = "UPDATE $this->dbtablename set ogame_playerid=0,moon='false', moonsize=0, planetname=''";
    	$res = $this->exec($cleanup_query);
    	if ($res === false) return false;
    	unset($res, $cleanup_query);
    	    	
    } else {
    	// new default (5.1) - we want to keep the existing entries if they are newer than the imported entries
    	
    	/*
    	 * Update all outdated systems with current timestamp
    	*/
    	$update_systemtime_query = "UPDATE $this->systemtablename SET last_update=:last_update1 WHERE last_update < :last_update2";
    	$stmt = DB::getDB()->prepare($update_systemtime_query);
    	$stmt->bindParam(":last_update1", $last_update);
    	$stmt->bindParam(":last_update2", $last_update);
    	$res = $this->execute($stmt);
    	if ($res === false) return false;
    	unset($update_systemtime_query);
    	
    	// delete obsolete entries
    	$max_query = "SELECT MAX(galaxy) as max_galaxy FROM $this->systemtablename";
    	$stmt = $this->query($max_query);
    	if (!$stmt) return false;
    	unset($max_query);
    	$line = $stmt->fetch(PDO::FETCH_OBJ);
    	$max_galaxy = $line->max_galaxy;
    	unset($line);
    	unset($stmt);
    	
    	for ($galaxy=1; $galaxy<=$max_galaxy; $galaxy++) {
    		$cleanup_query = "DELETE FROM $this->dbtablename where galaxy=$galaxy and metal = 0 AND crystal = 0 and system not in (SELECT system FROM $this->systemtablename WHERE galaxy=$galaxy and last_update > '$last_update' )";
    		$res = $this->exec($cleanup_query);

    		$cleanup_query = "UPDATE $this->dbtablename set ogame_playerid=0,moon='false', moonsize=0, planetname='' where galaxy=$galaxy AND system not in (SELECT system FROM $this->systemtablename WHERE galaxy=$galaxy and last_update > '$last_update' )";
    		$res = $this->exec($cleanup_query);
    	}
    }
      


    while($xml->read()) {
      if($xml->nodeType == XMLReader::ELEMENT) {
        $current_tag = $xml->name;
        if ($xml->name != "planet") {
          // unknown tag - ignore it
          continue;
        }

        // check if we have a moon tag inside the current planet tag
        if(!$xml->isEmptyElement && $current_tag == "planet") {
          $has_moon = true;
          } elseif($current_tag == "planet") {
            $has_moon = false;
          }

          // now copy the planet attributes
        $node = array();
        if($xml->hasAttributes) {
          unset($attributes);
                  $attributes = array();
                  while($xml->moveToNextAttribute()) {
                      $attributes[$xml->name] = $xml->value;
                  }
                  $node['planet'] = $attributes;
              }

              // now read the moon data if available
              if ($has_moon) {
                $xml->read(); // get moon tag
                // copy moon attributes
          if($xml->hasAttributes) {
            unset($attributes);
                    $attributes = array();
                    while($xml->moveToNextAttribute()) {
                        $attributes[$xml->name] = $xml->value;
                    }
                    $node['moon'] = $attributes;
                }
              }

        $planet++;

        if (!array_key_exists("planet", $node)) {
            $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no planet tag");
            return false;
          }

        // moon and moon size
        $moon = (array_key_exists("moon", $node) === true) ? "true" : "false";
          if ($moon == "true") {
            if (!array_key_exists("size", $node['moon'])) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no size at moon tag");
              return false;
            }
            $moonsize = intval($node['moon']['size']);
          } else {
            $moonsize = 0;
          }

          // other attributes
          if (!array_key_exists("coords", $node['planet'])) {
            $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no coords at planet tag");
            return false;
          }
          if (!array_key_exists("name", $node['planet'])) {
            $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no name at planet tag");
            return false;
          }
          if (!array_key_exists("player", $node['planet'])) {
            $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no player at planet tag");
            return false;
          }

          $coords   = explode(":", $node['planet']['coords']);
          $name     = DB::getDB()->quote($node['planet']['name']);
          $playerid = intval($node['planet']['player']);
		
          $galaxy_value = intval($coords[0]);
          $system_value = intval($coords[1]);
          if (array_key_exists($galaxy_value,$this->lastUpdate) && array_key_exists($system_value, $this->lastUpdate[$galaxy_value])) {
          	// do not overwrite entries which have a newer date
         	continue;
          }
          
          
          $query_content        .= "('".intval($coords[0])."','".intval($coords[1])."','".intval($coords[2])."','".$playerid."',".$name.",'$moon','$moonsize'),";
          $system_query_content .= "('".intval($coords[0])."','".intval($coords[1])."','$last_update','$user_id'),";

        unset($node);

          // paging required!!!
          if ($planet % 1000 == 0) {
            $query_content = substr($query_content, 0,strlen($query_content)-1); // remove comma
             $query_content .= " ON DUPLICATE KEY UPDATE planetname=VALUES(planetname), ogame_playerid=VALUES(ogame_playerid), moon=VALUES(moon), moonsize=VALUES(moonsize)";
             $res = $this->exec($query . $query_content);
             if ($res === false) return false;
             unset($res);
             $query_content = "";

             $system_query_content = substr($system_query_content, 0,strlen($system_query_content)-1); // remove comma
             // we do not want to overwrite the existing last_update values as they might be newer!
             //$system_query_content .= " ON DUPLICATE KEY UPDATE last_update=VALUES(last_update), user_id=VALUES(user_id)";
             $system_query_content .= " ON DUPLICATE KEY UPDATE galaxy=galaxy"; // dummy change because "IGNORE" does not exist at mysql
             $res = $this->exec($systemquery. $system_query_content);
             if ($res === false) return false;
             unset($res);
             $system_query_content = "";
          }
      }
    }
      if ($query_content != "") {
        $query_content = substr($query_content, 0,strlen($query_content)-1); // remove comma
        $query_content .= " ON DUPLICATE KEY UPDATE planetname=VALUES(planetname), ogame_playerid=VALUES(ogame_playerid), moon=VALUES(moon), moonsize=VALUES(moonsize)";
        $res = $this->exec($query . $query_content);
        if ($res === false) return false;
        unset($query_content);
       }
      if ($system_query_content != "") {
        $system_query_content = substr($system_query_content, 0,strlen($system_query_content)-1); // remove comma
        // $system_query_content .= " ON DUPLICATE KEY UPDATE last_update=VALUES(last_update), user_id=VALUES(user_id)";
        $system_query_content .= " ON DUPLICATE KEY UPDATE galaxy=galaxy"; // dummy change because "IGNORE" does not exist at mysql
      	$res = $this->exec($systemquery. $system_query_content);
        if ($res === false) return false;
        unset($systemquery);
      }
    $xml->close();
	
    
    return true;

  }

  /**
   * Load statistics data from OGame API provided at $url and update tool information.
   * @param String $url
   * @throws InvalidArgumentException
   * @return array|boolean
   */
  protected function get_alliance_data($url) {
    $url = strip_tags($url);
    if (substr($url, -4) != ".xml") throw new InvalidArgumentException("No XML file provided");

    if (!$this->validate_url($url)) return false;

    $xml = new XMLReader();
    $xml->open($url);
    $xml->read();

    if ($xml->name != "alliances") {
      $this->error_object = new ErrorObject(ErrorObject::severity_error, "Unexpected Error: Invalid XML content at $url - no alliances tag found as first tag");
      return;
    }
    $attributes = array();
      while($xml->moveToNextAttribute()) {
        $attributes[$xml->name] = $xml->value;
      }
      if (!array_key_exists("timestamp", $attributes)) {
        $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no timestamp attribute found on alliances tag");
        return;
      }
    $last_update = intval(strip_tags($attributes['timestamp']));
      $last_update = date("Y-m-d H:i:s",$last_update);

    $ally_buffer = array();

    $ally_buffer["last_update"] = $last_update;

    while($xml->read()) {
      if($xml->nodeType == XMLReader::ELEMENT) {
        $current_tag = $xml->name;
        if ($xml->name == "alliance") {

          if($xml->hasAttributes) {
            unset($attributes);
                    $attributes = array();
                    while($xml->moveToNextAttribute()) {
                        $attributes[$xml->name] = $xml->value;
                    }
                }

            if (!array_key_exists("id", $attributes)) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no id attribute at alliance tag");
              return false;
            }
            if (!array_key_exists("tag", $attributes)) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no tag attribute at alliance tag");
              return false;
            }


          $last_allyid = $attributes['id'];
          $ally_buffer[ $last_allyid ]['t'] = $attributes['tag']; // allyid -> allytag
            $ally_buffer[ $last_allyid ]['m'] = 0;
        } elseif($xml->name == "player") {
          $ally_buffer[ $last_allyid ]['m']++;
        } // else ignore unknown tag
      }
    } // while

      return $ally_buffer;

  }

  /**
   * Extract player information from OGame API and return as array
   * @param String $url
   * @throws InvalidArgumentException
   * @return boolean|array
   */
  protected function get_player_data($url) {
    $url = strip_tags($url);
    if (substr($url, -4) != ".xml") throw new InvalidArgumentException("No XML file provided");

    if (!$this->validate_url($url)) return false;

    $xml = new XMLReader();
    $xml->open($url);
    $xml->read();
    if ($xml->name != "players") {
      $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no players tag found as first tag");
      return;
    }
    $attributes = array();
      while($xml->moveToNextAttribute()) {
        $attributes[$xml->name] = $xml->value;
      }
      if (!array_key_exists("timestamp", $attributes)) {
        $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no timestamp attribute found on alliances tag");
        return;
      }
    $last_update = intval(strip_tags($attributes['timestamp']));
      $last_update = date("Y-m-d H:i:s",$last_update);

    $player_buffer = array();

    $player_buffer["last_update"] = $last_update;

    while($xml->read()) {
      if($xml->nodeType == XMLReader::ELEMENT) {
        $current_tag = $xml->name;
        if ($xml->name == "player") {

          if($xml->hasAttributes) {
            unset($attributes);
                    $attributes = array();
                    while($xml->moveToNextAttribute()) {
                        $attributes[$xml->name] = $xml->value;
                    }
                }

            if (!array_key_exists("id", $attributes)) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no id attribute at player tag");
              return false;
            }
            if (!array_key_exists("name", $attributes)) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no name attribute at player tag");
              return false;
            }

            $id = intval($attributes['id']);
            $player_buffer[$id] =  $attributes['name'].",";
            $player_buffer[$id] .= (array_key_exists("status", $attributes)) ? $attributes['status']."," : ",";
            $player_buffer[$id] .= (array_key_exists("alliance", $attributes)) ? intval($attributes['alliance'])."," : ",";

        } // else ignore unknown tag
      }
    } // while

      return $player_buffer;
  }

  /**
   * Load statistics information from OGame API and enrich provided player or alliance array with that data.
   * @param array $data
   * @param String $url
   * @throws InvalidArgumentException
   * @return boolean|array
   */
  protected function enrich_data(array $data, $url) {
    if (count($data) < 2) throw new InvalidArgumentException("Invalid data provided");
    $url = strip_tags($url);
    if (strpos($url,".xml") === false) throw new InvalidArgumentException("No XML file provided");

    if (!$this->validate_url($url)) return false;

    $xml = new XMLReader();
    $xml->open($url);
    $xml->read();
    if ($xml->name != "highscore") {
      $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no highscore tag found as first tag");
      return;
    }
    $attributes = array();
      while($xml->moveToNextAttribute()) {
        $attributes[$xml->name] = $xml->value;
      }
      if (!array_key_exists("timestamp", $attributes)) {
        $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no timestamp attribute found on highscore tag");
        return;
      }
      if (!array_key_exists("type", $attributes)) {
        $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no type attribute found on highscore tag");
        return;
      }
      if (!array_key_exists("category", $attributes)) {
        $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no category attribute found on highscore tag");
        return;
      }
      $last_update = intval(strip_tags($attributes['timestamp']));
      $last_update = date("Y-m-d H:i:s",$last_update);

      $type     = intval($attributes['type']);
      $category = intval($attributes['category']);

      if ($category != 1 && $category != 2) {
        $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - invalid category: $category found on highscore tag");
        return;
      }
      $expected_tag = ($category == "2") ? "alliance" : "player";

    $ally_buffer = array();

    $ally_buffer["last_update"] = $last_update;

    while($xml->read()) {
      if($xml->nodeType == XMLReader::ELEMENT) {
        $current_tag = $xml->name;
        if ($xml->name == $expected_tag) {

          if($xml->hasAttributes) {
            unset($attributes);
                    $attributes = array();
                    while($xml->moveToNextAttribute()) {
                        $attributes[$xml->name] = $xml->value;
                    }
                }

            if (!array_key_exists("position", $attributes)) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no position attribute at $expected_tag tag");
              return false;
            }
            if (!array_key_exists("id", $attributes)) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no id attribute at $expected_tag tag");
              return false;
            }
            if (!array_key_exists("score", $attributes)) {
              $this->error_object = new ErrorObject(ErrorObject::severity_error, "Error: Invalid XML content - no score attribute at $expected_tag tag");
              return false;
            }

          $id = intval($attributes['id']);
            if (array_key_exists($id, $data)) {
              if ($expected_tag == "alliance") {
                $data[$id][$type] = array( intval($attributes['position']), intval($attributes['score']) );
              } else {
                $data[$id] .= intval($attributes['position']).",".intval($attributes['score']).",";
                if ($type == "3" && $category == "1") {
                  if (array_key_exists("ships", $attributes)) {
                    $data[$id] .= intval($attributes['ships']).",";
                  } else {
                    $data[$id] .= ",";
                  }
                }

              }
            }

        } // else ignore unknown tag
      }
    } // while

      return $data;

  }

  /**
   * Convert alliance information array into database query statements and save them.
   * @param array $data
   * @param Integer $user_id
   * @throws InvalidArgumentException
   * @return boolean
   */
  protected function save_allydata(array $data, $user_id) {
    $user_id = intval($user_id);
    if ($user_id < 1) throw new InvalidArgumentException("Invalid user id provided");

    if (count($data) < 2) return false;

    if (!array_key_exists("last_update", $data)) throw new InvalidArgumentException("Invalid data array provided");
    $last_update = $data['last_update'];
    unset($data['last_update']);

    $query_start = "INSERT INTO $this->allytable (ogame_allyid, allyname, rank, points, frank, fpoints, rrank, rpoints, erank, epoints, hrank, hpoints,".
                 "fbrank,fbpoints,fdrank,fdpoints,flrank,flpoints,members,last_update,user_id) VALUES ";
    $query_end = "ON DUPLICATE KEY UPDATE allyname=VALUES(allyname), members=VALUES(members), last_update=VALUES(last_update), user_id=VALUES(user_id),".
                 "rank=VALUES(rank), points=VALUES(points), frank=VALUES(frank), fpoints=VALUES(fpoints), rrank=VALUES(rrank), rpoints=VALUES(rpoints), erank=VALUES(erank), epoints=VALUES(epoints),".
                 "hrank=VALUES(hrank), hpoints=VALUES(hpoints), fbrank=VALUES(fbrank), fbpoints=VALUES(fbpoints), fdrank=VALUES(fdrank), fdpoints=VALUES(fdpoints), flrank=VALUES(flrank), flpoints=VALUES(flpoints)";

    $query = "";
    $entries = 0;
    foreach($data as $allyid => $allydata) {
      $entries++;
      $allytag = $allydata['t'];
      $member  = $allydata['m'];

      if (isset($allydata[OGameAPIParser::type_total])) {
        $rank    = $allydata[OGameAPIParser::type_total][0];
        $points  = $allydata[OGameAPIParser::type_total][1];
        $frank   = $allydata[OGameAPIParser::type_Military][0];
        $fpoints = $allydata[OGameAPIParser::type_Military][1];
        $rrank   = $allydata[OGameAPIParser::type_Research][0];
        $rpoints = $allydata[OGameAPIParser::type_Research][1];
        $erank   = $allydata[OGameAPIParser::type_Economy][0];
        $epoints = $allydata[OGameAPIParser::type_Economy][1];
        $hrank   = $allydata[OGameAPIParser::type_Honor][0];
        $hpoints = $allydata[OGameAPIParser::type_Honor][1];
        $fbrank   = $allydata[OGameAPIParser::type_Military_Built][0];
        $fbpoints = $allydata[OGameAPIParser::type_Military_Built][1];
        $fdrank   = $allydata[OGameAPIParser::type_Military_Destroyed][0];
        $fdpoints = $allydata[OGameAPIParser::type_Military_Destroyed][1];
        $flrank   = $allydata[OGameAPIParser::type_Military_Lost][0];
        $flpoints = $allydata[OGameAPIParser::type_Military_Lost][1];
      } else {
        $rank    = 0;
        $points  = 0;
        $frank   = 0;
        $fpoints = 0;
        $rrank   = 0;
        $rpoints = 0;
        $erank   = 0;
        $epoints = 0;
        $hrank   = 0;
        $hpoints = 0;
        $fbrank   = 0;
        $fbpoints = 0;
        $fdrank   = 0;
        $fdpoints = 0;
        $flrank   = 0;
        $flpoints = 0;
      }

      $query .= "(".intval($allyid).",".DB::getDB()->quote($allytag).",";
      $query .= $rank.",".$points.",".$frank.",".$fpoints.",".$rrank.",".$rpoints.",".$erank.",".$epoints.",".$hrank.",".$hpoints.",".
                $fbrank.",".$fbpoints.",".$fdrank.",".$fdpoints.",".$flrank.",".$flpoints.",";
      $query .= intval($member).",".DB::getDB()->quote($last_update).",$user_id),";

      if ($entries == 500) {
        // remove last comma
        $query = substr($query, 0, strlen($query)-1);

        $execute_query = $query_start . " " . $query . " " . $query_end;
        $res = $this->exec($execute_query);
        unset($execute_query);
        if ($res === false) return false;

        $query = "";
        $entries = 0;
      }
    }
    if ($entries > 0) {
      // remove last comma
      $query = substr($query, 0, strlen($query)-1);

      $execute_query = $query_start . " " . $query . " " . $query_end;
      $res = $this->exec($execute_query);
      unset($execute_query);
      if ($res === false) return false;
    }

    // set member to 0 for alliances who have not been updated (could also be deleted, but ally IDs are still required for alliance history)
    // rank > 0 is used to filter them at statistics page
    $query = "UPDATE $this->allytable SET members=0, rank=0 WHERE last_update != :last_update AND rank > 0";
    $stmt = DB::getDB()->prepare($query);
    $stmt->bindParam(":last_update", $last_update);
    $res = $this->execute($stmt);
    return $res;
  }

  /**
   * Convert player data array into database queries and save them.
   * @param array $data
   * @param Integer $user_id
   * @throws InvalidArgumentException
   * @return boolean
   */
  protected function save_playerdata(array $data, $user_id) {
    $user_id = intval($user_id);
    if ($user_id < 1) throw new InvalidArgumentException("Invalid user id provided");

    if (count($data) < 2) return false;

    if (!isset($data['last_update'])) throw new InvalidArgumentException("Invalid data array provided");
    $last_update = $data['last_update'];
    unset($data['last_update']);

    // get all alliances from database
    $query = "SELECT id, ogame_allyid FROM $this->allytable";
    $stmt = $this->query($query);
    if (!$stmt) return false;
    unset($query);
    $ogame_allyid_2_gt_id = array();
    while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
      $ogame_allyid_2_gt_id[$line->ogame_allyid] = $line->id;
    }

    $query_start = "INSERT INTO $this->playertable (playername,ogame_playerid,alliance_id,ships,rank,points,frank,fpoints,rrank,rpoints,erank,epoints,hrank,hpoints,".
                   "fbrank,fbpoints,fdrank,fdpoints,flrank,flpoints,noob,banned,vacation,inactive,long_inactive,outlaw,last_stats_update,user_id) VALUES ";
    $query_end = "ON DUPLICATE KEY UPDATE playername=VALUES(playername), alliance_id=VALUES(alliance_id), ships=VALUES(ships), last_stats_update=VALUES(last_stats_update), user_id=VALUES(user_id),".
                 "rank=VALUES(rank), points=VALUES(points), frank=VALUES(frank), fpoints=VALUES(fpoints), rrank=VALUES(rrank), rpoints=VALUES(rpoints), erank=VALUES(erank), epoints=VALUES(epoints),".
                 "hrank=VALUES(hrank), hpoints=VALUES(hpoints), fbrank=VALUES(fbrank), fbpoints=VALUES(fbpoints), fdrank=VALUES(fdrank), fdpoints=VALUES(fdpoints), flrank=VALUES(flrank), flpoints=VALUES(flpoints),".
           "noob=VALUES(noob),banned=VALUES(banned),vacation=VALUES(vacation),inactive=VALUES(inactive),long_inactive=VALUES(long_inactive),outlaw=VALUES(outlaw)";

    $query = "";
    $entries = 0;
    foreach($data as $playerid => $playerdata) {
      $entries++;
      $playerdata = explode(",", $playerdata);
      $name     = $playerdata[0];
      $status   = $playerdata[1];
      $alliance = (isset($playerdata[2]) && is_numeric($playerdata[2]) && array_key_exists($playerdata[2], $ogame_allyid_2_gt_id)) ? $ogame_allyid_2_gt_id[ $playerdata[2] ] : 0; // 0 as default - but not NULL

      $noob = $banned = $vacation = $inactive = $long_inactive = $outlaw = "false";
      if (!empty($status)) {
        if (strpos($status,"n") !== false) $noob = 'true' ;
        if (strpos($status,"b") !== false) $banned = 'true' ;
        if (strpos($status,"v") !== false) $vacation = 'true' ;
        if (strpos($status,"i") !== false) $inactive = 'true' ;
        if (strpos($status,"I") !== false) $long_inactive = 'true' ;
        if (strpos($status,"o") !== false) $outlaw = 'true' ;
      }
      if ($long_inactive == "true") $inactive = "true";


      if (isset($playerdata[4])) {
        $rank    = isset($playerdata[3]) ? intval($playerdata[3]) : 0;
        $points  = isset($playerdata[4]) ? intval($playerdata[4]) : 0;
        $erank   = isset($playerdata[5]) ? intval($playerdata[5]) : 0;
        $epoints = isset($playerdata[6]) ? intval($playerdata[6]) : 0;
        $rrank   = isset($playerdata[7]) ? intval($playerdata[7]) : 0;
        $rpoints = isset($playerdata[8]) ? intval($playerdata[8]) : 0;
        $frank   = isset($playerdata[9]) ? intval($playerdata[9]) : 0;
        $fpoints = isset($playerdata[10]) ? intval($playerdata[10]) : 0;
        $ships    = isset($playerdata[11]) ? intval($playerdata[11]) : 0; // ships !!!
        $flrank   = isset($playerdata[12]) ? intval($playerdata[12]) : 0;
        $flpoints = isset($playerdata[13]) ? intval($playerdata[13]) : 0;
        $fbrank   = isset($playerdata[14]) ? intval($playerdata[14]) : 0;
        $fbpoints = isset($playerdata[15]) ? intval($playerdata[15]) : 0;
        $fdrank   = isset($playerdata[16]) ? intval($playerdata[16]) : 0;
        $fdpoints = isset($playerdata[17]) ? intval($playerdata[17]) : 0;
        $hrank   = isset($playerdata[18]) ? intval($playerdata[18]) : 0;
        $hpoints = isset($playerdata[19]) ? intval($playerdata[19]) : 0;
      } else {
        $rank    = 0;
        $points  = 0;
        $frank   = 0;
        $fpoints = 0;
        $ships   = 0;
        $rrank   = 0;
        $rpoints = 0;
        $erank   = 0;
        $epoints = 0;
        $hrank   = 0;
        $hpoints = 0;
        $fbrank   = 0;
        $fbpoints = 0;
        $fdrank   = 0;
        $fdpoints = 0;
        $flrank   = 0;
        $flpoints = 0;
      }

      $query .= "(".DB::getDB()->quote($name).",".intval($playerid).",".$alliance.",".$ships.",";
      $query .= $rank.",".$points.",".$frank.",".$fpoints.",".$rrank.",".$rpoints.",".$erank.",".$epoints.",".$hrank.",".$hpoints.",".
                $fbrank.",".$fbpoints.",".$fdrank.",".$fdpoints.",".$flrank.",".$flpoints.",".
                "'$noob','$banned','$vacation','$inactive','$long_inactive','$outlaw',";
      $query .= DB::getDB()->quote($last_update).",$user_id),";

      if ($entries == 500) {
        // remove last comma
        $query = substr($query, 0, strlen($query)-1);

        $execute_query = $query_start . " " . $query . " " . $query_end;
        $res = $this->exec($execute_query);
        unset($execute_query);
        if ($res === false) return false;

        $query = "";
        $entries = 0;
      }
    }
    if ($entries > 0) {
      // remove last comma
      $query = substr($query, 0, strlen($query)-1);

      $execute_query = $query_start . " " . $query . " " . $query_end;
      $res = $this->exec($execute_query);
      unset($execute_query);
      if ($res === false) return false;
    }

        // delete player and its references which are no longer part of OGame
        $result = $this->delete_outdated_players($last_update);
        if ($result !== true) return false;

    return true;
  }

    protected function setBanditStatus() {
        // first reset all player which have a Bandit status
        $query = "UPDATE $this->playertable SET bandit='false' WHERE bandit='true'";
        $res = $this->exec($query);

        // Low 250 of honor stats and at max -500 EP: Bandit
        // Low 100 of honor stats and at max -2500 EP: Banditenlord
        // Low 10 of honor stats and at max -15000 EP: Banditenkönig
        $query = "SELECT id, hpoints FROM $this->playertable WHERE banned='false' ORDER BY hpoints ASC LIMIT 250";
        $stmt = $this->query($query);
        if (!$stmt) return false;
        $ids = array();
        while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
            if ($line->hpoints <= -500) {
                array_push($ids, $line->id);
            }
        }
        if (count($ids) == 0) return true;

        $query = "UPDATE $this->playertable SET bandit='true' WHERE id IN('".implode("','", $ids)."')";
        $res = $this->exec($query);
        return $res;
    }

  /**
   * Checks if a given OGame API url exists at host.
   * @param String $url OGame API URL including .xml
   * @return boolean
   */
  private function validate_url($url) {
    $one_byte_content = @file_get_contents($url,0,NULL,0,1);
    if ($one_byte_content === false) {
      $this->error_object = new ErrorObject(ErrorObject::severity_error, str_replace("&1",$url, INSTALL_STEP4_URL_CHECK_FAILED ));
      return false;
    }

    return true;
  }


    private function delete_outdated_players($last_update) {

        $query = "SELECT id, ogame_playerid FROM $this->playertable WHERE last_stats_update < :last_update";
        $stmt = DB::getDB()->prepare($query);
        $stmt->bindParam(":last_update", $last_update);
        $res = $this->execute($stmt);
        if ($res === false) return false;
        $ids = array();
        $oids = array();
        while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
            array_push($ids,$line->id);
            array_push($oids,$line->ogame_playerid);
        }
        if (count($ids) > 0) {
            $query = "DELETE FROM $this->playertable WHERE id IN (".implode(",",$ids).")";
            $res = $this->exec($query);
            if ($res === false) return false;

            // delete referenced information
            $query = "DELETE FROM $this->playerhistory WHERE player_id IN (".implode(",",$ids).")";
            $res = $this->exec($query);
            if ($res === false) return false;
            $query = "DELETE FROM $this->noticetable WHERE player_id IN (".implode(",",$ids).")";
            $res = $this->exec($query);
            if ($res === false) return false;
            $query = "DELETE FROM $this->dbtablename WHERE ogame_playerid  IN (".implode(",",$oids).")";
            $res = $this->exec($query);
            if ($res === false) return false;

            $query = "SELECT combat_id FROM $this->combatparty WHERE player_id IN (".implode(",",$ids).")";
            $stmt = $this->query($query);
            if ($stmt === false) return false;
            $combat_ids = array();
            while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
                array_push($combat_ids,$line->combat_id);
            }
            if (count($combat_ids) > 0) {
                $query = "DELETE FROM $this->combattable WHERE id IN (".implode(",",$combat_ids).")";
                $res = $this->exec($query);
                if ($res === false) return false;
                $query = "DELETE FROM $this->combatparty WHERE combat_id IN (".implode(",",$combat_ids).")";
                $res = $this->exec($query);
                if ($res === false) return false;
            }

            $query = "DELETE FROM $this->player_activity WHERE player_id IN (".implode(",",$ids).")";
            $res = $this->exec($query);
            if ($res === false) return false;
            $query = "DELETE FROM $this->messagetable WHERE player_id_from IN (".implode(",",$ids).") OR player_id_to IN (".implode(",",$ids).")";
            $res = $this->exec($query);
            if ($res === false) return false;

        }

        return true;
    }

}