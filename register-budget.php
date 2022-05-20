<?php

use BudgetGuru\Budget;
use BudgetGuru\BudgetRegister;
use BudgetGuru\Http\ReactPHPAdapter;

require 'vendor/autoload.php';


$budget3 = new Budget();
$budget3->finish();

$register = new BudgetRegister(new ReactPHPAdapter());
$register->register($budget3);

