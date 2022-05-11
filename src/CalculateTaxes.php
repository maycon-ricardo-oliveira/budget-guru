<?php

namespace BudgetGuru;

use BudgetGuru\Taxes\Tax;

class CalculateTaxes
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->calculateTax($budget);
    }

}