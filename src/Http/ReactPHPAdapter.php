<?php

namespace BudgetGuru\Http;

use BudgetGuru\Components\Log;

class ReactPHPAdapter implements HttpAdapter
{

    public function post(string $url, array $data = []): void
    {
        // instance react php
//        prepare
//        make request

        Log::success("Making Request with React PHP Adapter");
    }
}