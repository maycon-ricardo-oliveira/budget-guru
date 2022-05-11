<?php

namespace BudgetGuru\Discounts;

use BudgetGuru\Budget;

class DoesNotHaveDiscount extends Discount
{

    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculate(Budget $budget): float
    {
        return 0;
    }
}