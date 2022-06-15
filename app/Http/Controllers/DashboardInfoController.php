<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\JenisBantuan;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class DashboardInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pen = Informasi::all();
        // dd($pen);
        return view("dashboard.admin.informasi.index", [
            "informasi" => Informasi::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.admin.informasi.create", [
            "jenisBantuan" => JenisBantuan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "judul_informasi" => "required|min:5",
            "jmlh_bantuan" => "required",
            "jenisBantuan_id" => "required",
            "target_penerima" => "required",
            "bantuan_perorang" => "required",
            "provinsi" => "required",
            "kabupaten" => "required",
            "kecamatan" => "required",
            "desa" => "required",
            "deskripsi" => "required|min:20",
        ]);

        $validatedData["provinsi"] = substr($validatedData["provinsi"], 2);
        $validatedData["kabupaten"] = substr($validatedData["kabupaten"], 4);
        $validatedData["kecamatan"] = substr($validatedData["kecamatan"], 6);
        $validatedData["desa"] = substr($validatedData["desa"], 10);
        $validatedData["slug"] = strtoupper(substr(md5(time()), 0, 5));

        Informasi::create($validatedData);
        return redirect("/dashboard/admin/informasi")->with("success", "Bantuan berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        return view("dashboard.admin.informasi.detail", [
            "informasi" => $informasi,
            "jenisBantuan" => JenisBantuan::where("id", $informasi->jenisBantuan_id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        return view("dashboard.admin.informasi.edit", [
            "informasi" => $informasi,
            "jenisBantuan" => JenisBantuan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        $validatedData = $request->validate([
            "judul_informasi" => "required|min:5",
            "jmlh_bantuan" => "required",
            "jenisBantuan_id" => "required",
            "target_penerima" => "required",
            "bantuan_perorang" => "required",
            "provinsi" => "required",
            "kabupaten" => "required",
            "kecamatan" => "required",
            "desa" => "required",
            "deskripsi" => "required|min:20",
        ]);

        $validatedData["provinsi"] = substr($validatedData["provinsi"], 2);
        $validatedData["kabupaten"] = substr($validatedData["kabupaten"], 4);
        $validatedData["kecamatan"] = substr($validatedData["kecamatan"], 6);
        $validatedData["desa"] = substr($validatedData["desa"], 10);
        $validatedData["slug"] = $informasi->slug;

        Informasi::where("id", $informasi->id)->update($validatedData);
        return redirect("/dashboard/admin/informasi")->with("successUpdate", "Bantuan berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        Informasi::destroy($informasi->id);
        return redirect("/dashboard/admin/informasi")->with("successDestroy", "Bantuan berhasil dihapus");
    }
}
