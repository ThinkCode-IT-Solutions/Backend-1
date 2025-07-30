<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Product::factory(20)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Product::factory()->create([
            'name' => 'Ford Mustang GT',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/1967_Ford_Mustang_GT_Fastback.jpg',
            'model' => 'Mustang GT Fastback',
            'make' => '1967',
            'quantity' => 25,
            'cost' => 15000,
            'price' => 28000,
            'old_price' => 35000,
        ]);

        Product::factory()->create([
            'name' => 'Chevrolet Camaro SS',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/05/1969_Chevrolet_Camaro_SS_396_Coupe_%28Orange%29_front_left.jpg',
            'model' => 'Camaro SS 396',
            'make' => '1969',
            'quantity' => 18,
            'cost' => 16000,
            'price' => 29000,
            'old_price' => 36000,
        ]);

        Product::factory()->create([
            'name' => 'Porsche 911 Carrera RS',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/22/Porsche_911_Carrera_RS_2.7.jpg',
            'model' => '911 Carrera RS 2.7',
            'make' => '1973',
            'quantity' => 12,
            'cost' => 18000,
            'price' => 30000,
            'old_price' => 39000,
        ]);

        Product::factory()->create([
            'name' => 'Volkswagen Beetle',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/91/VW_Beetle_1966.jpg',
            'model' => 'Beetle',
            'make' => '1966',
            'quantity' => 40,
            'cost' => 10000,
            'price' => 20000,
            'old_price' => 31000,
        ]);

        Product::factory()->create([
            'name' => 'Mercedes-Benz 300SL Gullwing',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Mercedes-Benz_300_SL_%28W198%29_front-right_2011-03-12_A.jpg',
            'model' => '300SL Gullwing',
            'make' => '1957',
            'quantity' => 5,
            'cost' => 19000,
            'price' => 29500,
            'old_price' => 37000,
        ]);

        Product::factory()->create([
            'name' => 'Jaguar E-Type Series 1',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/89/Jaguar_E-Type_Series_1_4.2-Litre_Coupe_1966.jpg',
            'model' => 'E-Type Series 1',
            'make' => '1966',
            'quantity' => 7,
            'cost' => 17000,
            'price' => 28000,
            'old_price' => 36000,
        ]);

        Product::factory()->create([
            'name' => 'Dodge Charger R/T',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/15/Dodge_Charger_R-T_1969.jpg',
            'model' => 'Charger R/T',
            'make' => '1969',
            'quantity' => 20,
            'cost' => 15500,
            'price' => 27000,
            'old_price' => 34000,
        ]);

        Product::factory()->create([
            'name' => 'Pontiac GTO Judge',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8c/1970_Pontiac_GTO_--_06-25-2011.jpg',
            'model' => 'GTO Judge',
            'make' => '1970',
            'quantity' => 14,
            'cost' => 16500,
            'price' => 29000,
            'old_price' => 37500,
        ]);

        Product::factory()->create([
            'name' => 'Ferrari 250 GTO',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Ferrari_250_GTO_%288068%29.jpg',
            'model' => '250 GTO',
            'make' => '1962',
            'quantity' => 2,
            'cost' => 20000,
            'price' => 30000,
            'old_price' => 40000,
        ]);

        Product::factory()->create([
            'name' => 'Toyota 2000GT',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/25/Toyota_2000GT_001.jpg',
            'model' => '2000GT',
            'make' => '1967',
            'quantity' => 6,
            'cost' => 17500,
            'price' => 29500,
            'old_price' => 38500,
        ]);




        Product::factory(20)->create();
    }
}
