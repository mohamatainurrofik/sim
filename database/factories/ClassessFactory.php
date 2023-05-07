<?php

namespace Database\Factories;

use App\Models\Classess;
use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classess::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            //
            'id_kelas' => $this->faker->numberBetween($min = 1, $max =5),
            'nama_kelas' => $this->faker->colorName,

            
        ];
    }
}
