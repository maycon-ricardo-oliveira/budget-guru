<?php

use BudgetGuru\Budget;
use BudgetGuru\BudgetCollection;
use BudgetGuru\BudgetStates\Finished;
use BudgetGuru\Components\Log;

require 'vendor/autoload.php';

$listBudgets = [];

$budget1 = new Budget();
$budget1->approve();

$budget2 = new Budget();
$budget2->reprove();

$budget3 = new Budget();
$budget3->finish();


$listBudgets = new BudgetCollection();
$listBudgets->addBudget($budget1);
$listBudgets->addBudget($budget2);
$listBudgets->addBudget($budget3);


$finishedBudgets = $listBudgets->finishedBudgets();


foreach ($listBudgets as $key => $budget) {
    Log::highlight("Budget:  " . $key);
    Log::info("Valor:   " . $budget->price);
    Log::info("Status:  " . get_class($budget->status));
    Log::info("Items:   " . $budget->items);
    Log::info("Is :   " . $budget->status instanceof Finished);
    Log::warning("_______". PHP_EOL);
}

Log::success("___ FINISHED BUDGETS ___");

foreach ($finishedBudgets as $key => $budget) {
    Log::highlight("Budget:  " . $key);
    Log::info("Valor:   " . $budget->price);
    Log::info("Status:  " . get_class($budget->status));
    Log::info("Items:   " . $budget->items);
    Log::info("Is :   " . $budget->status instanceof Finished);
    Log::warning("_______". PHP_EOL);
}

