<?php
/**
 * This class handles the plugins attached to the Galaxytool.
 * For this, it will validate that the required information are provided and valid in the
 * plugin definition XML file.
 * It will check the file existiency, class existency and for class implementation of required interfaces.
 *
 * @author eX0du5
 *
 */
class PluginHandler {

	private $error_object = null;
	private $plugin_data  = array();

	/**
	 * Load plugins.xml file, validate it and buffer created plugin instances.
	 */
	public function __construct() {
		// Load XML content
		$xml_content = @file_get_contents(GALAXYTOOL_ROOT."/config/plugins.xml");

		if ($xml_content === false || trim($xml_content) == "") return;

		$xdoc = $this->validate_xml_content($xml_content);
		if ($xdoc === false) throw new InvalidArgumentException( "Invalid XML content: " . $this->error_object->get_plain_message_text() );

		// get plugin information into buffer
		$this->set_plugin_data($xdoc);
		if ($this->error_object != null) {
			throw new InvalidArgumentException( $this->error_object->get_plain_message_text() );
		}

		return;
	}

	/**
	 * Returns an array of error messages
	 * @return Array List of Error Messages
	 */
	public function get_messages() {
		if ($this->error_object != null) {
			return $this->error_object->get_message_array();
		}
		return array();
	}

	/**
	 * Get an array of authorization classes
	 * @return array of object instances
	 */
	public function get_authorization_objects() {
		$objects = array();
		foreach ($this->plugin_data as $plugin) {
			if ($plugin["authorization"] != null) {
				array_push($objects, $plugin["authorization"]);
			}
		}
		return $objects;
	}


	/**
	 * Get an array of Navigation object instances
	 * @return array of object instances
	 */
	public function get_navigation_objects() {
		$objects = array();
		foreach ($this->plugin_data as $plugin) {
			if ($plugin["navigation"] != null) {
				array_push($objects, $plugin["navigation"]);
			}
		}
		return $objects;
	}

	/**
	 * Get an array of Strings containing the plugin names of enabled plugins
	 * @return multitype:
	 */
	public function get_enabled_plugins() {
		$plugins = array();
		foreach($this->plugin_data as $plugin) {
			array_push($plugins, $plugin["name"]);
		}
		return $plugins;
	}

	/**
	 * Validate whether the XML content fits to the plugins schema definition.
	 * @param String $xml_content XML content from a file
	 * @return boolean|DomDocument false if errors occurred
	 */
	private function validate_xml_content($xml_content) {
		libxml_use_internal_errors(true); // use own error handling

		// validate XML content
		$xdoc = new DomDocument;
		@$xdoc->loadXML($xml_content);
		if ($xdoc === false) {
			// not XML
			return false;
		}
		if (@$xdoc->schemaValidate(GALAXYTOOL_ROOT."/secret/xml_schema/plugins.xsd") === false) {
			// XML file is invalid
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"plugins.xml not valid");

			$errors = libxml_get_errors();
			foreach ($errors as $error) {
				$this->error_object->add_child_message(new ErrorObject(ErrorObject::severity_error, ErrorObject::display_xml_error($error, $xml_content)));
			}
			libxml_clear_errors();
			return false;
		}
		return $xdoc;
	}

	/**
	 * This method iterates among all plugins provided in the loaded XML content.
	 * @param XMLDoc $xdoc XML content loaded with loadXML()
	 * @return boolean
	 */
	private function set_plugin_data($xdoc) {
		$this->plugin_data = array();
		$plugins     = $xdoc->getElementsByTagName("plugin");

		foreach($plugins as $plugin) {
			// extract information from XML file
			$name = $plugin->getAttribute("name");
			if ($name == "") {
				$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Empty plugin name not allowed");
				continue;
			}
			$plugin_data = $this->get_plugin_data($plugin, $name);
			if ($plugin_data === false) {
				continue;
			}

			// store results
			array_push($this->plugin_data, $plugin_data);
		}
		return true;
	}

	/**
	 * The method determines the plugin information for a single plugin provided by
	 * $plugin_DOMNode. It extraces information about files and classes which have to
	 * be used later. After extraction it verifies the file and folder existency.
	 * If the files exist, they are loaded and it is checked if the provided classes
	 * exist and implement the required interfaces.
	 * @param DomNode $plugin_DOMNode XML Dom node for one plugin
	 * @param String $name Name of the plugin to be loaded
	 * @return boolean|Array false if an error occurred; else it returns an array with plugin information
	 */
	private function get_plugin_data($plugin_DOMNode, $name) {
		$plugin_data["name"] = $name;
		$path                = GALAXYTOOL_ROOT."/".$plugin_DOMNode->getElementsByTagName("path")->item(0)->nodeValue;
		$installer_DOMNode   = $plugin_DOMNode->getElementsByTagName("installer");
		if ($installer_DOMNode->length != 0) {
			$installer           = $installer_DOMNode->item(0)->getAttribute("filename");
			$installer_class     = $installer_DOMNode->item(0)->getAttribute("class");
		}
		$authorization_DOMNode = $plugin_DOMNode->getElementsByTagName("authorization");
		if ($authorization_DOMNode->length != 0) {
			$authorization       = $authorization_DOMNode->item(0)->getAttribute("filename");
			$authorization_class = $authorization_DOMNode->item(0)->getAttribute("class");
		}

		$navigation_DOMNode = $plugin_DOMNode->getElementsByTagName("navigation");
		if ($navigation_DOMNode->length != 0) {
			$navigation       = $navigation_DOMNode->item(0)->getAttribute("filename");
			$navigation_class = $navigation_DOMNode->item(0)->getAttribute("class");
		}

		// validate file existency and correctness of user inputs from XML
		if (@file_exists($path) != true) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin path name does not exist for plugin ".$name);
			return false;
		}
		if (isset($installer) && @file_exists($path."/".$installer) != true) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin installer file does not exist for plugin ".$name);
			return false;
		}
		if (isset($authorization) && @file_exists($path."/".$authorization) != true) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin authorization file does not exist for plugin ".$name);
			return false;
		}
		if (isset($navigation) && @file_exists($path."/".$navigation) != true) {
			$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin navigation file does not exist for plugin ".$name);
			return false;
		}

		if (isset($installer)) {
			require_once $path."/".$installer;
			if (@class_exists($installer_class) != true) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin installer class does not exist for plugin ".$name);
				return false;
			}

			// TODO: check for installer interface once created
			$install = new $installer_class();
		}
		if (isset($authorization)) {
			require_once $path."/".$authorization;
			if (@class_exists($authorization_class) != true) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin authorization class does not exist for plugin ".$name);
				return false;
			}

			// check interface usage in authorization class
			$auth = new $authorization_class();
			if (!($auth instanceof iAuthorization)) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin authorization class must implement interface iAuthorization for plugin ".$name);
				return false;
			}
		}
		if (isset($navigation)) {
			require_once $path."/".$navigation;
			if (@class_exists($navigation_class) != true) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin navigation class does not exist for plugin ".$name);
				return false;
			}

			// check interface usage in navigation class
			$navi = new $navigation_class();
			if (!($navi instanceof iNavigation)) {
				$this->error_object = new ErrorObject(ErrorObject::severity_error ,"Plugin navigation class must implement interface iNavigation for plugin ".$name);
				return false;
			}
		}

		$return_value = array();
		$return_value["name"]                = $name;
		$return_value["installer"]           = isset($install) ? $install : null;
		$return_value["authorization"]       = isset($auth) ? $auth : null;
		$return_value["navigation"]          = isset($navi) ? $navi : null;
		return $return_value;
	}

}