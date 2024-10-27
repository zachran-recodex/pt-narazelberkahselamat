<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/send-contact', [MainController::class, 'sendContactForm'])->name('contact.send');
