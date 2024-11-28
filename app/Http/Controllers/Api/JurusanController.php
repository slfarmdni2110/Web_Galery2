<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    // Menampilkan semua jurusan
    public function index()
    {
        $jurusan = [
            1 => [
                'name' => 'PPLG',
                'description' => 'Pengembangan Perangkat Lunak dan Gim.',
                'full_description' => 'Belajar membuat perangkat lunak dan gim dengan berbagai teknologi modern.',
                'extra_description' => 'PPLG mempersiapkan siswa untuk menjadi pengembang perangkat lunak yang siap menghadapi tantangan teknologi masa depan.',
                'image' => asset('images/pplg.png'),
            ],
            2 => [
                'name' => 'TKJ',
                'description' => 'Teknik Komputer dan Jaringan.',
                'full_description' => 'Mempelajari teknik mengelola jaringan komputer dan perangkat keras.',
                'extra_description' => 'TKJ membekali siswa dengan keahlian untuk mengelola dan merancang jaringan komputer yang handal.',
                'image' => asset('images/tjkt.png'),
            ],
            3 => [
                'name' => 'TO',
                'description' => 'Perawatan dan perbaikan kendaraan bermotor.',
                'full_description' => 'Belajar tentang perawatan dan perbaikan mesin kendaraan bermotor.',
                'extra_description' => 'Jurusan Teknik Otomotif menghasilkan tenaga ahli yang mampu memperbaiki dan merawat kendaraan dengan menggunakan teknologi terbaru.',
                'image' => asset('images/tkr.png'),
            ],
            4 => [
                'name' => 'TP',
                'description' => 'Keahlian dalam proses pengelasan dan fabrikasi logam.',
                'full_description' => 'Mempelajari berbagai teknik pengelasan dan fabrikasi logam untuk industri.',
                'extra_description' => 'Teknik Pengelasan mempersiapkan siswa untuk bekerja di industri manufaktur, dengan fokus pada pengelasan berbagai material logam.',
                'image' => asset('images/tflm.jpeg'),
            ],
        ];

        // Mengembalikan semua jurusan dalam format JSON
        return response()->json([
            'success' => true,
            'message' => 'Daftar Jurusan',
            'data' => $jurusan,
        ]);
    }

    // Menampilkan detail jurusan berdasarkan ID
    public function show($id)
    {
        $jurusan = [
            1 => [
                'name' => 'PPLG',
                'description' => 'Pengembangan Perangkat Lunak dan Gim.',
                'full_description' => 'Belajar membuat perangkat lunak dan gim dengan berbagai teknologi modern.',
                'extra_description' => 'PPLG mempersiapkan siswa untuk menjadi pengembang perangkat lunak yang siap menghadapi tantangan teknologi masa depan.',
                'image' => asset('images/pplg.png'),
            ],
            2 => [
                'name' => 'TKJ',
                'description' => 'Teknik Komputer dan Jaringan.',
                'full_description' => 'Mempelajari teknik mengelola jaringan komputer dan perangkat keras.',
                'extra_description' => 'TKJ membekali siswa dengan keahlian untuk mengelola dan merancang jaringan komputer yang handal.',
                'image' => asset('images/tjkt.png'),
            ],
            3 => [
                'name' => 'TO',
                'description' => 'Perawatan dan perbaikan kendaraan bermotor.',
                'full_description' => 'Belajar tentang perawatan dan perbaikan mesin kendaraan bermotor.',
                'extra_description' => 'Jurusan Teknik Otomotif menghasilkan tenaga ahli yang mampu memperbaiki dan merawat kendaraan dengan menggunakan teknologi terbaru.',
                'image' => asset('images/tkr.png'),
            ],
            4 => [
                'name' => 'TP',
                'description' => 'Keahlian dalam proses pengelasan dan fabrikasi logam.',
                'full_description' => 'Mempelajari berbagai teknik pengelasan dan fabrikasi logam untuk industri.',
                'extra_description' => 'Teknik Pengelasan mempersiapkan siswa untuk bekerja di industri manufaktur, dengan fokus pada pengelasan berbagai material logam.',
                'image' => asset('images/tflm.jpeg'),
            ],
        ];

        // Ambil data jurusan berdasarkan ID
        $jurusanData = $jurusan[$id] ?? null;

        // Jika data tidak ditemukan, kembalikan respon JSON 404
        if (!$jurusanData) {
            return response()->json([
                'success' => false,
                'message' => 'Jurusan not found',
            ], 404);
        }

        // Kembalikan data jurusan dalam format JSON
        return response()->json([
            'success' => true,
            'message' => 'Jurusan details',
            'data' => $jurusanData,
        ]);
    }
}
