<?php

/**
 * Cherrycake Skeleton
 * Index file
 *
 * @copyright Tin.cat 2014
 */

namespace CherrycakeApp;

// Composer autoload
require "vendor/autoload.php";

// Creates a cherrycake engine
$e = new \Cherrycake\Engine;

// Inits the engine and runs the App if initting has gone ok.
if ($e->init(__NAMESPACE__, [
	"isDevel" => true,
	"additionalAppConfigFiles" => [
		"App.config.php"
	]
]))
	$e->attendWebRequest();

// Ends the engine
$e->end();
