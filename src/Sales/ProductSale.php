<?php

namespace BudgetGuru\Sales;

class ProductSale extends Sale
{
    private int $weight;

    public function __construct(\DateTimeImmutable $saleDate, int $weight)
    {
        parent::__construct($saleDate);
        $this->weight = $weight;
    }

}