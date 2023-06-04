@if (Auth::user()->role==2)
@extends('layouts.mainMitra')
@section('container-mitra')
<div class="d-flex justify-content-center">
<div class="card text-center verifikasi">
    <div class="card-body">
<h3 class="mb-3" style="text-align: center; font-size:30pt">Bukti Bayar Berhasil Diupload</h3>
<i class="bi bi-patch-check text-white" style="font-size: 80pt; text-align:center"></i><br>
<a href="/mitra/dashboard" class="btn btn-light mt-5" style="font-weight:bold; width:50%">Kembali</a>
</div>
</div></div>
@endsection
@endif
