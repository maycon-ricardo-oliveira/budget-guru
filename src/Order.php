<?php

namespace BudgetGuru;

class Order
{
    public string $clientName;
    public \DateTimeInterface $finishDate;
    public Budget $budget;

}