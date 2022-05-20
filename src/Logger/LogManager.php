<?php

namespace BudgetGuru\Logger;

abstract class LogManager
{
    private const PRIORITY = ['error','warning','success','info','highlight','highlight2'];

    /**
     * @param string $message
     * @param string $priority error|warning|success|info|highlight|highlight2
     * @return void
     */
    public function log(string $message, string $priority): void
    {

        if (!in_array($priority, self::PRIORITY)) {
            throw new \DomainException("Priority $priority is not acceptable");
        }

        $logWriter = $this->createLogWriter();

        $today = date('d/m/Y');

        $formattedMessage = "[$today][$priority]: $message" . self::eol();
        $logWriter->write($formattedMessage, $priority);

    }

    abstract public function createLogWriter(): Logger;

    private static function eol()
    {
        return KNRM . PHP_EOL;
    }
}