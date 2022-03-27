<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'Monthly',
            'product_code' => 'price_1JO5DGCzBVgP4kKNhlY2s2QD',
            'price' => '10',
            'discounted_price' => '3',
            'coupon' => 'K2Vn3UDY',
            'percentage' => '70',
        ]);

        DB::table('plans')->insert([
            'name' => 'Yearly',
            'product_code' => 'price_1JO5DGCzBVgP4kKNhlY2s2QD',
            'price' => '10',
            'discounted_price' => '3',
            'coupon' => 'K2Vn3UDY',
            'percentage' => '70',
        ]);
    }
}
