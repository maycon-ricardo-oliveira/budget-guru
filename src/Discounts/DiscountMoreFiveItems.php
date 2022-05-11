<?php

namespace BudgetGuru\Discounts;

use BudgetGuru\Budget;
use BudgetGuru\Discounts\Discount;


class DiscountMoreFiveItems extends Discount
{

    public function calculate(Budget $budget): float
    {
        if ($budget->items > 5) {
            return $budget->price * 0.1;
        }

        return $this->nextDiscount->calculate($budget);
    }
}