<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    use HasFactory;
    // relacion muchos a muchos 
    public function nivel(){
        return $this->belongsToMany('App\Models\Nivel');
    }
}
