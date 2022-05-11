<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

class Iss implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->price * 0.06;
    }

}