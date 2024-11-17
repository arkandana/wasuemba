<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Redirect;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisataList = wisata::all(); // Mengambil semua data dari model Wisata
        return view('wisata', compact('wisataList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'image' => ['nullable', File::image()->max(2 * 1024)],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/wisata', 'public');
            $wisata = Wisata::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'image' => $imagePath,
            ]);
        } else {
            $wisata = Wisata::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
            ]);
        }


        // Redirect ke halaman utama atau halaman artikel setelah berhasil disimpan
        return redirect()->route('wisata.create')->with('success', 'Daftar Wisata berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wisata $wisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $wisata = Wisata::findOrFail($id);

        $wisata->delete();

        return Redirect::to('/wisata');
    }
}
