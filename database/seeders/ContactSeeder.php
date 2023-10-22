<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'phone' => '123-456-7890',
            'email' => 'info@example.com',
            'address' => '123 Main Street, City, Country',
            'google_map_link' => 'https://www.google.com/maps?q=123+Main+Street',
        ]);
    }
}
