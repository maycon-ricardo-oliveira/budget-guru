<?php

namespace BudgetGuru\Taxes;

use BudgetGuru\Budget;

class IcmsWithIss implements Tax
{

    public function calculateTax(Budget $budget): float
    {
        return (new Icms())->calculateTax($budget) + (new Iss())->calculateTax($budget);
    }
}