<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\CategoryModel;
use App\ServiceModel;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('phone_belarus', function ($attribute, $value, $parameters, $validator) {
        return substr($value, 0, 4) === '+375' && strlen($value) >= 12;
        });


        $categories = CategoryModel::orderBy('id')->get();

        View::share([
            'categories' => $categories
        ]);

        $categories_serv = ServiceModel::orderBy('id')->get();

        View::share([
            'categories_serv' => $categories_serv
        ]);

    }
}
