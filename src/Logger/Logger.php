<?php

namespace BudgetGuru\Logger;

interface Logger
{
    /**
     * @param string $message
     * @param string $priority error|warning|success|info|highlight|highlight2
     * @return void
     */
    public function write(string $message, string $priority = ''): void;

}