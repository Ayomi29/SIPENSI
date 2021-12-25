<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DosenPembimbingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nip/niph' => $this->faker->randomNumber(5, true),
            'jurusan' => $this->faker->word(),
            'prodi' => $this->faker->word()
        ];
    }
}
