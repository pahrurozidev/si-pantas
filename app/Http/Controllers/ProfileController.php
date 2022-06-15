<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProfileController extends Controller
{
  public function index()
  {
    return view("dashboard.warga.profile.index");
  }

  public function edit()
  {
    return view("dashboard.warga.profile.edit");
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

    User::where('id', auth()->user()->id)->update($validatedData);
    return redirect('dashboard/warga/profile/index')->with('successUpdate', 'Data anda telah berhasil diperbarui');
  }
}
