<?php

namespace Database\Seeders;

use App\Models\Sueldos;
use Illuminate\Database\Seeder;

class SueldosLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sueldo= new Sueldos(); $sueldo->id=1; $sueldo->rango="0-5000"; $sueldo->save();
        $sueldo= new Sueldos(); $sueldo->id=2; $sueldo->rango="5000-10000"; $sueldo->save();
        $sueldo= new Sueldos(); $sueldo->id=3; $sueldo->rango="10000-15000"; $sueldo->save();
        $sueldo= new Sueldos(); $sueldo->id=4; $sueldo->rango="15000-20000"; $sueldo->save();
        $sueldo= new Sueldos(); $sueldo->id=5; $sueldo->rango="20000-25000"; $sueldo->save();
        $sueldo= new Sueldos(); $sueldo->id=6; $sueldo->rango="25000-50000"; $sueldo->save();
        $sueldo= new Sueldos(); $sueldo->id=7; $sueldo->rango="50000 o mas"; $sueldo->save();
    }
}
