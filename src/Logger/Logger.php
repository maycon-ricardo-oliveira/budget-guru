<?php

namespace BudgetGuru\Logger;

interface Logger
{
    public function write(string $message): void;

}