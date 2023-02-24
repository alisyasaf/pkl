@extends('layouts.main')
@section('container')

<div class="container mt-4">
<h1>Pembayaran</h1>
<form action="/entry-bukti" method="POST" enctype="multipart/form-data">
    <!-- Add CSRF Token -->
    @csrf
     <div class="form-group">
      <h6 for="pembayaran">Pembayaran s.d.</h6>
      <input type="month" id="bulan_bayar" name="bulan_bayar">

    </div>
    <div class="form-group">
        <h6 for="Upload">Bukti Bayar</h6>
        <input type="file" name="bukti">
    </div>


    <button type="submit" class="btn btn-primary" >Submit</button>
  </form>
</div>
  @endsection
