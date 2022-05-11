<?php

namespace BudgetGuru;

class DiscountMoreFiveHundred extends Discount
{

    public function calculate(Budget $budget): float
    {
        if ($budget->items > 5) {
            return $budget->price * 0.1;
        }

        return 0;
    }
}