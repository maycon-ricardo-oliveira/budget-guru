<?php

use BudgetGuru\GenerateOrder;
use BudgetGuru\Commands\GenerateOrderHandler;

require 'vendor/autoload.php';


$budgetPrice = $argv[1];
$budgetItems = $argv[2];
$clientName  = $argv[3];


$generateOrder = new GenerateOrder($budgetPrice, $budgetItems, $clientName);
$handler = new GenerateOrderHandler();

$handler->execute($generateOrder);
