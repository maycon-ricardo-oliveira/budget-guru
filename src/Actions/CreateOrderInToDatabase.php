<?php

namespace BudgetGuru\Actions;

use BudgetGuru\Components\Log;
use BudgetGuru\Order;

class CreateOrderInToDatabase
{
    public function action(Order $order): void
    {
        Log::success("Saving order in database");
    }

}