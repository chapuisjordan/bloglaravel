<?php

use Faker\Generator as Faker;

$factory->define(App\Comments::class, function (Faker $faker)  {
    return [
        'name'=>$faker->name,
        'email'=>$faker->unique()->safeEmail,
        'content'=>str_random(50),
        'status'=>rand(1,4),
    ];
});
