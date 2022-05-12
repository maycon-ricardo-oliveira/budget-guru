<?php

use BudgetGuru\Actions\CreateOrderInToDatabase;
use BudgetGuru\Actions\LogGenerateOrder;
use BudgetGuru\Actions\SendOrderToEmail;
use BudgetGuru\GenerateOrder;
use BudgetGuru\Commands\GenerateOrderHandler;

require 'vendor/autoload.php';


$budgetPrice = $argv[1];
$budgetItems = $argv[2];
$clientName  = $argv[3];


$generateOrder = new GenerateOrder($budgetPrice, $budgetItems, $clientName);
$handler = new GenerateOrderHandler();

$handler->addActionToGenerateOrder(new CreateOrderInToDatabase());
$handler->addActionToGenerateOrder(new LogGenerateOrder());
$handler->addActionToGenerateOrder(new SendOrderToEmail());
$handler->execute($generateOrder);
