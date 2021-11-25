<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    //relacion muchos a muchos inversa
    public function carrera(){
        return $this->belongsToMany('App\Models\Carrera');
    }
    public function empresa(){
        return $this->belongsToMany('App\Models\Empresa');
    }
    public function user(){
        return $this->belongsToMany('App\Models\User');
    }
    public function sueldo(){
        return $this->belongsToMany('App\Models\Sueldos');
    }
}
