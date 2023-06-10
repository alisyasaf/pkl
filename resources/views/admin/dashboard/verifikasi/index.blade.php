@extends('layouts.mainAdmin')
@include('partials.sidebarAdmin')
@section('container-admin')
<h2>Verifikasi Angsuran</h2>
<div>
    <aside class="search float-right mr-3 mb-3">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
    </aside>
</div>
<table class="table mt-4">
    <thead>
        <tr>
            <th>Bulan Bayar</th>
            <th>Bukti Bayar</th>
            <th>Mitra</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="myTable">
        @foreach ($pembayaran as $p)
        <tr>
            <td>
                {{ $p->bulan_bayar }}
            </td>
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Bukti Bayar
                </button>
                {{-- <a class="" href="/storage/{{ $p->bukti_bayar }}" target="_blank">{{ $p->bukti_bayar }}</a> --}}
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="/storage/{{ $p->bukti_bayar }}" alt="" srcset="" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
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

<script src="{{ asset('js/search.js') }}"></script>
@endsection
