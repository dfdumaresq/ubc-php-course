<?php
/**
 * Navigation Bar
 *
 * @package Course Project
 * @author Dave Dumaresq <dfd2@sfu.ca>
 */

/**
 * Creates the navigation bar
 * @return - The navigation bar
 *
 */
function navBar()
{
    $arrayURL = array(
            ['text' =>"Home",      'href'=>"index.php",             'title'=>"Demonstrate Coursework"],
            ['text' =>"Objects",   'href'=>"objects.php",           'title'=>"Using Objects to Extend Agent Profiles"],
            ['text' =>"Templates", 'href'=>"templates.php",         'title'=>"Using Smarty Templates"],
            ['text' =>"Graphing",  'href'=>"graphing.php",          'title'=>"Using JPGraph for Dynamic Graphing"],
            ['text' =>"Data",      'href'=>"data.php",              'title'=>"Using JSON, XML, AJAX"],
            ['text' =>"Maps",      'href'=>"maps.php",              'title'=>"Using Google Maps"],
            ['text' =>"API",       'href'=>"docs/api/index.html",   'title'=>"API Documentation - TODO resolve phpDocumentor errors"],
    );

    $baseName = basename($_SERVER['REQUEST_URI']);
    foreach ($arrayURL as $aArray) {

        if ($aArray{'href'} == $baseName) {
            $arrayNavBar[] = "<b><a title='" . $aArray{'title'} . "'>" . $aArray{'text'} . "</a></b>";
        }
        else
        if ($aArray{'text'} == "API") {
            $arrayNavBar[] = "<b><a title='" . $aArray{'title'} . "' href=" . $aArray{'href'} . " target='_blank'>" . $aArray{'text'} . "</a></b>";
        }
        else {

            $arrayNavBar[] =  "<a title='" . $aArray{'title'} . "' href=". $aArray{'href'} . ">" . $aArray{'text'} . "</a>";
        }

    }
    $navBar = implode(" | ",$arrayNavBar);

    return $navBar;
}

?>
