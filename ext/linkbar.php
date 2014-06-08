<?php

function linkBar()
{
    $arrayURL = array(
        ["Home", "./index.php", ""],
        ["Compare Platforms", "./compare.php", "Compare commitment and performance across parties"],
        ["IPCC Report", "http://www.ipcc.ch/", "'Intergovernmental Panel on Climate Change'"],
        ["Ask the leaders", "./ask.php", "Send an email to all party leaders"],
        ["Share", "./share.php", "Share with friends on Twitter and FB"]
    );

    $baseName = basename($_SERVER['REQUEST_URI']);

    foreach ($arrayURL as $aArray) {
        list($label, $URL, $title) = $aArray;
        if ($URL == $baseName) {
            $arrayNavBar[] = "$label";
        }

        // Else, make it a live link.
        else {
            $arrayNavBar[] = "<a href=\"$URL\" title=$title>$label</a> ";
        }
    }
    $navBar = implode(" | ",$arrayNavBar);

    return $navBar;

} // end navBar
