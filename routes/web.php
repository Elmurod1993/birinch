<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CotegoryController;

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

Route::get('/product',[ProductController::class,'index']);
Route::get('/create-product',[ProductController::class,'create'])->name('create.product');
Route::post('/store-product',[ProductController::class,'store'])->name('store.product');
Route::put('/edit-product',[ProductController::class,'edit'])->name('edit.product');
Route::put('/update-product',[ProductController::class,'update'])->name('update.product');
Route::delete('/delete-product',[ProductController::class,'destroy'])->name('delete.product');

/// categpry
///
Route::get('/category',[CotegoryController::class,'index']);
Route::get('create-category',[CotegoryController::class,'create'])->name('create.category');
Route::post('/store-category',[CotegoryController::class,'store'])->name('store.category');
Route::put('/edit-category',[CotegoryController::class,'edit'])->name('edit.category');
Route::put('/update-category',[CotegoryController::class,'update'])->name('update.category');
Route::delete('/delete-category',[CotegoryController::class,'delete'])->name('delete.category');


