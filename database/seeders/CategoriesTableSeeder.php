<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Kelas adsense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Proxy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Script V.I.P',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
