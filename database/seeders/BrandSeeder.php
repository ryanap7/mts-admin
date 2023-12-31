<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = ['Asus', 'Sansung', 'Apple'];
        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand,
                'description' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, incidunt tenetur repellat numquam id voluptas ea sit dolor dolorum error.</p>'
            ]);
        }
    }
}
