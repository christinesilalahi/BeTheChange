<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PastEventController;
use App\Http\Controllers\ActivityController;

// Updated to return the homepage view
Route::get('/', [HomeController::class, 'index'])->name('homepage');

// Event route
Route::get('/event', [EventController::class, 'show'])->name('event');

// Other routes
Route::get('/activity', [ActivityController::class, 'show']);
// Route::get('/history-activity', [PastEventController::class, 'show']);

Route::get('/move-past-events', [EventController::class, 'moveToPastEvents'])->name('move-past-events');
Route::get('/history/activity', [PastEventController::class, 'show'])->name('history-activity');

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
