<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua post yang ada
        $posts = Post::all(); 

        return response()->json([
            'posts' => $posts,
            'message' => 'Post list retrieved successfully'
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data kategori
        $categories = Category::all();

        return response()->json([
            'categories' => $categories,
            'message' => 'Categories retrieved successfully'
        ], Response::HTTP_OK);
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
        $post = Post::create($validatedData);

        return response()->json([
            'post' => $post,
            'message' => 'Post successfully created'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cari post berdasarkan ID
        $post = Post::findOrFail($id);

        return response()->json([
            'post' => $post,
            'message' => 'Post retrieved successfully'
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Cari post berdasarkan ID
        $post = Post::findOrFail($id);

        // Ambil semua kategori
        $categories = Category::all();

        return response()->json([
            'post' => $post,
            'categories' => $categories,
            'message' => 'Post and categories retrieved successfully'
        ], Response::HTTP_OK);
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

        return response()->json([
            'post' => $post,
            'message' => 'Post successfully updated'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari post berdasarkan ID
        $post = Post::findOrFail($id);
        
        // Hapus post
        $post->delete();

        return response()->json([
            'message' => 'Post successfully deleted'
        ], Response::HTTP_NO_CONTENT);
    }
}
