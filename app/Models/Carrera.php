<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carrera extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa

    public function divisiones(){
        return $this->belongsTo('App\Models\Divisiones');
    }
    //relacion uno a muchos
    public function perfil(){
        return $this->hasMany('App\Models\Perfil');
    
    }
    //relacion uno a muchos
    public function user(){
        return $this->hasMany('App\Models\User');
    }
    // relacion muchos a muchos 
    public function vacante(){
        return $this->belongsToMany('App\Models\Vacante');
    }
    

}
