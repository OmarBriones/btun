<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEmpresas extends Model
{
    use HasFactory;
     //relacion uno a muchos
     public function empresa(){
        return $this->belongsToMany('App\Models\Empresa');
    }
}
