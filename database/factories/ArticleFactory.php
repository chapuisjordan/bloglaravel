<?php

use Faker\Generator as Faker;

$factory->define(App\Articles::class, function (Faker $faker) {
    return [
      'title' => $faker->title,
      'content' => str_random(100),
      'status' => rand(1,4),
    ];
});
