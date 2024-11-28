@extends('layout.main')

@section('content')

<!-- Hero Section -->
<section id="beranda">
<div class="hero-section position-relative" style="width: 100%; margin: 0;">
    <!-- Background Hero (Foto lapangan lebih besar) -->
    <div class="hero-bg" 
         style="background-image: url('{{ asset('images/lapangan_smk.jpg') }}'); 
                height: 750px;
                background-size: cover;
                background-position: center;
                color: white;
                position: relative;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
                background-color: #0d47a1;">
    </div>

    <!-- Teks Selamat Datang -->
    <div class="hero-text position-absolute top-50 start-50 translate-middle text-center text-light">
        <h1 class="display-4" style="font-weight: 700; letter-spacing: 1px;">Selamat Datang di</h1>
        <h1 class="display-4" style="color: #FFD700; font-weight: 900; letter-spacing: 1px;">SMKN 4 Bogor</h1>
        <p class="mt-3" style="font-size: 1.2rem; font-style: italic; color: #FFD700; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
            "Membangun Generasi Emas Menuju Masa Depan Gemilang"
        </p>
    </div>
</div>


<!-- Tentang Kami Section -->
<div class="container my-5">
    <div id="about" class="row align-items-center mb-5">
        <div class="col-md-12">
            <div class="card shadow-lg border-0 rounded-4 box-hover">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="me-4">
                        <img src="{{ asset('images/smkn4.jpg') }}" alt="Logo SMKN 4 Bogor" class="img-fluid rounded-3 shadow-sm hover-shadow" style="width: 1000px; height: auto; object-fit: cover; transition: transform 0.3s ease-in-out; border: 4px solid #0074B7;">
                    </div>
                    <div>
                        <h2 class="mb-3 text-primary" style="font-weight: 700; font-size: 2rem; color: #0074B7;">Tentang Kami</h2>
                        <p style="line-height: 1.8; font-size: 1.1rem; text-align: justify; color: #0074B7;">
                            Merupakan sekolah kejuruan berbasis Teknologi Informasi dan Komunikasi. Sekolah ini didirikan pada tahun 2008 dan dibuka pada tahun 2009. Terletak di Jalan Raya Tajur Kp. Buntar, Muarasari, Bogor, sekolah ini berdiri di atas lahan seluas 12.724 m2 dengan berbagai fasilitas pendukung di dalamnya. Terdapat 54 staff pengajar dan 22 orang staff tata usaha, dikepalai oleh Drs. Mulya Mulprihartono, M. Si.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan CSS -->
<style>
/* Efek hover untuk box */
.box-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box-hover:hover {
    transform: translateY(-10px); /* Geser sedikit ke atas */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
}
</style>


<!-- Sambutan Kepala Sekolah Section -->
<div class="container my-5">
    <div id="sambutan-kepala-sekolah" class="row align-items-center mb-5">
        <div class="col-md-12">
            <div class="card shadow-lg border-0 rounded-4 box-hover">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="me-4">
                        <!-- Gambar Kepala Sekolah dengan animasi hover -->
                        <img src="{{ asset('images/kepala_sekolah.jpg') }}"
                            alt="Kepala Sekolah"
                            class="img-fluid shadow-sm image-hover"
                            style="width: 900px; height: auto; 
                                    border-radius: 10px; 
                                    object-fit: cover; 
                                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
                                    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;">
                    </div>
                    <div>
                        <h2 class="mb-3 text-primary" style="font-weight: 700; font-size: 2.5rem; color: #0074B7;">Kepala Sekolah</h2>
                        <p style="line-height: 1.8; font-size: 1.1rem; text-align: justify; color: #0074B7;">
                            Sebagai kepala sekolah, saya menyampaikan apresiasi atas partisipasi semua pihak dalam mewujudkan SMKN 4 Bogor
                            sebagai sekolah unggulan berbasis teknologi. Kami terus berinovasi, meskipun dalam masa sulit pandemi, untuk mencetak
                            generasi muda yang berkualitas dan memiliki keunggulan kompetitif di era globalisasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan CSS -->
<style>
/* Efek hover untuk box */
.box-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box-hover:hover {
    transform: translateY(-10px); /* Geser box sedikit ke atas */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
}

/* Efek hover untuk gambar */
.image-hover:hover {
    transform: scale(1.05); /* Perbesar gambar sedikit */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Tambahkan bayangan */
}
</style>


<!-- Visi dan Misi Section -->
<div class="container my-5">
    <div id="visi-misi" class="row align-items-center mb-5">
        <!-- Box Visi -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 rounded-4 box-hover" style="min-height: 300px;">
                <div class="card-body p-4">
                    <h2 class="mb-3" style="font-weight: 700; font-size: 2rem; color: #0074B7;">Visi</h2>
                    <p style="line-height: 1.8; font-size: 1.1rem; text-align: justify; color: #0074B7;">
                        Terwujudnya SMK Pusat Keunggulan melalui terciptanya pelajar Pancasila yang berbasis teknologi, berwawasan lingkungan, dan berkewirausahaan.
                    </p>
                </div>
            </div>
        </div>
        <!-- Box Misi -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 rounded-4 box-hover" style="min-height: 300px;">
                <div class="card-body p-4">
                    <h2 class="mb-3" style="font-weight: 700; font-size: 2rem; color: #0074B7;">Misi</h2>
                    <ul style="line-height: 1.8; font-size: 1.1rem; padding-left: 1.5rem; color: #0074B7;">
                        <li>Mewujudkan karakter pelajar Pancasila yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.</li>
                        <li>Mengembangkan pembelajaran berbasis Teknologi Informasi.</li>
                        <li>Mengembangkan sekolah yang berwawasan Adiwiyata Mandiri.</li>
                        <li>Mengembangkan usaha dalam berbagai bidang secara optimal.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan CSS -->
<style>
/* Efek hover untuk box */
.box-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box-hover:hover {
    transform: translateY(-10px); /* Geser box sedikit ke atas */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
}

/* Pastikan ukuran box sama */
#visi-misi .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
</style>

    <!-- Section Jurusan -->
    <section id="jurusan" class="mt-5">
<div class="container mt-5 p-4" style="background-color: #f0f7ff; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <!-- Judul Section -->
    <h2 class="text-center mb-5" style="
        color: #0d47a1; 
        background: linear-gradient(to right, #0d47a1, #2196f3); 
        -webkit-background-clip: text; 
        -webkit-text-fill-color: transparent; 
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); 
        font-weight: bold;
        position: relative;">
        Kompetensi Keahlian
        <span style="
            position: absolute; 
            bottom: -10px; 
            left: 50%; 
            transform: translateX(-50%); 
            width: 80px; 
            height: 4px; 
            background: #0d47a1; 
            border-radius: 2px;">
        </span>
    </h2>

    <div class="container mt-5">
    <!-- Daftar Jurusan -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <!-- Jurusan PPLG -->
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden" style="transition: transform 0.3s, box-shadow 0.3s;">
                <img src="{{ asset('images/pplg.png') }}" class="card-img-top" alt="PPLG" style="height: 200px; object-fit: cover; transition: transform 0.3s;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #0d47a1; font-size: 1.4rem; font-weight: bold;">PPLG</h5>
                    <p class="card-text text-muted" style="font-size: 1.1rem;">Pengembangan Perangkat Lunak dan Gim.</p>
                    <a href="{{ route('jurusan.show', ['id' => 1]) }}" class="btn btn-primary rounded-pill mt-3" 
                       style="background-color: #0d47a1; border-color: #0d47a1; font-size: 1.1rem; padding: 10px 20px; transition: all 0.3s;">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Jurusan TKJ -->
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden" style="transition: transform 0.3s, box-shadow 0.3s;">
                <img src="{{ asset('images/tjkt.png') }}" class="card-img-top" alt="TKJ" style="height: 200px; object-fit: cover; transition: transform 0.3s;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #0d47a1; font-size: 1.4rem; font-weight: bold;">TKJ</h5>
                    <p class="card-text text-muted" style="font-size: 1.1rem;">Teknik Komputer dan Jaringan.</p>
                    <a href="{{ route('jurusan.show', ['id' => 2]) }}" class="btn btn-primary rounded-pill mt-3" 
                       style="background-color: #0d47a1; border-color: #0d47a1; font-size: 1.1rem; padding: 10px 20px; transition: all 0.3s;">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Jurusan Teknik Otomotif -->
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden" style="transition: transform 0.3s, box-shadow 0.3s;">
                <img src="{{ asset('images/tkr.png') }}" class="card-img-top" alt="Teknik Otomotif" style="height: 200px; object-fit: cover; transition: transform 0.3s;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #0d47a1; font-size: 1.4rem; font-weight: bold;">TO</h5>
                    <p class="card-text text-muted" style="font-size: 1.1rem;">Perawatan dan perbaikan kendaraan bermotor.</p>
                    <a href="{{ route('jurusan.show', ['id' => 3]) }}" class="btn btn-primary rounded-pill mt-3" 
                       style="background-color: #0d47a1; border-color: #0d47a1; font-size: 1.1rem; padding: 10px 20px; transition: all 0.3s;">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Jurusan Teknik Pengelasan -->
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden" style="transition: transform 0.3s, box-shadow 0.3s;">
                <img src="{{ asset('images/tflm.jpeg') }}" class="card-img-top" alt="Teknik Pengelasan" style="height: 200px; object-fit: cover; transition: transform 0.3s;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #0d47a1; font-size: 1.4rem; font-weight: bold;">TP</h5>
                    <p class="card-text text-muted" style="font-size: 1.1rem;">Keahlian dalam proses pengelasan dan fabrikasi logam.</p>
                    <a href="{{ route('jurusan.show', ['id' => 4]) }}" class="btn btn-primary rounded-pill mt-3" 
                       style="background-color: #0d47a1; border-color: #0d47a1; font-size: 1.1rem; padding: 10px 20px; transition: all 0.3s;">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Galeri Foto Section -->
<section id="galeri" class="mt-5">
    <section class="gallery-section">
        <h1 class="gallery-title">Galeri Foto Sekolah</h1>
        <div class="gallery-container">
            @if(isset($images) && $images->isNotEmpty())
            @foreach($images as $image)
            <div class="gallery-item">
                <div class="image-wrapper">
                    <img src="{{ asset('images/' . $image->file) }}" alt="{{ $image->title }}" class="gallery-image">
                </div>
                <div class="gallery-content">
                    <h2 class="title">{{ $image->title }}</h2>
                    <p class="description">{{ Str::limit($image->description, 100) }}</p>
                </div>
            </div>
            @endforeach
            @else
            <p class="no-images-message">Tidak ada foto yang tersedia.</p>
            @endif
        </div>
    </section>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #fafafa;
            /* Warna latar belakang yang lebih cerah dan bersih */
            color: #333;
        }

        .gallery-section {
            padding: 50px 20px;
        }

        .gallery-title {
            text-align: center;
            color: #1e88e5;
            /* Sesuai dengan warna logo SMKN 4 Bogor */
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-bottom: 40px;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1.5s ease-out;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            /* Grid fleksibel yang menyesuaikan ukuran layar */
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            animation: fadeIn 2s ease-out;
        }

        .gallery-item {
            position: relative;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            /* Card terasa mengambang */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            /* Efek bayangan lebih dalam saat hover */
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            transition: opacity 0.4s ease;
        }

        .gallery-item:hover img {
            opacity: 0.75;
            /* Efek opacity pada gambar ketika card di-hover */
        }

        .gallery-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            /* Latar belakang gelap agar teks lebih terlihat */
            padding: 20px;
            color: #fff;
            border-radius: 0 0 12px 12px;
            transition: background-color 0.3s ease;
        }

        .gallery-item:hover .gallery-content {
            background: rgba(0, 0, 0, 0.8);
            /* Efek saat card di-hover */
        }

        .gallery-content .title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .gallery-content .description {
            font-size: 1rem;
            color: #ddd;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .no-images-message {
            text-align: center;
            font-size: 18px;
            color: #888;
            font-style: italic;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Responsivitas untuk layar kecil */
        @media (max-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                /* Menyesuaikan grid untuk layar kecil */
            }

            .gallery-title {
                font-size: 28px;
                /* Mengurangi ukuran judul untuk layar kecil */
            }
        }
    </style>

    <div class="container my-5">
        <div class="row">
            <!-- Box Lokasi -->
            <div class="col-md-6">
                <div class="card shadow" style="border: 2px solid #fbc02d;">
                    <div class="card-body" style="background-color: #fffde7; color: #fbc02d;">
                        <h3 class="card-title" style="font-weight: bold;">Lokasi Kami</h3>
                        <p>Berikut adalah lokasi SMKN 4 Bogor di peta:</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.04983961244!2d106.82211897499403!3d-6.640733393353795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMK%20Negeri%204%20Bogor%20(Nebrazka)!5e0!3m2!1sid!2sid!4v1732065100435!5m2!1sid!2sid"
                                width="550" height="450" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box Kontak -->
            <div class="col-md-6">
                <div class="card shadow" style="border: 2px solid #007bff; border-radius: 8px; overflow: hidden;">
                    <div class="card-header" style="background-color: #007bff; color: #ffffff; text-align: center;">
                        <h3 class="mb-0" style="font-weight: bold;">Kontak Kami</h3>
                    </div>
                    <div class="card-body" style="background-color: #e9f7fe; color: #007bff;">
                        <p class="mb-4">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui informasi di bawah ini:</p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-4">
                                <i class="fas fa-map-marker-alt me-2" style="color: #007bff; font-size: 1.25rem;"></i>
                                <div>
                                    <strong>Alamat:</strong>
                                    <br>
                                    Jl. Raya Tajur, Kp. Buntar RT.02/RW.08, Kel. Muara Sari, <br>
                                    Kec. Bogor Selatan, Kota Bogor, Jawa Barat 16137
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <i class="fas fa-phone-alt me-2" style="color: #007bff; font-size: 1.25rem;"></i>
                                <span>
                                    <strong>Telepon:</strong> 0251 7547381
                                </span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-envelope me-2" style="color: #007bff; font-size: 1.25rem;"></i>
                                <span>
                                    <strong>Email:</strong> smkn4@smkn4bogor.sch.id
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection