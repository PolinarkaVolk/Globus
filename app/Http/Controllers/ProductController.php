<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\CategoryModel;
use App\ServiceModel;

class ProductController extends Controller
{

    public function show($cat, $product_id){
        $item = Product::find($product_id);
        $services = ServiceModel::all();       
        // Получение категорий для меню
        $categories = CategoryModel::all();
        // if(!$item) {
        //     abort(404); // Или какая-то другая обработка, если продукт не найден
        // }
        return view('product.show', [
            'item' => $item,
            'services' => $services // Передача переменной $services в вид
        ]);
    }
    public function search(Request $request)
    {
        $searchquery = $request->get('zapros');
    
        $products = Product::whereHas('category', function ($query) use ($searchquery) {
            $query->where('title', 'like', '%'.$searchquery.'%');
        })
        ->orWhere('title', 'like', '%'.$searchquery.'%')
        ->orWhere('description', 'like', '%'.$searchquery.'%')
        ->get();

        $services = ServiceModel::where('title', 'like', '%'.$searchquery.'%')
        ->orWhere('desc', 'like', '%'.$searchquery.'%')
        ->get();

return view('product.search', compact('products', 'services', 'searchquery'));
    
        return view('product.search', compact('products', 'searchquery'));
    }

    // public function search1(Request $request)
    // {
    //     $searchquery = $request->get('zapros');
    
    //     $products = Product::whereHas('category', function ($query) use ($searchquery) {
    //         $query->where('name', 'like', '%'.$searchquery.'%');
    //     })
    //     ->orWhere('title', 'like', '%'.$searchquery.'%')
    //     ->orWhere('description', 'like', '%'.$searchquery.'%')
    //     ->get();
    
    //     return view('product.search', compact('products', 'searchquery'));
    // }

   

    // $search = $request->get('search');
    // $posts = Post::when($search, function($sql) use ($search) {
    //         $sql->where('title', 'like', '%' . $search . '%');

    public function showCategoryModel($cat_alias){
        $cat = CategoryModel::where('alias', $cat_alias)->first();
        $services = ServiceModel::all();
        return view('categories.index', [
            'cat' => $cat,
            'services' => $services
        ]);
    }

}