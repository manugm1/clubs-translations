<?php

namespace App\Support;

use App\Language;

//Trait que funciona como un evento
trait Translateable{
    protected static function boot(){
        parent::boot();

        //Manejador del evento de guardado
        //Cuando se guarde el modelo (Club), se crearán
        //tantos registros en la tabla "ClubTranslation" como idiomas
        //disponibles. Por defecto se ponen a "". 
        static::saved(function($model){
            $languages = Language::all();

            foreach($languages as $language){
                $model->translation()->create(['language_id' => $language->id, 'description' => '']);
            }
        });
    }
}