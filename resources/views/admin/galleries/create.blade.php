@extends('admin.layout')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm mx-auto" style="max-width: 1200px; border: 2px solid #003366; background-color: #f4f4f4;">
            <div class="card-header" style="background-color: #003366; color: white; text-align: center;">
                <!-- Menghapus teks 'Tambah Post' dan mengganti warna header sesuai dengan logo SMKN 4 Bogor -->
            </div>
            <div class="card-body">
                <form action="{{ url('/galleries') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="post_id">Judul Galeri</label>
                        <select name="post_id" class="form-control border border-primary" id="post_id" required>
                            <option value="">Pilih Post</option>
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}">{{ $post->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="position" class="form-label">Posisi</label>
                                <input type="number" name="position" class="form-control border border-primary" id="position" required>
                                <small>Nilai posisi harus berupa angka.</small>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control border border-primary" id="status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak-aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Simpan yang terletak di sebelah kanan -->
                    <div class="text-end">
                        <button type="submit" class="btn" style="background-color: #003366; color: white; border-radius: 25px; font-weight: bold; padding: 12px 20px; transition: background-color 0.3s ease;">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
