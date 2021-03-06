<?php

/**
 * HtmlDocument config
 *
 * Holds the configuration for the HtmlDocument module
 *
 * @package CherrycakeSkeleton
 */

namespace Cherrycake;

$HtmlDocumentConfig = [
	"title" => "Cherrycake Skeleton", // The default page title
	"description" => "A skeleton for buliding Cherrycake apps", // The default page description
	"copyright" => "Copyright Cherrycake ".date("Y"), // The default page copyright info
	"keywords" => ["Cherrycake"], // The default page keywords
	"isAllowRobotsIndex" => true, // Whether to allow robots to index the document
	"isAllowRobotsFollow" => true, // Whether to allow robots to follow links on the document
	"defaultCssSetsToInclude" => ["main", "uicomponents"], // An array of Css set names that will be always included
	"defaultJavascriptSetsToInclude" => ["main"], // An array of Javascript set names that will be always included
	"isDeferJavascript" => false,
	"mobileViewport" => [ // Configuration for the site when viewed in a mobile device, via the viewport meta
		"width" => "device-width", // The width of the viewport: A number of pixels, or "device-width"
		"userScalable" => true, // Optional, whether or not to let the user pinch to zoom in/out
		"initialScale" => 0.75, // Optional, the initial scale
		"maximumScale" => 2 // Optional, the maximum scale
	],
	"microsoftApplicationInfo" => [ // Application info for Microsoft standards (i.e: When adding the web as a shortcut in Windows 8)
		"name" => "Cherrycake Skeleton", // The name of the app
		"tileColor" => "#dd2153", // The color of the tile on Windows 8, in HTML hexadecimal format (i.e: #dd2153)
		"tileImage" => "/res/favicons/mstile-150x150.png", // Path to an image to use as a tile image for Windows 8. Must be in png format
	],
	"appleApplicationInfo" => [ // Application info for Apple standards (i.e: When adding the web as a shortcut in iOs devices, or to hint the users about the App store APP for this site)
		"name" => "Cherrycake Skeleton", // The name of the app
		"icons" => [ // Image SRCs for common icon sizes. Must be in png format
			"180x180" => "/res/favicons/apple-touch-icon.png"
		]
	],
	"favIcons" => [ // Image SRCs for common favicon files. Must be in png format
		"16x16" => "/res/favicons/favicon-16x16.png",
		"32x32" => "/res/favicons/favicon-32x32.png"
	]
];