<?php 

use Faker\Generator as Faker;

$factory->define(App\Language::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'locale' => $faker->locale
    ];
});
