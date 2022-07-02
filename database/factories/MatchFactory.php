<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'utcDate' => now(),
            'hometeam_id' => rand(1,10),
            'awayteam_id' => rand(1,10),
            'winner' => $this->faker->text(50),
            'scorehome' => rand(1,5),
            'scoreaway' => rand(1,5)
        ];
    }
}
