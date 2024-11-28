<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[BookController::class,'index'])->name('home');
Route::get('/book/add', [BookController::class,"create"])->name('book.create');
Route::post('/book/store', [BookController::class,"store"])->name('book.store');
Route::get('/detail/{book}',[BookController::class,'detail'])->name('book.detail');
Route::get('/edit/{book}', [BookController::class,"edit"])->name('book.edit');
Route::put('/book/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('/delete/{book}', [BookController::class,"destroy"])->name('book.delete');

Route::get('/author',[AuthorController::class,'index'])->name('author.home');
Route::get('/author/add', [AuthorController::class,"create"])->name('author.create');
Route::post('/author/store', [AuthorController::class,"store"])->name('author.store');
Route::get('/author/detail/{author}',[AuthorController::class,'detail'])->name('author.detail');
Route::get('/author/edit/{author}', [AuthorController::class,"edit"])->name('author.edit');
Route::put('/author/{author}', [AuthorController::class, 'update'])->name('author.update');
Route::delete('/author/delete/{author}', [AuthorController::class,"destroy"])->name('author.delete');

Route::get('/category',[CategoryController::class,'index'])->name('category.home');
Route::get('/category/add', [CategoryController::class,"create"])->name('category.create');
Route::post('/category/store', [CategoryController::class,"store"])->name('category.store');
Route::get('/category/detail/{category}',[CategoryController::class,'detail'])->name('category.detail');
Route::get('/category/edit/{category}', [CategoryController::class,"edit"])->name('category.edit');
Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{category}', [CategoryController::class,"destroy"])->name('category.delete');

