<?php

class Invoice
{
    public string $cnpj;
    public string $businessName;
    public array $items;
    public string $comments;
    public  DateTimeImmutable $emissionDate;
    public  float $tax;

    /**
     * @param string $cnpj
     * @param string $businessName
     * @param array $items
     * @param string $comments
     * @param DateTimeImmutable $emissionDate
     * @param float $tax
     */
    public function __construct(string $cnpj, string $businessName, array $items, string $comments, DateTimeImmutable $emissionDate, float $tax)
    {
        $this->cnpj = $cnpj;
        $this->businessName = $businessName;
        $this->items = $items;
        $this->comments = $comments;
        $this->emissionDate = $emissionDate;
        $this->tax = $tax;
    }




}