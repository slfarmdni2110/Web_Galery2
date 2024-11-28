@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-body">
            <!-- Button to add new gallery with margin bottom -->
            <a href="{{ route('galleries.create') }}" class="btn" style="background-color: #0069B4; border-color: #0069B4; color: white; margin-bottom: 20px;">+ Galeri</a>
            
            <!-- Table -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Post</th>
                        <th>Posisi</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gallery->post ? $gallery->post->title : 'No title' }}</td>
                        <td>{{ $gallery->position }}</td>
                        <td>
                            @if ($gallery->status == 'aktif')
                            <span class="badge" style="background-color: #0069B4;">{{ Str::ucfirst($gallery->status) }}</span>
                            @else
                            <span class="badge" style="background-color: #6c757d;">{{ Str::ucfirst($gallery->status) }}</span>
                            @endif
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="/galleries/{{ $gallery->id }}" class="btn" style="background-color: #0069B4; border-color: #0069B4; color: white; margin-right: 10px;">
                                <i data-feather="info"></i> Detail
                            </a>
                            <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn" style="background-color: #ff9900; border-color: #ff9900; color: white; margin-right: 10px;">
                                <i data-feather="edit"></i> Edit
                            </a>
                            <form action="{{ route('galleries.destroy', $gallery->id) }}" method="post" onsubmit="return confirm('Apakah anda yakin?')" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn" style="background-color: #ff4d4d; border-color: #ff4d4d; color: white;">
                                    <i data-feather="trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .table {
        border-radius: 8px;
        overflow: hidden;
        background-color: #0069B4;
        color: white;
    }
    .table th, .table td {
        text-align: center;
    }
    .table thead th {
        background-color: #0069B4;
        color: white;
    }
    .table tbody tr:hover {
        background-color: #f1f9fc;
    }
    .table-bordered {
        border-color: #0069B4;
    }
    .table-bordered th, .table-bordered td {
        border: 1px solid #0069B4;
    }
    .btn {
        border-radius: 4px;
    }
    .btn-primary {
        background-color: #0069B4;
        border-color: #0069B4;
    }
    .btn-primary:hover {
        background-color: #005cbf;
        border-color: #004b94;
    }
    .btn-warning {
        background-color: #ff9900;
        border-color: #ff9900;
    }
    .btn-warning:hover {
        background-color: #e68a00;
        border-color: #d97a00;
    }
    .btn-danger {
        background-color: #ff4d4d;
        border-color: #ff4d4d;
    }
    .btn-danger:hover {
        background-color: #e33b3b;
        border-color: #d02a2a;
    }
</style>
@endpush
