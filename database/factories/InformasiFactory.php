<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InformasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "jenisBantuan_id" => mt_rand(1, 5),
            "judul_informasi" => $this->faker->sentence(mt_rand(10, 15)),
            "slug" => $this->faker->slug(2),
            'target_penerima' => mt_rand(30, 40),
            'bantuan_perorang' => mt_rand(300000, 400000),
            "jmlh_bantuan" => $this->faker->randomNumber(5, true),
            "provinsi" => $this->faker->randomElement(['Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Papua', 'Sulawesi', 'Jawa Timur']),
            "kabupaten" => $this->faker->randomElement(['Lombok Timur', 'Lombok Utara', 'Lombok Tengah', 'Lombok Barat', 'Sumbawa Barat']),
            "Kecamatan" => $this->faker->randomElement(['Pringgaya', 'Pringgarata', 'Pringgasela', 'Masbagik', 'Aikmel']),
            "desa" => $this->faker->randomElement(['Pohgading', 'Pohgading Timur', 'Kerumut', 'Pringgabaya', 'Batuyang']),
            "deskripsi" => $this->faker->sentence(mt_rand(50, 60))
        ];
    }
}
