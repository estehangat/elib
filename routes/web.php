<?php

use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
