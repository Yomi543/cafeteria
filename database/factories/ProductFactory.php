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
            "nombre"=>$this->faker->sentence(),
            "descripcion"=>$this->faker->sentences(3, true),
            "existencia"=>$this->faker->numberBetween(6, 9),
            "status"=>1,
            "precio"=>$this->faker->randomFloat(2, 30, 60),
            "imagen"=>"images/products/default.jpg",
            "categoria_id"=>rand(1, 3),



        ];
    }
}
