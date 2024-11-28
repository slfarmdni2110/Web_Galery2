<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function show($id)
    {
        // Data jurusan (contoh data statis)
        $jurusan = [
            1 => [
                'name' => 'PPLG',
                'description' => 'Pengembangan Perangkat Lunak dan Gim.',
                'full_description' => 'Belajar membuat perangkat lunak dan gim dengan berbagai teknologi modern.',
                'extra_description' => 'PPLG mempersiapkan siswa untuk menjadi pengembang perangkat lunak yang siap menghadapi tantangan teknologi masa depan.',
                'image' => 'pplg.png', // Nama gambar yang ada di public/images
            ],
            2 => [
                'name' => 'TKJ',
                'description' => 'Teknik Komputer dan Jaringan.',
                'full_description' => 'Mempelajari teknik mengelola jaringan komputer dan perangkat keras.',
                'extra_description' => 'TKJ membekali siswa dengan keahlian untuk mengelola dan merancang jaringan komputer yang handal.',
                'image' => 'tjkt.png',
            ],
            3 => [
                'name' => 'TO',
                'description' => 'Perawatan dan perbaikan kendaraan bermotor.',
                'full_description' => 'Belajar tentang perawatan dan perbaikan mesin kendaraan bermotor.',
                'extra_description' => 'Jurusan Teknik Otomotif menghasilkan tenaga ahli yang mampu memperbaiki dan merawat kendaraan dengan menggunakan teknologi terbaru.',
                'image' => 'tkr.png',
            ],
            4 => [
                'name' => 'TP',
                'description' => 'Keahlian dalam proses pengelasan dan fabrikasi logam.',
                'full_description' => 'Mempelajari berbagai teknik pengelasan dan fabrikasi logam untuk industri.',
                'extra_description' => 'Teknik Pengelasan mempersiapkan siswa untuk bekerja di industri manufaktur, dengan fokus pada pengelasan berbagai material logam.',
                'image' => 'tflm.jpeg',
            ]
        ];

        // Ambil data jurusan berdasarkan ID
        $jurusanData = $jurusan[$id] ?? null;

        // Jika data tidak ditemukan, tampilkan halaman 404
        if (!$jurusanData) {
            abort(404);
        }

        // Kirim data ke view
        return view('jurusan.show', compact('jurusanData'));
    }
}
