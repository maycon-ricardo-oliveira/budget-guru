<?php


require 'vendor/autoload.php';


$budgetZip = new \BudgetGuru\Reports\BudgetZipReport();
$budget = new \BudgetGuru\Budget();
$budget->price = 500;


$budgetZip->export($budget);