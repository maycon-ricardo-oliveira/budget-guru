<?php

namespace BudgetGuru\Sales;

use BudgetGuru\Taxes\Tax;

interface SaleFactory
{
    public function createSale(): Sale;
    public function tax(): Tax;

}