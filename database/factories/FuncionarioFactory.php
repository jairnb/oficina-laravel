<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Funcionario;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'nif' => $faker->randomNumber($nbDigits = 9, $strict = false) ,
        'email' => $faker->freeEmail,
        'estado' => $faker->randomElement($array = array ('Activo','Desativo')),
        'cargo' => $faker->jobTitle
    ];
});
