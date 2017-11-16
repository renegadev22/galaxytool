<?php

/**
 * Superclass for playerinformation.inc.php and allyinformation.inc.php
 * @author eX0du5
 *
 */
class PlayerAllyInformation extends GenericSuperclass {

    private $max_temp = array(123,123,120,66.7,64.5,63,41,39,36,14.5,12,11,-43,-44,-46);

	protected $buffer_reports     = array();
	protected $buffer_coordinates = array();

	function __construct() {
		parent::__construct();
	}

	/**
	 * Return an array with coordinates that contain information if a report or moon exists for that coordinates.
	 * @param Int $id
	 * @return boolean|array
	 */
	protected function get_coordinates($id) {
		if (!is_numeric($id)) return false;
		if (!array_key_exists($id, $this->buffer_coordinates)) return false;

		return $this->buffer_coordinates[$id];
	}

	/**
	 * Return an array that contains information about the phalanx ranges.
	 * @param Int $id
	 * @return boolean|array
	 */
	public function get_phalanx_ranges($id) {
		if (!is_numeric($id)) return "";
		if (!array_key_exists($id, $this->buffer_reports)) return "";

		$phalanx = array();
		foreach ($this->buffer_reports[$id] as $key => $report) {
			if ($report['moon'] != "true") continue; // get a moon report
			if ($report['sensor'] < 1) continue; // no sensor built

			if (!isset($phalanx[$report['galaxy']])) $phalanx[$report['galaxy']] = array();
			$min = $report['system'] - (($report['sensor'] * $report['sensor']) - 1);
			$max = $report['system'] + (($report['sensor'] * $report['sensor']) - 1);
			$min = ($min < 1) ? 1 : $min;
			$max = ($max > 499) ? 499 : $max;

			array_push($phalanx[$report['galaxy']], array("min"=>$min, "max"=>$max));
		}
		return $phalanx;
	}

	/**
	 * Returns an associative array with metal, crystal and deuterium production per hour (at standard speed).
	 * @param Int $id
	 * @return boolean|Array
	 */
	public function get_production($id) {
		if (!is_numeric($id)) return false;
		if (!array_key_exists($id, $this->buffer_reports)) return false;

		$production['metal'] = 0;
		$production['crystal'] = 0;
		$production['deuterium'] = 0;
        
		foreach ($this->buffer_reports[$id] as $key => $report) {
            if (array_key_exists("playerplasmatech", $report)) {
                $metal_modifier = 1 + $report["playerplasmatech"] * 0.01;
                $crystal_modifier = 1 + $report["playerplasmatech"] * 0.0066;
            } else {
                $metal_modifier   = 1;
                $crystal_modifier = 1;
            }
            
			if ($report['moon'] == "false" && $report['energy'] != NULL) {
				if ($report['memi'] > 0) {
					$production['metal'] += floor( $metal_modifier * 30 *  $report['memi'] * pow(1.1,$report['memi']) + 30);
				}
				if ($report['krimi'] > 0) {
					$production['crystal'] += floor( $crystal_modifier * 20 * $report['krimi'] * pow(1.1,$report['krimi']) + 15);
				}
				if ($report['deutsyn'] > 0) {
					$production['deuterium'] += floor(10 * $report['deutsyn'] * pow(1.1,$report['deutsyn']) * (-0.002 * $this->max_temp[$report['g_planet']-1] + 1.28));
				}
			}
		}

		return $production;
	}

	/**
	 * Converts reports into a JSON format to be used with Javascript.
	 * @param Reports $report_ref
	 * @param Int $id
	 * @return boolean|string
	 */
	public function get_reports_as_json(Reports $report_ref, $id) {
		if (!is_numeric($id)) return false;
		if (!array_key_exists($id, $this->buffer_reports)) return "{}";

		$json = "{\n";
		foreach ($this->buffer_reports[$id] as $report) {
			$coordinates = $report['galaxy'].":".$report['system'].":".$report['planet'];
			$key = $coordinates;
			if ($report['moon'] == "true") {
				$key .= "M";
			}
			$moon = ($report['moon'] == "true") ? true : false;
			$json .= "'".$key."':".$report_ref->get_coordinates($coordinates, $moon).",";
		}
		$json .= "}\n";

		return $json;
	}


	/**
	 * Aggregate all reports and count the different ship types. Returned as associative array with key = db key.
	 * @param Int $id
	 * @return boolean|Array
	 */
	public function get_fleetsize($id) {
		if (!is_numeric($id)) return false;
		if (!array_key_exists($id, $this->buffer_reports)) return false;

		$fleet_db = array("kt","gt","lj","sj","krz","ss","kolo","rec","spio","bomb","zerri","ds","skrz","sat");
		$fleetsize = array("kt"=>0,"gt"=>0,"lj"=>0,"sj"=>0,"krz"=>0,"ss"=>0,"kolo"=>0,"rec"=>0,"spio"=>0,"bomb"=>0,"zerri"=>0,"ds"=>0,"skrz"=>0,"sat"=>0);
		foreach ($this->buffer_reports[$id] as $key => $report) {
			foreach ($fleet_db as $db_key) {
				if ($report[$db_key] > 0) $fleetsize[$db_key] += $report[$db_key];
			}
		}

		return $fleetsize;
	}

	/**
	 * Provide an associative array fetched with reports.inc.php method get_reports_for_alliance().
	 * @param Int $id
	 * @param array $reports
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	protected function set_reports($id, array $reports) {
		if (count($reports) < 1) return false;
		// just one spot checks for correct array
		if (!isset($reports[0]['g_galaxy']) || !isset($reports[0]['g_system']) || !isset($reports[0]['g_planet']) || !isset($reports[0]['g_moon'])) throw new InvalidArgumentException("Invalid DB result provided");

		$all_coordinates = array();
		$all_reports = array();
		// filter for reports into all_reports and put the remaining information into all_coordinates
		foreach ($reports as $key => $report) {
			$report_exists = ($report['galaxy'] != null) ? true : false;
			$coordinates   = $report['g_galaxy'] . ":" . $report['g_system'] . ":" . $report['g_planet'];

			// first the dummy coordinates with report = false
			if (!isset($all_coordinates[$coordinates])) {
				$all_coordinates[$coordinates] = array(
					"galaxy"=>$report['g_galaxy'],
					"system"=>$report['g_system'],
					"planet"=>$report['g_planet'],
					"moon" => false,
					"report"=>false
				);
				if ($report['g_moon'] == "true") {
					$all_coordinates[$coordinates."M"] = array(
						"galaxy"=>$report['g_galaxy'],
						"system"=>$report['g_system'],
						"planet"=>$report['g_planet'],
						"moon" => true,
						"report"=>false
					);
				}
			}

			// now update if report was found or not
			if ($report_exists)	{
				array_push($all_reports, $report);

				if ($report['moon'] == "true") {
					if (isset($all_coordinates[$coordinates."M"])) {
						$all_coordinates[$coordinates."M"]["report"] = true;
					} // else: we have a report for a moon where no moon exists

				} else {
					$all_coordinates[$coordinates]["report"] = true;
				}
			}
		}
		$this->buffer_reports[$id]     = $all_reports;
		$this->buffer_coordinates[$id] = $all_coordinates;

		return true;
	}

}