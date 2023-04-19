<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 99; $i++) {
            Sale::create([
                'description' => 'Item #' . rand(1, 500),
                'amount_in_centavos' => rand(1, 10000)
            ]);
        }
    }
}
