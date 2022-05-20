<?php


use BudgetGuru\Budget;
use BudgetGuru\Components\Log;
use BudgetGuru\Order;
use BudgetGuru\Reports\BudgetExport;
use BudgetGuru\Reports\XmFileExport;
use BudgetGuru\Reports\ZipFileExport;

require 'vendor/autoload.php';


$budget = new Budget();
$budget->finish();


$budgetExport = new BudgetExport($budget);
$budgetExportXml = new XmFileExport('budget');
Log::highlight("XML Report saved in: " . $budgetExportXml->export($budgetExport));


$budgetExport = new BudgetExport($budget);
$budgetExportZip = new ZipFileExport('budget.array');
Log::highlight("ZIP Report saved in: " . $budgetExportZip->export($budgetExport));


