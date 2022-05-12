<?php

namespace BudgetGuru\Commands;

use BudgetGuru\Budget;
use BudgetGuru\Order;
use DateTimeImmutable;

class GenerateOrderCommand implements Command
{
    private float $budgetPrice;
    private int $budgetItems;
    private string $clientName;

    public function __construct(
        float  $budgetPrice,
        int    $budgetItems,
        string $clientName
    ) {

        $this->budgetPrice = $budgetPrice;
        $this->budgetItems = $budgetItems;
        $this->clientName = $clientName;
    }

    public function execute()
    {
        $budget = new Budget();
        $budget->items = $this->budgetItems;
        $budget->price = $this->budgetPrice;

        $order = new Order();
        $order->finishDate = new DateTimeImmutable();
        $order->clientName = $this->clientName;
        $order->budget = $budget;

        echo "Create Order in database". PHP_EOL;
        echo "Send Email to client". PHP_EOL;


    }

}