<?php

namespace BudgetGuru\Reports;

class XmFileExport implements IFileExport
{
    private string $nameElement;

    public function __construct(string $nameElement)
    {
        $this->nameElement = $nameElement;
    }

    public function export(IContentExport $contentExport): string
    {
        $elementXml = new \SimpleXMLElement("<{$this->nameElement}/>");

        foreach ($contentExport->content() as $item => $value) {

            $elementXml->addChild($item, $value);
        }

        $filePath = tempnam(sys_get_temp_dir(), 'xml_');
        $elementXml->asXML($filePath);
        return $filePath;
    }
}