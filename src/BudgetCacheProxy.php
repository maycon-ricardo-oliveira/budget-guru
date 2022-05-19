<?php

namespace BudgetGuru;

use DomainException;

class BudgetCacheProxy extends Budget
{
    private float $priceCached = 0;
    private Budget $budget;

    public function __construct(Budget $budget)
    {

        $this->budget = $budget;
    }

    public function addItem(Budgetable $item)
    {
        throw new DomainException('It is not possible add items to cached budgets');
    }

    public function price(): float
    {
        if ($this->priceCached == 0) {
            $this->priceCached = $this->budget->price();
        }

        return $this->priceCached;
    }

}