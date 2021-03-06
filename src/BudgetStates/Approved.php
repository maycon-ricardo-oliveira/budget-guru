<?php

namespace BudgetGuru\BudgetStates;

use BudgetGuru\Budget;

class Approved extends BudgetStatus
{

    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->price * 0.02;
    }

    public function finish(Budget $budget)
    {
        $budget->status = new Finished();
    }


}