@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-12 col-md-4 mb-4">
        <div class="card" style="border-color: #374c7a;">
            <div class="card-body">
                <h5 class="card-title" style="color: #374c7a;">Informasi Galeri</h5>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>Judul Post</strong></td>
                        <td>:</td>
                        <td>{{ $gallery->post ? $gallery->post->title : 'No Title' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Posisi</strong></td>
                        <td>:</td>
                        <td>{{ $gallery->position ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        <td>:</td>
                        <td>
                            <span class="badge {{ $gallery->status == 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                                {{ Str::ucfirst($gallery->status) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Dibuat Pada</strong></td>
                        <td>:</td>
                        <td>{{ \Carbon\Carbon::parse($gallery->created_at)->format('d M Y') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-8">
        <div class="card" style="border-color: #374c7a; position: relative;">
            <div class="card-header" style="background-color: #374c7a; color: white;">
                <h4 class="m-0 p-0"><i data-feather="image" style="color: white;"></i> Foto</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn" style="background-color: #fe9814; border-color: #fe9814; color: white; position: absolute; top: 5px; right: 10px;" data-bs-toggle="modal" data-bs-target="#addImageModal">
                    + Foto
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <form action="/images/store" method="POST" enctype="multipart/form-data" class="modal-content">
                        @csrf <!-- Perbaikan penulisan @csrf -->
                        <div class="modal-header">
                            <h5 class="modal-title text-secondary" id="addImageModalLabel">Tambah Foto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        dd({{ $gallery->id }});
                        <div class="modal-body text-secondary">
                            <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                          
                            <div class="mb-3">
                                <label for="file">Foto</label>
                                <input type="file" name="file" id="file" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="title">Judul</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn" style="background-color: #fe9814; border-color: #fe9814; color: white;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-body bg-light">

                <!-- Show error validation if any -->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0 p-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Show success message if any -->
                @if (session('success'))
                <div class="alert alert-success">{{ session('success')}}</div>
                @endif

                <div class="row">
                    @forelse ($gallery->images as $image)
                    <div class="col-12 col-md-4">
                        <div class="card" style="border-color: #374c7a;">
                            <img src="{{ asset('images/' . $image->file) }}" alt="{{ $image->title }}" class="img-fluid">
                            <div class="p-2">
                                <h5>{{ $image->title }}</h5>

                                <form action="/images/{{ $image->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link btn-sm d-block ms-auto" onclick="return confirm('Apakah anda yakin ingin menghapus?')" style="color: #dc3545;">
                                        <i data-feather="trash-2" class="text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-warning">Tidak ada Foto.</div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection