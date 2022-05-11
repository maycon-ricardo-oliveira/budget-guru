<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}