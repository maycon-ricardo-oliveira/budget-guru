<?php

namespace BudgetGuru;

class Finished extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException("Budget FINISHED can't receive discount.");
    }
}