<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Handphone', 'Laptop', 'Aksesoris'];
        $i = 1;
        foreach ($categories as $category) {
            Category::create([
                'brand_id' => $i++,
                'name' => $category,
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, incidunt tenetur repellat numquam id voluptas ea sit dolor dolorum error.'
            ]);
        }
    }
}
