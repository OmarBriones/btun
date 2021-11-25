<?php

namespace Database\Factories;

use App\Models\Sueldos;
use App\Models\TipoSolicitud;
use App\Models\Vacante;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Vacante::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'descripcion' => $this->faker->text(100),
            'direccion' => $this->faker->word(30),
            'nameContacto' => $this->faker->name(),
            'mailContacto' => $this->faker->email(),
            'celContacto' => $this->faker->phoneNumber(10),
            'solicitud_id' => TipoSolicitud::all()->random()->id,
            'sueldo_id' => Sueldos::all()->random()->id,
        ];
    }
}
