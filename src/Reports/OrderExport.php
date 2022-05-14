<?php

namespace BudgetGuru\Reports;

use BudgetGuru\Order;

class OrderExport implements IContentExport
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function content(): array
    {
        return [
            'clientName' => $this->order->clientName,
            'finishDate' => $this->order->finishDate,
        ];
    }
}