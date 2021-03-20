<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'Apellido' => $faker->lastName,
        'Sexo' => $faker->randomElement(['Hombre','Mujer']),
        'Telefono' => $faker->tollFreePhoneNumber,
        'Correo' => $faker->unique()->safeEmail,
        'Casado' => $faker->randomElement(['Si','No']),
        'FechaNacimiento'=> $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')
    ];
});
