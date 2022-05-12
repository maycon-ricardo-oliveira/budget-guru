<?php

namespace BudgetGuru\BudgetStates;

use BudgetGuru\Budget;

class Finished extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException("Budget FINISHED can't receive discount.");
    }
}