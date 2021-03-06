<?php

include "../includes.php";

/**
 * show_graph.php
 *
 * Receive query parameters $fromYear, $fromMonth, $toYear, $toMonth
 *
 * test: http://localhost/Assignment3/show_graph.php?fromYear=1996&fromMonth=02&toYear=1997&toMonth=06
 */

// if (!$_GET) {
//     $fromYear   = '1996';
//     $fromMonth  = '01';
//     $toYear     = '1999';
//     $toMonth    = '02';
// }
// else {
//     // Convert query string to correct date strings
//     $fromYear   = htmlspecialchars($_GET["fromYear"]);
//     $fromMonth  = htmlspecialchars($_GET["fromMonth"]);
//     $toYear	    = htmlspecialchars($_GET["toYear"]);
//     $toMonth	= htmlspecialchars($_GET["toMonth"]);
// }

$fromYear   = '1996';
$fromMonth  = '01';
$toYear     = '1999';
$toMonth    = '02';

$fromDate   = createDateStr($fromYear, $fromMonth, 01);
$toDate     = createDateStr($toYear, $toMonth, null);

echo "Year: $fromDate to $toDate</br>";
$result = sumByDate($fromDate, $toDate);
print "<pre>";
print_r($result);
print "/<pre>";


