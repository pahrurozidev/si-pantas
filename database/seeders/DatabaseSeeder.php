<?php

namespace Database\Seeders;

use App\Models\Informasi;
use App\Models\JenisBantuan;
use App\Models\Penerima;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // user
        // User::factory(3)->create();

        // informasi
        // Informasi::factory(3)->create();

        // penerima
        Penerima::factory(30)->create();
        Penerima::create([
            'nama' => 'Pahrurozi',
            'nik' => '5203080107001524',
            'telepon' => '085338043144',
            'email' => 'pahrurozi17@gmail.com',
            'tgl_lahir' => 20000701,
            'tempat_lahir' => 'Bagek Gaet',
            'jenis_bantuan' => 'Program Keluarga Harapan (PKH)',
            'jmlh_bantuan' => 2000000,
            'provinsi' => 'Nusa Tenggara Barat',
            'kabupaten' => 'Lombok Timur',
            'kecamatan' => 'Pringgabaya',
            'desa' => 'Pohgading Timur',
            'rt_rw' => '01/05',
            'kode_pos' => '83654'
        ]);

        // jenis bantuan
        JenisBantuan::create([
            "nama_bantuan" => "Program Keluarga Harapan (PKH)",
        ]);
        JenisBantuan::create([
            "nama_bantuan" => "Bantuan Pangan Non Tunai (BPNT)",
        ]);
        JenisBantuan::create([
            "nama_bantuan" => "Bantuan Sosial Tunai (BST)",
        ]);
        JenisBantuan::create([
            "nama_bantuan" => "Bantuan Masyarakat Miskin",
        ]);
        JenisBantuan::create([
            "nama_bantuan" => "Jaringan Pengaman Sosial (JPS)",
        ]);
        JenisBantuan::create([
            "nama_bantuan" => "Penerima Bantuan Iuran Jaminan Kesehatan Nasional Kartu Indonesia Sehat
                                Pembiayaan Nasional (PBIN)",
        ]);
        JenisBantuan::create([
            "nama_bantuan" => "Penerima Bantuan Iuran Jaminan Kesehatan Nasional Kartu Indonesia Sehat
                                Pembiayaan Daerah (PBID)",
        ]);
        JenisBantuan::create([
            "nama_bantuan" => "Bantuan Program Indonesia Pintar (BPIP)",
        ]);
    }
}
