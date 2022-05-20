<?php

use BudgetGuru\Logger\StdoutLogManager;
use BudgetGuru\Logger\StdoutLogWriter;

require 'vendor/autoload.php';


$log = new StdoutLogManager();
$log->log("Testing StdoutLogManager", "error");

$log->log("Testing Success log", "success");
