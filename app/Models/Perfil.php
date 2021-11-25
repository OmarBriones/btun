<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

 
    //relacion uno a uno inversa
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
    public function carrera(){
        return $this->belongsTo('App\Models\Carrera');
    }
    public function solicitud(){
        return $this->belongsTo('App\Models\TipoSolicitud');
    }
    public function situacion(){
        return $this->belongsTo('App\Models\SituacionLaboral');
    }
    public function sueldo(){
        return $this->belongsTo('App\Models\Sueldos');
    }
}
