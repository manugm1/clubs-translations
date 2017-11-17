<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ordenadas correctamente para no tener problemas con las relaciones
        Model::unguard();
        factory('App\User', 5)->create();
        factory('App\Club', 10)->create();
        factory('App\Language', 10)->create();
        factory('App\ClubTranslation', 10)->create();
        Model::reguard();
    }
}
