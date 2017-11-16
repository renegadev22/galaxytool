<?php

/**
 * Determine settings from OGame API file: serverData.xml
 * @author eX0du5
 *
 */
class OGameSettingsParser {

	private $error_object = null;

	private $uni_mapping = array(
			101	=>	"Andromeda",
			102	=>	"Barym",
			103	=>	"Capella",
			104	=>	"Draco",
			105	=>	"Electra",
			106	=>	"Fornax",
			107	=>	"Gemini",
			108	=>	"Hydra",
			109	=>	"Io",
			110	=>	"Jupiter",
			111	=>	"Kassiopeia",
			112	=>	"Leo",
			113	=>	"Mizar",
			114	=>	"Nekkar",
			115	=>	"Orion",
			116	=>	"Pegasus",
			117	=>	"Quantum",
			118	=>	"Rigel",
			119	=>	"Sirius",
			120	=>	"Taurus",
			121	=>	"Ursa",
			122	=>	"Vega",
			123	=>	"Wasat",
			124	=>	"Xalynth",
			125	=>	"Yakini",
			126	=>	"Zagadra"
	);

	/**
	 * currently we do not need content within the constructor
	*/
	public function __construct() {

	}

	/**
	 * Return a copy of the error object of that class.
	 *
	 * @return ErrorObject
	 */
	public function get_error_object() {
		return $this->error_object;
	}

	/**
	 * Read settings from ServerData.xml and return them as associative array or false in case of errors.
	 * @param string $url
	 * @return boolean|multitype:NULL
	 */
	public function getOGameSettingsFromXML($url) {
		$xdoc = new DomDocument;
		$content = @file_get_contents($url);
		if ($content === false) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"No content found at url: $url");
			return false;
		}
		@$xdoc->loadXML($content);

		if ($xdoc === false) {
			// not XML
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"No XML content found at url: $url");
			return false;
		}
		$schema = str_replace("/api/serverData.xml", "/api/xsd/serverData.xsd", $url);
		$schema_content = file_get_contents($schema);

		if (@$xdoc->schemaValidate($schema) === false) {
			// XML file is invalid
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"XML content not valid according to serverData.xsd");
			$errors = libxml_get_errors();

			libxml_clear_errors();
			return false;
		}

		@$xml = new XMLReader();
		$opened = @$xml->open($url);
		if ($opened === false) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Could not open XML for url: $url");
			return false;
		}
		@$xml->read();

		$attributes = array();

		// all further elements have no attributes but only values
		while($xml->read()) {
			if($xml->nodeType == XMLReader::ELEMENT) {
				$attributes[$xml->name] = $xml->readString();
				if ($xml->name == "name") {
					if (array_key_exists($attributes[$xml->name], $this->uni_mapping)) {
						$attributes[$xml->name] = $this->uni_mapping[ $attributes[$xml->name] ];
					}
				}
			}
		}

		// consistency check in case of issues with the XML content as we had empty universes before!
		if (!is_numeric($attributes['debrisFactor']) ||
		!is_numeric($attributes['speed']) ||
		$attributes['defToTF'] == "" ||
		(array_key_exists("name", $attributes) && $attributes['name'] == "" && (!is_numeric($attributes['number']) || $attributes['number'] == ""))
		) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Mandatory attributes missing at XML");
			return false;
		}


		return $attributes;
	}

}
