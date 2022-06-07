<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use APP\Models\User;

class ProfileController extends Controller
{

    public function index()
    {
      return view("dashboard.profile.index");
    }
  
    public function edit(Request $request)
    {
      $user = User::where("id", Auth::user()->id)->first();
      $request->validate([
            "nama" => "required|max:255",
            "nik" => "required|max:255",
            "telepon" => "required|max:255",
            "email" => "required|email|unique:users",
            "tgl_lahir" => "required|max:255",
            "alamat" => "required|max:255",
      ]);

      
        $user->nama =  $request->nama;
        $user ->nik =  $request->nik;
        $user ->telepon =$request->telepon;
        $user ->email = $request->email;
        $user ->tgl_lahir = $request->tgl_lahir;
        $user ->alamat = $request->alamat;
    
      return back()->with("success", "Profile berhasil diubah!");
      
    }
  

}


