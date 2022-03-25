<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
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
            'lien' =>$this->faker->url(),
            'album' => $this->faker->company(),
            'favori' => 'non',
        ];
    }
}