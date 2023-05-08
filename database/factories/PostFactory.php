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
            "user_id" => 1,
            "category_id" => mt_rand(1, 6),
            'title' => $this->faker->sentence(mt_rand(4, 7)),
            'slug' => $this->faker->slug(mt_rand(4, 7)),
            'excerpt' => $this->faker->sentence(mt_rand(10, 17)),
            "body" => collect($this->faker->paragraphs(mt_rand(10, 50)))->map(
                fn ($p) => "<p class='mb-0.5'>$p</p>"
            )->implode(''),
        ];
    }
}
