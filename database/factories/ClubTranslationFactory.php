<?php 

use Faker\Generator as Faker;

$factory->define(App\ClubTranslation::class, function (Faker $faker) {
    //Relación Clubs - buscamos coger uno aleatorio para relacionar correctamente
    $clubs = App\Club::pluck('id')->toArray();
    //Relación Idiomas - buscamos coger uno aleatorio para relacionar correctamente
    $languages = App\Language::pluck('id')->toArray();
    return [
        'description' => $faker->text,
        'club_id' => $faker->randomElement($clubs),
        'language_id' => $faker->randomElement($languages)
    ];
});