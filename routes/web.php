<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BooksController::class, 'index']);

Route::get('/bookdetail/{book:book_id}', [BooksController::class, 'show_detail']);

Route::get('/category/{category:category_id}', [BooksController::class, 'category_page']);

Route::get('/publisher/{publisher:publisher_id}', [BooksController::class, 'publisher_page']);

Route::get('/contactpage', [BooksController::class, 'contact_page']);
