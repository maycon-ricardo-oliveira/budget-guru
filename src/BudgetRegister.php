<?php

namespace BudgetGuru;

use BudgetGuru\BudgetStates\Finished;
use HttpAdapter;

class BudgetRegister
{

    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function register( Budget $budget): void
    {
        if (!$budget->status instanceof Finished) {
            throw new \DomainException('Same finished budgets can register');
        }

        $this->http->post('http://api.register.budget', [
            "status" => $budget->status,
            "price" => $budget->price,
            "items" => $budget->items
        ]);

    }

}