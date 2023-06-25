@extends('layouts.mainMitra')
@include('partials.sidebarMitra')
@section('container-mitra')
    <h2>Selamat Datang, {{ auth()->user()->name }}</h2>
    <div class="flex-container mt-4">
        <div class="row">
            <div class="col-sm-3 bi bi-person-circle profile-mitra" style="font-size: 90pt; margin: 0 0 20px 30px"></div>
            <div class="col-sm-5 bio" style="padding-left: 30px; padding-top: 0%">
                <p style="font-size:16pt; margin-bottom: 10px">{{ auth()->user()->name }}</p>
                <p style="font-size:14pt; margin-bottom: 10px">Mitra</p>
            </div>
        </div>

        <div class="profil">
            <h4>Profil</h4>
            <table class="table-mitra table table-borderless" style="border-spacing:20px">
                <tbody>
                    <tr>
                        <td class="nama-profil col-md-3" scope='row'>Nama Peminjam</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->fullname }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3" scope='row'>NIP/NIK</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->nip }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Jenis Usaha</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->jenis_usaha }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Nama Usaha</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->nama_usaha }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Alamat</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->alamat }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Alamat Usaha</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->alamat_usaha }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Aset Awal</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ formatRupiah($mitra->aset_awal) }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Nominal Pinjaman</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ formatRupiah($mitra->nominal_pinjaman) }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Tanggal Mulai Pinjam</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->tanggal_mulai }}</td>
                    </tr>
                    <tr>
                        <td class="nama-profil col-md-3">Tanggal Selesai Pinjam</td>
                        <td style="width: 4%">:</td>
                        <td class="col-mitra text-bold">{{ $mitra->tanggal_selesai }}</td>
                    </tr>
                </tbody>
            </table>
            {{-- <div class="row mb-1">
                <span class="col-sm-3 form-span">Nama Peminjam :</span>
                <td class="col-sm-9 col-mitra">{{ $mitra->fullname }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">NIP :</span>
                <td class="col-sm-9 col-mitra">{{ $mitra->nip }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Jenis Usaha :</span>
                <td class="col-sm-9 col-mitra">{{ $mitra->jenis_usaha }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Nama Usaha :</span>
                <td class="col-sm-9 col-mitra">{{ $mitra->nama_usaha }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Alamat Mitra :</span>
                <td class="col-sm-9 col-mitra">{{ $mitra->alamat }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Alamat Usaha :</span>
                <td class="col-sm-9 col-mitra">{{ $mitra->alamat_usaha }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Aset Awal :</span>
                <td class="col-sm-9 col-mitra">{{ formatRupiah($mitra->aset_awal) }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Nominal Pinjaman :</span>
                <td class="col-sm-9 col-mitra">{{ formatRupiah($mitra->nominal_pinjaman) }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Tanggal Mulai Pinjam :</span>
                <td class="col-sm-9 col-mitra">{{ $mitra->tanggal_mulai }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-3 form-span">Tanggal Selesai Pinjam :</span>
                <td class="col-sm-7 col-mitra">{{ $mitra->tanggal_selesai }}</td>
            </div> --}}
        </div>
    </div>
@endsection
