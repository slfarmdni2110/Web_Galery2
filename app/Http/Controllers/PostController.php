<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua post yang ada
        $posts = Post::all(); 

        return view('admin.posts.index', [
            'posts' => $posts,
            'title' => 'Post',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data kategori
        $categories = Category::all();

        // Tampilkan halaman create dan kirim data kategori
        return view('admin.posts.create', [
            'categories' => $categories,
            'title' => 'Buat Post',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|string',
            'content' => 'required',
        ]);

        // Tambahkan 'petugas_id' ke dalam array data
        $validatedData['petugas_id'] = Auth::id(); // Menggunakan petugas yang sedang login

        // Menyimpan post baru
        Post::create($validatedData);

        // Redirect ke halaman posts dengan pesan sukses
        return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Cari post berdasarkan ID
        $post = Post::findOrFail($id);

        // Ambil semua kategori dari database
        $categories = Category::all();

        // Tampilkan halaman edit dan kirim data post dan kategori
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|string|in:publish,draft',
            'content' => 'required|string',
        ]);
    
        // Cari post berdasarkan ID
        $post = Post::findOrFail($id);

        // Update data post
        $post->update($validatedData);
    
        // Set flash message untuk sukses
        session()->flash('success', 'Post berhasil diperbarui!');
    
        // Redirect kembali ke halaman daftar post
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari post berdasarkan ID dan hapus
        $post = Post::findOrFail($id);
        $post->delete();

        // Redirect kembali ke daftar posts dengan pesan sukses
        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus!');
    }
}
