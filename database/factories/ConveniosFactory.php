<?php

namespace Database\Factories;

use App\Models\Convenios;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConveniosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Convenios::class;

    public function definition()
    {
        return [
            'name'=> $this->faker->word(20),
            'duracion'=> $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'descConvenio'=>$this->faker->text(200),
        ];
    }
}
