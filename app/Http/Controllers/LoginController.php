<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login.index", [
            "title" => "login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/dashboard/informasi");
        }

        return back()->with("loginError", "Email dan Password salah. Ulangi lagi!");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }
}
