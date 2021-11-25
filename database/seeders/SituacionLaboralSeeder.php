<?php

namespace Database\Seeders;

use App\Models\SituacionLaboral;
use Illuminate\Database\Seeder;

class SituacionLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $situacion= new SituacionLaboral(); $situacion->id=1; $situacion->name="Sin Trabajo"; $situacion->save();
        $situacion= new SituacionLaboral(); $situacion->id=2; $situacion->name="Buscando Primer Trabajo"; $situacion->save();
        $situacion= new SituacionLaboral(); $situacion->id=3; $situacion->name="Con trabajo Tiempo Completo"; $situacion->save();
        $situacion= new SituacionLaboral(); $situacion->id=4; $situacion->name="Con trabajo Medio tiempo"; $situacion->save();
        $situacion= new SituacionLaboral(); $situacion->id=5; $situacion->name="Estudiante"; $situacion->save();
        $situacion= new SituacionLaboral(); $situacion->id=6; $situacion->name="En Practicas"; $situacion->save();
        $situacion= new SituacionLaboral(); $situacion->id=7; $situacion->name="Autoempleado"; $situacion->save();
    }
}
