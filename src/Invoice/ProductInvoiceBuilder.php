<?php

namespace BudgetGuru\Invoice;


class ProductInvoiceBuilder extends InvoiceBuilder
{

    public function build(): Invoice
    {
        $price = $this->invoice->price();

        $this->invoice->tax = $price * 0.02;

        return $this->invoice;
    }
}