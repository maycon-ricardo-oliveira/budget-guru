<?php

namespace BudgetGuru\Reports;


use BudgetGuru\Budget;

class BudgetXmlReport
{

    public function export(Budget $budget): string
    {
        $budgetElement = new \SimpleXMLElement('<budget>');
        $budgetElement->addChild('price', $budget->price);
        $budgetElement->addChild('items', $budget->items);

        return $budgetElement->asXML();
    }
}