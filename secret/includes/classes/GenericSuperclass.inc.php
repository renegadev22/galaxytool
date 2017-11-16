<?php

/**
 * Provides generic methods needed by several sub classes like error handling and DB access
 * @author eX0du5
 *
 */
class GenericSuperclass extends DBHandler {
	/**
	 * Collect all class based messages
	 * @var ErrorObject
	 */
	protected $error_object = null;

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct();
	}


	/**
	 * This method will return the collected error messages of a class.
	 * This can be either the class error messages or MySQL error messages.
	 * In case both messages exist, the MySQL messages are added as sub messages
	 * to the class messages.
	 * @return ErrorObject Error object instance or null
	 */
	public function get_error_object() {
		$db_error = $this->get_db_error_object();
		if ($db_error != null) {
			if ($this->error_object == null) {
				$this->error_object = $db_error;
			} else {
				$this->error_object->add_child_message($db_error);
			}
		}
		return $this->error_object;
	}
}
