<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Material::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'stock' => $faker->randomDigit,
        'description' => $faker->text($maxNbChars = 20) 
    ];
});
