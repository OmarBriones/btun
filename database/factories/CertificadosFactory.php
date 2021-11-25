<?php

namespace Database\Factories;
use App\Models\Certificados;
use Illuminate\Database\Eloquent\Factories\Factory;

class CertificadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Certificados::class;
    public function definition()
    {
        return [
            'name'=> $this->faker->word(20),
            'descCertificado'=>$this->faker->text(200),
            'duracion'=> $this->faker->randomElement([1,2,3,4,5,6,7,8,9])
        ];
    }
}
