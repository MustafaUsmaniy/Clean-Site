<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => 1,
            'category_id'=> rand(1, 5),
            'title' => fake()->sentence(),
            'description' => fake()->sentence(),
            'content' => fake()->paragraph(5),
        ];
    }
}
