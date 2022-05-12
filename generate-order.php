<?php

use BudgetGuru\Commands\GenerateOrderCommand;

require 'vendor/autoload.php';


$budgetPrice = $argv[1];
$budgetItems = $argv[2];
$clientName  = $argv[3];


$generateOrder = new GenerateOrderCommand($budgetPrice, $budgetItems, $clientName);

$generateOrder->execute();
