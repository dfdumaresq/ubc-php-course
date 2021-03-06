<?php

/**
 * Code for all Course Project functions
 *
 *
 * @package Course Project
 * @author Dave Dumaresq
 */

/******* Globals *********/
// connection vars are in config.php

// Months - unused
// $months = array(1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep", 10 => "Oct", 11 => "Nov", 12 => "Dec");

/******* Graph functions *********/

/**
 * Create a date string with the number of days of the month calculated unless provided.
 * @param string $year YYYY (E.g. 2001)
 * @param string $month mm (E.g 02)
 * @param string $fromDay dd Optional. If not provided, the correct number of days for that month will be used in the date string.
 * Example:
 * createDateStr(2014, 02, 01)   => 2014-02-01
 * createDateStr(2014, 02, null) => 2014-02-28
 * @return string
 * @author dave dumaresq
 **/
function createDateStr($year, $month, $fromDay)
{
    $result = "";
    if ($fromDay) {
        $result = $year . '-' . $month . '-' . $fromDay;
    } else {
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $result = $year . '-' . $month . '-' . $days;
    }

    return $result;
}

/**
 * Execute SQL select to return sum of montly sales
 * Note: case sensitive sql on remote host. downcase tablenames.
 *
 * @param String $fromDate
 * @param String $toDate
 * Example:
 * $fromYear   = '1996';
 * $fromMonth  = '01';
 * $toYear     = '1999';
 * $toMonth    = '02';
 *
 * $fromDate   = createDateStr($fromYear, $fromMonth, 01);
 * $toDate     = createDateStr($toYear, $toMonth, null);
 * echo "Year: $fromDate to $toDate</br>";
 * $result = sumByDate($fromDate, $toDate);
 * print "<pre>";
 * print_r($result);
 * print "/<pre>";
 *
 * @return mysqli_result;
 */
function sumByDate($fromDate, $toDate)
{
    $select = "SELECT ROUND( SUM(OD.UnitPrice * OD.Quantity) ) AS 'MonthlySales',
            SUBSTRING( O.OrderDate, 1, 7 ) AS 'OrderMonth'
            FROM orders O, orderdetails OD
            WHERE O.OrderId = OD.OrderId
            AND O.OrderDate
            BETWEEN '$fromDate'
            AND '$toDate'
            GROUP BY SUBSTRING( O.OrderDate, 1, 7 )";

    // print $select . "</br>";
    return query($select);
}

/******* Smarty functions *********/
/**
 * Display the home page using smarty templates
 *
 * @return template
 **/
function objectPage()
{
    global $smarty;

    $agent = new AgentProfile("Frank", "frank@smallChange.org");
    $agent->validate(FALSE);

    $vendor = new Vendor("Chris", "chris@megaphone.org", 123456789, "http://megaphonemagazine.com/images/454.png");
    $photo  = $vendor->getPhoto();
    $vendor->validate(TRUE);

    $charity = new Charity("Sally", "sally@foodbank.org", "ABC-123456", "http://www.friendsneedfood.com/wp-content/uploads/2014/02/food-banks-canada.jpg");
    $charity->validate(TRUE);

    $author = new AgentProfile("Dave Dumaresq", "dfd2 at sfu dot ca");
    $author->validate(TRUE);

    // echo "</blockquote><hr>";
    // $author->info();

    $smarty->assign(
        array(
            'title'        => 'Object-oriented Programming',
            'site_name'    => 'Advanced Web Programming with PHP',
            'Explanation'  => 'Classes are used to model real world objects; in this case, Agents, Vendors, and Charities',
            'Agent_Info'   => "<p><address>Base Class - Agent</address><blockquote>" . $agent->info(),
            'Vendor_Info'  => "</blockquote></p><p><address>Extended Class - Vendor</address><blockquote>" . $vendor->info(),
            'Charity_Info' => "</blockquote></p><p><address>Extended Class - Charity</address><blockquote>" . $charity->info(),
            'Author_Info'  => "</blockquote>",
            'Object_Image'=> '<img id="objectMockup" src="images/assignment1.png"/>'
            )
        );

    $home     = $smarty->fetch('a1_object_view.tpl');
    $template = mainView($home);

    return $template;
}

/**
 * Display the project page using smarty templates
 *
 * @return template
 **/
function projectPage()
{
    global $smarty;
    $smarty->assign(
            array(
                'title'=>'Home',
                'site_name'=>'Course Project',
                )
            );

    $home     = $smarty->fetch('cp_home_view.tpl');
    $template = mainView($home);

    return $template;
}
/**** Assignment 2 ****/
function askPage()
{
    global $smarty;
    $smarty->assign(
            array(
                'title'=>'Ask party leaders',
                'site_name'=>'Canadians Fight Climate Change',
                )
            );

    $ask = $smarty->fetch('a2_ask_view.tpl');
    $template = templatesMainView($ask);

    return $template;
} // end askPage

function comparePage()
{
    global $smarty;
    $smarty->assign(
            array(
                'title'=>'Compare Parties',
                'site_name'=>'Canadians Fight Climate Change',
                )
            );

    $compare = $smarty->fetch('a2_compare_view.tpl');
    $template = templatesMainView($compare);

    return $template;
} // end comparePage

function sharePage()
{
    global $smarty;
    $smarty->assign(
            array(
                'title'=>'Share with friends',
                'site_name'=>'Canadians Fight Climate Change',
                )
            );

    $share = $smarty->fetch('a2_share_view.tpl');
    $template = templatesMainView($share);

    return $template;
} // end sharePage

function contactPage()
{
    global $smarty;
    $smarty->assign(
            array(
                'title'=>'Contact Me',
                'site_name'=>'Advanced Web Programming with PHP Course Project',
                )
            );

    $contact = $smarty->fetch('cp_contact_view.tpl');
    $template = mainView($contact);

    return $template;
} // end contactPage

/** assignment 4 - data */
function dataPage()
{
    global $smarty;
    $smarty->assign(
            array(
                'title'=>'Data - JSON, XML, AJAX',
                'site_name'=>'Advanced Web Programming with PHP Course Project',
                'Explanation'=>'jQuery is used to select and execute; JSON is generated; AJAX communicates with the backend',

                // {* $App_Title *} - Total Sales from Product Database
                // 'ProductList'=>buildSelectList()  -- TODO: move call from javascript in a4_data_view.tpl to smarty template
                )
            );

    $data = $smarty->fetch('a4_data_view.tpl');
    $template = mainView($data);

    return $template;
} // end dataPage


/**
 * Display the graph page using smarty templates
 *
 * @return template
 **/
function graphPage()
{
    global $smarty;
    $title = 'Dynamic Graphing';
    $smarty->assign(
            array(
                'title'=> $title,
                'site_name'=>'Advanced Web Programming with PHP Course Project', // -- TODO add to header
                'Explanation'=>'Demonstrate JpGraph, jQuery and MySQLi to create dynamic PHP-driven charts.',
                'App_Title'=>'Graph Sum of Product Sales',
                )
            );

    $home     = $smarty->fetch('a3_graph_view.tpl');
    $template = mainView($home);

    return $template;
}

function mainView($content)
{
    global $smarty;

    $navBar = navBar();

    $smarty->assign(
                array(
                    'Example' =>$content,
                    'NavBar' => $navBar,
                )
            );
    $template = $smarty->fetch('cp_main_view.tpl');

    return $template;

}

/** assignment 5 - maps */
function mapsPage()
{
    global $smarty;
    $smarty->assign(
            array(
                'title'=>'Mapping - using Google',
                'site_name'=>'Advanced Web Programming with PHP Course Project',
                'Explanation'=>'Google Maps will be used to demonstrate presenting data on a map of Vancouver City.',
                'App_Title' => '<h3 align="center">Vancouver KML Layers</h3>' .
                '<p align="center">' .
                'The KML layers on this map come from the <a href="http://data.vancouver.ca/datacatalogue/index.htm" target="_blank">City of Vancouver ' .
                'Open Data Catalog</a><br/>'
                // 'Click a layer to toggle its visibility on and off.</p>'
                // 'ProductList'=>buildSelectList()
                )
            );

    $data = $smarty->fetch('a5_maps_view.tpl');
    $template = mainView($data);

    return $template;
} // end mapsPage

/**
 * Display the template page using smarty templates
 *
 * @return template
 **/
function templatesPage()
{
    global $smarty;
    $title = 'Smarty Templates';
    $smarty->assign(
            array(
                'title'=> $title,
                'site_name'=>'Advanced Web Programming with PHP Course Project', // -- TODO add to header
                'Explanation'=>'Difficulty Embedding Smarty Template Sites',
                'Assignment2_Image' => '<img src="images/election-2015.png">'
                // 'App_Title'=>'Graph Sum of Product Sales',
                )
            );

    $home     = $smarty->fetch('templates_view.tpl');
    $template = mainView($home);

    return $template;
}

// function templatesMainView($content)
// {
//     global $smarty;
//     $smarty->assign(
//                 array(
//                     'Example'=> $content,
//                     'Links'  => linkBar(),
//                     'NavBar' => navBar()
//                 )
//             );
//     // $main = $smarty->fetch('a2_main_view.tpl');
//     // $template = mainView($main);
//     $template = $smarty->fetch('cp_main_view.tpl');

//     return $template;

// } // end mainBody

/******* MySQLi functions *********/

/**
 * This function makes the connection and returns the link id
 */
function connectToDataBase()
{
    global $DBHost, $DBName, $DBUser, $DBPass, $link;

    //connect to the server
    if (!($link = mysqli_connect("$DBHost", "$DBUser", "$DBPass"))) {
        $ErrMsg = " Database connection error: " . mysql_errno() . " " . mysql_error();
        displayErrMsg($ErrMsg);
        return 0;
    }

    //select the database
    if (!(mysqli_select_db($link, $DBName))) {
        $ErrMsg = "Error in selecting $DBName database: " . mysqli_errno() . " " . mysqli_error();
        displayErrMsg($ErrMsg);
        exit;
    }


} //end of ConnectToDataBase

/**
 * display error message
 */
function displayErrMsg($message)
{
    print "<BLOCKQUOTE>
       <BLOCKQUOTE>
        <BLOCKQUOTE>
        <H3><FONT COLOR=\"#cc0000\">$message</font></H3>
        </BLOCKQUOTE></BLOCKQUOTE></blockquote>\n";
}

/**
 * execute a query to the database and return the resultset
 */
function query($query)
{

    global $link, $DBName;
    if (!$link) {
        connectToDataBase();
    }

    if (!$link) {
        displayErrMsg("[query] Error: connection is null. Quitting.");
        exit;
    }

    // print_r($link);

    if (!($result = mysqli_query($link, $query))) {
        $ErrMsg = "Bad query to database $DBName: Error Number " . mysqli_errno($link) . "<br>" . mysqli_error($link);
        displayErrMsg($ErrMsg);
        exit;
    }

    return $result;
} //end of Query

/**
 * fetch_products
 *
 * @return array
 * @author dfdumaresq
 **/
function fetch_products()
{

    $select = "SELECT `ProductId`, `ProductName` FROM `products`
               ORDER By `ProductName`";

    // print($select);

    $result = query($select);

    $array = array();
    while ($row = mysqli_fetch_array($result)) {
        $product = new Product($row);
        // $product->showProduct();
        $array[] = $product;
    }

    return $array;
}

/**
 * buildSelectList function
 *
 * @return void
 * @author
 **/
function buildSelectList()
{
    echo"<select id='productId'><option>Choose a product</option>";
    foreach(fetch_products() as $product)
    {
        $productId   = $product->getProductId();
        $productName = $product->getProductName();

        echo "<option value='$productId'>$productName</option>";
    }
    // echo "<option value='17'>Alice Mutton</option>";
    // echo "<option value='40'>Boston Crab Meat</option>";
    // echo "<option value='60'>Camembert Pierrot</option>";
    // echo "<option value='18'>Carnarvon Tigers</option>";
    echo"</select>";
}

/**
 * Call sumByDate and display the resulting object
 * E.g.
 *  displaySum("'1996-01-01'", "'1996-06-31'"))
 *
 * @param  string $fromDate yyyy-mm-dd
 * @param  string $toDate   yyyy-mm-dd
 * @return void             print results
 */
function displaySum($fromDate, $toDate)
{
    print "displaySum " . $fromDate . " to " . $toDate . "</br>";

    $result = sumByDate($fromDate, $toDate);
    while ($obj = $result->fetch_object()) {
        print $obj->OrderMonth . " : $" . round($obj->MonthlySales, 2) . "</br>";
    }
}