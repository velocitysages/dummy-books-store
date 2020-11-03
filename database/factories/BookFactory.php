<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'author' => $faker->name,
        'publisher' => $faker->sentence(2),
        'description' => $faker->text,
        'price' => $faker->randomNumber(5)
    ];
});
