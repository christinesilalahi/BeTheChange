<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PastEventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EventController::class, 'homeController'])->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/past-events', [PastEventController::class, 'allPastEvents'])->name('past-events');
Route::get('/past-events/{id}', [PastEventController::class, 'getPastEvent'])->name('past-event.details');

Route::get('/events', [EventController::class, 'allEvents'])->name('events');
Route::get('events/{id}', [EventController::class, 'getEvent'])->name('event.details');

Route::get('/report-event', function () {
    return view('past-events.report');
})->name('make-report');
Route::get('/create-event', function () {
    return view('events.create');
})->name('make-event');

Route::get('/profile/{id}', [UserController::class, 'getUser'])->name('profile');