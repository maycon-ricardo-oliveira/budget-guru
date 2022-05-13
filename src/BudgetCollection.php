<?php

namespace BudgetGuru;


use Exception;
use Traversable;

class BudgetCollection implements \IteratorAggregate
{

    /** @var Budget[] */
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget)
    {
        $this->budgets[] = $budget;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->budgets);

    }
}