<?php

namespace BudgetGuru\Actions;

use BudgetGuru\Order;

interface ActionAfterGenerateOrder
{
    public function action(Order $order): void;


}