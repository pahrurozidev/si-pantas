<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\Informasi;
use App\Models\JenisBantuan;
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
        User::factory(3)->create();

        Informasi::factory(3)->create();

        History::factory(3)->create();

        // User::factory()->create([
        //     "nama" => "Pahrurozi",
        //     "nik" => "12345678",
        //     "telepon" => "085338043144",
        //     "email" => "pahrurozi172@gmail.com",
        //     "tgl_lahir" => "000701",
        //     "username" => "pahruroz17",
        //     "password" => "pahrurozi",
        // ]);

        // jenis bantuan
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 8),
            "nama_bantuan" => "Program Keluarga Harapan (PKH)",
        ]);
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 7),
            "nama_bantuan" => "Bantuan Pangan Non Tunai (BPNT)",
        ]);
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 6),
            "nama_bantuan" => "Bantuan Sosial Tunai (BST)",
        ]);
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 5),
            "nama_bantuan" => "Bantuan Masyarakat Miskin",
        ]);
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 4),
            "nama_bantuan" => "Jaringan Pengaman Sosial (JPS)",
        ]);
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 3),
            "nama_bantuan" => "Penerima Bantuan Iuran Jaminan Kesehatan Nasional Kartu Indonesia Sehat
                                Pembiayaan Nasional (PBIN)",
        ]);
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 9),
            "nama_bantuan" => "Penerima Bantuan Iuran Jaminan Kesehatan Nasional Kartu Indonesia Sehat
                                Pembiayaan Daerah (PBID)",
        ]);
        JenisBantuan::create([
            "slug" => substr(md5(time()), 0, 10),
            "nama_bantuan" => "Bantuan Program Indonesia Pintar (BPIP)",
        ]);
    }
}
