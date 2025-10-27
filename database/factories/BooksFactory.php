<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Authors;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $authorId = Authors::inRandomOrder()->value('id');
        return [
            'title' => $this->faker->sentence(3), // contoh: "The Lost Kingdom"
            'author' => $this->faker->name(),     // bisa beda dengan tabel authors kalau mau
            'author_id' => $authorId,     // relasi otomatis ke author
            'published_year' => $this->faker->year(),
        ];
    }
}
