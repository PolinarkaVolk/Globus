<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
use App\ServiceModel;
use App\CategoryModel;

class MainController extends Controller
{
    public function home() {
        $services = ServiceModel::all();
        return view('home', ['services' => $services]);
    }
    public function portfolio(){
        // Получение услуг для отображения в меню
        $services = ServiceModel::all();
        
        // Получение категорий для меню
        $categories = CategoryModel::all();
        
        return view('portfolio', compact('services', 'categories'));
    }
    public function home_check(Request $request){
        $valid = $request->validate([
            'email'=>'required|min:4|max:80',
            'message'=>'required|min:4|max:80',
            'name'=>'required|min:4|max:80',
            'telephone' => 'required|phone_belarus',

        ]);
        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->name = $request->input('name');
        $review->message = $request->input('message');
        $review->telephone = $request->input('telephone');

        $review->save();

        return redirect()->route('home');
        $request->session()->flash('success', 'Ваша заявка успешно отправлена');

    }
}
