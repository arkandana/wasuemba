<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;


class BeritaController extends Controller
{
    // Menampilkan form tambah artikel
    public function create()
    {
            return view('berita.create');
    }
    
    // Menyimpan artikel ke database
    public function store(Request $request): RedirectResponse
    {
        $userId = Auth::id();
        
        // Validasi input
        // $validated = $request->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'body' => ['required', 'string'],
        //     'author' => ['required', 'string'],
        // ]);
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'image' => ['nullable', File::image()->max(2 * 1024)],
        ]);

        // Simpan artikel
        // Berita::create($validated);

        // Loop untuk memastikan slug unik
        $title = $request->title;
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;
        while (Berita::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/berita', 'public');
            $berita = Berita::create([
                'title' => $request->title,
                'slug' => $slug,
                'body' => $request->body,
                'author_id' => $userId,
                'image' => $imagePath,
            ]);
        } else {
            $berita = Berita::create([
                'title' => $request->title,
                'slug' => $slug,
                'body' => $request->body,
                'author_id' => $userId,
            ]);
        }


        // Redirect ke halaman utama atau halaman artikel setelah berhasil disimpan
        return redirect()->route('berita.create')->with('success', 'Berita berhasil ditambahkan!');
    }
}
