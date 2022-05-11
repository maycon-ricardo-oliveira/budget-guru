<?php

namespace BudgetGuru;

use BudgetGuru\Discounts\DiscountMoreFiveHundred;
use BudgetGuru\Discounts\DiscountMoreFiveItems;
use BudgetGuru\Discounts\DoesNotHaveDiscount;

class CalculateDiscounts
{
    public function calculate(Budget $budget): float
    {
        $discountPipe = new DiscountMoreFiveItems(
            new DiscountMoreFiveHundred(
                new DoesNotHaveDiscount()
            ));

        return $discountPipe->calculate($budget);
    }
}