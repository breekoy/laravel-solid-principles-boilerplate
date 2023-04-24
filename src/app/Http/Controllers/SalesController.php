<?php

namespace App\Http\Controllers;

use App\Reporter\SalesHtmlOutput;
use App\Reporter\SalesReporter;
use App\Repositories\SalesRepository;
use Carbon\Carbon;

class SalesController extends Controller
{
    public function index () {
        $begin = Carbon::now()->subDays(10);
        $end = Carbon::now();

        $salesReporter = new SalesReporter(new SalesRepository());

        return $salesReporter->generate($begin, $end, new SalesHtmlOutput());
    }
}
