<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TodaySpecialController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;

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

// Halaman Home
route::get('/', [IndexController::class, 'index']);

// Halaman Today Special
route::get('/today-special', [TodaySpecialController::class, 'todaySpecial']);

// Halaman Menu
route::get('/menu', [MenuController::class, 'menu']);

// Halaman Contact
route::get('/contact', [ContactController::class, 'contact']);