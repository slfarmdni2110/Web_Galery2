@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <a href="/posts/create" class="btn" style="background-color: #ffcc00; color: white; border-radius: 25px; padding: 8px 20px; margin-bottom: 20px;">+Post</a>
            <table class="table table-bordered table-hover" style="background-color: #f8f9fa;">
                <thead style="background-color: #0054a6; color: white;">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Petugas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ optional($post->category)->title ?? 'Kategori tidak tersedia' }}</td>
                        <td>{{ optional($post->petugas)->name ?? 'Petugas tidak tersedia' }}</td>
                        <td>
                            <span class="badge {{ Str::lower($post->status) == 'publish' ? 'bg-success' : 'bg-warning' }}">
                                {{ Str::ucfirst($post->status) }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-1">
                                <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#postDetail{{ $post->id }}" title="Detail">
                                    <i data-feather="info"></i>
                                </button>
                                <a href="/posts/{{ $post->id }}/edit" class="btn" style="background-color: #ffcc00; color: white; border-radius: 25px; padding: 6px 12px; margin-bottom: 5px;" title="Edit">
                                    <i data-feather="edit"></i>
                                </a>
                                <form action="/posts/{{ $post->id }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn" style="background-color: #ff4d4d; color: white; border-radius: 25px; padding: 6px 12px; margin-bottom: 5px;" onclick="return confirm('Apakah Anda yakin?')" title="Hapus">
                                        <i data-feather="trash"></i>
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

@foreach ($posts as $post)
<div class="modal fade" id="postDetail{{ $post->id }}" tabindex="-1" aria-labelledby="postDetailLabel{{ $post->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0054a6; color: white;">
                <h1 class="modal-title fs-5" id="postDetailLabel{{ $post->id }}"><i data-feather="info"></i> Detail Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Judul</strong></td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal dibuat</strong></td>
                        <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Dibuat oleh</strong></td>
                        <td>{{ optional($post->petugas)->name ?? 'Petugas tidak tersedia' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        <td>{{ Str::ucfirst($post->status) }}</td>
                    </tr>
                    <tr>
                        <td><strong>Kategori</strong></td>
                        <td>{{ optional($post->category)->title ?? 'Kategori tidak tersedia' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Isi</strong></td>
                        <td>{{ $post->content }}</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
