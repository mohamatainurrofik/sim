<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nisn' => $this->faker->numerify('00########'),
            'nis' => $this->faker->numberBetween($min = 3000, $max =6000),
            'classess_id_kelas' => $this->faker->numberBetween($min = 1, $max =5),
            'nama' => $this->faker->name,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'agama' => $this->faker->randomElement($array = array('islam','kristen','hindu','budha','konghuchu')),
            'alamat' => $this->faker->address,
            'nama_ibu' => $this->faker->name($gender='female'),
            'no_tlp' => $this->faker->phoneNumber,
        ];
    }
}
