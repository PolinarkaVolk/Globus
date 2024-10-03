<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceModel;

class ServiceController extends Controller
{
    public function show($alias)
{
    $service = ServiceModel::where('alias', $alias)->first();
    $services = ServiceModel::all(); // Получаем все услуги для отображения в меню
    return view('services.show', compact('service', 'services'));
}

}