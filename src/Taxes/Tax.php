<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

abstract class Tax
{
    private ?Tax $otherTax;

    public function __construct(Tax $otherTax = null)
    {

        $this->otherTax = $otherTax;
    }

    abstract protected function calculate(Budget $budget): float;

    public function calculateTax(Budget $budget)
    {
        return $this->calculate($budget) + $this->calculateOtherTax($budget);
    }

    private function calculateOtherTax(Budget $budget)
    {
        return $this->otherTax !== null ?  $this->otherTax->calculate($budget) : 0;
    }

}