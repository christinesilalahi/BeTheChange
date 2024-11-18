<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PastEventController;

// Updated to return the homepage view
Route::get('/', [EventController::class, 'homepage'])->name('homepage');

// Event route
Route::get('/detail/event', [EventController::class, 'show'])->name('detail-event');

// Other routes
Route::get('/detail/report', [PastEventController::class, 'show'])->name('detail-report');

Route::get('/create/report', function () {
    return view('report');
})->name('report');

Route::get('/create/event', function () {
    return view('create-event');
})->name('create-event');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
