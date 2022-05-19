<?php

namespace BudgetGuru;

class BudgetItem implements Budgetable
{
    public float $price;

    public function price(): float
    {
        sleep(1);
        return  $this->price;
    }
}