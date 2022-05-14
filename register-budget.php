<?php

use BudgetGuru\Budget;
use BudgetGuru\BudgetRegister;
use BudgetGuru\Http\CurlHttpAdapter;

require 'vendor/autoload.php';


$register = new BudgetRegister(new CurlHttpAdapter());
$register->register(new Budget());

