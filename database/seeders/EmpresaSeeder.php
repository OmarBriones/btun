<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresas = Empresa::factory(50)->create();

        foreach ($empresas as $empresa) {
            $empresa->categoria()->attach([
                rand(1,16),
                rand(17,32)]);                
        }
    }
}
