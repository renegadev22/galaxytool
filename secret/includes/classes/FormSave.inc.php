<?php
/**
 * Class to save and load form data.
 * @author eX0du5
 *
 */
class FormSave extends GenericSuperclass {

	private $formtable = null;

	public function __construct($formtable) {
		parent::__construct();

		if ($formtable == "") throw new InvalidArgumentException("Form save table empty");
		$this->formtable = $formtable;


	}


	/**
	 * Get a list of all save_ids for given form_id of the current user.
	 * @param Char(30) $form_id
	 * @return boolean|array with id, save_id
	 */
	public function get_save_ids($form_id) {
		$query = "SELECT id, save_id FROM $this->formtable WHERE user_id=:user_id AND form_id=:form_id";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":user_id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		$stmt->bindParam(":form_id", $form_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		$return_values = array();
		while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
			array_push($return_values, $line);
		}

		return $return_values;
	}


	/**
	 * Save form data with new save_id or overwrite content if identical key (form_id, save_id, user_id) exists.
	 * @param Char(30) $form_id
	 * @param Char(30) $save_id
	 * @param String $content
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function save_form($form_id, $save_id, $content) {
		if ($form_id == "") throw new InvalidArgumentException("Form ID empty");
		if ($save_id == "") throw new InvalidArgumentException("Save ID empty");
		if ($content == "") throw new InvalidArgumentException("Form content empty");
		if (!is_numeric($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid))) throw new InvalidArgumentException("UserID missing at session?!");

		$query = "INSERT INTO $this->formtable ".
		"(form_id, save_id, user_id, content) VALUES ".
		"(:form_id,:save_id,:user_id,:content) ".
		"ON DUPLICATE KEY UPDATE content=VALUES(content)";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":user_id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		$stmt->bindParam(":save_id", $save_id);
		$stmt->bindParam(":form_id", $form_id);
		$stmt->bindParam(":content", $content);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		$this->error_object = new ErrorObject(ErrorObject::severity_info, NOTICE_SAVED);
		return true;
	}

	/**
	 * Retrieve form content for given form_id and save_id of the current user.
	 * @param Char(30) $form_id
	 * @param Char(30) $save_id
	 * @throws InvalidArgumentException
	 * @return boolean|string
	 */
	public function get_form($form_id, $save_id) {
		if ($form_id == "") throw new InvalidArgumentException("Form ID empty");
		if ($save_id == "") throw new InvalidArgumentException("Save ID empty");
		if (!is_numeric($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid))) throw new InvalidArgumentException("UserID missing at session?!");

		$query = "SELECT content FROM $this->formtable WHERE ".
		"form_id = :form_id AND save_id=:save_id AND user_id=:user_id";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":user_id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		$stmt->bindParam(":save_id", $save_id);
		$stmt->bindParam(":form_id", $form_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		if ($stmt->rowCount() == 0) return json_encode(array());

		$line = $stmt->fetch(PDO::FETCH_ASSOC);
		return $line['content'];
	}

	/**
	 * Delete given save ID of the current user for given form_id.
	 * @param Char(30) $form_id
	 * @param Char(30) $save_id
	 * @throws InvalidArgumentException
	 * @return boolean
	 */
	public function delete_form($form_id, $save_id) {
		if ($form_id == "") throw new InvalidArgumentException("Form ID empty");
		if ($save_id == "") throw new InvalidArgumentException("Save ID empty");
		if (!is_numeric($_SESSION['s_auth']->get_setting(iAuthorization::setting_userid))) throw new InvalidArgumentException("UserID missing at session?!");

		$query = "DELETE FROM $this->formtable WHERE form_id=:form_id AND save_id=:save_id AND user_id=:user_id";
		
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindValue(":user_id", $_SESSION['s_auth']->get_setting(iAuthorization::setting_userid));
		$stmt->bindParam(":save_id", $save_id);
		$stmt->bindParam(":form_id", $form_id);
		
		$res = $this->execute($stmt);
		if (!$res) return false;

		$this->error_object = new ErrorObject(ErrorObject::severity_info, NOTICE_DELETED);
		return true;
	}

}