<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/generate-sitemap', function () {
    SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated and saved to /public/sitemap.xml';
});
