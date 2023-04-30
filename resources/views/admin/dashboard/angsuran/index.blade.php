{{-- @extends('layouts.main') --}}

{{-- @section('container') --}}
    <h1>Data Angsuran</h1>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <a href="/admin/dashboard/angsuran/create" class="btn btn-primary">Tambah Data Angsuran</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Jatuh Tempo</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($angsuran as $key=>$value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->mitra->nama_usaha}}</td>
                    <td>{{ $value->tanggal_jatuh_tempo }}</td>
                    <td>{{ formatRupiah($value->nominal) }}</td>
                    <td>{{ $value->keterangan }}</td>
                    <td>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">delete</button>
                    </td>
                </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
{{-- @endsection --}}
