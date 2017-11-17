<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //No queremos los campos de tiempo
    public $timestamps = false;

    //Campos que le pertenecen (id va implícito)
    protected $fillable = ['nombre', 'locale'];
}
