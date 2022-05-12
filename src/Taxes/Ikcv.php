<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

class Ikcv extends TaxWithTwoAliquot
{

    /**
     * @param Budget $budget
     * @return bool
     */
    protected function applyMaxTax(Budget $budget): bool
    {
        return $budget->price > 300 && $budget->items > 3;
    }

    /**
     * @param Budget $budget
     * @return float
     */
    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->price * 0.04;
    }

    /**
     * @param Budget $budget
     * @return float
     */
    protected function calculateMinTax(Budget $budget): float
    {
        return $budget->price * 0.025;
    }
}