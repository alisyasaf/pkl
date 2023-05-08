@extends('layouts.main')
@include('partials.sidebarAdmin')
@section('container')
<h1>Welcome, {{ auth()->user()->name }}</h1>
<table>
    <thead>
        <tr>
            <th>Mitra</th>
            <th>Tanggal Jatuh Tempo</th>
            <th>Nominal</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($angsuran as $a)
        <tr>
            <td>{{ $a->mitra->nama_usaha }}</td>
            <td>{{ $a->tanggal_jatuh_tempo }}</td>
            <td>{{ $a->nominal }}</td>
            <td>{{ $a->keterangan }}</td>
            <td><a href="/mitra/dashboard/pembayaran/{{ $a->id }}">Bayar</a></td>
        </tr>
    @endforeach

    </tbody>
</table>


@endsection

