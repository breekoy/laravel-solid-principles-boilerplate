<?php

namespace App\Reporter;

use App\Repositories\SalesRepository;

class SalesReporter {
    private $sales;

    public function __construct(SalesRepository $sales) {
        $this->sales = $sales;
    }

    public function generate($startDate, $endDate, SalesOutputInterface $formatter)
    {
        //get sales from database
        $sales = $this->sales->getTotal($startDate, $endDate);

        return $formatter->output($sales);
    }
}