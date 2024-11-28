<!-- resources/views/navbar.blade.php -->
<nav class="navbar navbar-expand-lg" style="background-color: #0056A8; padding: 20px 0;">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-size: 30px; font-weight: bold; color: #f1c40f; text-transform: uppercase; letter-spacing: 2px;">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo SMKN 4 Bogor" style="height: 80px; margin-right: 15px;">
            <!-- Teks -->
            SMKN 4 Bogor
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: #f1c40f;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="font-size: 18px; color: #f1c40f; transition: transform 0.3s ease; padding: 8px 16px;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jurusan" style="font-size: 18px; color: #f1c40f; transition: transform 0.3s ease; padding: 8px 16px;">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeri" style="font-size: 18px; color: #f1c40f; transition: transform 0.3s ease; padding: 8px 16px;">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/agenda" style="font-size: 18px; color: #f1c40f; transition: transform 0.3s ease; padding: 8px 16px;">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/informasi" style="font-size: 18px; color: #f1c40f; transition: transform 0.3s ease; padding: 8px 16px;">Informasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Menambahkan animasi saat klik */
    .nav-link:active {
        transform: scale(1.1); /* Membesarkan tombol saat diklik */
        color: #e67e22; /* Ubah warna teks saat diklik */
    }
</style>
