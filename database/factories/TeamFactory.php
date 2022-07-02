<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(50),
            'shortname' => $this->faker->text(20),
            'tla' => $this->faker->text(5),
            'crest' => $this->faker->text(100)
        ];
    }
}
