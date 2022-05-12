<?php

namespace BudgetGuru;

class GenerateOrder
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

    /**
     * @return float
     */
    public function getBudgetPrice(): float
    {
        return $this->budgetPrice;
    }

    /**
     * @return int
     */
    public function getBudgetItems(): int
    {
        return $this->budgetItems;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

}