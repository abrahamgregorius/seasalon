<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'login_get']);
Route::post('/login', [AuthController::class, 'login_post']);
Route::get('/register', [AuthController::class, 'register_get']);
Route::post('/register', [AuthController::class, 'register_post']);
Route::post('/logout', [AuthController::class, 'logout_post']);


Route::get('/services', [ServiceController::class, 'index']);
Route::get('/reviews', [ReviewController::class, 'index']);

Route::middleware('user')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

