<?php

use BudgetGuru\Budget;
use BudgetGuru\Components\Log;
use BudgetGuru\Order\OrderFactory;

require 'vendor/autoload.php';

$orders = [];

$orderFactory = new OrderFactory();

for ($i = 0; $i < 10000; $i++) {
    $budget = new Budget();
    $order = $orderFactory->createOrder(
        'Maycon Oliveira',
        date('Y-m-d'),
        $budget
    );

    $orders[] = $order;
}

$MBytes = memory_get_peak_usage() / 1024 / 1024;
Log::error('Initial used memory: 7.27 MB');
Log::warning('After change new date for today variable, used memory: 3.87 MB');
Log::success('After change SharedOrderData, used memory: 3.11 MB');
Log::success('After change OrderFactory, used memory: '. $MBytes);