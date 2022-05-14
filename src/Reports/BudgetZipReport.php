<?php

namespace BudgetGuru\Reports;

use BudgetGuru\Budget;
use BudgetGuru\Components\Log;

class BudgetZipReport
{
    const TEMP_NAME_FILE = 'budget.zip';
    public function export( Budget $budget)
    {
        $tempFilePath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . self::TEMP_NAME_FILE;
        $zip = new \ZipArchive();
        $zip->open($tempFilePath, \ZipArchive::CREATE);
        $zip->addFromString('budget.serial', serialize($budget));
        $zip->close();

        Log::success(self::TEMP_NAME_FILE . " Created with success in " . $tempFilePath);
    }

}