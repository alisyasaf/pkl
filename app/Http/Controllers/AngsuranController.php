<?php

namespace App\Http\Controllers;

use App\Models\Angsuran;
use App\Http\Requests\StoreAngsuranRequest;
use App\Http\Requests\UpdateAngsuranRequest;
use App\Models\Mitra;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.angsuran.index', [
            'title' => 'Daftar Angsuran Mitra',
            'angsuran' => Angsuran::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['mitra_id' => Mitra::all()->pluck('nama_usaha', 'id')];
        return view('admin.dashboard.angsuran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAngsuranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_jatuh_tempo' => 'required',
            'nominal' => 'required'
        ]);

        DB::table('angsuran')->insert([
            'id' => $request['id'],
            'mitra_id' => $request['mitra_id'],
            'tanggal_jatuh_tempo' => $request['tanggal_jatuh_tempo'],
            'nominal' => $request['nominal']
        ]);

        return redirect('/admin/dashboard/angsuran')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $angsuran = Angsuran::find($id);
        return view('admin.dashboard.mitra.show', ['angsuran'=>$angsuran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function edit(Angsuran $angsuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAngsuranRequest  $request
     * @param  \App\Models\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAngsuranRequest $request, Angsuran $angsuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $angsuran =  Angsuran::where('id', $id);
        $angsuran->delete();

        return redirect('/admin/dashboard/angsuran')->with('success', 'Data angsuran berhasil dihapus.');
    }
}
