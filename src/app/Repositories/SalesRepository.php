<?php

namespace App\Repositories;

use App\Models\Sale;

class SalesRepository {
    public function getTotal($startDate, $endDate)
    {
        return Sale::whereBetween('created_at', [$startDate, $endDate])->sum('amount_in_centavos') / 100;
    }
}