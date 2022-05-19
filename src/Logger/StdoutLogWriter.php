<?php

namespace BudgetGuru\Logger;

define("KNRM", "\x1B[0m");
define("KBLK", "\e[0;90m");
define("KRED", "\e[0;91m");
define("KGRN", "\e[0;92m");
define("KYEL", "\e[0;93m");
define("KBLU", "\e[0;94m");
define("KMAG", "\e[0;95m");
define("KCYN", "\e[0;96m");
define("KWHT", "\e[0;97m");

class StdoutLogWriter implements Logger
{

    public function write(string $message): void
    {
        echo KNRM . $message . self::eol();
    }

    private static function eol()
    {
        return KNRM . PHP_EOL;
    }
}