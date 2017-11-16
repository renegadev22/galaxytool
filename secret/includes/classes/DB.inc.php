<?php
/**
 * Singleton to obtain database connection via PDO.
 * @author eX0du5
 *
 */
class DB {
	
	private static $pdo = null;
	
	/**
	 * Get PDO instance and connect to database if not already done. Will die in case of connection error.
	 * @return PDO pdo instance
	 */
	public static function getDB() {
		if (DB::$pdo != null) return DB::$pdo;
		
		global $dbhost, $dbname, $dbusername, $dbpassword; // it would be better to have constant definition in config.php
		
		/**
		 * get PDO DB connection (in general it could be DB type independent, for now MySQL is hard coded)
		 */
		try {
			DB::$pdo = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbusername, $dbpassword,
					            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							          PDO::ATTR_PERSISTENT => false ));
		
			DB::$pdo->query("SET NAMES 'utf8';");
			DB::$pdo->query("SET SESSION collation_connection = 'utf8_general_ci';");
		
		} catch (PDOException $e) {
			print "DB Connect Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		
		return DB::$pdo;
	}
	
	/**
	 * Transform a given PDOException into an ErrorObject.
	 * @param PDOException $exception Exception that occurred and needs to be converted
	 * @return NULL|ErrorObject Object containing the error information of the exception
	 */
	public static function getErrorObjectForException(PDOException $exception) {
		if ($exception == null) return null;
		$error = new ErrorObject(ErrorObject::severity_error, $exception->getMessage());
		return $error;
	}
	
}