<?php

use BudgetGuru\BudgetItem;

require 'vendor/autoload.php';


$invoiceBuilder = new InvoiceBuilder();

$invoice = $invoiceBuilder->business('12345600014545', 'Maycon Ltda')
    ->item(new BudgetItem())
    ->item(new BudgetItem())
    ->item(new BudgetItem())
    ->item(new BudgetItem())
    ->comment('This invoice is new')
    ->build();

