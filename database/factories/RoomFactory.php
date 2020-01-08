<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use App\User;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->sentence,
        'capacity' => 20,
        'projector' => true,
        'flip_chart' => true,
        'wifi' => true,
        'created_by' => factory(User::class)
    ];
});
