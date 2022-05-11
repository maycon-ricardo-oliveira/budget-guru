<?php

use BudgetGuru\Budget;
use BudgetGuru\CalculateTaxes;
use BudgetGuru\CalculateDiscounts;
use BudgetGuru\Taxes\Icms;

require 'vendor/autoload.php';

//$calculate = new CalculateTaxes();
//$budget = new Budget();
//$budget->price = 100;
//
//echo $calculate->calculate($budget, new  Icms());

$calculateDiscount = new CalculateDiscounts();
$budget = new Budget();
$budget->price = 600;
$budget->items = 5;

echo $calculateDiscount->calculate($budget);
