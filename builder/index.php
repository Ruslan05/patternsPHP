<?php
include "SimpleProductBuilder.php";
include "Director.php";

$simpleProductBuilder = new SimpleProductBuilder();
$director = new Director();

$director->setBuilder($simpleProductBuilder);
$prod = $director->buildProduct("name", "sku", 12000);

var_dump($prod);