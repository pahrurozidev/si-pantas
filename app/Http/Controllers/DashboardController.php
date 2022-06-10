<?php

namespace App\Http\Controllers;

use App\Models\JenisBantuan;
use App\Models\Laporan;
use App\Models\Penerima;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function daftarPenerima()
    {
        return view("main.daftarPenerima", [
            "dataPenerima" => Penerima::all()
        ]);
    }

    public function bantuan()
    {
        $penerima = Penerima::where('nik', auth()->user()->nik)->get();
        return view('dashboard.warga.bantuan', [
            'penerima' => $penerima
        ]);
    }

    public function updateBantuanRoleDesa(Request $request, Penerima $penerima)
    {
        $validatedData = $request->validate([
            'status_desa' => 'required'
        ]);

        Penerima::where('id', $penerima->id)->update($validatedData);
        return redirect("/dashboard/desa/penerima")->with("successUpdate", "Berhasil terverifikasi");
    }

    public function updateBantuanRoleWarga(Request $request, Penerima $penerima)
    {
        $validatedData = $request->validate([
            'status_warga' => 'required'
        ]);

        Penerima::where('id', $penerima->id)->update($validatedData);
        return redirect("/dashboard/warga/bantuan")->with("successUpdate", "Berhasil terverifikasi");
    }

    public function create()
    {
        return view('dashboard.warga.laporan', [
            "jenisBantuan" => JenisBantuan::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "question1" => "required",
            "question2" => "required",
            "jenis_bantuan" => "required",
            "bentuk_bantuan" => "required",
        ]);

        if ($validatedData["bentuk_bantuan"] === 'Tunai') {
            $validatedData["jumlah1"] = $request->jumlah1;
            $validatedData["jumlah2"] = $request->jumlah2;
        }

        $validatedData["slug"] = strtoupper(substr(md5(time()), 0, 5));
        $validatedData["deskripsi"] = $request->deskripsi;
        $validatedData["nama"] = auth()->user()->nama;
        $validatedData["nik"] = auth()->user()->nik;
        $validatedData["telepon"] = auth()->user()->telepon;
        $validatedData["email"] = auth()->user()->email;
        $validatedData["tgl_lahir"] = auth()->user()->tgl_lahir;
        $validatedData["username"] = auth()->user()->username;
        $validatedData["jmlh_bantuan"] = auth()->user()->jmlh_bantuan;

        $validatedData["provinsi"] = auth()->user()->provinsi;
        $validatedData["kabupaten"] = auth()->user()->kabupaten;
        $validatedData["kecamatan"] = auth()->user()->kecamatan;
        $validatedData["desa"] = auth()->user()->desa;
        $validatedData["rt_rw"] = auth()->user()->rt_rw;
        $validatedData["kode_pos"] = auth()->user()->kode_pos;
        $validatedData["tempat_lahir"] = auth()->user()->tempat_lahir;

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
        return view("dashboard.admin.detailLaporan", [
            "laporan" => $laporan
        ]);
    }

    public function destroy(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);
        return redirect("/dashboard/admin/laporan")->with("successDestroy", "Laporan berhasil dihapus");
    }

    public function penerimaRoleAdmin()
    {
        return view("dashboard.admin.penerima", [
            "dataPenerima" => Penerima::all()
        ]);
    }

    public function penerimaRoleAdminDetail(Penerima $penerima)
    {
        return view("dashboard.admin.detailPenerima", [
            "penerima" => $penerima
        ]);
    }

    public function penerimaRoleDesa()
    {
        return view("dashboard.desa.penerima", [
            "dataPenerima" => Penerima::all()
        ]);
    }

    public function penerimaRoleDesaDetail(Penerima $penerima)
    {
        return view("dashboard.desa.detailPenerima", [
            "penerima" => $penerima
        ]);
    }

    public function detailBantuan(Penerima $penerima)
    {
        return view("dashboard.warga.detailBantuan", [
            "penerima" => $penerima
        ]);
    }

    public function history()
    {
        $penerima = Penerima::where('nik', auth()->user()->nik)->get();
        return view('dashboard.warga.history', [
            'penerima' => $penerima
        ]);
    }

    public function detailHistory(Penerima $penerima)
    {
        return view("dashboard.warga.detailHistory", [
            "penerima" => $penerima
        ]);
    }

    public function historyRoleDesa()
    {
        return view("dashboard.desa.history", [
            "dataPenerima" => Penerima::where('status_desa', '=', 'verifikasi')->where('status_warga', '=', 'verifikasi')->get()
        ]);
    }

    public function detailHistoryRoleDesa(Penerima $penerima)
    {
        return view("dashboard.desa.detailHistory", [
            "penerima" => $penerima
        ]);
    }
}
