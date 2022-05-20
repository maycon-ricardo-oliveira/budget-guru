<?php

namespace BudgetGuru\Logger;

class StdoutLogManager extends LogManager
{
    function createLogWriter(): Logger
    {
        return new StdoutLogWriter();
    }
}