<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BodyMeasurements;
use Faker\Generator as Faker;

$factory->define(BodyMeasurements::class, function (Faker $faker) {
    return [
        // 'user_id' => factory(\App\User::class),
        'user_id' => '21',
        'weight' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'height' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'waist' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'bust' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'calves' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'chest' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'forearm' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'hips' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'thigs' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'upperarm' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 200),
        'sex' => $faker->numberBetween($min = 0, $max=2)
    ];
});
