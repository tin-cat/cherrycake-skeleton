<?php

namespace Cherrycake;

$fonts = [
	"interface" => [
		"family" => "Inconsolata",
		"size" => $e->Css->unit(11, "pt"),
		"weight" => "400",
		"height" => "1.4em"
	],
	"titles" => [
		"family" => "Roboto Slab",
		"weight" => "400",
		"height" => "1.4em"
	]
];

$colorPalette = [
	// Main
	"mainBackgroundColor" => new Color("withHex", "#f3f7fb"),
	"mainBackgroundColorLighter" => new Color("withHex", "#fdfdfd"),
	"darkBackgroundColor" => new Color("withHex", "#111"),
	"defaultTextColor" => new Color("withRgb", [60, 60, 60]),
	"darkBackgroundTextColor" => new Color("withRgb", [255, 255, 255]),
	"defaultAnchorColor" => new Color("withHex", "#fd2c4f"),
	"defaultAnchorColorLighter" => new Color("withHex", "#fd3c5f"),
	"defaultAccentColor" =>  new Color("withRgb", [228, 36, 65])
];

$baseGap = 10;