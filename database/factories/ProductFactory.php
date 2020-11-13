<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->text(60),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(10, 9000),
            'sku' => $this->faker->word(),
            'manage_stock' => false,
            'in_stock' => $this->faker->boolean(),
            'status' => $this->faker->boolean(),
        ];
    }
}
