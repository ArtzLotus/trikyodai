<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MangaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {return view('user.dashboard');})->name('dashboard');
    Route::resource('mangas', MangaController::class);
});

require __DIR__.'/auth.php';
