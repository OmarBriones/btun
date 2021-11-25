<?php

namespace Database\Seeders;

use App\Models\Divisiones;
use Illuminate\Database\Seeder;

class DivisionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $division= new Divisiones(); $division->id=1;$division->name="Ingenieria"; $division->save();
        $division= new Divisiones(); $division->id=2;$division->name="Humanidades y Ciencias Sociales"; $division->save();
        $division= new Divisiones(); $division->id=3;$division->name="Tecnologias de Informacion"; $division->save();
        $division= new Divisiones(); $division->id=4;$division->name="Psicologia"; $division->save();
        $division= new Divisiones(); $division->id=5;$division->name="Ciencias Juridicas"; $division->save();
        $division= new Divisiones(); $division->id=6;$division->name="Posgrados"; $division->save();
        $division= new Divisiones(); $division->id=7;$division->name="Preparatoria"; $division->save();
        $division= new Divisiones(); $division->id=8;$division->name="Educacion Continua"; $division->save();
    }
}
