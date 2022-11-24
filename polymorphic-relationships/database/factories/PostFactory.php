<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Post::class, function(Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,

    ];
});