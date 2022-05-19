<?php

use BudgetGuru\Budget;
use BudgetGuru\Components\Log;
use BudgetGuru\Order;
use BudgetGuru\SharedOrderData;

require 'vendor/autoload.php';

$orders = [];

$sharedOrderData = new SharedOrderData();
$sharedOrderData->clientName = md5((string) rand(1, 100000));
$sharedOrderData->finishDate = new DateTimeImmutable();

for ($i = 0; $i < 10000; $i++) {
    $order = new Order();
    $order->budget = new Budget();
    $order->sharedOrderData = $sharedOrderData;
    $orders[] = $order;
}

$MBytes = memory_get_peak_usage() / 1024 / 1024;
Log::error('Initial used memory: 7.27 MB');
Log::warning('After change new date for today variable, used memory: 3.87 MB');
Log::success('After change SharedOrderData, used memory: 3.11 MB');