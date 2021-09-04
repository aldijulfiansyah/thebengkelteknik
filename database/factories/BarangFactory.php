<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word(),
            'jumlah' => $this->faker->randomNumber(3, false),
            'client_pt' => $this->faker->company(),
            'nama_client' => $this->faker->firstNameMale()
        ];
    }
}
