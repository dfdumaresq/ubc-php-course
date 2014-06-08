<?php

/**
 * Smarty Templates example
 * Receive query parameters $fromYear, $fromMonth, $toYear, $toMonth
 *
 * @package Templates
 * @author Dave Dumaresq <dfd2@sfu.ca>
 */

include "includes.php";

$smarty             = new MySmarty();

// uncomment the following line to show the debug console
// $smarty->debugging  = true;
// $smarty->caching    = false;

$template           = templatesPage();

print $template;

