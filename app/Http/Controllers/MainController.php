<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data to pass to the view
        $data = [
            'logo' => 'images/logo/logo.png',
            'companyName' => 'PT Narazel Berkah Selamat',
            'companyTagline' => 'Membangun Masa Depan Bersama',
            'hero' => [
                'award' => 'Lebih dari 50 Proyek Selesai di Tahun 2024',
                'heading' => 'Membangun Proyek Masa Depan Bersama',
                'subheading' => 'PT Narazel Berkah Selamat adalah perusahaan kontraktor yang berpengalaman dengan tim yang terampil dalam membangun berbagai jenis proyek konstruksi.',
                'cta' => 'Tentang Kami',
                'cta_link' => '#tentang-kami',
                'image' => 'images/gallery/19.jpeg'
            ],
            'about' => [
                'title' => 'Membangun Masa Depan Bersama',
                'description' => 'PT Narazel Berkah Selamat adalah perusahaan kontraktor yang berdedikasi dalam memberikan solusi konstruksi berkualitas tinggi. Didirikan pada tahun 2015, kami percaya bahwa setiap proyek adalah investasi masa depan, dan kami berkomitmen untuk memberikan yang terbaik dalam setiap langkah.',
                'image' => 'images/thumbnails/product_cover_one.png'
            ],
            'vision' => [
                'title' => 'Membangun Kualitas, Menyatukan Masyarakat',
                'points' => [
                    'Menciptakan lingkungan yang mendukung pertumbuhan dan kesejahteraan masyarakat melalui proyek konstruksi berkualitas.',
                    'Berinovasi dalam teknologi konstruksi untuk mencapai efisiensi dan keberlanjutan.',
                    'Membangun dengan integritas dan keunggulan untuk masa depan yang lebih baik.',
                ],
                'image' => 'images/thumbnails/product_cover_two.png'
            ],
            'mission' => [
                'title' => 'Mengutamakan Keunggulan dalam Setiap Proyek',
                'points' => [
                    'Menyediakan layanan konstruksi yang terpercaya dengan standar kualitas tertinggi.',
                    'Memahami kebutuhan klien untuk membangun hubungan jangka panjang yang saling menguntungkan.',
                    'Berkomitmen pada praktik konstruksi yang inovatif dan ramah lingkungan.',
                ],
                'image' => 'images/thumbnails/product_cover_three.png'
            ],
            'services' => [
                [
                    'id' => 'manajemen',
                    'title' => 'Manajemen Proyek',
                    'description' => 'Kami menawarkan layanan manajemen proyek yang memastikan setiap proyek berjalan tepat waktu dan sesuai anggaran.',
                    'icon' => 'images/icons/user-octagon.svg',
                    'thumbnail' => 'images/gallery/16.jpeg'
                ],
                [
                    'id' => 'desain',
                    'title' => 'Desain dan Konstruksi',
                    'description' => 'Layanan desain dan konstruksi kami mencakup semua aspek dari ide hingga penyelesaian proyek.',
                    'icon' => 'images/icons/building-4.svg',
                    'thumbnail' => 'images/gallery/14.jpeg'
                ],
                [
                    'id' => 'tol',
                    'title' => 'Jalan Tol',
                    'description' => 'Kami menyediakan layanan konstruksi jalan tol dengan kualitas tinggi dan efisiensi.',
                    'icon' => 'images/icons/tol.svg',
                    'thumbnail' => 'images/gallery/4.jpeg'
                ],
                [
                    'id' => 'penerangan',
                    'title' => 'Penerangan Jalan Umum',
                    'description' => 'Kami menyediakan layanan instalasi penerangan jalan umum yang efisien dan ramah lingkungan.',
                    'icon' => 'images/icons/lampu.svg',
                    'thumbnail' => 'images/gallery/34.jpeg'
                ],
                [
                    'id' => 'apill',
                    'title' => 'APILL (Alat Pemberi Isyarat Lalu Lintas)',
                    'description' => 'Kami menawarkan instalasi dan pemeliharaan APILL untuk meningkatkan keselamatan lalu lintas.',
                    'icon' => 'images/icons/apill.svg',
                    'thumbnail' => 'images/gallery/11.jpeg'
                ],
            ],
            'gallery' => [
                'images' => [
                    'images/gallery/1.jpeg',
                    'images/gallery/2.jpeg',
                    'images/gallery/22.jpeg',
                    'images/gallery/4.jpeg',
                    'images/gallery/5.jpeg',
                    'images/gallery/6.jpeg',
                    'images/gallery/7.jpeg',
                    'images/gallery/8.jpeg',
                    'images/gallery/14.jpeg',
                    'images/gallery/10.jpeg',
                    'images/gallery/11.jpeg',
                    'images/gallery/12.jpeg',
                    'images/gallery/35.jpeg',
                    'images/gallery/36.jpeg',
                    'images/gallery/15.jpeg',
                    'images/gallery/17.jpeg',
                ]
            ],
            'faq' => [
                [
                    'id' => 'accordion-faq-1',
                    'question' => 'Apakah PT Narazel Berkah Selamat dapat menangani proyek besar?',
                    'answer' => 'Ya, kami telah berpengalaman dalam menangani proyek besar seperti gedung perkantoran, pusat perbelanjaan, dan fasilitas umum lainnya.'
                ],
                [
                    'id' => 'accordion-faq-2',
                    'question' => 'Bagaimana cara memulai proyek dengan PT Narazel Berkah Selamat?',
                    'answer' => 'Anda dapat menghubungi kami melalui halaman kontak untuk mendiskusikan kebutuhan proyek Anda dan kami akan membantu Anda dari tahap perencanaan hingga selesai.'
                ],
                [
                    'id' => 'accordion-faq-3',
                    'question' => 'Layanan apa saja yang ditawarkan oleh PT Narazel Berkah Selamat?',
                    'answer' => 'Kami menawarkan berbagai layanan seperti manajemen proyek, desain dan konstruksi, konstruksi jalan tol, penerangan jalan umum, alat pemberi isyarat lalu lintas serta konsultasi arsitektur.'
                ],
                [
                    'id' => 'accordion-faq-4',
                    'question' => 'Apakah PT Narazel Berkah Selamat memiliki portofolio proyek?',
                    'answer' => 'Ya, kami memiliki portofolio proyek yang dapat Anda lihat di halaman Proyek Kami.'
                ],
            ],
            'contact' => [
                'phone' => '+62 813-8010-7728',
                'email' => 'info@pt-narazelberkahselamat.com',
                'address' => 'PERUM TANJUNGSARI PERMAI JL. ANGGREK RUKO NO. 2, SUKABUMI'
            ],
            'social_media' => [
                'youtube' => '#',
                'whatsapp' => '#',
                'facebook' => '#',
                'instagram' => '#',
            ]
        ];

        return view('index', compact('data'));
    }
}
