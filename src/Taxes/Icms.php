<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

class Icms extends Tax
{
    public function calculate(Budget $budget): float
    {
        return $budget->price * 0.1;
    }

}