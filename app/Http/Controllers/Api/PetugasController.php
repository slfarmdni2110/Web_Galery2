<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Petugas::all();
        return response()->json([
            'success' => true,
            'data' => $petugas,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:petugas,email',
            'password' => 'required|string|min:6',
        ]);

        // Simpan petugas ke database
        $petugas = Petugas::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Petugas berhasil ditambahkan',
            'data' => $petugas,
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        return response()->json([
            'success' => true,
            'data' => $petugas,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:petugas,email,' . $petugas->id,
            'password' => 'nullable|string|min:6',
        ]);

        $petugas->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $petugas->password,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Petugas berhasil diupdate',
            'data' => $petugas,
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        $petugas->delete();
        return response()->json([
            'success' => true,
            'message' => 'Petugas berhasil dihapus',
        ], Response::HTTP_NO_CONTENT);
    }
}
