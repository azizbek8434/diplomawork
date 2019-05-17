<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Complaint;
use Faker\Generator as Faker;

$factory->define(Complaint::class, function (Faker $faker) {
    return [
        'region_id' => rand(1, 19),
        'complaint_type_id' => rand(1, 35),
        'neighborhood_citizen_id' => rand(1, 59),
        'title' => $faker->sentence,
        'text' => $faker->text,
        'sender_full_name' => $faker->firstName . ' ' . $faker->lastName,
        'sender_phone' => $faker->phoneNumber,
        'sender_email' => $faker->email,
    ];
});
