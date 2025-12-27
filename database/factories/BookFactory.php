<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author_name' => $this->faker->name,
            'published_date' => $this->faker->optional()->date(),
            'summary' => $this->faker->optional()->paragraph,
            'cover_image_path' => 'https://picsum.photos/seed/book'.$this->faker->unique()->numberBetween(1,9999).'/300/400'
,
        ];
    }
}
