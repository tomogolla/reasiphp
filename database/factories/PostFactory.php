<?php

namespace Database\Factories;

use App\Models\Category;
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
        $title = fake()->sentence();
        return [
            'title' => $title,
            'content' => fake()->paragraph(5),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => 1,
            'image' => fake()->imageUrl(),
            'slug' => \Illuminate\Support\Str::slug($title),
            'published_at' => fake()->optional()->dateTime(),
        ];
    }
}
