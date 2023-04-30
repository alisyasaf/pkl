@extends('layouts.main')

@section('container')
    <h1>Daftar Mitra</h1>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <a href="/admin/dashboard/mitra/create" class="btn btn-primary">Tambah Data Mitra</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Usaha</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mitra as $key=>$value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->fullname }}</td>
                    <td>{{ $value->nip }}</td>
                    <td>{{ $value->nama_usaha }}</td>
                    <td>
                            <a href="/admin/dashboard/mitra/{{ $value->id }}" class="badge bg-info">detail</a>
                        {{-- <a href="/admin/dashboard/mitra/{{ $item->id }}/show" class="badge bg-info">detail</a> --}}
                            @csrf
                            @method('delete')
                            <button type="submit" class="badge bg-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">delete</button>
                    </td>
                </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
