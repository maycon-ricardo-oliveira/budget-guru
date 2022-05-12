<?php

namespace BudgetGuru\Commands;

use BudgetGuru\Budget;
use BudgetGuru\GenerateOrder;
use BudgetGuru\Order;
use DateTimeImmutable;

class GenerateOrderHandler
{

    public function __construct(  ) {    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->items = $generateOrder->getBudgetItems();
        $budget->price = $generateOrder->getBudgetPrice();

        $order = new Order();
        $order->finishDate = new DateTimeImmutable();
        $order->clientName = $generateOrder->getClientName();
        $order->budget = $budget;

        Log::success("Create Order in database");
        Log::success("Send Email to client");

    }

}