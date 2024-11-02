<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- SEO Meta Tags -->
    <title>{{ $data['companyName'] }} - {{ $data['companyTagline'] }}</title>
    <meta name="description"
        content="PT Narazel Berkah Selamat - {{ $data['companyTagline'] }}. Kami adalah perusahaan kontraktor yang berpengalaman dalam membangun berbagai jenis proyek konstruksi.">
    <meta name="keywords"
        content="konstruksi, manajemen proyek, desain konstruksi, perusahaan kontraktor, proyek pembangunan, PT Narazel Berkah Selamat">
    <meta name="author" content="PT Narazel Berkah Selamat">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Stylesheets -->
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- Header -->
    <header class="bg-[#F6F7FA] relative overflow-hidden py-10">
        <div class="container-main relative z-10">
            <nav
                class="flex justify-between items-center bg-white p-4 lg:p-6 rounded-[20px] shadow-xl transition-all duration-300">
                <div class="flex items-center gap-3">
                    <img src="{{ asset($data['logo']) }}" class="h-10 lg:h-12" alt="logo">
                    <div>
                        <p class="text-lg lg:text-xl font-bold">{{ $data['companyName'] }}</p>
                        <p class="text-xs lg:text-sm text-gray-500">{{ $data['companyTagline'] }}</p>
                    </div>
                </div>
                <ul class="hidden lg:flex gap-6">
                    <li><a href="#tentang-kami" class="font-semibold text-gray-800 hover:text-nbs-500">Tentang Kami</a>
                    </li>
                    <li><a href="#layanan" class="font-semibold text-gray-800 hover:text-nbs-500">Layanan</a></li>
                    <li><a href="#galeri" class="font-semibold text-gray-800 hover:text-nbs-500">Galeri</a></li>
                </ul>
                <a href="#kontak"
                    class="hidden lg:block bg-nbs-500 hover:shadow-[0_12px_30px_0_#2e74e2] text-white px-4 py-2 rounded-md font-semibold">Kontak</a>
            </nav>
            <div class="flex flex-col gap-[20px] lg:gap-[30px] mt-10 lg:mt-20 pb-20 text-center lg:text-left">
                <div
                    class="flex justify-center lg:justify-start items-center bg-white p-2 lg:p-[8px_16px] gap-[10px] rounded-full w-fit mx-auto lg:mx-0">
                    <div class="w-4 h-4 lg:w-5 lg:h-5 flex shrink-0 overflow-hidden">
                        <img src="{{ asset('images/icons/crown.svg') }}" class="object-contain" alt="icon">
                    </div>
                    <p class="font-semibold text-xs lg:text-sm">{{ $data['hero']['award'] }}</p>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h1
                        class="font-extrabold text-[30px] lg:text-[50px] leading-[40px] lg:leading-[65px] max-w-full lg:max-w-[536px] mx-auto lg:mx-0">
                        {{ $data['hero']['heading'] }}
                    </h1>
                    <p
                        class="text-gray-500 leading-[26px] lg:leading-[30px] max-w-full lg:max-w-[437px] mx-auto lg:mx-0 text-justify">
                        {{ $data['hero']['subheading'] }}
                    </p>
                </div>
                <div class="flex justify-center lg:justify-start items-center gap-4">
                    <a href="{{ $data['hero']['cta_link'] }}"
                        class="bg-nbs-500 p-4 lg:p-5 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#2e74e2] transition-all duration-300 font-bold text-white">{{ $data['hero']['cta'] }}</a>
                    <!-- Add Kontak Button in Hero Section for Mobile -->
                    <a href="#kontak"
                        class="lg:hidden bg-nbs-500 p-4 lg:p-5 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#2e74e2] transition-all duration-300 font-bold text-white">Kontak</a>
                </div>
            </div>
        </div>
        <div class="absolute w-[50%] h-full top-0 right-0 overflow-hidden z-0 hidden lg:block">
            <img src="{{ asset($data['hero']['image']) }}" class="object-cover w-full h-full" alt="banner">
        </div>
    </header>

    <hr id="tentang-kami">

    <!-- About Section -->
    <section class="container-main flex flex-col gap-10 my-20">
        <div class="product flex flex-wrap justify-center items-center gap-[60px]">
            <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                <img src="{{ asset($data['about']['image']) }}" class="w-full h-full object-contain" alt="thumbnail">
            </div>
            <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                <p class="badge w-fit bg-nbs-100 text-nbs-500 p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    TENTANG KAMI</p>
                <div class="flex flex-col gap-[10px]">
                    <h2 class="font-bold text-4xl leading-[45px]">{{ $data['about']['title'] }}</h2>
                    <p class="leading-[26px] font-semibold text-gray-500 text-justify">
                        {{ $data['about']['description'] }}</p>
                </div>
            </div>
        </div>

        <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
            <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                <img src="{{ asset($data['vision']['image']) }}" class="w-full h-full object-contain" alt="thumbnail">
            </div>
            <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                <p class="badge w-fit bg-nbs-100 text-nbs-500 p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    VISI</p>
                <div class="flex flex-col gap-5">
                    <h2 class="font-bold text-4xl leading-[45px]">{{ $data['vision']['title'] }}</h2>
                    @foreach ($data['vision']['points'] as $point)
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="{{ asset('images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold text-gray-500">{{ $point }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
            <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                <img src="{{ asset($data['mission']['image']) }}" class="w-full h-full object-contain"
                    alt="thumbnail">
            </div>
            <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                <p class="badge w-fit bg-nbs-100 text-nbs-500 p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    MISI</p>
                <div class="flex flex-col gap-5">
                    <h2 class="font-bold text-4xl leading-[45px]">{{ $data['mission']['title'] }}</h2>
                    @foreach ($data['mission']['points'] as $point)
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="{{ asset('images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold text-gray-500">{{ $point }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <hr id="layanan">

    <!-- Services Section -->
    <section class="container-main flex flex-col gap-10 my-20">
        <div class="flex flex-col gap-[14px] items-center">
            <p class="badge w-fit bg-nbs-100 text-nbs-500 p-[8px_16px] rounded-full uppercase font-bold text-sm">
                LAYANAN</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Layanan Terbaik Kami</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($data['services'] as $service)
                <div id="{{ $service['id'] }}"
                    class="card flex flex-col bg-white border border-gray-200 rounded-2xl overflow-hidden hover:border-nbs-500 transition-all duration-300">
                    <div class="thumbnail h-[200px] w-full overflow-hidden">
                        <img src="{{ asset($service['thumbnail']) }}" class="object-cover w-full h-full"
                            alt="{{ $service['title'] }}">
                    </div>
                    <div class="flex flex-col p-5 gap-4">
                        <div class="icon w-14 h-14 mx-auto">
                            <img src="{{ asset($service['icon']) }}" class="w-full h-full object-contain"
                                alt="icon">
                        </div>
                        <div class="text-center">
                            <p class="title font-bold text-xl leading-tight">{{ $service['title'] }}</p>
                            <p class="text-gray-500 mt-2">{{ $service['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <hr id="galeri">

    <!-- Gallery Section -->
    <section class="container-main flex flex-col gap-10 my-20">
        <div class="flex flex-col gap-[14px] items-center">
            <p class="badge w-fit bg-nbs-100 text-nbs-500 p-[8px_16px] rounded-full uppercase font-bold text-sm">
                GALERI</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Galeri Proyek Kami</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($data['gallery']['images'] as $image)
                <div class="gallery-card">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-2xl bg-gray-200">
                        <img src="{{ asset($image) }}" class="object-cover w-full h-full" alt="Gallery Image">
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <hr id="faq">

    <!-- FAQ Section -->
    <section class="container-main flex flex-col gap-10 my-20">
        <div class="flex flex-col lg:flex-row gap-[50px] sm:gap-[70px] items-center">
            <div class="flex flex-col gap-[30px] text-center lg:text-left">
                <div class="flex flex-col gap-[10px]">
                    <h2 class="font-bold text-4xl leading-[45px]">Pertanyaan yang Sering Diajukan</h2>
                </div>
                <a href="#kontak" class="p-5 bg-nbs-500 rounded-xl text-white w-fit font-bold">Hubungi Kami</a>
            </div>
            <div class="flex flex-col gap-[30px] sm:w-[603px] shrink-0">
                @foreach ($data['faq'] as $faq)
                    <div class="flex flex-col p-5 rounded-2xl bg-gray-200 w-full">
                        <div class="flex flex-col gap-1">
                            <span class="font-bold text-lg leading-[27px] text-justify">{{ $faq['question'] }}</span>
                            <p class="leading-[30px] text-gray-500 pt-[14px] text-justify">{{ $faq['answer'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <hr id="kontak">

    <!-- Contact Section -->
    <section class="container-main flex flex-col gap-10 my-20">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-20 items-center">
            <div class="flex flex-col gap-6 lg:w-1/2">
                <h2 class="font-bold text-4xl leading-tight">Hubungi Kami</h2>
                <p class="text-gray-500 leading-relaxed text-justify">Jika Anda memiliki pertanyaan atau ingin
                    memulai
                    proyek baru, kami siap membantu Anda. Jangan ragu untuk menghubungi kami melalui formulir di
                    bawah ini atau melalui detail kontak kami.</p>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{ asset('images/icons/call-black.svg') }}"
                                class="w-full h-full object-contain" alt="phone">
                        </div>
                        <p class="font-bold text-black">
                            <a href="tel:{{ $data['contact']['phone'] }}">
                                {{ $data['contact']['phone'] }}
                            </a>
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{ asset('images/icons/sms.svg') }}" class="w-full h-full object-contain"
                                alt="email">
                        </div>
                        <p class="font-bold text-black">
                            <a href="mailto:{{ $data['contact']['email'] }}">
                                {{ $data['contact']['email'] }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <form action="" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <input type="text" name="name" placeholder="Nama Anda"
                        class="p-4 bg-white rounded-xl border border-[#E8EAF2] focus:outline-none focus:ring-2 focus:ring-nbs-500"
                        required>
                    <input type="email" name="email" placeholder="Email Anda"
                        class="p-4 bg-white rounded-xl border border-[#E8EAF2] focus:outline-none focus:ring-2 focus:ring-nbs-500"
                        required>
                    <textarea name="message" placeholder="Pesan Anda"
                        class="p-4 bg-white rounded-xl border border-[#E8EAF2] focus:outline-none focus:ring-2 focus:ring-nbs-500"
                        rows="5" required></textarea>
                    <button type="submit"
                        class="bg-nbs-500 py-4 rounded-xl hover:shadow-[0_12px_30px_0_#2e74e2] transition-all duration-300 font-bold text-white">Kirim
                        Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-nbs2 w-full py-10">
        <div class="container-main flex flex-col md:flex-row justify-between items-start gap-10">
            <!-- Company Info -->
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <div class="h-[80px] w-[80px] lg:h-[100px] lg:w-[100px]">
                        <img src="{{ asset('images/logo/logo.png') }}" class="h-full w-auto object-contain"
                            alt="logo">
                    </div>
                    <div>
                        <p id="CompanyName" class="font-extrabold text-lg lg:text-xl text-white">
                            {{ $data['companyName'] }}</p>
                        <p id="CompanyTagline" class="text-sm text-white">{{ $data['companyTagline'] }}</p>
                    </div>
                </div>
                <div class="mt-4 text-white text-sm">
                    <p>{{ $data['contact']['address'] }}</p>
                    <p>
                        <a href="tel:{{ $data['contact']['phone'] }}">
                            Telp: {{ $data['contact']['phone'] }}
                        </a>
                    </p>
                    <p>
                        <a href="mailto:{{ $data['contact']['email'] }}">
                            Email: {{ $data['contact']['email'] }}
                        </a>
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <p class="font-bold text-lg text-white">Layanan</p>
                @foreach ($data['services'] as $service)
                    <a href="#{{ $service['id'] }}"
                        class="text-white hover:text-gray-500 transition-all duration-300">
                        {{ $service['title'] }}
                    </a>
                @endforeach
            </div>

            <div class="flex flex-col gap-3">
                <p class="font-bold text-lg text-white">Tentang Kami</p>
                <a href="#tentang-kami" class="text-white hover:text-gray-500 transition-all duration-300">
                    Profil Perusahaan
                </a>
                <a href="#visi" class="text-white hover:text-gray-500 transition-all duration-300">Visi</a>
                <a href="#misi" class="text-white hover:text-gray-500 transition-all duration-300">Misi</a>
                <a href="#galeri" class="text-white hover:text-gray-500 transition-all duration-300">Galeri</a>
            </div>
        </div>

        <div
            class="container-main mt-10 border-t border-white pt-5 flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Social Media Icons -->
            <div class="flex items-center gap-4">
                <a href="{{ $data['social_media']['youtube'] }}">
                    <img src="{{ asset('images/icons/youtube.svg') }}" class="w-5 h-5 lg:w-6 lg:h-6 object-contain"
                        alt="YouTube">
                </a>
                <a href="{{ $data['social_media']['whatsapp'] }}">
                    <img src="{{ asset('images/icons/whatsapp.svg') }}" class="w-5 h-5 lg:w-6 lg:h-6 object-contain"
                        alt="WhatsApp">
                </a>
                <a href="{{ $data['social_media']['facebook'] }}">
                    <img src="{{ asset('images/icons/facebook.svg') }}" class="w-5 h-5 lg:w-6 lg:h-6 object-contain"
                        alt="Facebook">
                </a>
                <a href="{{ $data['social_media']['instagram'] }}">
                    <img src="{{ asset('images/icons/instagram.svg') }}" class="w-5 h-5 lg:w-6 lg:h-6 object-contain"
                        alt="Instagram">
                </a>
            </div>
            <p class="text-white text-xs lg:text-sm text-center">&copy; 2024 PT Narazel Berkah Selamat</p>
        </div>
    </footer>

</body>

</html>
