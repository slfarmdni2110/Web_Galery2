@extends('admin.layout')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg" style="border-radius: 15px; border: 1px solid #0054a6;">
            <div class="card-header" style="background-color: #0054a6; color: white; border-radius: 15px 15px 0 0;">
                <h4 class="mb-0">Tambah Petugas</h4>
            </div>
            <div class="card-body" style="background-color: #f7f9fc; border-radius: 0 0 15px 15px;">
                <form action="/petugas" method="POST" class="needs-validation" novalidate>
                    @csrf

                    <!-- Nama -->
                    <div class="mb-4 row">
                        <label for="name" class="col-md-3 col-form-label" style="color: #0054a6;">Nama Lengkap:</label>
                        <div class="col-md-9">
                            <input type="text" name="name" id="name" class="form-control shadow-sm" required>
                            <div class="invalid-feedback">Nama harus diisi.</div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4 row">
                        <label for="email" class="col-md-3 col-form-label" style="color: #0054a6;">Email:</label>
                        <div class="col-md-9">
                            <input type="email" name="email" id="email" class="form-control shadow-sm" required>
                            <div class="invalid-feedback">Email harus diisi dan valid.</div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-4 row">
                        <label for="password" class="col-md-3 col-form-label" style="color: #0054a6;">Password:</label>
                        <div class="col-md-9">
                            <input type="password" name="password" id="password" class="form-control shadow-sm" required>
                            <div class="invalid-feedback">Password harus diisi.</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn" style="background-color: #ffcc00; color: white; border-radius: 50px; padding: 12px 30px; font-size: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease, transform 0.2s ease-in-out;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            Simpan
                        </button>

                        <!-- Tombol Batal -->
                        <a href="{{ url('/petugas') }}" class="btn btn-outline-secondary ms-3" style="border-radius: 50px; font-size: 16px; padding: 12px 30px; border: 2px solid #0054a6; color: #0054a6; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#0054a6'; this.style.color='white'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#0054a6'">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
