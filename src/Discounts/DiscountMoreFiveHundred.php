<?php

namespace BudgetGuru\Discounts;

use BudgetGuru\Budget;
use BudgetGuru\Discounts\Discount;

class DiscountMoreFiveHundred extends Discount
{

    public function calculate(Budget $budget): float
    {
        if ($budget->price > 500) {
            return $budget->price * 0.05;
        }

        return $this->nextDiscount->calculate($budget);
    }
}