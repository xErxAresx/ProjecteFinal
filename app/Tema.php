<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Tema extends Model
{
    //
    protected $fillable = [
        'titulo','id_usuario', 'texto','fecha'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function respuesta() {
        return $this->hasMany('App\Respuesta');
    }
}
