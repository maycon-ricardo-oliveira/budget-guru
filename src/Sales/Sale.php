<?php

namespace BudgetGuru\Sales;


abstract class Sale
{
    public \DateTimeImmutable $saleDate;


    public function __construct(\DateTimeImmutable $saleDate)
    {
        $this->saleDate = $saleDate;
    }

}