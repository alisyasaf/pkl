@if (Auth::user()->role==2)
@extends('layouts.main')
@include('partials.sidebarMitra')
@section('container')

<div class="container mt-4 d-flex flex-column">
<h1 cla>Pembayaran Angsuran</h1>
<div class="flex-containerr">
<div class="kontainer mt-3">
<p class="nominal">Nominal: {{ $angsuran->nominal }}</p>
<form action="/mitra/dashboard/pembayaran" method="post" enctype="multipart/form-data">
    <!-- Add CSRF Token -->
    @csrf
     <div class="form-group">
      <h6 for="pembayaran">Bulan Bayar</h6>
      <input type="month" id="bulan_bayar" name="bulan_bayar">
      @error('bulan_bayar')
      <span class="text-red-600 text-sm">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
        <h6 for="Upload">Bukti Bayar</h6>
        <input type="file" name="bukti_bayar">
        @error('bukti_bayar')
        <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <input type="text" name="id" value="{{ $angsuran->id }}" hidden>


    <button type="submit" class="btn btn-primary float-end" style="width: 100px; border-radius: 15px;">Submit</button>
  </form>
</div>
</div>
</div>
  @endsection
  @endif
