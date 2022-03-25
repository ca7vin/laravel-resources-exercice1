<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' =>$this->faker->lastName(),
                'firstname' =>$this->faker->firstName(),
                'age' => $this->faker->numberBetween($min = 7, $max = 77),
                'borndate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                'email' => $this->faker->email(),
                'password' => $this->faker->password(),
                'album' => $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}
