<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\ListOneModal::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'cpf' => $faker->cpf,
        'texto' => $faker->text
    ];
});
