<?php

namespace Database\Seeders;

use App\Models\TipoSolicitud;
use Illuminate\Database\Seeder;

class TipoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solicitud= new TipoSolicitud(); $solicitud->id=1; $solicitud->name="Trabajo"; $solicitud->descSolicitud="Alumno o Exalumno de la UN que busca trabajo profesional "; $solicitud->save();
        $solicitud= new TipoSolicitud(); $solicitud->id=2; $solicitud->name="Servicio Social"; $solicitud->descSolicitud="Alumno o Exalumno de la UN que busca hacer su servicio social"; $solicitud->save();
        $solicitud= new TipoSolicitud(); $solicitud->id=3; $solicitud->name="Practicas"; $solicitud->descSolicitud="Alumno o Exalumno de la UN que busca realizar sus practicas profesionales"; $solicitud->save();
        
    }
}
