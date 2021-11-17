<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(2), //Con dos palabras
            'description'=> $this->faker->sentence(15), //Con 20
            'price'=> $this->faker->numberBetween(100, 2000), //Entre estos valores
            

        ];
    }
}
