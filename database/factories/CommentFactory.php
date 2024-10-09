<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), // Create a user using the User factory
            'content' => $this->faker->text(500),
            'commentable_id' => $this->faker->numberBetween(1, 10), // Assuming 1-10 are valid IDs for the commentable model
            'commentable_type' => User::class, // Assuming comments are linked to User
        ];
    }
}
