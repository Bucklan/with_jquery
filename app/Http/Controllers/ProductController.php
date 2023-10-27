<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductsDataTable $dataTable)
    {
        return $dataTable->render('products.index');
    }
}
