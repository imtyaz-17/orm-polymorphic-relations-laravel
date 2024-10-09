<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,10),
            'title' =>  $this->faker->sentence($nbWords = 4),
            'content' => $this->faker->text($maxNbChars = 500),
        ];
    }
}
