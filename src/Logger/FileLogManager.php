<?php

namespace BudgetGuru\Logger;

class FileLogManager extends LogManager
{

    private string $filePath;

    public function __construct( string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogWriter(): Logger
    {
        return new FileLogWriter($this->filePath);
    }
}