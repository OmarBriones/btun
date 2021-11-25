<?php

namespace Database\Seeders;

use App\Models\Vacante;
use Illuminate\Database\Seeder;

class VacanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $vacantes = Vacante::factory(200)->create(); 

       foreach ($vacantes as $vacante) {
           $vacante->carrera()->attach([
               rand(1,8),
               rand(9,16)
           ]);
           $vacante->empresa()->attach([
               rand(1,50)               
           ]);
           $vacante->user()->attach([
               rand(1,25),
               rand(26,50)
           ]);
        //    $vacante->sueldo()->attach([
        //        rand(1,3),
        //        rand(4,7)
        //    ]);
              
       }

    }
}
