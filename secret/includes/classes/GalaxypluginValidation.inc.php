<?php
$_SESSION['lang'] = "english"; // default language until now
Galaxytool::load_language_file($_SESSION['lang']);

class GalaxypluginValidation extends DBHandler{

	private $token         = "";
	private $usertable     = "";
	private $universe      = "";
	private $user_id       = null;
	private $maintenance   = false;

	public  $error_object       = null;

	function __construct($utablename,$token,$universe) {
		if ($utablename == "") throw new InvalidArgumentException("usertable must be provided");
		if ($universe == "") throw new InvalidArgumentException("universe must be provided");

		$this->usertable     = $utablename;
		$this->token         = $token;
		$this->universe      = $universe;

		return $this;
	}

	public function get_insert_permissions() {

		if (strlen($this->token) != 32) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , L_TOKENFAILURE);
			return false;
		}
		// check permissions
		$query = "SELECT id,caninsert,maintenance FROM $this->usertable WHERE plugin_token=:token AND status='active'";
		$stmt = DB::getDB()->prepare($query);
		$stmt->bindParam(":token", $this->token);
		
		$login_error_message = new ErrorObject(ErrorObject::severity_error , L_TOKENFAILURE);
		$res = $this->execute($stmt);
		if (!$res) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error , "MySQL error occurred while selecting player at database");
			$this->error_object->add_child_message($this->get_db_error_object());
			return false;
		}

		if ($stmt->rowCount() != 1) {
			$this->error_object = $login_error_message;
			return false;
		}

		$line = $stmt->fetch(PDO::FETCH_OBJ);


		$version = explode(".",str_replace("v","",VERSION));
		$version_xml_tag = '<version major="'.$version[0].'"';
		if (isset($version[1])) {
			$version_xml_tag .= ' minor="'.$version[1].'"';
			if (isset($version[2])) $version_xml_tag .= ' revision="'.$version[2].'"';
		}
		$version_xml_tag .="/>";

		$result_text = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n".
		"<galaxytool universe=\"$this->universe\">\n".
		$version_xml_tag."\n".
		"<permission name=\"caninsert\">$line->caninsert</permission>\n".
		"</galaxytool>\n";
		
		$this->maintenance = ($line->maintenance == "true") ? true : false;
		$this->user_id     = $line->id;

		return $result_text;
	}
	
	public function getUserId() {
		return $this->user_id;
	}
	
	public function isMaintenaceAllowed() {
		return $this->maintenance;
	}
	
}




?>