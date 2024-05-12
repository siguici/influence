<?php

use App\Http\Controllers\AuthController;
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

Route::name('home.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
   
    Route::get('/register', [HomeController::class, 'register'])->name('register');
    Route::post('/register', [HomeController::class, 'store'])->name('register');
});

Route::name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::prefix('influenceur')
    ->middleware('auth')
    ->name('influenceur.')
    ->controller(DashboardController::class)
    ->group( function () {
   
    Route::get('/', 'index')->name('index');
    Route::get('/Partenariats', 'partenariat')->name('partenariat');
    Route::get('/Boite_de_reception', 'message')->name('message');
    Route::get('/Gains', 'gain')->name('gain');
    Route::get('/Profil', 'profil')->name('profil');
    
});


Route::prefix('marque')
    ->middleware('auth')
    ->name('marque.')
    ->controller(MarqueDashboardController::class)
    ->group( function () {
   
    Route::get('/', 'index')->name('index');
    Route::get('/Partenariats', 'partenariat')->name('partenariat');
    Route::get('/Boite_de_reception', 'message')->name('message');
    Route::get('/Profil', 'profil')->name('profil');

    Route::get('/Resultat_de_recherche', 'search')->name('search');
    
});






