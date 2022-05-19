<?php

namespace BudgetGuru;

use DateTimeInterface;

class SharedOrderData
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