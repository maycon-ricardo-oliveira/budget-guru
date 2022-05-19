<?php

namespace BudgetGuru\Logger;

class FileLogWriter implements Logger
{

    private $file;

    public function __construct(string $filePath)
    {
        $this->file = fopen($filePath, 'a+');
    }

    public function write(string $message): void
    {
        fwrite($this->file, $message);
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}