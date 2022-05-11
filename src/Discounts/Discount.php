<?php

namespace BudgetGuru;

abstract class Discount
{

    abstract public function calculate(): float;
}