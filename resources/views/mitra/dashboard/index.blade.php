@extends('layouts.mainMitra')
@include('partials.sidebarMitra')
@section('container-mitra')
    <h2>Selamat Datang, {{ auth()->user()->name }}</h2>
    <div class="flex-container mt-4">
        <div class="row">
            <div class="col-sm-2 bi bi-person-circle" style="font-size: 90pt; margin: 0 0 3% 5%"></div>
            <div class="col-sm-5 bio" style="padding-left: 30px; padding-top: 0%">
                <p style="font-size:16pt; margin-bottom: 10px">{{ auth()->user()->name }}</p>
                <p style="font-size:14pt; margin-bottom: 10px">Mitra</p>
                <p style="font-size:14pt">ID</p>
            </div>
        </div>

        <div class="profil">
            <h4>Profil</h4>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Nama Peminjam :</span>
                <td class="col-sm-9">{{ $mitra->fullname}}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">NIP :</span>
                <td class="col-sm-9">{{ $mitra->nip }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Jenis Usaha :</span>
                <td class="col-sm-9">{{ $mitra->jenis_usaha }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Nama Usaha :</span>
                <td class="col-sm-9">{{ $mitra->nama_usaha }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Alamat Mitra :</span>
                <td class="col-sm-9">{{ $mitra->alamat }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Alamat Usaha :</span>
                <td class="col-sm-9">{{ $mitra->alamat_usaha }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Aset Awal :</span>
                <td class="col-sm-9">{{ formatRupiah($mitra->aset_awal) }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Nominal Pinjaman :</span>
                <td class="col-sm-9">{{ formatRupiah($mitra->nominal_pinjaman) }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Tanggal Mulai Pinjam :</span>
                <td class="col-sm-9">{{ $mitra->tanggal_mulai }}</td>
            </div>
            <div class="row mb-1">
                <span class="col-sm-6 form-span">Tanggal Selesai Pinjam :</span>
                <td class="col-sm-7">{{ $mitra->tanggal_selesai }}</td>
            </div>
        </div>
    </div>
@endsection
