<?php

use BudgetGuru\Sales\ServiceSaleFactory;

require 'vendor/autoload.php';

$factorySale = new ServiceSaleFactory("Maycon Ricardo");

$sale = $factorySale->createSale();
$tax = $factorySale->tax();

var_dump($sale, $tax);
