<?php

namespace Database\Seeders;

use App\Models\Convenios;
use Illuminate\Database\Seeder;

class ConvenioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $convenios= Convenios::factory(50)->create();
        foreach ($convenios as $convenio) {
            $convenio->empresa()->attach([
                rand(1,50),                
            ]);
        }
    }
}
