<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'data' => $faker->dateTimeBetween('now', '+1 years'),
        'trattamento' => $faker->randomElement($array = array ('Carie','Pulizia','Dentiera')) ,
        'user_id' => User::all()->random()->id,
    ];
});
