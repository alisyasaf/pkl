@extends('layouts.mainAdmin')
@include('partials.sidebarAdmin')
@section('container-admin')
    <h1>Data Angsuran</h1>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <a href="/admin/dashboard/angsuran/create" class="btn btn-primary mb-5 float-right mr-4 rounded">Tambah Data Angsuran</a>
        <table class="table table-striped table-sm">
    <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Jatuh Tempo</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($angsuran as $key=>$value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->mitra->fullname}}</td>
                    <td>{{ $value->tanggal_jatuh_tempo }}</td>
                    <td>{{ formatRupiah($value->nominal) }}</td>
                    <td class="">{{ $value->keterangan }}</td>
                    <td>
                        <form action="/admin/dashboard/angsuran/{{ $value->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
