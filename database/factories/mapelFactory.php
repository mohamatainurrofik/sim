<?php

namespace Database\Factories;

use App\Models\mapel;
use Illuminate\Database\Eloquent\Factories\Factory;

class mapelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = mapel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_mapel' => $this->faker->numberBetween($min = 1000, $max =5000),
            'nama_mapel' => $this->faker->randomElement($array = array('B indo','Matematika','Ipa','Ips','Seni Budaya')),
            'kkm' => $this->faker->numberBetween($min = 60, $max =90),
            'classess_id_kelas' => $this->faker->randomElement($array = array(1,2,3,4,5,6)),
        ];
    }
}
