<?php

namespace BudgetGuru\Order;

use BudgetGuru\Budget;
use DateTimeImmutable;

class OrderFactory
{
    private array $templates = [];

    public function createOrder(string $nameClient, string $date, Budget $budget): Order
    {
        $template = $this->createTemplate($nameClient, $date);
        $order = new Order();
        $order->templateOrder = $template;
        $order->budget = $budget;
        return $order;
    }

    /**
     * @param string $nameClient
     * @param string $date
     * @return TemplateOrder
     * @throws \Exception
     */
    public function createTemplate(string $nameClient, string $date): TemplateOrder
    {
        $hash = md5($nameClient . $date);

        if (!array_key_exists($hash, $this->templates)) {
            $template = new TemplateOrder(
                $nameClient,
                new DateTimeImmutable($date)
            );

            $this->templates[$hash] = $template;

        }

        return $this->templates[$hash];
    }

}