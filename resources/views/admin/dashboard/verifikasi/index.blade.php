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
            <th>Tanggal Bayar</th>
            <th>Nominal Bayar</th>
            <th>Nominal Seharusnya</th>
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
                {{ $p->tanggal_bayar }}
            </td>
            <td>
                {{ formatRupiah($p->nominal_bayar) }}
            </td>
            <td>
                {{ formatRupiah($p->angsuran->nominal) }}
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
            @if ($p->angsuran->keterangan === 'belum lunas')
    <td>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="verifikasiDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Verifikasi
            </button>
            <div class="dropdown-menu" aria-labelledby="verifikasiDropdown">
                <form method="POST" action="{{ route('pembayaran.verifikasi', ['angsuran' => $p->angsuran_id]) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="keterangan" value="lunas">
                    <button type="submit" class="dropdown-item">Lunas</button>
                </form>
                <form method="POST" action="{{ route('pembayaran.verifikasi', ['angsuran' => $p->angsuran_id]) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="keterangan" value="sudah bayar">
                    <button type="submit" class="dropdown-item">Sudah Bayar</button>
                </form>
            </div>
        </div>
    </td>
@endif



        </tr>
    @endforeach
    </tbody>
</table>

<script src="{{ asset('js/search.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
