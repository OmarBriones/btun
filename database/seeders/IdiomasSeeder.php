<?php

namespace Database\Seeders;

use App\Models\Idiomas;
use Illuminate\Database\Seeder;

class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idioma= new Idiomas(); $idioma->id=1; $idioma->name="Ingles"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=2; $idioma->name="Chino Mandarin"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=3; $idioma->name="Hindi"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=4; $idioma->name="Español"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=5; $idioma->name="Frances"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=6; $idioma->name="Arabe"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=7; $idioma->name="Bengali"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=8; $idioma->name="Ruso"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=9; $idioma->name="Portugues"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=10; $idioma->name="Indones"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=11; $idioma->name="Urdo"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=12; $idioma->name="Aleman"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=13; $idioma->name="Japones"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=14; $idioma->name="Suajili"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=15; $idioma->name="Marathi"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=16; $idioma->name="Telugu"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=17; $idioma->name="Panyabi"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=18; $idioma->name="Chino Wu"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=19; $idioma->name="Tamali"; $idioma->save();
        $idioma= new Idiomas(); $idioma->id=20; $idioma->name="Turco"; $idioma->save();
    }
}
