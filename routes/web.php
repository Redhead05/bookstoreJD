<?php

use App\Http\Controllers\AddRatingController;
use App\Http\Controllers\FamousAuthor;
use App\Http\Controllers\FamousAuthorController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/', [HomeController::class, 'index']);

Route::resource('/', HomeController::class)->only('index');
Route::get('/famous-author', [FamousAuthorController::class, 'index'])->name('famousAuthor');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::resource('/add-rating', AddRatingController::class);
