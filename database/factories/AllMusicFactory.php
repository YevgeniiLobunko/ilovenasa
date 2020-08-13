<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AllMusic;
use Faker\Generator as Faker;

$factory->define(AllMusic::class, function (Faker $faker) {
    return [
        'name' => $faker->text(15),
    ];
});
