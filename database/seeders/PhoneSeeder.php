<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::insert([
            [
                'model' => 'iPhone 14',
                'price' => 1200,
                'stock' => 5,
            ],
            [
                'model' => 'Samsung Galaxy S23',
                'price' => 950,
                'stock' => 8,
            ],
            [
                'model' => 'Xiaomi Redmi Note 12',
                'price' => 300,
                'stock' => 15,
            ],
        ]);
    }
}
