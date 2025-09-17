<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('benefits')->insert([
            [
                'name' => 'Join Grup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Respon Lambat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kelas Live',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Free Update',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diajari sampai bisa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gratis Konsultasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gratis Domain TLD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Materi Kelas Lebih Lengkap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Grup Private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gratis buka kelas di kotamu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gratis Recording Setelah Live',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Langsung Praktek',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
