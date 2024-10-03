<?php

use Illuminate\Support\Facades\Route;
use App\ProductController;
use App\ServiceModel;



Route::get('/product/search', 'ProductController@search')->name('product.search');
Route::get('/', 'MainController@home');
Route::get('/', function () {
    $services = ServiceModel::all();
    return view('/home', compact('services'));
})->name('home');
Route::get('/services/{alias}', 'ServiceController@show')->name('showServiceModel');

Route::get('/portfolio', 'MainController@portfolio');
Route::post('/home/check','MainController@home_check');
Route::get('/home','MainController@home')->name('home');
Route::get('/{cat}', 'ProductController@showCategoryModel')->name('showCategoryModel');
Route::get('/{cat}/{product_id}','ProductController@show')->name('showProduct');



Route::get('/calculator', 'CalculatorController@index');
Route::post('/calculate', 'CalculatorController@calculate');



