<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feature;
use Faker\Generator as Faker;

$factory->define(Feature::class, function (Faker $faker) {
    return [
        'project_id' => $faker->numberBetween($min = 1, $max = 10),
        'feature_name' => $faker->realText($maxNbChars = 30, $indexSize = 2),
        'feature_description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'completed' => false, 
        'due_date' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
