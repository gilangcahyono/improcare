<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    // /**
    //  * The name of the factory's corresponding model.
    //  *
    //  * @var class-string<\Illuminate\Database\Eloquent\Model>
    //  */
    // protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barcode' => $this->faker->ean8(),
            'name' => $this->faker->words(rand(1, 3), true),
            'price' => $this->faker->numberBetween(1000, 100000),
            'stock' => $this->faker->numberBetween(1, 100),
            'category' => $this->faker->word(),
            'unit' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
