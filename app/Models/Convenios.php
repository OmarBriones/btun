<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenios extends Model
{
    use HasFactory;
    // relacion muchos a muchos 
    public function empresa(){
        return $this->belongsToMany('App\Models\Empresa');
    }
}
