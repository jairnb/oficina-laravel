<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'nif' => $faker->randomNumber($nbDigits = 9, $strict = false) ,
        'email' => $faker->freeEmail
    ];
});