<?php
/**
 * Show graph
 * Receive query parameters $fromYear, $fromMonth, $toYear, $toMonth
 *
 * @package JpGraph
 * @author Dave Dumaresq <dfd2@sfu.ca>
 */

include "includes.php";

if (!$_GET) {
    $fromYear   = '1996';
    $fromMonth  = '01';
    $toYear     = '1997';
    $toMonth    = '12';
}
else {
    // Convert query string to correct date strings
    $fromYear   = htmlspecialchars($_GET["fromYear"]);
    $fromMonth  = htmlspecialchars($_GET["fromMonth"]);
    $toYear	    = htmlspecialchars($_GET["toYear"]);
    $toMonth	= htmlspecialchars($_GET["toMonth"]);
}

chartSum($fromYear, $fromMonth, $toYear, $toMonth);

/**
 * Chart total sales over time period
 * @param  String $fromYear
 * @param  String $fromMonth
 * @param  String $toYear
 * @param  String $toMonth
 * @return String
 */
function chartSum($fromYear, $fromMonth, $toYear, $toMonth)
{
	global $months;
	// echo "chartSum $fromYear, $fromMonth, $toYear, $toMonth</br>";

    $fromDate 	= createDateStr($fromYear, $fromMonth, 01);
	$toDate 	= createDateStr($fromYear, $toMonth, null);

    // echo "Year1 $fromDate to $toDate</br>";
    $result = sumByDate($fromDate, $toDate);

    while ($row = mysqli_fetch_array($result)) {
        $arY1Sales[]  = $row[0];
        $arYear1[]   = $row[1];
    }

    $fromDate 	= createDateStr($toYear, $fromMonth, 01);
	$toDate 	= createDateStr($toYear, $toMonth, null);

    $result = sumByDate($fromDate, $toDate);

    while ($row = mysqli_fetch_array($result)) {
        $arY2Sales[]  = $row[0];
        $arYear2[]   = $row[1];
    }
    // Setup bar labels
	$arMonths = array();
	$i = 0;	// Needed to convert leading zero on fromMonth
	for ($i+=$fromMonth; $i <= $toMonth ; $i++) {
		$arMonths[] = $months[$i];
	}

    // Create Graph
    $graph = new Graph(900, 400);
    $graph->SetScale("textlin");
    $theme_class = new VividTheme;
	$graph->SetTheme($theme_class);
	$graph->SetMargin(90,50,40,-10);	// left, right, top, bottom
    $graph->SetShadow();

    // Theme overriding bar colours. TODO: fix. http://stackoverflow.com/questions/6989701/jpgraph-wont-change-colors-on-my-barplot
  	// $graph->graph_theme = null;

    $graph->xaxis->SetTickLabels($arMonths);

    // setup titles
    $graph->title->Set("Compare Sum of Product Sales");
    $graph->title->SetFont(FF_FONT2,FS_BOLD);
    $graph->xaxis->title->Set("$fromYear to $toYear");
    $graph->xaxis->title->SetFont(FF_FONT2,FS_BOLD);
	$graph->yaxis->title->Set("Sum of Sales ($)");
    $graph->yaxis->title->SetFont(FF_FONT2,FS_BOLD);
    $graph->yaxis->SetTitleMargin(60);

    // Extend with Bar Graph Y1 Sales
    $bplot1 = new BarPlot($arY1Sales);

    $bplot1->SetFillColor('orange'); // TODO: not setting fill color

    $bplot1->value->Show();
    $bplot1->value->SetFont(FF_ARIAL,FS_BOLD);
    $bplot1->value->SetAngle(-45);
    $bplot1->value->SetColor("black","navy");
    $bplot1->SetLegend($fromYear);

	// Extend with Bar Graph Y2 Sales
    $bplot2 = new BarPlot($arY2Sales);

    $bplot2->SetFillColor('green'); // TODO: not setting fill color

    $bplot2->value->Show();
    $bplot2->value->SetFont(FF_ARIAL,FS_BOLD);
    $bplot2->value->SetAngle(-45);
    $bplot2->value->SetColor("black","navy");
    $bplot2->SetLegend($toYear);

    // Place Bar Plots side by side
    $comparePlot = new GroupBarPlot(array($bplot1, $bplot2));
    $graph->Add($comparePlot);
    $graph->Stroke();

}
