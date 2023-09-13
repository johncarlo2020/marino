<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/about-us', [GuestController::class, 'aboutUs'])->name('about-us');
Route::get('/products', [GuestController::class, 'products'])->name('products');
Route::get('/clients', [GuestController::class, 'clients'])->name('clients');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');

