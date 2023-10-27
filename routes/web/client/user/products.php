<?php

use App\Http\Controllers\task\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('products')->as('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
});