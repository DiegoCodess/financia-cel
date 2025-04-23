<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::insert([
            [
                'name' => 'Juan Pérez',
                'email' => 'juan@gmail.com',
                'credit_score' => 700,
            ],
            [
                'name' => 'Ana Gómez',
                'email' => 'ana@gmail.com',
                'credit_score' => 620,
            ],
            [
                'name' => 'Carlos Ruiz',
                'email' => 'carlos@gmail.com',
                'credit_score' => 580,
            ],
        ]);
    }
}
