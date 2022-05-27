<?php

namespace BudgetGuru\Sales;

use BudgetGuru\Taxes\Iss;
use BudgetGuru\Taxes\Tax;

class ServiceSaleFactory implements SaleFactory
{

    private string $workerName;

    public function __construct(string $workerName)
    {
        $this->workerName = $workerName;
    }

    public function createSale(): Sale
    {
        return new ServiceSale(new \DateTimeImmutable(), $this->workerName);
    }

    public function tax(): Tax
    {
        return new Iss();
    }
}