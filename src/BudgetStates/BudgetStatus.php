<?php

namespace BudgetGuru;

use DomainException;

abstract class BudgetStatus
{

    /**
     * @param Budget $budget
     * @return float
     * @throws DomainException
     */
    abstract public function calculateExtraDiscount(Budget $budget): float;

    public function approve(Budget $budget)
    {
        throw new \DomainException("This budget can't approve.");
    }

    public function reprove(Budget $budget)
    {
        throw new \DomainException("This budget can't reprove.");
    }

    public function finish(Budget $budget)
    {
        throw new \DomainException("This budget can't finish.");
    }

}