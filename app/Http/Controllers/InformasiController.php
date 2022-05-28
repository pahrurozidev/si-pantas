<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\JenisBantuan;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function show(Informasi $informasi)
    {
        return view("main.detail", [
            "informasi" => $informasi,
            "jenisBantuan" => JenisBantuan::where("id", $informasi->jenisBantuan_id)->get()
        ]);
    }
}
