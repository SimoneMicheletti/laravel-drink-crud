<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [

		'name' => $faker -> word(),
		'strength' => $faker -> numberBetween(1, 100),
		'price' => $faker -> randomFloat(2, 1, 30)

    ];
});
