<?php
/**
 * Mapping example
 *
 * @package Course Project
 * @author Dave Dumaresq <dfd2@sfu.ca>
 */

include "includes.php";

$smarty     = new MySmarty();
$template	= mapsPage();
print $template;
