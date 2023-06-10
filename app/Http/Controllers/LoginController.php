<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->role == 1){
                return redirect()->intended('/admin/dashboard');
            }
            if(Auth::user()->role == 2){
                return redirect()->intended('/mitra/dashboard');
            }
        }

        // Failed login attempt
        return back()->withErrors(['loginError' => 'Login gagal. Username atau password salah.']);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/');
    }

}
