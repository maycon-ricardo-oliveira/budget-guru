<?php

namespace BudgetGuru\Commands;

use BudgetGuru\Actions\CreateOrderInToDatabase;
use BudgetGuru\Actions\LogGenerateOrder;
use BudgetGuru\Actions\SendOrderToEmail;
use BudgetGuru\Budget;
use BudgetGuru\Components\Log;
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

        $orderRepository = new CreateOrderInToDatabase();
        $logOrder = new LogGenerateOrder();
        $sendMail = new SendOrderToEmail();

        $orderRepository->action($order);
        $logOrder->action($order);
        $sendMail->action($order);

    }

}