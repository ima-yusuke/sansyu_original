<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\interview;
use App\Http\Controllers\recruitment;
use Illuminate\Support\Facades\Route;

Route::get("/",[\App\Http\Controllers\interview::class,"show_home"])->name("show_home");
Route::get("/interview{id}",[\App\Http\Controllers\interview::class,"show_interview"])->name("interview");

Route::get("/job_opening",[\App\Http\Controllers\recruitment::class,"show_job_opening"])->name("show_job_opening");
Route::get("/job_detail",[\App\Http\Controllers\recruitment::class,"show_job_detail"])->name("show_job_detail");
Route::get("/job_flow",[\App\Http\Controllers\recruitment::class,"show_job_flow"])->name("show_job_flow");
Route::get("/job_benefit",[\App\Http\Controllers\recruitment::class,"show_job_benefit"])->name("show_job_benefit");
Route::get("/job_internship",[\App\Http\Controllers\recruitment::class,"show_job_internship"])->name("show_job_internship");
Route::get("/job_question",[\App\Http\Controllers\recruitment::class,"show_job_question"])->name("show_job_question");




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
