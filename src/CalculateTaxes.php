<?php

namespace BudgetGuru;

class CalculateTaxes
{
    public function calculate(Budget $budget, string $nameTax): float
    {

        switch ($nameTax) {
            case 'ICMS':
                return $budget->price * 0.1;
            case 'ISS':
                return $budget->price * 0.06;
        }
    }

}