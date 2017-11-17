<?php

namespace App;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //No queremos los campos de tiempo
    public $timestamps = false;

    //Campos que le pertenecen (id va implícito)
    protected $fillable = ['nombre', 'manager'];

    public function translation($language = null){
        //Si no nos llega idioma, cogemos el por defecto del sistema (en)

        if($language == null)
            $language = App::getLocale();
        
        //Obtener la traducción correspondiente, tenemos Locale, necesitamos el ID para buscar
        //en la tabla translation
        $language_id = Language::where('locale', $language)->first()->id;
        
        return $this->hasMany('App\ClubTranslation')->where('language_id', $language_id);
    }
}
