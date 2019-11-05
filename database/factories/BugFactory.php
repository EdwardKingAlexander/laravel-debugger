<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bug;
use Faker\Generator as Faker;

$factory->define(Bug::class, function (Faker $faker) {
    return [
        'project_id' => $faker->numberBetween($min = 1, $max = 10),
        'solution' => $faker->sentence,
        'bug' => $faker->sentence,
        'notes' => $faker->sentence,
        'completed' => false
    ];
});
