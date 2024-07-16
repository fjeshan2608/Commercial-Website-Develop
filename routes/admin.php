<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StockController;
use Illuminate\Support\Facades\Route;

// Category
Route::get('/Add-Category', [CategoryController::class, 'index'])->name('add.category');
Route::post('/Save-Category', [CategoryController::class, 'add'])->name('category.save');
Route::get('/All-Category', [CategoryController::class, 'table'])->name('all.category');
Route::get('/View-Catagory/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/Update-Category', [CategoryController::class, 'update'])->name('category.update');
Route::get('/Delete-Catagory/{id}', [CategoryController::class, 'del'])->name('category.del');


// Sub-Category
Route::get('/Add-Sub-Category', [SubCategoryController::class, 'index'])->name('add.subcategory');
Route::post('/Save-SubCategory', [SubCategoryController::class, 'add'])->name('subcategory.save');
Route::get('/All-SubCategory', [SubCategoryController::class, 'table'])->name('all.subcategory');
Route::get('/View-Sub-Catagory/{id}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
Route::post('/Update-Sub-Category', [SubCategoryController::class, 'update'])->name('subcategory.update');
Route::get('/Delete-Sub-Catagory/{id}', [SubCategoryController::class, 'del'])->name('subcategory.del');


// Brand
Route::get('/Add-Brand', [BrandController::class, 'index'])->name('add.brand');
Route::post('/Save-Brand', [BrandController::class, 'add'])->name('brand.save');
Route::get('/All-brand', [BrandController::class, 'table'])->name('all.brand');
Route::get('/View-brand/{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::post('/Update-brand', [BrandController::class, 'update'])->name('brand.update');
Route::get('/Delete-brand/{id}', [BrandController::class, 'del'])->name('brand.del');


// Product
Route::get('/Add-Product', [ProductController::class, 'index'])->name('add.product');
Route::post('/Save-Product', [ProductController::class, 'save'])->name('product.save');
Route::get('/All-Product', [ProductController::class, 'table'])->name('all.product');
Route::get('/View-Product/{id}', [ProductController::class, 'view'])->name('product.view');
Route::get('/Edit-Product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/Update-Product', [ProductController::class, 'update'])->name('product.update');
Route::get('/Delete-Product/{id}', [ProductController::class, 'del'])->name('product.del');

//Stock
Route::post('/stock-product', [StockController::class, 'save'])->name('stock.save');