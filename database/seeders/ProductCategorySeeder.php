<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'name' => 'Electronics',
            'description' => 'Electronic devices and accessories',
        ]);

        ProductCategory::create([
            'name' => 'Furniture',
            'description' => 'Home and office furniture',
        ]);

        ProductCategory::create([
            'name' => 'Clothing',
            'description' => 'Men and women clothing',
        ]);
    }
}
