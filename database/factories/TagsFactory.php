<?php

use Faker\Generator as Faker;

$factory->define(Tags::class, function (Faker $faker) {
    return [
        'label'=>str_random(30),
    ];
});
