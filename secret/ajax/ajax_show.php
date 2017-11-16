<?php
require "_general_header.inc.php";

if (!$_SESSION['s_auth']->get_permission(iAuthorization::permission_cansearch)) exit("no permission");

$type = "";
if (isset($_GET['type'])) {
	$type = $_GET['type'];
} elseif(isset($_POST['type'])) {
	$type = $_POST['type'];
}
if ($type == "") exit("type missing");


try {
	switch ($type) {
		case "search":
			$search = new GalaxytoolSearch($dbtablename, $systemtablename, $playertable, $allytable, $noticetable, $reporttable, $playerhistory);
			$search->set_search_parameter($_POST);
			$search->perform_search();

			$messages = $search->get_error_object();
			if ($messages != null) {
				$message_json = $messages->get_JSON_result();
			} else {
				$message_json = "null";
			}
			$result = '{ "results": '.$search->get_number_of_results().', "messages": '.$message_json.' }';
			$_SESSION['galaxysearch'] = $search;
			exit($result);

		case "content":
			// get paging information
			if (!isset($_POST['count']) || !isset($_POST['start'])) exit("Parameter missing");

			$count = $_POST['count'];
			$start = $_POST['start'];

			$search = $_SESSION['galaxysearch'];

			$json = "{\"id\":1, ";
			$json .= "\"numRows\":".$search->get_number_of_results().",";
			$json .= $search->get_content($start, $count);

			$json .= ", \"messages\": ";
			$messages = $search->get_error_object();
			if ($messages != null) {
				$json .= $messages->get_JSON_result();
			} else {
				$json .= "null";
			}

			$json .= "}";
			exit($json);

			/*
			$results = '{id:4, items:[';
			for ($i = 0; $i < 300; $i++) {
				$address = 100000 + ($i+1)*100 + 3;
				$results .= '{address: '.$address.', moon: false, debris: {m:0,c:0}, allyname:"test", planetname:"test2", playername: "test3", status:"i", datetime:"2011-12-15 13:30:45", notices:null, reports:{p:null,m:null}},';
			}
			$results .= ' ]}';
			exit($results);
			*/
			break;

		default: exit("Invalid type");
	}

} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}
