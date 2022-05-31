<?php

namespace App\Http\Controllers;

use App\Models\JenisBantuan;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function create()
    {
        return view('dashboard.warga.laporan');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "question1" => "required",
            "question2" => "required",
            "question3" => "required"
        ]);

        $validatedData["slug"] = strtoupper(substr(md5(time()), 0, 5));
        $validatedData["jenis_bantuan"] = JenisBantuan::where('id', auth()->user()->jenis_bantuan)->get()[0]->nama_bantuan;
        $validatedData["jmlh_bantuan"] = auth()->user()->jmlh_bantuan;

        $validatedData["nama"] = auth()->user()->nama;
        $validatedData["nik"] = auth()->user()->nik;
        $validatedData["telepon"] = auth()->user()->telepon;
        $validatedData["email"] = auth()->user()->email;
        $validatedData["tgl_lahir"] = auth()->user()->tgl_lahir;
        $validatedData["username"] = auth()->user()->username;
        $validatedData["deskripsi"] = $request->deskripsi;

        Laporan::create($validatedData);
        return redirect("/dashboard/warga/laporan")->with("success", "Laporan berhasil dikirim dan akan diproses");
    }

    public function show()
    {
        return view("dashboard.admin.laporan", [
            "semuaLaporan" => Laporan::all()
        ]);
    }

    public function detail(Laporan $laporan)
    {
        return view("dashboard.admin.detail", [
            "laporan" => $laporan
        ]);
    }

    public function destroy(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);
        return redirect("/dashboard/admin/laporan")->with("successDestroy", "Laporan berhasil dihapus");
    }
}
