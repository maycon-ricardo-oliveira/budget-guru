<?php

namespace BudgetGuru\Invoice;

use BudgetGuru\BudgetItem;
use DateTimeImmutable;

abstract class InvoiceBuilder
{
    protected Invoice $invoice;

    public function __construct()
    {
        $this->invoice = new Invoice();
        $this->invoice->emissionDate = new DateTimeImmutable();

    }

    public function business(string $cnpj, string $businessName)
    {
        $this->invoice->cnpj = $cnpj;
        $this->invoice->businessName = $businessName;
        return $this;
    }

    public  function item(BudgetItem $item)
    {
        $this->invoice->items[] = $item;
        return $this;
    }

    public function comment(string $comment)
    {
        $this->invoice->comments = $comment;
        return $this;
    }

    public function emissionDate(DateTimeImmutable $emissionDate)
    {
        $this->invoice->emissionDate = $emissionDate;
        return $this;
    }

    abstract public function build(): Invoice;
    

}