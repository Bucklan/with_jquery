<?php


use Illuminate\Support\Facades\Route;

Route::get('/',function (){
   return view('products.index');
});
require_once('admin/base.php');
require_once('client/base.php');
