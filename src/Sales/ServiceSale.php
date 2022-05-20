<?php

namespace BudgetGuru\Sales;

class ServiceSale extends Sale
{
    private \DateTimeImmutable $serviceDate;
    private string $workerName;

    public function __construct(\DateTimeImmutable $serviceDate, string $workerName)
    {

        parent::__construct($serviceDate);
        $this->workerName = $workerName;
    }

}