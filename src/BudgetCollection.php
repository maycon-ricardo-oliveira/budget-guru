<?php

namespace BudgetGuru;


use BudgetGuru\BudgetStates\Finished;
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

    public function finishedBudgets(): array
    {
        return array_filter(
            $this->budgets,
            fn (Budget $budget) => $budget->status instanceof Finished
        );
    }
}