<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('tasks', TaskController::class);
    Route::resource('appointments', AppointmentController::class);
    
});

Route::get('/', function () {
    return view('landing.home');
})->name('home');

Route::get('/about', function () {
    return view('landing.about');
})->name('about');

Route::get('/services', function () {
    return view('landing.services');
})->name('services');

Route::get('/dentists', function () {
    return view('landing.dentists');
})->name('dentists');

Route::get('/contact', function () {
    return view('landing.contact');
})->name('contact');