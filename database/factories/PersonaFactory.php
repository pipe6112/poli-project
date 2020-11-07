<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {

    return [
        'nombre_persona' => $faker->word,
        'identificacion' => $faker->randomDigitNotNull,
        'correo' => $faker->word
    ];
});
