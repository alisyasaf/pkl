@if (Auth::user()->role==2)
@extends('layouts.mainMitra')
@include('partials.sidebarMitra')
@section('container-mitra')

<div class="container mt-4 d-flex flex-column">
    <h1>Pembayaran Angsuran</h1>
    <div class="flex-containerr">
        <div class="kontainer mt-3">
            <p class="nominal">Nominal: {{ formatRupiah($angsuran->nominal) }}</p>
            <form action="/mitra/dashboard/pembayaran" method="post" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf

                <div class="form-group">
                    <label for="bulan_bayar">Bulan Bayar</label>
                    <input type="month" id="bulan_bayar" name="bulan_bayar"
                        class="form-control @error('bulan_bayar') is-invalid @enderror">
                    @error('bulan_bayar')
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

                <button type="submit" class="btn btn-primary" style="border-radius: 15px;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@endif
