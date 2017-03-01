<?php
include "BuilderInterface.php";
include "SimpleProduct.php";

class SimpleProductBuilder implements BuilderInterface
{
    private $product;

    public function createProduct()
    {
        $this->product = new SimpleProduct();
    }

    public function getProduct() : SimpleProduct
    {
        return $this->product;
    }

    public function setName($name)
    {
        $this->product->setName($name);
    }

    public function setSku($sku)
    {
        $this->product->setSku($sku);
    }

    public function setPrice($price)
    {
        $this->product->setPrice($price);
    }
}