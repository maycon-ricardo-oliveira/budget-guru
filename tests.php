<?php

use BudgetGuru\Budget;
use BudgetGuru\CalculateTaxes;
use BudgetGuru\CalculateDiscounts;
use BudgetGuru\Components\Log;
use BudgetGuru\Taxes\Icms;
use BudgetGuru\Taxes\Iss;

require 'vendor/autoload.php';

// Strategy
$calculate = new CalculateTaxes();
$budget = new Budget();
$budget->price = 100;

Log::success(
    $calculate->calculate($budget, new Icms())
);

// Chain Off Responsibility
//$calculateDiscount = new CalculateDiscounts();
//$budget = new Budget();
//$budget->price = 600;
//$budget->items = 5;
//
//echo $calculateDiscount->calculate($budget);


