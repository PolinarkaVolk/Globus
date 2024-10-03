<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\Product;

class CategoryController extends Controller
{
    // public function show($alias)
    // {
    //     $category = CategoryModel::where('alias', $alias)->first();
    //     $subcategories = CategoryModel::where('parent_id', $category->id)->get();
        
    //     // Загружаем товары для выбранной категории вместе с категориями
    //     $products = Product::with('category')->where('category_id', $category->id)->get();

    //     if ($products->isNotEmpty()) {
    //         return view('category', compact('subcategories', 'category', 'products'));
    //     } else {
    //         return redirect()->route('home');
    //     }
    // }
    use App\Category;

    public function catalog()
    {
        $categories = CategoryModel::whereNull('parent_id')->get();

        return view('catalog', ['categories' => $categories]);
    }
}
