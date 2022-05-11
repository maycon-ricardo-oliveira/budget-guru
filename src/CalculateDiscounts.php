<?php

namespace BudgetGuru;

class CalculateDiscounts
{
    public function calculate(Budget $budget): float
    {
        if ($budget->items > 5) {
            return $budget->price * 0.1;
        }

        if ($budget->price > 500) {
            return $budget->price * 0.05;
        }

        return 0;
    }
}