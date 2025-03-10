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
            'title' => fake()->title(),
            'body' => fake()->paragraph(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (\App\Models\Post $post) {
            $post->comments()->createMany(
                []
            );
        });
    }
}
