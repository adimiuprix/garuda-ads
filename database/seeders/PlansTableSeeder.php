<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'plan_name'   => 'Free',
                'price'     => 0.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_name'   => 'Ekonomi',
                'price'     => 550_000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_name'   => 'Bisnis',
                'price'     => 1_350_000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
