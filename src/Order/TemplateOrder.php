<?php

namespace BudgetGuru\Order;

use DateTimeInterface;

class TemplateOrder
{
    private string $clientName;
    private \DateTimeInterface $finishDate;

    public function __construct(string $clientName, DateTimeInterface $finishDate)
    {
        $this->clientName = $clientName;
        $this->finishDate = $finishDate;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * @return DateTimeInterface
     */
    public function getFinishDate(): DateTimeInterface
    {
        return $this->finishDate;
    }
}