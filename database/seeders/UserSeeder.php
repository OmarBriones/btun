<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user= new User(); $user->id=1; $user->name="Omar"; $user->descuser="Alumno o Exalumno de la UN que busca trabajo profesional "; $user->save();
        
        $users= User::factory(99)->create();
        foreach ($users as $user) { 
            $user->certificado()->attach([
            rand(1,25),
            rand(26,60),
            rand(61,100),
        ]);

    
    }
            
    
    }
}
