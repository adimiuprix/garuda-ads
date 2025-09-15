<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Tiktok',
                'slug' => 'tiktok',
                'description' => 'Bikin konten viral, raih followers & penjualan!',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shopee',
                'slug' => 'shopee',
                'description' => 'Produk laris manis, omzet meroket!',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adsense',
                'slug' => 'adsense',
                'description' => 'Website jadi sumber passive income!',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adsterra',
                'slug' => 'adsterra',
                'description' => 'Jangkau pasar global, profit melimpah!',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facebook',
                'slug' => 'facebook',
                'description' => 'Bangun brand kuat, jangkau jutaan pelanggan!',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Monetag',
                'slug' => 'monetag',
                'description' => 'Maksimalkan monetisasi, hasilkan lebih banyak!',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Galaxion',
                'slug' => 'galaxion',
                'description' => 'Maksimalkan monetisasi, hasilkan lebih banyak!',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Proxy residential',
                'slug' => 'proxy-residential',
                'description' => 'SCRAPING & RISET jadi SUPER CEPAT & EFISIEN! Gak perlu begadang, hasil MAKSIMAL! Dapatkan data yang kamu butuhkan dalam sekejap! Tingkatkan produktivitasmu 10x lipat!.',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Script AGC',
                'slug' => 'script-agc',
                'description' => 'OTOMATISASI CERDAS, KERJAAN BERES, WAKTU SANTAI, DOMPET MENGGENDUT!',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
