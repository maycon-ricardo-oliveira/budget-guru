<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

abstract class TaxWithTwoAliquot extends Tax
{

    public function calculate(Budget $budget): float
    {
        if ($this->applyMaxTax($budget)) {
            return $this->calculateMaxTax($budget);
        }

        return $this->calculateMinTax($budget);
    }

    abstract protected function applyMaxTax(Budget $budget) : bool;
    abstract protected function calculateMaxTax(Budget $budget) : float;
    abstract protected function calculateMinTax(Budget $budget) : float;

}