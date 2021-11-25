<?php

namespace Database\Factories;

use App\Models\Carrera;
use App\Models\Perfil;
use App\Models\SituacionLaboral;
use App\Models\Sueldos;
use App\Models\TipoSolicitud;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Perfil::class;
    public function definition()
    {
        return [
            'name'=> $this->faker->word(10),
            'aPaterno'=> $this->faker->word(10),
            'aMaterno'=> $this->faker->word(10),
            'direccion'=> $this->faker->word(50),
            'cel'=> $this->faker->phoneNumber(10),
            'matricula'=> $this->faker->buildingNumber(5),
            'carrera_id'=> Carrera::all()->random()->id,
            'solicitud_id'=> TipoSolicitud::all()->random()->id,
            'situacion_id'=> SituacionLaboral::all()->random()->id,
            'sueldo_id'=> Sueldos::all()->random()->id,
            'user_id'=> User::all()->random()->id,
        ];
    }
}
