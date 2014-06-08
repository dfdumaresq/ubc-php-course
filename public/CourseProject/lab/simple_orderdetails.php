<?php

/**
* Experimental
*
*/
$sxe = simplexml_load_file("../data/orderdetails.xml");
/*
print "<pre>";
print_r($sxe);
print "</pre>";
exit;
*/
$productId = 11;
$totalSales = 0.0;
$totalItems = 0;
foreach($sxe->orderdetails as $orderdetail)
{

	if ($orderdetail->ProductId == $productId) {
		$unitprice += (float)$orderdetail->unitprice ;

	    $unitPrice 	= (float)$orderdetail->UnitPrice;
	    $sale 		= (float)$unitPrice * $quantity;
	    $quantity 	= $orderdetail->Quantity;

	    echo sprintf(">Unit price %.2f, quantity $quantity<br />", $unitPrice);

	    $totalSales += $sale;
	    $totalItems += $quantity;
	}

}
	echo sprintf("Total Sales $%.2f, Total Items %d", $totalSales, $totalItems);
