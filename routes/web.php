<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Transaction_Detail;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('layouts.app');
})->name('home.pwl');


//ROUTE PRODUCT
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product-new', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product-detail/{id}', [ProductController::class, 'show']);
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


//ROUTE SUPPLIER
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/supplier-new', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('/supplier/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::get('/supplier-detail/{id}', [SupplierController::class, 'show'])->name('supplier.show');
Route::put('/supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
Route::delete('/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
