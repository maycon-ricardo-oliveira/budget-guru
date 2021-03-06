<?php

namespace BudgetGuru\Components;

define("KNRM", "\x1B[0m");
define("KBLK", "\e[0;90m");
define("KRED", "\e[0;91m");
define("KGRN", "\e[0;92m");
define("KYEL", "\e[0;93m");
define("KBLU", "\e[0;94m");
define("KMAG", "\e[0;95m");
define("KCYN", "\e[0;96m");
define("KWHT", "\e[0;97m");

class Log
{

    public static function print($msg)
    {
        echo KNRM . $msg . self::eol();
    }

    public static function error($msg)
    {
        echo KRED . $msg . self::eol();
    }

    public static function warning($msg)
    {
        echo KYEL . $msg . self::eol();
    }

    public static function info($msg)
    {
        echo KWHT . $msg . self::eol();
    }

    public static function highlight($msg)
    {
        echo KCYN . $msg . self::eol();
    }

    public static function highlight2($msg)
    {
        echo KMAG . $msg . self::eol();
    }

    public static function success($msg)
    {
        echo KGRN . $msg . self::eol();
    }

    private static function eol()
    {
        return KNRM . PHP_EOL;
    }

}