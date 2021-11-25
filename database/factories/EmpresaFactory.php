<?php

namespace Database\Factories;

use App\Models\Empresa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Empresa::class;

    public function definition()
    {
        return [            
            'name'=> $this->faker->word(10),
            'descEmpresa'=> $this->faker->text(300),
            'nameContacto'=> $this->faker->word(50),
            'mailContacto'=> $this->faker->email(),
            'celContacto'=> $this->faker->phoneNumber(10),
            'direccion'=> $this->faker->word(50),
            'web'=> $this->faker->word(20),
            'fechaIngreso'=> $this->faker->date(),
            'user_id'=> User::all()->random()->id,
        ];
    }
}
