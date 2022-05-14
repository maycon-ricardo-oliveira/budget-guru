<?php

namespace BudgetGuru\Reports;

interface IFileExport
{
    public function export(IContentExport $contentExport): string;
}