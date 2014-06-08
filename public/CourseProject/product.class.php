<?php
/**
 * Product class
 *
 * @package default
 */
class Product
{
    private $productId   = "";
    private $productName = "";

    public function __construct($arrProduct)
    {
        $this->productId   = $arrProduct[0];
        $this->productName = $arrProduct[1];

        // echo "In Product constructor<br/>";

    }

    /**
     * getProductId
     *
     * @return productId
     **/
    public function getProductId ()
    {
        return $this->productId;
    }

    /**
     * getProductName
     *
     * @return getProductName
     **/
    public function getProductName ()
    {
        return $this->productName;
    }

    /**
     * showProduct
     *
     * @return void
     **/
    public function showProduct ()
    {
        echo "productId = "   . $this->getProductId() . "<br/>";
        echo "productName = " . $this->getProductName() . "<br/>";
    }
} // END Product

