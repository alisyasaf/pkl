<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMitraRequest;
use App\Http\Requests\UpdateMitraRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.mitra.index',[
            'title' => 'Daftar Mitra',
            'mitra' => Mitra::orderBy('fullname', 'ASC')->paginate(50)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['user_id' => User::where('role', '2')->pluck('name', 'id')];
        return view('admin.dashboard.mitra.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMitraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'nip' => 'required',
            'jenis_usaha' => 'required',
            'nama_usaha' => 'required',
            'alamat' => 'required',
            'alamat_usaha' => 'required',
            'aset_awal' => 'required',
            'nominal_pinjaman' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        DB::table('mitra')->insert([
            'id' => $request['id'],
            'user_id' => $request['user_id'],
            'fullname' => $request['fullname'],
            'nip' => $request['nip'],
            'jenis_usaha' => $request['jenis_usaha'],
            'nama_usaha' => $request['nama_usaha'],
            'alamat' => $request['alamat'],
            'alamat_usaha' => $request['alamat_usaha'],
            'aset_awal' => $request['aset_awal'],
            'nominal_pinjaman' => $request['nominal_pinjaman'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_selesai' => $request['tanggal_selesai'],

        ]);

        return redirect('/admin/dashboard/mitra')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $mitra = DB::table('mitra')->find($id);
        // return view('admin.dashboard.mitra.show', [
        //     'mitra' => $mitra
        // ]);
        $mitra = Mitra::find($id);
        return view('admin.dashboard.mitra.show', ['mitra'=>$mitra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMitraRequest  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'nip' => 'required',
        //     'answer' => 'required'
        // ]);

        // DB::table('mitra')
        // ->where('id', $id)
        // ->update([
        //     // 'id' => $request['id'],
        //     'question' => $request['question'],
        //     'answer' => $request['answer']
        // ]);
        // return redirect('/admin/dashboard/mitra/')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitra = Mitra::find($id);

        $mitra->delete();

        return redirect('/admin/dashboard/mitra')->with('success', 'Data mitra berhasil dihapus.');
    }
}
