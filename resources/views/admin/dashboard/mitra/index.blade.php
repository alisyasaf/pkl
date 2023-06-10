@extends('layouts.mainAdmin')
@include('partials.sidebarAdmin')
@section('container-admin')

    <h1>Daftar Mitra</h1>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <div>
        <a href="/admin/dashboard/mitra/create" class="btn btn-primary mb-5 float-right mr-4 rounded">Tambah Data Mitra</a>
        <aside class="search float-right mr-3 mb-3">
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
        </aside>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Usaha</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @forelse ($mitra as $key=>$value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->fullname }}</td>
                    <td>{{ $value->nip }}</td>
                    <td>{{ $value->nama_usaha }}</td>
                    <td>
                            <a href="/admin/dashboard/mitra/{{ $value->id }}" class="badge bg-info">detail</a>
                        {{-- <a href="/admin/dashboard/mitra/{{ $item->id }}/show" class="badge bg-info">detail</a> --}}
                        <form action="/admin/dashboard/mitra/{{ $value->id }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="badge bg-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/search.js') }}"></script>
@endsection
