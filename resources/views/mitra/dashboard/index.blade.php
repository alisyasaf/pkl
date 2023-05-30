@extends('layouts.main')
@include('partials.sidebarMitra')
@section('container')
<h2>Selamat, {{ auth()->user()->name }}</h2>
<div class="flex-container mt-4" >
    <div class="row" >
       <div class="col-sm-2 bi bi-person-circle" style="font-size: 90pt; margin: 0 0 5% 5%"></div>
       <div class="col-sm-5 bio" style="padding-left: 30px; padding-top: 0%">
        <p style="font-size:16pt; margin-bottom: 10px">{{ auth()->user()->name }}</p>
        <p style="font-size:14pt; margin-bottom: 10px">Mitra</p>
        <p style="font-size:14pt">ID</p>
       </div>
    </div>

    <div class="profil mt-1">
        <h3>Profil</h3>
        <div class="row mb-1 ">
            <span class="col-sm-6 form-span">Nama Peminjam :</span>
            <td class="col-sm-9">{{ $mitra->fullname }}</td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">NIP :</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Jenis Usaha :</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Nama Usaha :</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Alamat Mitra :</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Alamat Usaha :</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Aset Awal :</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Nominal Pinjaman</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Tanggal Mulai Pinjam :</span>
            <td class="col-sm-9"></td>
        </div>
        <div class="row mb-1">
            <span class="col-sm-6 form-span">Tanggal Selesai Pinjam :</span>
            <td class="col-sm-7"></td>
        </div>
    </div>
</div>
@endsection

