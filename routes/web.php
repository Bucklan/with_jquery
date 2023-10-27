<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');