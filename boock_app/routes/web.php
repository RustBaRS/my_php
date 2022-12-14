<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/book', [BookController::class, 'index']);
// Route::get('/author', [AuthorController::class, 'index']);

Route::get('/', function() {
    return view('welcome');
});
// Route::redirect('/', 'books');
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
