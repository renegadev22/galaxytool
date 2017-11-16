<?php

/**
 * Autoloader class to provide class path include information for dynamically loaded files.
 * @author eX0du5
 *
 */
class AutoLoader {
	
	/**
	 * Autoloader for classes within classes directory
	 * @param string $class classname
	 */
	public static function ClassLoader($class) {
		if (is_readable(GALAXYTOOL_ROOT."/secret/includes/classes/{$class}.inc.php"))
			require GALAXYTOOL_ROOT."/secret/includes/classes/{$class}.inc.php";
	}
	
	/**
	 * Autoloader for parser classes
	 * @param string $class classname
	 */
	public static function ParserLoader($class) {
		if (is_readable(GALAXYTOOL_ROOT."/secret/parser/{$class}.inc.php"))
			require GALAXYTOOL_ROOT."/secret/parser/{$class}.inc.php";
	}	
	
	/**
	 * Autoloader for model classes
	 * @param string $class classname
	 */
	public static function ModelLoader($class) {
		if (is_readable(GALAXYTOOL_ROOT."/secret/includes/models/{$class}.inc.php"))
			require GALAXYTOOL_ROOT."/secret/includes/models/{$class}.inc.php";
	}	
}