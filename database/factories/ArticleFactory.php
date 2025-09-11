<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 5)),
            'category_id' => mt_rand(1, 5),
            'content' => $this->faker->paragraph(mt_rand(75, 150)),
            'image' => $this->faker->imageUrl(640, 460, 'robots', true),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->randomElement(['draft', 'published']),
        ];
    }
}
