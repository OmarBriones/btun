<?php

namespace Database\Seeders;

use App\Models\Divisiones;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
            DivisionesSeeder::class,
            CategoriaEmpresaSeeder::class,
            CarreraSeeder::class,
            IdiomasSeeder::class,
            NivelSeeder::class,
            SituacionLaboralSeeder::class,
            SueldosLaboralSeeder::class,
            TipoSolicitudSeeder::class,
            UserSeeder::class,
            CertificadoSeeder::class,
            ConvenioSeeder::class,
            EmpresaSeeder::class,
            PerfilSeeder::class,
            VacanteSeeder::class,
        ]);

    }
}
