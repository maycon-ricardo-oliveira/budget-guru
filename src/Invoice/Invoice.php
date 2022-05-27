<?php

namespace BudgetGuru\Invoice;


use DateTimeImmutable;

class Invoice
{
    public string $cnpj;
    public string $businessName;
    public array $items;
    public string $comments;
    public  DateTimeImmutable $emissionDate;
    public  float $tax;

    public function price(): float
    {
        return array_reduce($this->items, function(float $acc, \BudgetGuru\BudgetItem $item) {
            return $acc + $item->price;
        }, 0);
    }

    public function __clone()
    {
        $this->emissionDate = new DateTimeImmutable();
    }

}