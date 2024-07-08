<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//CRUD routes for the products section
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/delete', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');

//storing data from the form into the db
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
