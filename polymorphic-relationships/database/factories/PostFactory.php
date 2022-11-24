<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Fake

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
    public function definition(Faker $faker)
    {
        return [
            'title' => $faker->sentnce,
            'body' => $faker->paragraph
        ];
    }
}
