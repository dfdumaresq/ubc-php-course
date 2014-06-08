<?php
	/**
	* called by calc_total_sales in data_inferface.js
	*/
	// extract($_REQUEST); Import variables into the current symbol table from an array
	$output = "REQUEST --------\n\n";
	// foreach ($_REQUEST as $key => $value) {
	// 	$output .= "$key => $value\n";
	// }

	$productId = $_REQUEST['productId'];
	$output .= "Found productId => $productId\n";


	$output .= "SERVER --------\n\n";
	foreach ($_SERVER as $key => $value) {
		$output .= "$key => $value\n";
	}

	$file = "backend-output.txt";
	file_put_contents($file, $output);

	$sxe = simplexml_load_file("xml/orderdetails.xml");
	$totalSales = 0.0;
	$totalItems = 0;

	foreach($sxe->orderdetails as $orderdetail)
	{

		if ($orderdetail->ProductId == $productId) {
		    $unitPrice 	= $orderdetail->UnitPrice;
		    $quantity 	= $orderdetail->Quantity;
		    $sale 		= $unitPrice * $quantity;

			// echo sprintf(">Unit price %.2f, quantity $quantity<br />", $unitPrice);

		    $totalSales += $sale;
		    $totalItems += $quantity;
		}

	}

    $resultPayload	= array(
                          "totalSales" 	=> $totalSales,
                          "totalItems" 	=> $totalItems,
                         );

	header('Content-type: application/json');
	print json_encode($resultPayload);
	file_put_contents($file, json_encode($resultPayload));
?>