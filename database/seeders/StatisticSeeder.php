<?php

namespace Database\Seeders;

use App\Models\Statistic;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    public function run()
    {
        Statistic::create([
            'label' => 'PROJECTS COMPLETED',
            'value' => 40,
        ]);

        Statistic::create([
            'label' => 'CUSTOMERS',
            'value' => 2320,
        ]);

        Statistic::create([
            'label' => 'PRODUCTS ME',
            'value' => 134,
        ]);

        Statistic::create([
            'label' => 'PORTFOLIO',
            'value' => 3,
        ]);
    }
}
