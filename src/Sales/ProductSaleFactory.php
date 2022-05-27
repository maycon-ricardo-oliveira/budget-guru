<?php

namespace BudgetGuru\Sales;

use BudgetGuru\Taxes\Icms;
use BudgetGuru\Taxes\Tax;

class ProductSaleFactory implements SaleFactory
{

    private int $productWeight;

    public function __construct(int $productWeight)
    {
        $this->productWeight = $productWeight;
    }

    public function createSale(): Sale
    {
        return new ProductSale(new \DateTimeImmutable(), $this->weight);
    }

    public function tax(): Tax
    {
        return new Icms();
    }
}