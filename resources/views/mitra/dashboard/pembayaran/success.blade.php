@if (Auth::user()->role==2)
@extends('layouts.main')
@section('container')
<h1>Bukti bayar berhasil diupload</h1>
<a href="/mitra/dashboard">Kembali</a>
@endsection
@endif
