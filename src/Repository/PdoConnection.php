<?php

namespace BudgetGuru\Repository;

use PDO;

class PdoConnection extends PDO
{
    private static ?PdoConnection $instance = null;

    public function __construct($dsn, $username = null, $password = null, $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
    }


    public static function getInstance($dsn, $username = null, $password = null, $options = null)
    {
        if (is_null(self::$instance)) {
            self::$instance = new static($dsn, $username = null, $password = null, $options = null);
        }
        return self::$instance;
    }
}