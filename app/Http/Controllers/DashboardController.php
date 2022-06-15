<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
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
        return redirect("/dashboard/desa/penerima")->with("successUpdate", "Bantuan berhasil tersalurkan");
    }

    public function updateBantuanRoleWarga(Request $request, Penerima $penerima)
    {
        $validatedData = $request->validate([
            'status_warga' => 'required'
        ]);

        $status = Penerima::where('id', $penerima->id)->update($validatedData);
        // jika status_warga == verifikasi
        if ($status === 1) {
            // tambahkan ke tabel arsip
            $getPenerima = Penerima::where('id', $penerima->id)->get();
            $data = [
                'status_desa' => $getPenerima[0]->status_desa,
                'status_warga' => $getPenerima[0]->status_warga,
                'nama' => $getPenerima[0]->nama,
                'nik' => $getPenerima[0]->nik,
                'email' => $getPenerima[0]->email,
                'tempat_lahir' => $getPenerima[0]->tempat_lahir,
                'tgl_lahir' => $getPenerima[0]->tgl_lahir,
                'jenis_bantuan' => $getPenerima[0]->jenis_bantuan,
                'provinsi' => $getPenerima[0]->provinsi,
                'kabupaten' => $getPenerima[0]->kabupaten,
                'kecamatan' => $getPenerima[0]->kecamatan,
                'desa' => $getPenerima[0]->desa,
                'telepon' => $getPenerima[0]->telepon,
                'jmlh_bantuan' => $getPenerima[0]->jmlh_bantuan,
                'rt_rw' => $getPenerima[0]->rt_rw,
                'kode_pos' => $getPenerima[0]->kode_pos,
            ];

            if ($getPenerima[0]->status_desa === 'verifikasi' && $getPenerima[0]->status_warga === 'verifikasi') {
                Arsip::create($data);
                // destroy dari tabel penerima
                Penerima::destroy($penerima->id);
            }
        }
        return redirect("/dashboard/warga/bantuan")->with("successUpdate", "Bantuan berhasil tersalurkan");
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

        $user = auth()->user();
        if ($user->tempat_lahir === null || $user->provinsi === null || $user->kabupaten === null || $user->kecamatan === null || $user->desa === null || $user->rt_rw === null || $user->kode_pos === null) {
            return redirect("/dashboard/warga/laporan")->with("faild", "Laporan gagal dikirim, mohon lengkapi data anda!");
        }

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

    public function historyRoleWarga()
    {
        $penerima = Arsip::where('nik', auth()->user()->nik)->get();
        return view('dashboard.warga.history', [
            'penerima' => $penerima
        ]);
    }

    public function detailHistoryRoleWarga(Arsip $arsip)
    {
        return view("dashboard.warga.detailHistory", [
            "penerima" => $arsip->get()[0],
        ]);
    }

    public function historyRoleDesa()
    {
        return view("dashboard.desa.history", [
            "dataPenerima" => Arsip::where('status_desa', '=', 'verifikasi')->where('status_warga', '=', 'verifikasi')->get()
        ]);
    }

    public function detailHistoryRoleDesa(Arsip $arsip)
    {
        return view("dashboard.desa.detailHistory", [
            "penerima" => $arsip->get()[0],
        ]);
    }

    public function arsip()
    {
        return view("dashboard.admin.arsip", [
            "dataPenerima" => Arsip::where('status_desa', '=', 'verifikasi')->where('status_warga', '=', 'verifikasi')->get()
        ]);
    }

    public function detailArsip(Arsip $arsip)
    {
        return view("dashboard.admin.detailArsip", [
            "penerima" => $arsip->get()[0],
        ]);
    }
}
