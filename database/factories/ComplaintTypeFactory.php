<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ComplaintType;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(ComplaintType::class, function (Faker $faker) {
    $name = $faker->name;
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
        'parent_id' => rand(1, 5),
        'position' => rand(1, 10),
        'status' => rand(0, 1)
    ];
});
