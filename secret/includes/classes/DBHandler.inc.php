<?php

/**
 * Provides basic database connection support like running query and collecting
 * messages.
 * @author eX0du5
 *
 */
class DBHandler {

	private   $show_original_query = true;
	private   $dbError             = null; // ErrorObject

	/**
	 * Constructor
	 */
	public function __construct() {
	}

	/**
	 * Execute a prepared statement and handle its possible exceptions.
	 * @param PDOStatement $stmt prepared statement ready for execution
	 * @return boolean statement execution successful or not
	 */
	public function execute(PDOStatement $stmt) {
		if ($stmt == null) {
			$this->dbError = new ErrorObject(ErrorObject::severity_error, "No DB statement provided!");
			return false;
		}
		
		// execute statement and handle error
		try {
			$result = $stmt->execute();
			return $result; // might be also false
		} catch (PDOException $exception) {
			$this->dbError = DB::getErrorObjectForException($exception);
			if ($this->show_original_query)
				$this->dbError->add_child_message(new ErrorObject(ErrorObject::severity_info, $stmt->errorInfo()));
		}
		
		return false;
	}
	
	/**
	 * Execute an SQL statement and return the number of affected rows. Handle possible exceptions.
	 * @param string $queryString Query that shall be executed
	 * @return boolean|number False in case of errors, otherwise number of affected rows.
	 */
	public function exec($queryString) {
		if ($queryString == null || $queryString == "") {
			$this->dbError = new ErrorObject(ErrorObject::severity_error, "No queryString provided!");
			return false;
		}
		
		// execute query and handle error
		try {
			$result = DB::getDB()->exec($queryString);
			return $result; // number of affected rows
		} catch (PDOException $exception) {
			$this->dbError = DB::getErrorObjectForException($exception);
			if ($this->show_original_query)
				$this->dbError->add_child_message(new ErrorObject(ErrorObject::severity_info, $queryString));
		}
		
		return false;
	}
	
	/**
	 * Executes an SQL statement, returning a result set as a PDOStatement object.
	 * @param string $queryString Query that shall be executed
	 * @return boolean|PDOStatement False on error, otherwise result as Statement.
	 */
	public function query($queryString) {
		if ($queryString == null || $queryString == "") {
			$this->dbError = new ErrorObject(ErrorObject::severity_error, "No queryString provided!");
			return false;
		}
	
		// execute query and handle error
		try {
			$stmt = DB::getDB()->query($queryString);
			return $stmt; // PDOStatement or false
		} catch (PDOException $exception) {
			$this->dbError = DB::getErrorObjectForException($exception);
			if ($this->show_original_query)
				$this->dbError->add_child_message(new ErrorObject(ErrorObject::severity_info, $queryString));
		}
	
		return false;
	}

	/**
	 * Get collected database errors or return null.
	 * @return ErrorObject Error object instance or null
	 */
	public function get_db_error_object() {
		if ($this->dbError != null) return $this->dbError;
	}	

	/**
	 * Call this method if the orignal query that caused a mysql error shall not be added
	 * to the ErrorObject instance.
	 */
	protected function suppress_orignal_query_info() {
		$this->show_original_query = false;
	}

}
