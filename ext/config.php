<?php

/**
 * configuration file
 */

// define('DIR_BASE',      	dirname( dirname( __FILE__ ) ) . '/');
// define('PATH_TO_EXT', 		DIR_BASE . '../ext/');	// smarty, templates
// define('PATH_TO_ROOT', 		DIR_BASE . '../');

$ENV = "local";
// $ENV = "remote";

if ($ENV == "local") {
	$DBHost = "localhost";
	$DBName = "northwind";
	$DBUser = "northwind";
	$DBPass = "password";
} else {
	$DBHost = "localhost";
	$DBName = "prayervi_northwind";
	$DBUser = "prayervi_north";
	$DBPass = "Simple1";
}


include PATH_TO_ROOT."smarty/libs/Smarty.class.php";
