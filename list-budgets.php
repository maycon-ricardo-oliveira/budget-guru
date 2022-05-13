<?php

use BudgetGuru\Budget;
use BudgetGuru\BudgetCollection;
use BudgetGuru\Components\Log;

require 'vendor/autoload.php';

$listBudgets = [];

$budget1 = new Budget();
$budget1->items = 7;
$budget1->price = 1500.75;
$budget1->approve();

$budget2 = new Budget();
$budget2->items = 3;
$budget2->price = 150;
$budget2->reprove();

$budget3 = new Budget();
$budget3->items = 5;
$budget3->price = 1350;
$budget3->finish();


$listBudgets = new BudgetCollection();
$listBudgets->addBudget($budget1);
$listBudgets->addBudget($budget2);
$listBudgets->addBudget($budget3);

foreach ($listBudgets as $key => $budget) {
    Log::highlight("Budget:  " . $key);
    Log::info("Valor:   " . $budget->price);
    Log::info("Status:  " . get_class($budget->status));
    Log::info("Items:   " . $budget->items);
    Log::warning("_______". PHP_EOL);
    echo KNRM . PHP_EOL;
}

