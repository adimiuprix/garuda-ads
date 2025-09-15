<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'question'   => 'Apa itu GarudaAds.com?',
                'answer'     => 'Garuda Ads adalah program pembelajaran online yang dirancang untuk membantu Anda meningkatkan keterampilan dan pengetahuan tentang iklan online, pemasaran digital Maupun Push Dollar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question'   => 'Apa saja materi yang diajarkan di kelas online Garuda Ads?',
                'answer'     => 'Materi yang diajarkan di kelas online Garuda Ads meliputi: membuat iklan online yang efektif, memilih target audiens, mengatur budget iklan, dan lain-lain.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question'   => 'Berapa lama durasi kelas online Garuda Ads?',
                'answer'     => 'Durasi kelas online Garuda Ads bervariasi, mulai gratis hingga beberapa hari. Namun untuk Durasi Kelas ini tergantung paket yang kamu pilih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question'   => 'Apa saja yang saya dapatkan setelah mengikuti kelas online Garuda Ads?',
                'answer'     => 'Setelah mengikuti kelas online Garuda Ads, Anda akan mendapatkan: pengetahuan dan keterampilan tentang GarudaAds dan pemasaran digital, dan akses ke komunitas alumni Serta Bisa membuka Cabang Kelas Online Di KOTAMU.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question'   => 'Apa saja yang saya dapatkan setelah menggunakan jasa di Garuda Ads?',
                'answer'     => 'Setelah menggunakan jasa Garuda Ads, Anda akan mendapatkan: peningkatan visibilitas dan kesuksesan bisnis Anda, laporan kampanye yang detail, dan dukungan dari tim ahli kami.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
