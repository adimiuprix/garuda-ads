<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('benefit_plans')->insert([
            [
                'plan_id' => 1,
                'benefit_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 1,
                'benefit_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 1,
                'benefit_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'benefit_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'benefit_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'benefit_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'benefit_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'benefit_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'benefit_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
