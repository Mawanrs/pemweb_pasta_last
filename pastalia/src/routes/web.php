<?php

use App\Http\Controllers\LuxuryController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', [LuxuryController::class, 'index'])->name('luxury.index');

// Halaman lain
Route::get('/about', [LuxuryController::class, 'index1'])->name('luxury.partials.index');
Route::get('/contact', [LuxuryController::class, 'index2'])->name('luxury.partials.contact');
Route::get('/booknow', [LuxuryController::class, 'index3'])->name('luxury.partials.booknow');
Route::get('/loginuser', [LuxuryController::class, 'index4'])->name('luxury.partials.loginuser');
Route::get('/rooms', [LuxuryController::class, 'index5'])->name('luxury.partials.rooms');
Route::get('/form', [LuxuryController::class, 'index6'])->name('luxury.partials.form');

// Proses login
Route::post('/loginuser', [LuxuryController::class, 'login'])->name('luxury.partials.loginuser');

// Form dan proses pendaftaran
Route::get('/register', [LuxuryController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LuxuryController::class, 'register'])->name('register');
