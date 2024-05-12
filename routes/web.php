<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Influenceur\DashboardController;
use App\Http\Controllers\Marque\DashboardController as MarqueDashboardController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('profile', fn () => view('profile'))->name('profile');

Route::get('/partnership', fn () => view('partnership'))->name('partnership');
Route::get('/inbox', fn () => view('inbox'))->name('inbox');
Route::get('/earnings', fn () => view('earnings'))->name('earnings');
Route::get('/search', fn () => view('results'))->name('search.results');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
