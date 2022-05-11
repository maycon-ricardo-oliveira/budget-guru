<?php

use BudgetGuru\Budget;
use BudgetGuru\CalculateTaxes;

require 'vendor/autoload.php';

$calculate = new CalculateTaxes();
$budget = new Budget();
$budget->price = 100;

echo $calculate->calculate($budget, 'ISS');