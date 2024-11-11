<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Menampilkan form tambah artikel
    public function create()
    {
        return view('berita.create');
    }

    // Menyimpan artikel ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'author' => 'required|string',
        ]);

        // Simpan artikel
        Berita::create($validated);

        // Redirect ke halaman utama atau halaman artikel setelah berhasil disimpan
        return redirect()->route('berita.create')->with('success', 'Berita berhasil ditambahkan!');
    }
}
