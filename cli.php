<?php

/**
 * Cherrycake Skeleton
 * Cli php file
 *
 * @copyright Tin.cat 2014
 */

namespace CherrycakeApp;

chdir(dirname(__FILE__));

// Composer autoload
require "vendor/autoload.php";

// Creates a cherrycake engine
$e = new \Cherrycake\Engine;

// Inits the engine and runs the App if initting has gone ok.
if ($e->init(__NAMESPACE__, [
    "additionalAppConfigFiles" => [
		"App.config.php"
	]
]))
	$e->attendCliRequest();

// Ends the engine
$e->end();
