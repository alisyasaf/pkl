<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMitraRequest;
use App\Http\Requests\UpdateMitraRequest;
use App\Models\Angsuran;
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
        'aset_awal' => 'required|numeric',
        'nominal_pinjaman' => 'required|numeric',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
    ], [
        'fullname.required' => 'Nama Lengkap harus diisi.',
        'nip.required' => 'NIP harus diisi.',
        'nip.numeric' => 'NIP harus berupa angka.',
        'jenis_usaha.required' => 'Jenis Usaha harus diisi.',
        'nama_usaha.required' => 'Nama Usaha harus diisi.',
        'alamat.required' => 'Alamat harus diisi.',
        'alamat_usaha.required' => 'Alamat Usaha harus diisi.',
        'aset_awal.required' => 'Aset Awal harus diisi.',
        'aset_awal.numeric' => 'Aset Awal harus berupa angka.',
        'nominal_pinjaman.required' => 'Nominal Pinjaman harus diisi.',
        'nominal_pinjaman.numeric' => 'Nominal Pinjaman harus berupa angka.',
        'tanggal_mulai.required' => 'Tanggal Mulai harus diisi.',
        'tanggal_selesai.required' => 'Tanggal Selesai harus diisi.',
    ]);

    try {
        // Format tanggal menjadi "dd-mm-yyyy"
        $tanggal_mulai = date('d-m-Y', strtotime($request->input('tanggal_mulai')));
        $tanggal_selesai = date('d-m-Y', strtotime($request->input('tanggal_selesai')));

        Mitra::create([
            'user_id' => $request['user_id'],
            'fullname' => $request['fullname'],
            'nip' => $request['nip'],
            'jenis_usaha' => $request['jenis_usaha'],
            'nama_usaha' => $request['nama_usaha'],
            'alamat' => $request['alamat'],
            'alamat_usaha' => $request['alamat_usaha'],
            'aset_awal' => $request['aset_awal'],
            'nominal_pinjaman' => $request['nominal_pinjaman'],
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai
        ]);

        return redirect('/admin/dashboard/mitra')->with('success', 'Data berhasil diupdate.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.'])->withInput();
    }
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
       //
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

    public function angsuran()
    {
        $mitra_id = auth()->user()->mitra->id;
        $angsuran = Angsuran::where('mitra_id', $mitra_id)->orderBy('updated_at', 'desc')->get();
        return view('mitra.dashboard.angsuran.index', [
            'title' => 'Daftar Angsuran',
            'angsuran'=>$angsuran
        ]);
    }

    public function pembayaran(string $id)
    {
        $angsuran = Angsuran::where('id', $id)->first();
        return view('mitra.dashboard.pembayaran.index',[
            "title" => "Pembayaran",
            "angsuran" => $angsuran
        ]);
    }
    public function profile()
    {
        $user = auth()->user();
        $mitra = $user->mitra;
        return view('mitra.dashboard.index', compact('mitra'), [
            "title" => "Dashboard"
        ]);
    }

    public function count()
    {
        $jumlah_mitra = Mitra::count();
        return view('home', [
            "title" => "Home",
            "jumlah_mitra" => $jumlah_mitra
        ]);
    }



}
