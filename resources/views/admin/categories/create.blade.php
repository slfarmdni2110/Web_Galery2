@extends('admin.layout')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm mx-auto" style="max-width: 1200px;">
            <div class="card-header" style="background-color: #0054a6; color: white; text-align: center;">
                <h5>Tambah Kategori</h5>
            </div>
            <div class="card-body" style="background-color: #f7f9fc;">
                <form action="{{ url('/categories') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label" style="color: #0054a6;">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" required>
                    </div>

                    <button type="submit" class="btn" style="background-color: #ffcc00; color: white; border-radius: 25px; padding: 8px 20px; width: 100%;">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
