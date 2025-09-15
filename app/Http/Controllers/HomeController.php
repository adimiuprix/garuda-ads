<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Garuda Ads - Solusi Bisnis Untuk Anda!!";
        $keywords = "Garuda Ads, GarudadAdds, iklan online, jasa iklan online, periklanan digital,iklan google,iklan facebook,iklan instagram,periklanan sosial media,iklan mobile,iklan video,Iklan Internet,Periklanan Online,Iklan Digital,Iklan Google Ads,Iklan Facebook Ads,Iklan Instagram Ads,Iklan Mobile Ads,Iklan Video Ads,Jasa Iklan Online Murah,Periklanan Digital Indonesia,Iklan Internet yang Efektif,Periklanan Online untuk Bisnis,Iklan Digital untuk Meningkatkan Penjualan,Iklan Online Indonesia,Periklanan Digital Jakarta,Iklan Internet Bandung,Periklanan Online Surabaya,Iklan Digital Bali";
        $description = "Temukan solusi terbaik dengan Garuda Ads. Dapatkan hasil maksimal dengan kelas online dan jasa kami.";
        $faqs = \App\Models\Faq::all();

        return view('home', [
            'title' => $title,
            'keywords' => $keywords,
            'description' => $description,
            'faqs' => $faqs
        ]);
    }
}
