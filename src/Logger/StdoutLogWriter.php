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


    /**
     * @param string $message
     * @param string $priority error|warning|success|info|highlight|highlight2
     * @return void
     */
    public function write(string $message, string $priority = ''): void
    {
        echo self::$priority() . $message;
    }

    public static function error()
    {
        return KRED;
    }

    public static function warning()
    {
        return KYEL;
    }

    public static function info()
    {
        return KWHT;
    }

    public static function highlight()
    {
        return KCYN;
    }

    public static function highlight2()
    {
        return KMAG;
    }

    public static function success()
    {
        return KGRN;
    }

}