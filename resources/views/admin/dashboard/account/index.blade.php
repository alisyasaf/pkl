@extends('layouts.main')

@section('container')
    <h1>Manajemen Akun</h1>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <a href="/admin/dashboard/account/generate" class="btn btn-primary">Generate Akun</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $key=>$value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->username }}</td>
                        <td>{{ $value->password }}</td>
                        <td>{{ $value->role }}</td>
                        <td>

                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
