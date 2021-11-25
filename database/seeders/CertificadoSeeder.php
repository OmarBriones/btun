<?php

namespace Database\Seeders;

use App\Models\Certificados;
use Illuminate\Database\Seeder;

class CertificadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificados::factory(100)->create();        
    }
}
