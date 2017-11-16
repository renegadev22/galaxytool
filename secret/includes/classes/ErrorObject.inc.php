<?php
class ErrorObject {

	const severity_error   = "E";
	const severity_warning = "W";
	const severity_info    = "I";

	private $child_messages = array();

	private $severity       = "";
	private $messageText    = "";
	private $worst_severity = ErrorObject::severity_info ;


	function __construct($severity, $messageText) {
		if ($severity <> self::severity_error && $severity <> self::severity_warning && $severity <> self::severity_info) {
			return false;
		}

		$this->severity       = $severity;
		$this->messageText    = $messageText;
		$this->worst_severity = $severity;
	}


	/**
	 * Add a child message of type ErrorObject to existing ErrorObject instance
	 *
	 * @param ErrorObject $errorObject
	 */
	public function add_child_message(ErrorObject $errorObject = null) {
		if ($errorObject != null) {
			array_push($this->child_messages,$errorObject);
			$this->update_worst_severity( $errorObject->get_worst_severity() ); // take over worst severity from any child message
		}
	}

	/**
	 * Return message text as plain text with newline and tabs as separator
	 *
	 * @return String
	 */
	public function get_plain_message_text() {
		$output = "";
		$message_array = $this->get_message_array();

		foreach ($message_array as $messages) {
			for ($i=1;$i<$messages[0];$i++) $output .= "\t";
			$output .= $messages[1].": ".$messages[2]."\n";
		}

		return $output;
	}

	/**
	 * Returns an array of messages, one message per row. It considers also the hierarchy of the messages.
	 *
	 * @param int $depth Internal field for recursive processing. Shall not be filled from consumer.
	 * @return Array of messages with plain text entries per row.
	 */
	public function get_message_array($depth=0) {
		$output = array();

		$depth++;

		array_push($output, array($depth,$this->severity,$this->messageText));

		foreach ($this->child_messages as $childmessage) {
			$output = array_merge($output,$childmessage->get_message_array($depth));
		}

		return $output;
	}

	/**
	 * Get messages returned within XML tags which are used for firefox extension feedback.
	 *
	 * @param string $global_universe Universe name or number
	 * @return String XML Content
	 */
	public function get_xml_result($global_universe) {
		$version = explode(".",str_replace("v","",VERSION));
		$version_xml_tag = '<version major="'.$version[0].'"';
		if (isset($version[1])) {
			$version_xml_tag .= ' minor="'.$version[1].'"';
			if (isset($version[2])) $version_xml_tag .= ' revision="'.$version[2].'"';
		}
		$version_xml_tag .="/>";

		$result_text = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n".
		"<galaxytool universe=\"$global_universe\">\n".
		$version_xml_tag."\n";

		if ($this->messageText != "") {
			$return_code = false;
			$messages = $this->get_message_array();
			foreach ($messages as $message) {
				if ($message[0] == 1  && $message[1] == ErrorObject::severity_info && strlen($message[2]) == 3) {
					// return code
					$result_text .= "<returncode>".$message[2]."</returncode>\n";
					$return_code = true;
				} else {
					$depth = ($return_code) ? $message[0] - 1 : $message[0];

					$result_text .= "<message severity=\"".$message[1]."\" depth=\"".$depth."\">".
					$message[2].
					"</message>\n";
				}
			}
		}

		$result_text .= "</galaxytool>\n";

		return $result_text;
	}

	/**
	 * Get a list of messages with as JSON format
	 * @return string
	 */
	public function get_JSON_result() {
		$return_value =
			'{ "identifier": "id",'."\n".
			'"label": "id",'."\n".
			'"messages": ['."\n";
			$messages = $this->get_message_array();
			$i = 1;
			$details = array();
			foreach ($messages as $message) {
				array_push($details, '{ "id":'.json_encode($i).
				', "severity":'.json_encode($message[1]).
				', "depth":'.json_encode($message[0]).
				', "message":'.json_encode($message[2]).
				' }');
				$i++;
			}
			$return_value .= implode(",\n", $details);
			$return_value .= "\n]}\n";
			return $return_value;
	}

	/**
	 * Determine the worst severity within a message hierarchy. Error, Warning or Info
	 *
	 * @return SeverityCode
	 */
	public function get_worst_severity() {
		return $this->worst_severity;
	}

	/**
	 * Internal method to collect worst severity of current ErrorObject instance and all child messages of it.
	 *
	 * @param SeverityCode $severity
	 */
	private function update_worst_severity($severity) {
		switch ($this->worst_severity) {
			case ErrorObject::severity_info    : $worst_severity = 1; break;
			case ErrorObject::severity_warning : $worst_severity = 2; break;
			case ErrorObject::severity_error   : $worst_severity = 3; break;
			default: throw new InvalidArgumentException();
		}
		switch ($severity) {
			case ErrorObject::severity_info    : $new_severity = 1; break;
			case ErrorObject::severity_warning : $new_severity = 2; break;
			case ErrorObject::severity_error   : $new_severity = 3; break;
			default: throw new InvalidArgumentException();
		}


		if ($worst_severity < $new_severity) {
			$this->worst_severity = $severity;
		}

	}

	/**
	 * This method transforms XML validation errors into readable text (String)
	 *
	 * @param array $error One line of an array returned by libxml_get_errors()
	 * @param String $xml XML content
	 * @return String Error message that was provided as text
	 */
	public static function display_xml_error($error, $xml) {
		//$return  = $xml[$error->line - 1] . "\n";
		//$return .= str_repeat('-', $error->column) . "^\n";
		$return = "";

		switch ($error->level) {
			case LIBXML_ERR_WARNING:
				$return .= "Warning $error->code: ";
				break;
			case LIBXML_ERR_ERROR:
				$return .= "Error $error->code: ";
				break;
			case LIBXML_ERR_FATAL:
				$return .= "Fatal Error $error->code: ";
				break;
			default: throw new InvalidArgumentException();
		}

		$return .= trim($error->message) .
		"\n  Line: $error->line" .
		"\n  Column: $error->column";

		if ($error->file) {
			$return .= "\n  File: $error->file \n";
		}

		return $return;
	}

}