<?php

namespace BudgetGuru\Actions;

use BudgetGuru\Components\Log;
use BudgetGuru\Order;

class LogGenerateOrder
{
    public function action(Order $order)
    {
        Log::success("Logging order");
    }

}