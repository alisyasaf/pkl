@extends('layouts.mainAdmin')
@include('partials.sidebarAdmin')
@section('container-admin')
<h2>Verifikasi Angsuran</h2>
<div>
    <aside class="search float-right mr-3 mb-3">
        <input type="text" placeholder="Search..">
    </aside>
</div>
<table class="table table-bordered">
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
                <a class="btn btn-success" href="/pembayaran/verifikasi/{{ $p->angsuran_id }}">
                    Verifikasi
                </a>
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
