<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockOut>
 */
class StockOutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barcode' => $this->faker->ean8(),
            'product' => $this->faker->words(rand(1, 3), true),
            'total' => $this->faker->numberBetween(1, 100),
            'customer' => $this->faker->word(),
            'information' => fake()->text(100),
        ];
    }
}
