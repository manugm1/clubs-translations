<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubTranslation extends Model
{
    //No queremos los campos de tiempo
    public $timestamps = false;

    //Sobreescribir nombre de tabla al no coger plural automáticamente
    protected $table = "clubs_translations";

    //Campos que le pertenecen (id va implícito)
    protected $fillable = ['description', 'club_id', 'language_id'];

    public function club(){
        return $this->belongsTo('App\Club');
    }

    public function language(){
        return $this->belongsTo('App\Language');
    }
}
