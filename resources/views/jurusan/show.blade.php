@extends('layout.main')

@section('content')
<div class="container mt-5">
    <!-- Judul Halaman -->
    <h2 class="text-center text-primary font-weight-bold" style="font-size: 2.5rem; letter-spacing: 1px;">
        {{ $jurusanData['name'] }}
    </h2>
    
    <div class="row mt-4">
        <!-- Kolom Gambar Jurusan -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <img src="{{ asset('images/' . $jurusanData['image']) }}" 
                     class="card-img-top img-fluid" 
                     alt="{{ $jurusanData['name'] }}" 
                     style="object-fit: cover; max-width: 100%; height: auto; transition: transform 0.3s ease-in-out;">
            </div>
        </div>

        <!-- Kolom Deskripsi -->
        <div class="col-md-6 mb-4 d-flex flex-column justify-content-center align-items-start">
            <h3 class="text-primary" style="font-size: 1.8rem; font-weight: bold;">Deskripsi Singkat</h3>
            <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem; margin-bottom: 20px;">{{ $jurusanData['description'] }}</p>

            <h3 class="text-primary" style="font-size: 1.8rem; font-weight: bold;">Deskripsi Lengkap</h3>
            <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem; margin-bottom: 20px;">{{ $jurusanData['full_description'] }}</p>

            <!-- Deskripsi Tambahan (Keunggulan) -->
            <h3 class="text-primary" style="font-size: 1.8rem; font-weight: bold;">Keunggulan</h3>
            <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">{{ $jurusanData['extra_description'] }}</p>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary rounded-pill px-5 py-3" 
           style="font-size: 1.2rem; letter-spacing: 1px; transition: all 0.3s ease;">
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection
