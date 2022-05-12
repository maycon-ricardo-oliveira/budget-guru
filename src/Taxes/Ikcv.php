<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

class Ikcv implements Tax
{

    public function calculateTax(Budget $budget): float
    {
        if($budget->price > 300 && $budget->items > 3) {
            return $budget->price * 0.04;
        }

        return  $budget->price * 0.025;
    }
}