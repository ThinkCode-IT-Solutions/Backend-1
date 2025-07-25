<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image' => "https://picsum.photos/200/200",
            'model' => $this->faker->city,
            'make' => $this->faker->year,
            'quantity' => $this->faker->numberBetween(10,1000),
            'cost' => $this->faker->numberBetween(10000,20000),
            'price' => $this->faker->numberBetween(20000,30000),
            'old_price' => $this->faker->numberBetween(30000,40000),
        ];
    }
}
