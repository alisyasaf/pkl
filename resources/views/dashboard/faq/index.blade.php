@extends('layouts.main')

@section('container')
<h1>FAQ</h1>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<div class="table-responsive">
    <a href="/dashboard/faq/create" class="btn btn-primary">Tambah FAQ</a>
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
        @foreach ($faqs as $faq)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $faq->question }}</td>
          <td>{{ $faq->answer }}</td>
          <td>
            <a href="/dashboard/faq/edit" class="badge bg-info">edit</a>
            <form action="/dashboard/faq/{faq}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="badge bg-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">delete</button>
            </form>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection

