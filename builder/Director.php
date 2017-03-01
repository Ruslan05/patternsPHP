<?php

class Director
{
    private $builder;

    public function setBuilder(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function buildProduct($name, $sku, $price)
    {
        $this->builder->createProduct();
        $this->builder->setName($name);
        $this->builder->setSku($sku);
        $this->builder->setPrice($price);
        return $this->builder;
    }
}