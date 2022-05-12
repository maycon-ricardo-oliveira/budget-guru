<?php

namespace BudgetGuru\Commands;

use BudgetGuru\Actions\ActionAfterGenerateOrder;
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

    /**
     * @var ActionAfterGenerateOrder[]
     */
    private array $actionsAfterGenerateOrder = [];

    public function __construct(  ) {    }

    public function addActionToGenerateOrder(ActionAfterGenerateOrder $action)
    {
        $this->actionsAfterGenerateOrder[] = $action;
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->items = $generateOrder->getBudgetItems();
        $budget->price = $generateOrder->getBudgetPrice();

        $order = new Order();
        $order->finishDate = new DateTimeImmutable();
        $order->clientName = $generateOrder->getClientName();
        $order->budget = $budget;

        foreach ($this->actionsAfterGenerateOrder as $action) {
            $action->action($order);
        }

    }

}