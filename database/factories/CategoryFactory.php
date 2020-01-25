<?php

/** @var Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'slug' => $faker->slug
    ];
});

$factory->afterCreating(Category::class, function (Category $category) {
    \factory(\App\Article::class)->create(['category_id' => $category->id]);
});
