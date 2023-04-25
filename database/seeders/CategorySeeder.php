<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Create two main categories
        Category::create([
            'name' => 'Category 1',
            'parent_id' => null,
        ]);
        Category::create([
            'name' => 'Category 2',
            'parent_id' => null,
        ]);
    }
}