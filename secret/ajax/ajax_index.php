<?php
require "_general_header.inc.php";

if (!isset($_GET['type']) && !isset($_POST['type'])) exit("1");

if (isset($_GET['type'])) $type = $_GET['type'];
else $type = $_POST['type'];

switch ($type) {
	case "new_token":

		// generate new token
		$new_key_valid = false;
		while($new_key_valid == false) {
			$new_key = md5(rand(0,1000).time().rand(0,1000));
			$query = "UPDATE IGNORE $utablename SET plugin_token='$new_key' WHERE id='".$_SESSION['s_auth']->get_setting(iAuthorization::setting_userid)."'";
			$res = DB::getDB()->exec($query);
			if ($res !== false && $res > 0) $new_key_valid = true; // ensure that key was updated
		}
		$return = $_SESSION['s_auth']->set_setting(iAuthorization::setting_plugin_token, $new_key);

		$result = '{ "result": '.json_encode($new_key).' , "messages": null }';
		exit($result);

	break;
}
