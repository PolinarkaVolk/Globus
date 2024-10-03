<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CatalogController;
use App\CategoryModel;
use App\Product;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::whereNull('parent_id')->get();

        return view('catalog', ['categories' => $categories]);
    }
}