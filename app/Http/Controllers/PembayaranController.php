<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use App\Models\Angsuran;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $id)
    {

        return view('mitra.dashboard.pembayaran.index',[
            "title" => "Pembayaran"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bulan_bayar' => 'required',
            'bukti_bayar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $image_path = $request->file('bukti_bayar')->store('bukti_bayar', 'public');

        $data = Pembayaran::create([
            'angsuran_id' => $request['id'],
            'bulan_bayar' => $request['bulan_bayar'],
            'bukti_bayar' => $image_path,
            'mitra_id' => auth()->user()->mitra->id,
        ]);

        return redirect('/mitra/dashboard/pembayaran/success')->with('success', 'Bukti bayar berhasil diupload.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }

    public function verifikasi(string $id)
    {
        // Retrieve the installment with the provided ID
    $angsuran = Angsuran::findOrFail($id);

    // Check if there is a payment record for the installment
    $pembayaran = Pembayaran::where('angsuran_id', $id)->first();

    if ($angsuran->keterangan === 'belum lunas') {
        $angsuran->update(['keterangan' => 'lunas']);
        return redirect('/admin/dashboard/verifikasi');
    } else {
        $angsuran->update(['keterangan' => 'belum lunas']);
        return redirect('/admin/dashboard/verifikasi');
    }
    }
}
