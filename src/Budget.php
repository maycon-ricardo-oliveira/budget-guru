<?php

namespace BudgetGuru;

use BudgetGuru\BudgetStates\BudgetStatus;
use BudgetGuru\BudgetStates\WaitingApprove;

class Budget
{
    public float $price;
    public int $items;
    public BudgetStatus $status;

    public function __construct()
    {
        $this->status = new WaitingApprove();
    }

    public function applyExtraDiscount()
    {
        $this->price -= $this->status->calculateExtraDiscount($this);
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

}