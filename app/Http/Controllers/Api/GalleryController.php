<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();

        return response()->json([
            'success' => true,
            'message' => 'List of galleries',
            'data' => $galleries,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required|exists:posts,id',
            'position' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors(),
            ], 422);
        }

        $gallery = Gallery::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Gallery created successfully',
            'data' => $gallery,
        ], 201);
    }

    public function show($id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json([
                'success' => false,
                'message' => 'Gallery not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Gallery details',
            'data' => $gallery,
        ]);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json([
                'success' => false,
                'message' => 'Gallery not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'post_id' => 'nullable|exists:posts,id',
            'position' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors(),
            ], 422);
        }

        $gallery->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Gallery updated successfully',
            'data' => $gallery,
        ]);
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json([
                'success' => false,
                'message' => 'Gallery not found',
            ], 404);
        }

        $gallery->delete();

        return response()->json([
            'success' => true,
            'message' => 'Gallery deleted successfully',
        ]);
    }
}
