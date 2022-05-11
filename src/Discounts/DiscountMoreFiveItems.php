<?php

namespace BudgetGuru;

class DiscountMoreFiveItems extends Discount
{

    public function calculate(Budget $budget): float
    {
        if ($budget->price > 500) {
            return $budget->price * 0.05;
        }

        return 0;
    }
}