<?php

namespace BudgetGuru;

class CalculateDiscounts
{
    public function calculate(Budget $budget): float
    {
        return $tax->calculateTax($budget);
    }
}