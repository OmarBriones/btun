<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public function categoria(){
        return $this->belongsToMany('App\Models\CategoriaEmpresas');
    }
    public function convenio(){
        return $this->belongsToMany('App\Models\Convenio');
    }
    public function vacante(){
        return $this->belongsToMany('App\Models\Vacante');
    }
}
