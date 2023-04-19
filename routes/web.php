<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ShoppingCartController;
use \App\Http\Controllers\AuthenticationController;
use \App\Http\Controllers\SellController;
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
Route::get('/cookies', [IndexController::class, 'cookies']);
Route::get('/shoppingCart', [ShoppingCartController::class, 'index']);
Route::get('/sell', [SellController::class, 'index']);
Route::get('/sell/set_article', [SellController::class, 'listArticleToSell']);




Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/login/google-account', [AuthenticationController::class, 'loginGoogle']);
Route::get('/login/google-account/callback', [AuthenticationController::class, 'loginGoogleCallback']);
Route::get('/login/facebook-account', [AuthenticationController::class, 'loginFacebook']);
Route::get('/login/facebook-account/callback', [AuthenticationController::class, 'loginFacebookCallback']);
Route::get('/logout', [AuthenticationController::class, 'logout']);
Route::post('/register', [AuthenticationController::class, 'register']);
