<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ShoppingCartController;
use \App\Http\Controllers\AuthenticationController;
use \App\Http\Controllers\SellController;
use \App\Http\Controllers\APIController;
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
Route::get('/vue/search', [IndexController::class, 'search_vue']);
Route::get('/vue', [IndexController::class, 'index_vue']);

Route::get('/search', [IndexController::class, 'search']);
Route::get('/', [indexController::class, 'index'])->name('homepage');
Route::get('/cookies', [IndexController::class, 'cookies']);

Route::get('/shoppingCart', [ShoppingCartController::class, 'index']);
Route::get('/user/{user_id}/addItem/{article_id}', [ShoppingCartController::class, 'addItem']);
Route::get('/user/{user_id}/removeItem/{article_id}', [ShoppingCartController::class, 'removeItem']);

Route::any('/api/articles/{id?}', [APIController::class, 'getArticles'])->name('api');
Route::any('/api/shoppingCart', [APIController::class, 'getShoppingCart']);

Route::get('/sell', [SellController::class, 'index']);
Route::get('/sell/set_article', [SellController::class, 'listArticleToSell']);
Route::get('/sell/set_article/category', [SellController::class, 'listArticleInCategory']);
Route::post('/sell/set_article/list', [SellController::class, 'postArticle']);


Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/login/google-account', [AuthenticationController::class, 'loginGoogle']);
Route::get('/login/google-account/callback', [AuthenticationController::class, 'loginGoogleCallback']);
Route::get('/login/facebook-account', [AuthenticationController::class, 'loginFacebook']);
Route::get('/login/facebook-account/callback', [AuthenticationController::class, 'loginFacebookCallback']);
Route::get('/logout', [AuthenticationController::class, 'logout']);
Route::post('/register', [AuthenticationController::class, 'register']);
