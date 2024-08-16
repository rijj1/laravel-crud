<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'storage/uploads/' . fake()->image('public/storage/uploads', 300, 200, 'null', false),
            'title' => fake()->sentence(),
            'description' =>fake()->paragraph(),
            'category_id' => rand(1,6),
        ];
    }
}
