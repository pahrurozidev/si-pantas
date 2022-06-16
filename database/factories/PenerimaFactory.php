<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penerima>
 */
class PenerimaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nik' => $this->faker->nik(),
            'telepon' => mt_rand(12, 12),
            'email' => $this->faker->email(),
            'tgl_lahir' => 20000701,
            'tempat_lahir' => $this->faker->sentence(3),
            'jmlh_bantuan' => $this->faker->randomNumber(7, true),
            'jenis_bantuan' => 'Program Keluarga Harapan (PKH)',
            'provinsi' => 'Nusa Tenggara Barat',
            'kabupaten' => 'Lombok Timur',
            'kecamatan' => 'Pringgabaya',
            'desa' => 'Pohgading Timur',
            'rt_rw' => '01/05',
            'kode_pos' => mt_rand(4, 4)
        ];
    }
}
