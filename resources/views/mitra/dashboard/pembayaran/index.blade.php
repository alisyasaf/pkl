@if (Auth::user()->role==2)
@extends('layouts.main')
@section('container')

<div class="container mt-4">
<h1>Pembayaran</h1>
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


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection
  @endif
