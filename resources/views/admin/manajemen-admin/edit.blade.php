@extends('admin.layout')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg" style="border-radius: 15px; border: 1px solid #0054a6;">
            <div class="card-body">
                <form action="/petugas/{{ $petugas->id }}" method="post">
                    @csrf
                    @method('put')  <!-- Menggunakan metode PUT untuk update -->

                    <div class="form-group mb-3">
                        <label for="name" class="font-weight-bold" style="color: #0054a6;">Nama</label>
                        <input type="text" name="name" class="form-control shadow-sm" id="name" value="{{ $petugas->name }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="font-weight-bold" style="color: #0054a6;">Email</label>
                        <input type="email" name="email" class="form-control shadow-sm" id="email" value="{{ $petugas->email }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="font-weight-bold" style="color: #0054a6;">Password</label>
                        <input type="password" name="password" class="form-control shadow-sm" id="password">
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password</small>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn" style="background-color: #ffcc00; color: white; border-radius: 25px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                            Perbarui
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
