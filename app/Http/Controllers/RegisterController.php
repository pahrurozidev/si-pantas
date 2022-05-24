<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required|max:255",
            "nik" => "required|max:255",
            "telepon" => "required|max:255",
            "email" => "required|email|unique:users",
            "tgl_lahir" => "required|max:255",
            "username" => "required|min:3|max:255|unique:users",
            "password" => "required|min:5|max:255",
            "konfirmasi_password" => "required|min:5|max:255"
        ]);

        if ($validatedData["password"] !== $validatedData["konfirmasi_password"]) {
            return redirect("/register")->with("passwordError", "Konfirmasi password tidak sesuai!");
        }

        $validatedData["password"] = Hash::make($validatedData["password"]);
        User::create($validatedData);

        return redirect("/login")->with("success", "Registrasi berhasil. Silakan masuk!");
    }
}
