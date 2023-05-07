<?php

namespace Database\Factories;

use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class teacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->numerify('73########'),
            'classess_id_kelas' => $this->faker->numberBetween($min =1, $max =5),
            'nama' => $this->faker->name, 
            'jabatan' => $this->faker->randomElement($array = array('Guru Honorer','PNS')),
            'email' => $this->faker->email,
            'jenis_kelamin' => $this->faker->randomElement($array = array('Laki-laki','Perempuan')),
            'pendidikan' => $this->faker->randomElement($array = array('S1','SMA','S2')),
            'alamat' => $this->faker->address,
            'no_tlp' => $this->faker->phoneNumber,
        ];
    }
}
