<?php

namespace BudgetGuru\Logger;

abstract class LogManager
{
    public function __construct()
    {
    }

    /**
     * @param string $message
     * @param string $priority
     * @return void
     */
    public function log(string $message, string $priority): void
    {
        $logWriter = $this->createLogWriter();

        $today = date('d/m/Y');

        $formattedMessage = "[$today][$priority]: $message" . self::eol();
        $logWriter->write($formattedMessage);

    }

    abstract public function createLogWriter(): Logger;

    private static function eol()
    {
        return KNRM . PHP_EOL;
    }
}