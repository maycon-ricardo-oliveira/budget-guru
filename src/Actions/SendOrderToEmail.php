<?php

namespace BudgetGuru\Actions;

use BudgetGuru\Components\Log;
use BudgetGuru\Order;

class SendOrderToEmail implements ActionAfterGenerateOrder
{
    public function action(Order $order): void
    {
        Log::success("Sending email for a order");
    }

}