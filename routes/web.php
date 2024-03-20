<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\interview;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sansyu-original');
});

Route::get("/interview{id}",[\App\Http\Controllers\interview::class,"show_interview"])->name("interview");
Route::get("/",[\App\Http\Controllers\interview::class,"back_home"])->name("back_home");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';