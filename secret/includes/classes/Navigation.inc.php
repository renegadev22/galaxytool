<?php


/**
 * This interface must be implemented by plugins that want to add own navigation links to the Galaxytool navigation bar on the left.
 *
 * @author eX0du5
 *
 */
interface iNavigation {


	/**
	 * This method must return an instance of class Navigation or NULL. If anything else is returned, it will be ignored
	 * by the Galaxytool and no navigation entries will be displayed.
	 * @param String $language Defines the language the user currently uses.
	 */
	public function get_navigation($language);

}


/**
 * This class is used to allow plugins to have own entries in the navigation bar on the left. The interface method get_navigation of interface INavigation
 * returns an object of this class which is then used by the Galaxytool to display the navigation entries for all plugins.
 * @author eX0du5
 *
 */
class Navigation {


	private $navigation;


	/**
	 * Just the constructor which instantiates the class.
	 */
	public function __construct() {
		$this->navigation = array();
	}


	/**
	 * Add a new navigation link. Each plugin has its own navigation object and defines the navigation entry sequence by providing
	 * the navigation entries in the corresponding sequence to this method.
	 * @param String $name Keep it short to fit into the navigation image and consider translation! No HTML tags allowed.
	 * @param String $url Any kind of URL. Localhost is not supported as well formed URL.
	 * @param Boolean $extern External links will be opened in a separate browser tab or window but not in the current one.
	 * @throws InvalidArgumentException
	 */
	public function set_navigation_link($name, $url, $extern=false) {

		// remove white spaces, tags and slashes from navigation name
		$name = trim( strip_tags( stripslashes($name) ) );

		// check for well formed url
		if (!$this->is_valid_url($url)) throw new InvalidArgumentException("Provide correct URLs only");

		// allow true or false only
		if ($extern !== false && $extern !== true) $extern = false;

		array_push($this->navigation, array( "name"=>$name, "url"=>$url, "extern"=>$extern ));
	}

	/**
	 * Returns all collected URLs as associative array. This method is used by the Galaxytool to retrieve the navigation
	 * entries from a plugin.
	 * @return Array Contains navigation information.
	 */
	public function get_navigation_links() {
		return $this->navigation;
	}

	/**
	 * Checks if a URL is well formed or not.
	 * @param String $url
	 * @return boolean
	 */
	public function is_valid_url($url) {
		// SCHEME
		$urlregex = "/";
		$urlregex .= "[^(https?)\:\/\/]?";

		// USER AND PASS (optional)
		//$urlregex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?";

		// HOSTNAME OR IP
		//$urlregex .= "[a-z0-9+\$_-]+(\.[a-z0-9+\$_-]+)*"; // http://x = allowed (ex. http://localhost, http://routerlogin)
		$urlregex .= "[a-z0-9+\$_-]+(\.[a-z0-9+\$_-]+)+"; // http://x.x = minimum
		//$urlregex .= "([a-z0-9+\$_-]+\.)*[a-z0-9+\$_-]{2,3}"; // http://x.xx(x) = minimum
		//use only one of the above

		// PORT (optional)
		//$urlregex .= "(\:[0-9]{2,5})?";
		// PATH (optional)
		$urlregex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?";
		// GET Query (optional)
		$urlregex .= "(\?[a-z+&\$_.-][a-z0-9;:@\/&%=+\$_.-]*)?";
		// ANCHOR (optional)
		$urlregex .= "(#[a-z_.-][a-z0-9=&\.\+,+\$_.-]*)?\$";

		$urlregex .= "/i";
		// check
		if (preg_match($urlregex, $url)) {
			return true;
		} else {
			return false;
		}
	}
}