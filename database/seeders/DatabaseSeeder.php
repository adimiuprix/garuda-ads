<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FaqsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PlanProductsTableSeeder::class);
        $this->call(BenefitsTableSeeder::class);
        $this->call(BenefitPlansTableSeeder::class);
    }
}
