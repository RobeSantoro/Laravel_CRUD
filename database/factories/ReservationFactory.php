<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'data' => $faker->date,
        'trattamento' => $faker->word,
        'user_id' => User::all()->random()->id,
    ];
});
