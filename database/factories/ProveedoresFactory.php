<?php

use Faker\Generator as Faker;

$factory->define(App\Proveedores::class, function (Faker $faker) {
    return [
        'nombres' => $faker->sentence,
        'apellidos' => $faker->sentence,
        'direccion' => $faker->sentence,
        'ciudad' => $faker->sentence,
        'numero_cedula' => $faker->sentence,
        'numero_telefono' => $faker->sentence,
        'terminos_pagos' => $faker->sentence,
        
    ];
});
