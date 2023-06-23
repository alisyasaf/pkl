@extends('layouts.mainMitra')
@include('partials.sidebarMitra')
@section('container-mitra')
<h2>Welcome, {{ auth()->user()->name }}</h2>
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">Nama Mitra</th>
            <th scope="col">Tanggal Jatuh Tempo</th>
            <th scope="col">Nominal</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($angsuran as $a)
        <tr>
            <td class="align-middle">{{ $a->mitra->fullname }}</td>
            <td class="align-middle">{{ $a->tanggal_jatuh_tempo }}</td>
            <td class="align-middle">{{ formatRUpiah($a->nominal) }}</td>
            <td class="align-middle">{{ $a->keterangan }}</td>

            @if ($a->keterangan === 'belum lunas')
            <td class="align-middle">
                <a class="btn btn-primary" href="/mitra/dashboard/pembayaran/{{ $a->id }}">
                    Bayar
                </a>
            </td>
            @else
            <td></td>
            @endif
        </tr>
    @endforeach

    </tbody>
</table>


@endsection

