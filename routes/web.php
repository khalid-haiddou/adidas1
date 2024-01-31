<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

Route::resource('category', CategoryController::class);
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

Route::get('/', function () {
    return view('welcome');
});

// Display the form for creating a category
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');

// Handle the submission of the form to create a category
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');

Route::resource('category', CategoryController::class);

Route::resource('categories', CategoryController::class);

