<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnoncesController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/annonces',[ArticleController::class,"index"])->name('article');
//Route::get('/article',[ArticleController::class,"create"])->name('home');
Route::get('/profile',[UserController::class,"index"])->name('profile');

Auth::routes(['verify' => true]);
Route::get('/deposer_une_annonce',[AnnoncesController::class,"index"])->name('deposer_une_annonce');
Route::get('/home', [HomeController::class, 'index'])->name('home');
