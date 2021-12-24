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
            'jurusan' => $this->random(['JMTI', 'JSTPK', 'JTIP', 'JSTP', 'JIKL']),
            'prodi' => $this->random(['Fisika', 'Matematika', 'Teknik Mesin', ' Teknik Elektro', 'Teknik Kimia', 'Teknik Material dan Metalurgi', 'Teknik Sipil', 'Perencanaan Wilayah dan Kota', 'Teknik Perkapalan', 'Sistem Informasi', 'Informatika', 'Teknik Industri', 'Teknik Lingkungan', 'Teknik Kelautan', 'Arsitektur', 'Statistika', 'Ilmu Aktuaria', 'Rekayasa Keselamatan', 'Teknik Pangan', 'Bisnis Digital'])
        ];
    }
}
