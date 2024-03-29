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
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi',
            'username.required' => 'Username harus diisi.',
            'password.required' => 'Password harus diisi.',
            'email.unique' => 'Email sudah dipakai.',
            'username.unique' => 'Username sudah dipakai.'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/admin/dashboard/account')->with('success', 'User berhasil ditambahkan.');
    }
}
