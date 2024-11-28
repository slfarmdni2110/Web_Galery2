@extends('admin.layout')
@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg" style="border-radius: 15px; border: 1px solid #0054a6;">
            <div class="card-body">
                <!-- Menambahkan margin bawah pada tombol +Kategori -->
                <a href="/categories/create" class="btn" style="background-color: #ffcc00; color: white; border-radius: 25px; padding: 8px 20px; margin-bottom: 15px;">+ Kategori</a>
                <table class="table table-bordered table-hover table-striped" style="background-color: #f8f9fa;">
                    <thead style="background-color: #0054a6; color: white;">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->title }}</td>
                                <td>
                                    <div class="d-flex gap-2"> <!-- Menambahkan jarak antar tombol Edit dan Hapus -->
                                        <a href="/categories/{{ $category->id }}/edit" class="btn" style="background-color: #ffcc00; color: white; border-radius: 25px; padding: 6px 12px;">
                                            <i data-feather="edit"></i> Edit
                                        </a>
                                        <form action="/categories/{{ $category->id }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn" style="background-color: #ff4d4d; color: white; border-radius: 25px; padding: 6px 12px;">
                                                <i data-feather="trash"></i> Hapus
                                            </button>
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

    <!-- Load Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
@endsection
