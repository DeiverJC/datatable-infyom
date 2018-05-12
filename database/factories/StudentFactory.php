<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'document' => $faker->randomDigit,
        'email' => $faker->email,
    ];
});
