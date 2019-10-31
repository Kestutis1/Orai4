<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\trak;
use Faker\Generator as Faker;

$factory->define(trak::class, function (Faker $faker) {
    return [
        'pavadinimas' => $faker->sentence,
        'tekstas' => $faker->sentence,
    ];
});
