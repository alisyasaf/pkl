@if (Auth::user()->role==2)
@extends('layouts.mainMitra')
@include('partials.sidebarMitra')
@section('container-mitra')

<div class="container mt-4 d-flex flex-column container-bayar">
    <h1>Pembayaran Angsuran</h1>
    <div class="flex-containerr">
        <div class="kontainer mt-3">
            <p class="nominal">Nominal: {{ formatRupiah($angsuran->nominal) }}</p>
            <form action="/mitra/dashboard/pembayaran" method="post" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf

                <div class="form-group">
                    <label for="tanggal_bayar">Tanggal Bayar</label>
                    <input type="date" id="tanggal_bayar" name="tanggal_bayar"
                        class="form-control datepicker @error('tanggal_bayar') is-invalid @enderror"
                        value="{{ old('tanggal_bayar', date('d-m-Y')) }}">
                    @error('tanggal_bayar')
                        <div class="invalid-feedback" style="color: red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="nominal_bayar">Nominal Bayar</label>
                    <input type="text" id="nominal_bayar" name="nominal_bayar"
                        class="form-control @error('nominal_bayar') is-invalid @enderror">
                    @error('nominal_bayar')
                        <div class="invalid-feedback" style="color: red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="bukti_bayar">Bukti Bayar</label>
                    <input type="file" name="bukti_bayar"
                        class="form-control-file @error('bukti_bayar') is-invalid @enderror">
                    @error('bukti_bayar')
                        <div class="invalid-feedback" style="color: red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <input type="text" name="id" value="{{ $angsuran->id }}" hidden>

                <button type="submit" class="btn btn-primary float-right" style="border-radius: 15px;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@endif
