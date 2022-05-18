<?php

namespace BudgetGuru;

use BudgetGuru\Components\Log;

class DiscountLogger
{
    public function inform(float $discount): void
    {
        // log lib
        Log::success("Logging discount: " . $discount);

    }
}