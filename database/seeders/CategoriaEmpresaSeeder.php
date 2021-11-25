<?php

namespace Database\Seeders;

use App\Models\CategoriaEmpresas;
use Illuminate\Database\Seeder;

class CategoriaEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria= new CategoriaEmpresas(); $categoria->id=1; $categoria->name="Agricultura / Pesca / Ganaderia"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=2; $categoria->name="Industrial"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=3; $categoria->name="Marketing / Publicidad"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=4; $categoria->name="Alimentos"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=5; $categoria->name="Informatica/ Hardware"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=6; $categoria->name="Informatica / Software"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=7; $categoria->name="Contruccion / Obras"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=8; $categoria->name="Ventas al consumidor"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=9; $categoria->name="Educacion"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=10; $categoria->name="Energia"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=11; $categoria->name="Entrenemiento/Deportes"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=12; $categoria->name="Finanzas / Banca"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=13; $categoria->name="Salud / Medicina"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=14; $categoria->name="Hosteleria / Turismo"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=15; $categoria->name="Internet"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=16; $categoria->name="Medios de Comunicacion"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=17; $categoria->name="Fabricacion"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=18; $categoria->name="Gobierno / no Lucro"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=19; $categoria->name="Servicios Profesionales"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=20; $categoria->name="Materias Primas"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=21; $categoria->name="RRHH / Personal"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=22; $categoria->name="Ventas al por mayor"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=23; $categoria->name="Telecomunicaciones"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=24; $categoria->name="Transporte"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=25; $categoria->name="Legal / Asesoría"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=26; $categoria->name="Otros"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=27; $categoria->name="Salud y Belleza"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=28; $categoria->name="Seguros y Reaseguros"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=29; $categoria->name="Derecho y Leyes"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=30; $categoria->name="Freelancer"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=31; $categoria->name="Contabilidad"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=32; $categoria->name="Redes Sociales"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=33; $categoria->name="Inteligencia Empresarial / Business Inteligent BI"; $categoria->save();
        $categoria= new CategoriaEmpresas(); $categoria->id=34; $categoria->name="Analisis de Datos / Data Analytics"; $categoria->save();

    }
}  