<?php

namespace BudgetGuru\BudgetStates;

use BudgetGuru\Budget;

class WaitingApprove extends BudgetStatus
{

    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->price * 0.05;
    }

    public function approve(Budget $budget)
    {
        $budget->status = new Approved();
    }

    public function reprove(Budget $budget)
    {
        $budget->status = new Reproved();
    }

}