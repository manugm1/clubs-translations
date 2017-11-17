<?php

namespace App;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use App\Support\Translateable;

class Club extends Model
{
    //Usamos el trait definido, para que salte
    //cuando se produzca alguna operación en este modelo
    use Translateable;

    //No queremos los campos de tiempo
    public $timestamps = false;

    //Campos que le pertenecen (id va implícito)
    protected $fillable = ['name', 'manager'];
    //Obtener la traducción correspondiente, recibimos Locale ("es", "en", etc) pero
    //necesitamos el ID para buscar
    public function translation($language = null){
        //en la tabla translation
        //Si no nos llega idioma, cogemos el por defecto del sistema (en)
        if($language == null)
            $language = Language::where('locale', App::getLocale())->first();
        else
            $language = Language::where('locale', $language)->first();
        
        return $this->hasMany('App\ClubTranslation')->where('language_id', $language->id);
    }
}
