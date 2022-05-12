<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

class Icpp extends TaxWithTwoAliquot
{

    protected function applyMaxTax(Budget $budget): bool
    {
        return $budget->price > 500;
    }

    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->price * 0.03;
    }

    protected function calculateMinTax(Budget $budget): float
    {
        return $budget->price * 0.02;
    }

}