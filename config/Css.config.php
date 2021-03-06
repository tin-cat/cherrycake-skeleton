<?php

/**
 * Css config
 *
 * Holds the configuration for the Css module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$CssConfig = [
	"cacheTtl" => \Cherrycake\CACHE_TTL_LONGEST, // The TTL for CSS sets
	"cacheProviderName" => "engine", // The cache provider for CSS sets
	"isCache" => !$e->isDevel(), // The default value for isCache in each set
	"isHttpCache" => !$e->isDevel(), // Whether to send HTTP Cache headers or not
	"lastModifiedTimestamp" => mktime(0, 0, 0, 8, 1, 2014), // The global version
	"httpCacheMaxAge" => \Cherrycake\CACHE_TTL_LONGEST,
	"isMinify" => !$e->isDevel(),
	"responsiveWidthBreakpoints" => [
		"tiny" => 500,
		"small" => 700,
		"normal" => 980,
		"big" => 1300,
		"huge" => 1700
	],
	"sets" => [ // An array of Css sets configured.
		"main" => [
			"variablesFile" => [\CherrycakeApp\DIR_RES."/css/CommonVariables.php"], // A file (or an array of files) to include whenever parsing this set files, usually for defining variables that can be later used inside the css files
			"isGenerateTextColorsCssHelpers" => true, // Whether or not to generate Css helper elements for text colors, based on variables defined in this set's variablesFile
			"isGenerateBackgroundColorsCssHelpers" => true, // Whether or not to generate Css helper elements for background colors, based on variables defined in this set's variablesFile
			"isGenerateBackgroundGradientsCssHelpers" => true, // Whether or not to generate Css helper elements for background gradients, based on variables defined in this set's variablesFile
			"directory" => \CherrycakeApp\DIR_RES."/css/main",
			"files" => [ // The files that this set contains
				"Main.css",
				"HelloWorld.css",
				"ErrorPage.css"
			]
		],
		"uicomponents" => [
			"variablesFile" => [\CherrycakeApp\DIR_RES."/css/CommonVariables.php"], // A file (or an array of files) to include whenever parsing this set files, usually for defining variables that can be later used inside the css files
			"directory" => \CherrycakeApp\DIR_RES."/css/uicomponents",
			"files" => [ // The files that this set contains
			]
		]
	]
];
