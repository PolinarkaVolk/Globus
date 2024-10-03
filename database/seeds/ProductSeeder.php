<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'size' => 'M',
            'quantity' => 10,
            'price' => 20.99,
            'package' => 'Standard Package',
            'description' => 'Description of Product 1',
            'photo' => 'path/to/photo1.jpg',
        ]);

        Product::create([
            'name' => 'Product 2',
            'size' => 'L',
            'quantity' => 5,
            'price' => 30.49,
            'package' => 'Premium Package',
            'description' => 'Description of Product 2',
            'photo' => 'path/to/photo2.jpg',
        ]);

        // Добавьте другие продукты по аналогии
    }
}