@extends('admin.layout')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm mx-auto" style="max-width: 1200px;">
            <div class="card-header" style="background-color: #004d99; color: white; text-align: center;">
                <h5>Edit Post</h5> <!-- Ubah judul menjadi Edit Post -->
            </div>
            <div class="card-body" style="background-color: #f0f8ff;">
                <form action="{{ url('/posts/' . $post->id) }}" method="POST">
                    @csrf
                    @method('put') <!-- Tambahkan metode PUT untuk update data -->

                    <div class="form-group mb-3">
                        <label for="title" class="form-label" style="color: #004d99;">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" required value="{{ old('title', $post->title) }}" style="border-radius: 10px; border: 1px solid #004d99;">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="category_id" class="form-label" style="color: #004d99;">Kategori</label>
                                <select name="category_id" id="category_id" class="form-control" required style="border-radius: 10px; border: 1px solid #004d99;">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" 
                                            @if(old('category_id', $post->category_id) == $category->id) selected @endif>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label" style="color: #004d99;">Status</label>
                        <select name="status" id="status" class="form-control" required style="border-radius: 10px; border: 1px solid #004d99;">
                            <option value="publish" @if(old('status', $post->status) == 'publish') selected @endif>Publish</option>
                            <option value="draft" @if(old('status', $post->status) == 'draft') selected @endif>Draft</option>
                        </select>
                        @error('status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="content" class="form-label" style="color: #004d99;">Isi</label>
                        <textarea name="content" id="content" class="form-control" required style="border-radius: 10px; border: 1px solid #004d99;">{{ old('content', $post->content) }}</textarea>
                        @error('content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn" style="background-color: #004d99; color: white; border-radius: 25px; font-weight: bold; width: 100%; padding: 12px 20px; transition: background-color 0.3s ease;">
                        Perbaharui
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
