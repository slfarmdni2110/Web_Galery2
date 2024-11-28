<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Get all images for the home page.
     */
    public function index()
    {
        // Ambil semua data galeri dari database
        $images = Image::all();

        // Kembalikan data dalam format JSON
        return response()->json([
            'success' => true,
            'message' => 'List of images',
            'data' => $images,
        ]);
    }

    /**
     * Get all images for the galeri page.
     */
    public function galeri()
    {
        // Ambil semua data galeri dari database
        $images = Image::all();

        // Kembalikan data dalam format JSON
        return response()->json([
            'success' => true,
            'message' => 'Gallery images',
            'data' => $images,
        ]);
    }

    /**
     * Get posts for the agenda page.
     */
    public function agenda()
    {
        // Ambil semua data dari tabel posts dengan category_id = 2
        $posts = Post::where('category_id', 2)->get();

        // Kembalikan data dalam format JSON
        return response()->json([
            'success' => true,
            'message' => 'Agenda posts',
            'data' => $posts,
        ]);
    }

    /**
     * Get posts for the informasi page.
     */
    public function informasi()
    {
        // Ambil posts yang memiliki category_id = 1
        $posts = Post::where('category_id', 1)->get();

        // Kembalikan data dalam format JSON
        return response()->json([
            'success' => true,
            'message' => 'Informasi posts',
            'data' => $posts,
        ]);
    }
}
