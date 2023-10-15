<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;

// Public
Route::view('/detail-product', 'clients.detail-product');

Route::redirect('auth', 'admin')->name('login');
Route::redirect('homepage', '/');
Route::get('admin/catalogs/{catalog}/download', [DownloadController::class, 'downloadCatalog'])->name('download.catalog');

// Public
Route::get('/', HomepageController::class)->name('homepage');
Route::get('/brands', BrandController::class)->name('brands');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{brand}', [CategoryController::class, 'brandCategory'])->name('categories.brand');

// Product
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/categories/products/{category}', [ProductController::class, 'productCategory'])->name('products.category');
