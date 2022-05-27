<?php

use BudgetGuru\BudgetItem;
use BudgetGuru\Components\Log;
use BudgetGuru\Invoice\ServiceInvoiceBuilder;

require 'vendor/autoload.php';


$invoiceBuilder = new ServiceInvoiceBuilder();

$item1 = new BudgetItem();
$item1->price = 500;

$item2 = new BudgetItem();
$item2->price = 500;

$invoice = $invoiceBuilder->business('12345600014545', 'Maycon Ltda')
    ->item($item1)
    ->item($item2)
    ->comment('This invoice is new')
    ->build();


Log::success('Printing invoice price: '. $invoice->price());
