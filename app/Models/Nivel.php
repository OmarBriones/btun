<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    // relacion muchos a muchos 
    public function idioma(){
        return $this->belongsToMany('App\Models\Idiomas');
    }
}
