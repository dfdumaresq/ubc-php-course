<?php

/**
 * Data example
 *
 * @package Data
 * @author Dave Dumaresq <dfd2@sfu.ca>
 */

include "includes.php";

$smarty     = new MySmarty();
$template	= dataPage();
print $template;
