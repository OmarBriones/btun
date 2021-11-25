<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisiones extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function carrera(){
        return $this->hasMany('App\Models\Carrera');
    }
}
