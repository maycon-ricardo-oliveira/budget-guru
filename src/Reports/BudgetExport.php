<?php

namespace BudgetGuru\Reports;

use BudgetGuru\Budget;

class BudgetExport implements IContentExport
{
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function content(): array
    {
        return [
            'price' => $this->budget->price,
            'items' => $this->budget->items
        ];
    }
}