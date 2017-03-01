<?php

include "Product.php";

class SimpleProduct extends Product
{
    protected $name;
    protected $price;
    protected $sku;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}