<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.manajemen-admin.index', [
            'title' => 'Daftar Petugas',
            'petugas' => Petugas::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manajemen-admin.create', [
            'title' => 'Tambah Petugas',
        ]);
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
        Petugas::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Redirect ke halaman petugas dengan pesan sukses
        return redirect('/petugas')->with('success', 'Petugas berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        return view('admin.manajemen-admin.edit', [
            'title' => 'Edit Petugas',
            'petugas' => $petugas,
        ]);
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

        return redirect('/petugas')->with('success', 'Petugas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        $petugas->delete();
        return redirect('/petugas')->with('success', 'Petugas berhasil dihapus');
    }
}
