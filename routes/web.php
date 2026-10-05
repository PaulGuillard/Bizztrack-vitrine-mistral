<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Static Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/tarifs', [PageController::class, 'tarifs'])->name('tarifs');

// Quote Routes
Route::get('/devis', [QuoteController::class, 'create'])->name('quote.create');
Route::post('/devis', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/devis/confirmation', [QuoteController::class, 'confirmation'])->name('quote.confirmation');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Fallback for old welcome page
Route::get('/welcome', function () {
    return redirect()->route('home');
});
