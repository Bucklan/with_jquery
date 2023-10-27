<?php


use Illuminate\Support\Facades\Route;

Route::get('/',function (){
   return redirect()->route('products.index');
});
require_once('admin/base.php');
require_once('client/base.php');
