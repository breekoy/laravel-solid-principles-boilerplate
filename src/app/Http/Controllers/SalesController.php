<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index (Request $request) {
        $begin = Carbon::now()->subDays(10);
        $end = Carbon::now();

        return $this->generateReport($begin, $end);
    }

    public function generateReport($startDate, $endDate) {
        //get sales from database
        $sales = $this->getTotalSalesFromDatabase($startDate, $endDate);

        return $this->format($sales);
    }

    public function getTotalSalesFromDatabase($startDate, $endDate) {
        return Sale::whereBetween('created_at', [$startDate, $endDate])->sum('amount_in_centavos') / 100;
    }

    public function format($sales) {
        return '<h1> Total Sales: ₱' . number_format($sales, 2, '.', ',') . '</h1>';
    }
}
