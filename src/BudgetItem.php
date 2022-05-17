<?php

namespace BudgetGuru;

class BudgetItem implements Budgetable
{
    public float $price;

    public function price(): float
    {
        return  $this->price;
    }
}