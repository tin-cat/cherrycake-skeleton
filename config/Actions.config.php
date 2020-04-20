<?php

/**
 * Actions config
 *
 * Holds the configuration for the Actions module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$ActionsConfig = [
	"defaultActionCacheProviderName" => "engine", // The default cache provider name to asign to cached Action objects
	"defaultActionCacheTtl" => \Cherrycake\CACHE_TTL_MINIMAL, // The default cache TTL to assign to cached Action objects
	"defaultActionCachePrefix" => "Actions" // The default cache prefix to assign to cached Action objects
];