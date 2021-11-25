<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nivel= new Nivel(); $nivel->id=1; $nivel->nivel="Bajo 0-15"; $nivel->save();
        $nivel= new Nivel(); $nivel->id=2; $nivel->nivel="Medio-bajo 15-30"; $nivel->save();
        $nivel= new Nivel(); $nivel->id=3; $nivel->nivel="Medio 30-45"; $nivel->save();
        $nivel= new Nivel(); $nivel->id=4; $nivel->nivel="Medio-Alto 45-60"; $nivel->save();
        $nivel= new Nivel(); $nivel->id=5; $nivel->nivel="Alto 60-75"; $nivel->save();
        $nivel= new Nivel(); $nivel->id=6; $nivel->nivel="Perfecto 75-100"; $nivel->save();        
    }
}
