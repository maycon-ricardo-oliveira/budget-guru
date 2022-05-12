<?php

namespace BudgetGuru;

class Reproved extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException("Budget REPROVED can't receive discount.");
    }

    public function finish(Budget $budget)
    {
        $budget->status = new Finished();
    }
}