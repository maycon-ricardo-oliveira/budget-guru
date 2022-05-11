<?php

namespace BudgetGuru;

class CalculateDiscounts extends Discount
{
    public function calculate(Budget $budget): float
    {

        $discountFiveItems = new DiscountMoreFiveItems();
        $discount = $discountFiveItems->calculate($budget);
        if ($discount === 0) {
            $discountFiveHundred = new DiscountMoreFiveHundred();
            $discount = $discountFiveHundred->calculate($budget);
        }

        return $discount;
    }
}