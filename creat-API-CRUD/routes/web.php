<?php

use App\Models\book;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Route::get('/', function () {
//     return view('books_page');
// });

// Route::get("/books", [BoookController::class, "index"]);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 

Route::view('/', 'books_page');



Route::get('/image/{filename}', [BookController::class,'getPubliclyStorgeFile'])->name('image.displayImage');