<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

class Icpp implements Tax
{
    public function calculateTax(Budget $budget): float
    {
       if ($budget->price > 500) {
           return $budget->price * 0.03;
       }

       return $budget->price * 0.02;
    }

}