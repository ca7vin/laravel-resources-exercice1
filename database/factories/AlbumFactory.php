<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->company(),
            'description' =>$this->faker->realText(),
            'auteur' => $this->faker->firstName(),
            'photo' => $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}
