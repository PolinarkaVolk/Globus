<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;

class Product extends Model
{   
    protected $fillable = ['description','name'];
    public function category()
    {
        
        return $this->belongsTo(CategoryModel::class, 'category_id', 'id');
    }

    protected $table = 'products';
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id', 'id');
    }
}
