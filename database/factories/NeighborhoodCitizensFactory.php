<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\NeighborhoodCitizen;
use Faker\Generator as Faker;

$factory->define(NeighborhoodCitizen::class, function (Faker $faker) {
    return [
        'name' => $faker->region . ' MFY',
        'region_id' => rand(1, 19)
    ];
});
