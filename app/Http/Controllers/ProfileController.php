<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProfileController extends Controller
{
  public function index()
  {
    return view("dashboard.profile.index");
  }

  public function edit(User $user)
  {
    $response = Http::get('https://api.binderbyte.com/wilayah/provinsi?api_key=c21f5d686f436e800025b6154f433108667c89cd2bd8e84e852ddd5f808e7e31');
    $data = $response->json();

    return view("dashboard.profile.edit", [
      "user" => $user,
      "dataProvinsi" => $data["value"],
    ]);
  }

  public function update(Request $request)
  {
    $validatedData = $request->validate([
      "nama" => "required",
      "username" => "required",
      "nik" => "required",
      "telepon" => "required",
      "email" => "required",
      "tgl_lahir" => "required",
      "tempat_lahir" => "required",
      "provinsi" => "required",
      "kabupaten" => "required",
      "kecamatan" => "required",
      "desa" => "required",
      "rt_rw" => "required",
      "kode_pos" => "required",
    ]);

    $validatedData["provinsi"] = substr($validatedData["provinsi"], 2);
    $validatedData["kabupaten"] = substr($validatedData["kabupaten"], 4);
    $validatedData["kecamatan"] = substr($validatedData["kecamatan"], 6);
    $validatedData["desa"] = substr($validatedData["desa"], 10);

    Auth::user()->update($validatedData);
    return redirect('/profile/index')->with('successUpdate', 'Data anda telah berhasil diperbarui');
  }
}
