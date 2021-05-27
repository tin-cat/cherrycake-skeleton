<?php

namespace CherrycakeApp\Home;

/**
 * Home
 *
 * A module that manages the home screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class Home extends \Cherrycake\Module {

	var $dependentCoreModules = [
		"Patterns",
		"HtmlDocument"
	];

	/**
	 * mapActions
	 *
	 * Maps the Actions to which this module must respond
	 */
	public static function mapActions() {
		global $e;
		$e->Actions->mapAction(
			"homePage",
			new \Cherrycake\Actions\Action([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Home",
				"methodName" => "homePage",
				"request" => new \Cherrycake\Actions\Request([
					"pathComponents" => false, // No path for this request, since is the landing page, called when no path requested
					"parameters" => false // No parameters, for the same reason above
				])
			])
		);
	}

	/**
	 * Outputs the home page
	 * @return boolean True if the request could be attended, false otherwise.
	 */
	function homePage() {
		global $e;
		$e->Patterns->out("Home/Home.html");
		return true;
	}
}
