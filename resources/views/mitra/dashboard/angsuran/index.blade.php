@extends('layouts.main')
@include('partials.sidebarMitra')
@section('container')
<h2>Welcome, {{ auth()->user()->name }}</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mitra</th>
            <th scope="col">Tanggal Jatuh Tempo</th>
            <th scope="col">Nominal</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($angsuran as $a)
        <tr>
            <td class="align-middle">{{ $a->mitra->nama_usaha }}</td>
            <td class="align-middle">{{ $a->tanggal_jatuh_tempo }}</td>
            <td class="align-middle">{{ $a->nominal }}</td>
            <td class="align-middle">{{ $a->keterangan }}</td>
            <td class="align-middle"><a href="/mitra/dashboard/pembayaran/{{ $a->id }}" class="btn btn-primary">Bayar</a></td>
        </tr>
    @endforeach

    </tbody>
</table>


@endsection

