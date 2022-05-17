<?php

namespace BudgetGuru;

use BudgetGuru\BudgetStates\BudgetStatus;
use BudgetGuru\BudgetStates\WaitingApprove;

class Budget implements Budgetable
{
    private array $items;
    public BudgetStatus $status;

    public function __construct()
    {
        $this->status = new WaitingApprove();
        $this->items = [];
    }

    public function approve()
    {
        $this->status->approve($this);
    }

    public function reprove()
    {
        $this->status->reprove($this);
    }

    public function finish()
    {
        $this->status->finish($this);
    }

    public function addItem(Budgetable $item)
    {
        $this->items[] = $item;
    }

    public function price(): float
    {
        return array_reduce(
            $this->items,
            fn (float $acc, Budgetable $item) => $item->price() + $acc
            ,0
        );
    }
}