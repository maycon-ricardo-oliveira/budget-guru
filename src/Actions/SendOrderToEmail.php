<?php

namespace BudgetGuru\Actions;

use BudgetGuru\Components\Log;
use BudgetGuru\Order;

class SendOrderToEmail
{
    public function action(Order $order)
    {
        Log::success("Sendding email for a order");
    }

}