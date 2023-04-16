<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [indexController::class, 'index'])->name('homepage');
Route::get('/cookies', [indexController::class, 'cookies']);


Route::post('/login', [\App\Http\Controllers\AuthenticationController::class, 'login']);
Route::get('/login/google-account', [\App\Http\Controllers\AuthenticationController::class, 'loginGoogle']);
Route::get('/login/google-account/callback', [\App\Http\Controllers\AuthenticationController::class, 'loginGoogleCallback']);
Route::get('/login/facebook-account', [\App\Http\Controllers\AuthenticationController::class, 'loginFacebook']);
Route::get('/login/facebook-account/callback', [\App\Http\Controllers\AuthenticationController::class, 'loginFacebookCallback']);
Route::get('/logout', [\App\Http\Controllers\AuthenticationController::class, 'logout']);
Route::post('/register', [\App\Http\Controllers\AuthenticationController::class, 'register']);
