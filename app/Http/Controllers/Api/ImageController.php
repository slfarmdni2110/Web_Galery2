<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the images.
     */
    public function index()
    {
        // Retrieve all images from the database
        $images = Image::all();

        // Return a JSON response with the list of images
        return response()->json([
            'success' => true,
            'data' => $images,
        ], 200); // HTTP OK
    }

    /**
     * Store a newly created image in storage.
     */
    public function store(Request $request)
    {
        // Validate data from the request
        $request->validate([
            'gallery_id' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
            'title' => 'required',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Generate a unique file name
        $fileName = time() . '.' . $file->extension();

        // Move the file to storage (public/images folder)
        $filePath = $file->storeAs('images', $fileName, 'public');

        // Save image data to the database
        $image = Image::create([
            'file' => $filePath,
            'title' => $request->title,
            'gallery_id' => $request->gallery_id,
        ]);

        // Return a response
        return response()->json([
            'success' => true,
            'message' => 'Foto berhasil ditambahkan',
            'data' => $image,
        ], 201); // HTTP Created
    }

    /**
     * Remove the specified image from storage.
     */
    public function destroy($id)
    {
        // Find the image by ID
        $image = Image::find($id);

        // Check if the image exists
        if (!$image) {
            return response()->json([
                'success' => false,
                'message' => 'Image not found',
            ], 404); // Not Found
        }

        // Construct the file path (based on how it was stored)
        $filePath = public_path('storage/' . $image->file);

        // Check if the file exists before trying to delete it
        if (file_exists($filePath)) {
            // Delete the file from storage
            unlink($filePath);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'File not found',
            ], 404); // Not Found
        }

        // Delete the image record from the database
        $image->delete();

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Foto berhasil dihapus',
        ], 204); // HTTP No Content
    }
}
