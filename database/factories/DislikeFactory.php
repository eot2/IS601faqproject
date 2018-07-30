<?php

use Faker\Generator as Faker;

$factory->define(App\Dislike::class, function (Faker $faker) {
    return [
        'dislike' => $faker->randomElement(['Dislike']),
    ];
});