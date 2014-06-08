<?php

/*
 * Author: Dave Dumaresq.
 */

include "includes.php";
$smarty   = new MySmarty();
$template = comparePage();

print $template;
