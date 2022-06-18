<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        // $user = User::all();
        // // dd($user);

        // dd(auth()->attempt());

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/");
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
