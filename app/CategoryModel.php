<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CategoryModel extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}