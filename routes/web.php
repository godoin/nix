<?php

use App\Http\Controllers\Coordinator\BookingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/portfolio', function() {
    return view('portfolio');
});

Route::get('/services', function() {
    return view('services');
});

// Booking
Route::get('/booking', [BookingController::class, 'clientBooking']);

// Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/review', function() {
    return view('review');
});

require __DIR__.'/auth.php';
require __DIR__.'/coordinator.php';
