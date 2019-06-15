<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Peca;
use Faker\Generator as Faker;

$factory->define(Peca::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'preco' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'quantidade' => $faker->randomDigit,
    ];
});
