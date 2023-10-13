<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(StatisticSeeder::class);
        // $this->call(ContactSeeder::class);

        $this->call([
            UserSeeder::class,
            StatisticSeeder::class,
            ContactSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class
        ]);
    }
}
