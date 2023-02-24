@extends('layouts.main')

@section('container')
    <h1>FAQ</h1>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <a href="/admin/dashboard/faq/create" class="btn btn-primary">Tambah FAQ</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Jawaban</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($faqs as $key=>$value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->question }}</td>
                        <td>{{ $value->answer }}</td>
                        <td>
                            <form action="/admin/dashboard/faq/{{ $value->id }}" method="post" class="d-inline">
                                <a href="/admin/dashboard/faq/{{ $value->id }}/edit" class="badge bg-info">edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="badge bg-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
