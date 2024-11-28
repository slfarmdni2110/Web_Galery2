@extends('admin.layout')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header d-flex justify-content-start">
                <a href="/petugas/create" class="btn" style="background-color: #ffcc00; color: white;">+ Petugas</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead style="background-color: #003b5c; color: white;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/petugas/{{ $user->id }}/edit" class="btn btn-warning btn-sm me-2">Edit</a>
                                        <form action="/petugas/{{ $user->id }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus petugas ini?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
