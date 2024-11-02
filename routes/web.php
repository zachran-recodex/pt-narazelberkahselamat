<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/sitemap', function () {
    $sitemap = Sitemap::create();

    // Menambahkan halaman statis
    $sitemap->add(Url::create(route('home')));

    // Menyimpan file sitemap.xml di folder public
    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated and saved to /public/sitemap.xml';
});
