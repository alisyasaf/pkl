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
            'tanggal_bayar' => 'required',
            'bukti_bayar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'nominal_bayar' => 'required|numeric'
        ], [
            'tanggal_bayar.required' => 'Bulan Bayar harus diisi.',
            'nominal_bayar.required' => 'Nominal Bayar harus diisi.',
            'nominal_bayar.numeric' => 'Nominal Bayar harus berupa angka.',
            'bukti_bayar.required' => 'Bukti Bayar harus diisi.',
            'bukti_bayar.image' => 'File yang diunggah harus berupa gambar.',
            'bukti_bayar.mimes' => 'File yang diunggah harus memiliki format jpg, png, jpeg, gif, atau svg.',
            'bukti_bayar.max' => 'Ukuran file yang diunggah tidak boleh lebih dari 2048 kb.'
        ]);

        $image_path = $request->file('bukti_bayar')->store('bukti_bayar', 'public');

        $data = Pembayaran::create([
            'angsuran_id' => $request['id'],
            'tanggal_bayar' => $request['tanggal_bayar'],
            'nominal_bayar' => $request['nominal_bayar'],
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
