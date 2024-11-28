@extends('admin.layout')

@section('content')
    <div class="container my-5">
        <div class="card shadow-lg mx-auto" style="max-width: 1200px; border-radius: 15px;">
            <div class="card-header" style="background-color: #0066cc; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <h5>Tambah Post</h5>
            </div>
            <div class="card-body" style="background-color: #e9f2ff; border-radius: 10px;">
                <form action="{{ url('/posts') }}" method="post">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="title" class="form-label" style="color: #0066cc;">Judul</label>
                        <input type="text" name="title" class="form-control shadow-sm" id="title" required style="border-radius: 10px; border: 1px solid #0066cc;">
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="category_id" class="form-label" style="color: #0066cc;">Kategori</label>
                                <select name="category_id" id="category_id" class="form-control shadow-sm" required style="border-radius: 10px; border: 1px solid #0066cc;">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="status" class="form-label" style="color: #0066cc;">Status</label>
                        <select name="status" id="status" class="form-control shadow-sm" required style="border-radius: 10px; border: 1px solid #0066cc;">
                            <option value="">Pilih Status</option>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="content" style="color: #0066cc;">Isi</label>
                        <textarea name="content" id="content" class="form-control shadow-sm" required style="border-radius: 10px; height: 200px; border: 1px solid #0066cc;"></textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn" style="background-color: #0066cc; color: white; border-radius: 25px; font-weight: bold; padding: 12px 20px; transition: background-color 0.3s ease;">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
