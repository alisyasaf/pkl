@extends('layouts.main')
@include('partials.sidebarAdmin')
@section('container')

<table>
    <thead>
        <tr>
            <th>Bulan Bayar</th>
            <th>Bukti Bayar</th>
            <th>Mitra</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pembayaran as $p)
        <tr>
            <td>
                {{ $p->bulan_bayar }}
            </td>
            <td>
                <img src="/storage/{{ $p->bukti_bayar }}" alt="" srcset="" width="300px">
            </td>
            <td>{{ $p->mitra->nama_usaha }}</td>
            <td>
                {{ $p->angsuran->keterangan }}
            </td>

            @if($p->angsuran->keterangan === 'belum lunas')
            <td>
                <a href="/pembayaran/verifikasi/{{ $p->angsuran_id }}">
                    Verifikasi
                </a>
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
