<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //carreras
        $carrera = new Carrera(); $carrera->id=1;$carrera->name="Ingeniero en Tecnologias Electronicas";$carrera->division_id=1;$carrera->save();
        $carrera = new Carrera(); $carrera->id=2;$carrera->name="Ingeniero Industrial Administradir";$carrera->division_id=1;$carrera->save();
        $carrera = new Carrera(); $carrera->id=3;$carrera->name="Ingeniero Mecanico Administrador";$carrera->division_id=1;$carrera->save();
        $carrera = new Carrera(); $carrera->id=4;$carrera->name="Ingeniero Mecanico Electricista";$carrera->division_id=1;$carrera->save();
        $carrera = new Carrera(); $carrera->id=5;$carrera->name="Contador Publico y Auditor";$carrera->division_id=2;$carrera->save();
        $carrera = new Carrera(); $carrera->id=6;$carrera->name="Licenciado en Banca y Finanzas";$carrera->division_id=2;$carrera->save();
        $carrera = new Carrera(); $carrera->id=7;$carrera->name="Licenciado en Administracion Financiera";$carrera->division_id=2;$carrera->save();
        $carrera = new Carrera(); $carrera->id=8;$carrera->name="Licenciado en Administracion de Empresas";$carrera->division_id=2;$carrera->save();
        $carrera = new Carrera(); $carrera->id=9;$carrera->name="Licenciado en Relaciones Industriales";$carrera->division_id=2;$carrera->save();
        $carrera = new Carrera(); $carrera->id=10;$carrera->name="Licenciado en Mercadoctenia";$carrera->division_id=2;$carrera->save();
        $carrera = new Carrera(); $carrera->id=11;$carrera->name="Licenciado en Administracion en Tecnologias de Informacion";$carrera->division_id=3;$carrera->save();
        $carrera = new Carrera(); $carrera->id=12;$carrera->name="Ingeniero Industrial y de Sistemas";$carrera->division_id=3;$carrera->save();
        $carrera = new Carrera(); $carrera->id=13;$carrera->name="Ingeniero en Tecnologias de la Informacion / Software";$carrera->division_id=3;$carrera->save();
        $carrera = new Carrera(); $carrera->id=14;$carrera->name="Ingeniero en Tecnologias de la Informacion / Comunicaciones";$carrera->division_id=3;$carrera->save();
        $carrera = new Carrera(); $carrera->id=15;$carrera->name="Licienciado en Psicologia";$carrera->division_id=4;$carrera->save();
        $carrera = new Carrera(); $carrera->id=16;$carrera->name="Licienciado en Ciencias Juridicas";$carrera->division_id=5;$carrera->save();
        // Posgrados
        $carrera = new Carrera(); $carrera->id=17;$carrera->name="Administracion de Negocios";$carrera->division_id=6;$carrera->save();
        $carrera = new Carrera(); $carrera->id=18;$carrera->name="Administracion de la Calidad Total";$carrera->division_id=6;$carrera->save();
        $carrera = new Carrera(); $carrera->id=19;$carrera->name="Educacion Universitaria";$carrera->division_id=6;$carrera->save();
        $carrera = new Carrera(); $carrera->id=20;$carrera->name="Maestria en Servicios de la Salud";$carrera->division_id=6;$carrera->save();

        //Preparatoria
        $carrera = new Carrera(); $carrera->id=21;$carrera->name="Preparatoria";$carrera->division_id=7;$carrera->save();

        //Educacion Continua 
        $carrera = new Carrera(); $carrera->id=22;$carrera->name="Diplomado en Ingenieria de Software";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=23;$carrera->name="Diplomado en SAP";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=24;$carrera->name="Certificacion de Hospitales";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=25;$carrera->name="Diplomado de Leyes";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=26;$carrera->name="Psicoterapia Psicoanalitica en niños y adolocentes";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=27;$carrera->name="Psicoterapia en casos de violencia de genero";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=28;$carrera->name="Psicoterapia Breve Sistemática";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=29;$carrera->name="Psicoterapia en pareja/familia";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=30;$carrera->name="Psicodiagnostico y evaluacion psicologica";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=31;$carrera->name="Diplomado en Six Sigma";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=32;$carrera->name="Diplomado en calidad";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=33;$carrera->name="Diplomados en automatización y robótica";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=34;$carrera->name="Diplomado en NIFS Mexicanas";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=35;$carrera->name="Diplomado en medios electronicos Fiscales";$carrera->division_id=8;$carrera->save();
        $carrera = new Carrera(); $carrera->id=36;$carrera->name="Diplomado en Impuestos y contribuciones de Seguridad Social";$carrera->division_id=8;$carrera->save();
        
    }
}
