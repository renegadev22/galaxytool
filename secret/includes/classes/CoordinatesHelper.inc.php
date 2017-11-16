<?php

/**
 * Helper class to validate coordinates or built query parameter. The class does not execute any queries.
 * @author eX0du5
 *
 */
class CoordinatesHelper {

	public static function validate_coordinates($value) {
		$value = preg_replace("/\s/","",$value);
		if ($value == "") return true;

		$requests = explode(";",$value);
		$requestsCount = count($requests);
		for ($i=0; $i<$requestsCount; $i++) {
			$request = explode(":",$requests[$i]);
			$requestCount = count($request);
			if ($requestCount > 3) return false;
			for ($j=0; $j<$requestCount; $j++) {
				if ($request[$j] == "") return false;
				$subcheck = preg_replace("/\d+(\-(?:\d+))?/","",$request[$j]);
				if ($subcheck != "") return false;
			}
		}
		return true;
	}

	public static function get_coordinate_where_statement($value,$table_prefix) {
		$value = preg_replace("/\s/","",$value);
		if ($value == "") return "";


		$query = " AND (";

		$requests = explode(";",$value);
		$requests_no = count($requests);
		for ($i=0; $i<$requests_no; $i++) {
			$query .= " (";

			$request = explode(":",$requests[$i]);

			$request_no = count($request);
			for ($j=0; $j<$request_no; $j++) {
				switch ($j) {
					case 0: $query .= $table_prefix . ".galaxy"; break;
					case 1: $query .= $table_prefix . ".system"; break;
					case 2: $query .= $table_prefix . ".planet"; break;
					default: throw new InvalidArgumentException();
				}
				$tmp = explode("-",$request[$j]);
				if (count($tmp) == 1) {
					$query .= "=".intval($tmp[0]);
				} else {
					$query .= " BETWEEN ".intval($tmp[0])." AND ".intval($tmp[1]." ");
				}
				if ($j < $request_no - 1) $query .= " AND ";
			}

			$query .= ")";
			if ($i < $requests_no -1) $query .= " OR ";
		}
		return $query.")";
	}
	
}
?>