<?php

use BudgetGuru\Budget;
use BudgetGuru\CalculateTaxes;
use BudgetGuru\Taxes\Icms;

require 'vendor/autoload.php';

//$calculate = new CalculateTaxes();
//$budget = new Budget();
//$budget->price = 100;
//
//echo $calculate->calculate($budget, new  Icms());

$calculateDiscount = new \BudgetGuru\CalculateDiscounts();
$budget = new Budget();
$budget->price = 600;
$budget->items = 8;

echo $calculateDiscount->calculate($budget);
