<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('admin.dashboard.account.index',[
            'title' => 'Manajemen Akun',
            'users' => User::all()
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|max:255',
            'role' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/admin/dashboard/account')->with('success', 'User berhasil ditambahkan.');
    }
}
