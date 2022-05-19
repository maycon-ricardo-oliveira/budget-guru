<?php

require 'vendor/autoload.php';

use BudgetGuru\Budget;
use BudgetGuru\BudgetCacheProxy;
use BudgetGuru\BudgetItem;
use BudgetGuru\Components\Log;

$budget = new Budget();

$item1 = new BudgetItem();
$item1->price = 300;
$item2 = new BudgetItem();
$item2->price = 500;
$budget->addItem($item1);
$budget->addItem($item2);

$oldBudget = new Budget();
$item3 = new BudgetItem();
$item3->price = 150;
$oldBudget->addItem($item3);

$budget->addItem($oldBudget);

$proxyCache = new BudgetCacheProxy($budget);

Log::highlight("Budget: ". $proxyCache->price());
Log::highlight("Budget: ". $proxyCache->price());
