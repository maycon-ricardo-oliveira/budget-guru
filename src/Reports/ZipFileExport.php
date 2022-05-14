<?php

namespace BudgetGuru\Reports;

class ZipFileExport implements IFileExport
{

    private string $nameFile;

    public function __construct(string $nameFile)
    {
        $this->nameFile = $nameFile;
    }

    public function export(IContentExport $contentExport): string
    {
        $filePath = tempnam(sys_get_temp_dir(), 'zip_');
        $zipFile = new \ZipArchive();
        $zipFile->open($filePath);
        $zipFile->addFromString(
            $this->nameFile,
            serialize($contentExport->content())
        );

        $zipFile->close();
        return $filePath;
    }
}