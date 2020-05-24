<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $fillable = [
        'tema_id','id_usuario', 'respuesta','fecha'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tema() {
        return $this->belongsTo('App\Tema');
    }
}
