<?php

namespace BudgetGuru\Actions;

use BudgetGuru\Components\Log;
use BudgetGuru\Order;

class LogGenerateOrder implements ActionAfterGenerateOrder
{
    public function action(Order $order): void
    {
        Log::success("Logging order");
    }

}