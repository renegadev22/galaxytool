<?php
$content_type = "text/html";
require "_general_header.inc.php";

$type = "";
if (isset($_GET['type'])) {
	$type = $_GET['type'];
} elseif(isset($_POST['type'])) {
	$type = $_POST['type'];
}
if ($type == "") exit("type missing");

try {
	$form_saves = new FormSave($formtable);

	switch ($type) {
		case "save_data";
			if (!isset($_GET['form_id'])) exit("parameter missing");
			$form_id = $_GET['form_id'];
			if (!isset($_GET['save_id'])) exit("parameter missing");
			$save_id = $_GET['save_id'];
			$form_content = stripslashes($_POST['form_content']);
			$form_saves->save_form($form_id, $save_id, $form_content);
			exit( $form_saves->get_error_object()->get_JSON_result() );

		case "load_data";
			if (!isset($_GET['form_id'])) exit("parameter missing");
			$form_id = $_GET['form_id'];
			if (!isset($_GET['save_id'])) exit("parameter missing");
			$save_id = $_GET['save_id'];

			$form_content = $form_saves->get_form($form_id, $save_id);

			$messages = $form_saves->get_error_object();
			if ($messages != null) {
				$message_json = $messages->get_JSON_result();
			} else {
				$message_json = "null";
			}
			if ($form_content === false) $form_content = json_encode(array());

			$result = '{ form_content: '.$form_content.', messages: '.$message_json.' }';

			exit( $result );

		case "delete_data";
			if (!isset($_GET['form_id'])) exit("parameter missing");
			$form_id = $_GET['form_id'];
			if (!isset($_GET['save_id'])) exit("parameter missing");
			$save_id = $_GET['save_id'];
			$form_saves->delete_form($form_id, $save_id);
			exit( $form_saves->get_error_object()->get_JSON_result() );

		case "get_save_ids":
			if (!isset($_GET['form_id'])) exit("parameter missing");
			$form_id = $_GET['form_id'];

			$result = $form_saves->get_save_ids($form_id);
			if ($result === false) {
				$messages = $form_saves->get_error_object();
				if ($messages == null) exit("unknown Error occurred");
				exit($messages->get_JSON_result());
			}
			exit(json_encode($result));

			break;

		case "load_UI":
			if (!isset($_GET['form_id'])) exit("parameter missing");
			$form_id = $_GET['form_id'];

			$result = $form_saves->get_save_ids($form_id);
			if ($result === false) exit("Error occurred");

			echo '<table border="0" style="width:100%">';
			foreach($result as $entry) {
				echo '<tr><td style="width: 90%"><a href="#" onclick="loadFormData(\''.$form_id.'\',\''.$entry['save_id'].'\')">'.$entry['save_id'].'</a></td>'.
				     '<td><img src="../images/trash.png" onclick="deleteFormData(\''.$form_id.'\',\''.$entry['save_id'].'\')" style="cursor: pointer;"></td></tr>';
			}
			echo "</table>";

			break;

		case "save_UI":
			if (!isset($_GET['form_id'])) exit("");
			$form_id = $_GET['form_id'];

			echo GENERAL_SAVE_AS_TEXT;?>:
			<input dojoType="dijit.form.TextBox" name="save_id" id="save_id" trim="true" style="width:130px;" maxlength="30" size="30">
			<button dojoType="dijit.form.Button" type="button" id="formsave_button" onClick="validateSaveScreen('<?php echo $form_id; ?>')"><?php echo GENERAL_SAVE; ?></button>
			<img id="formsave_loading_icon" src="../images/loading_small.gif" style="display:none;">
			<div id="formsave_overwrite_content" style="display:none;">
			<input id="formsave_overwrite" name="formsave_overwrite" dojoType="dijit.form.CheckBox" value="1">
			<label for="formsave_overwrite"><?php echo GENERAL_OVERWRITE; ?></label>
			</div>
	<?php

			break;

		default: exit("unknown type");
	}

} catch (Exception $e) {
	exit("Exception occurred: ".$e);
}
