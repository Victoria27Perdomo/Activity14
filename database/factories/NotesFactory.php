<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notes>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => Author::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->words(3, true),
            'content' => $this->faker->paragraph(5, true),
            'date_time' => $this->faker->dateTimeThisDecade()
        ];
    }
}
