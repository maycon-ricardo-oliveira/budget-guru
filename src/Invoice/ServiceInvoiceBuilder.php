<?php

namespace BudgetGuru\Invoice;


class ServiceInvoiceBuilder extends InvoiceBuilder
{

    public function build(): Invoice
    {
        $price = $this->invoice->price();

        $this->invoice->tax = $price * 0.06;

        return $this->invoice;
    }
}