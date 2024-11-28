<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    public function index() {
        $berita = Berita::where('user_id', Auth::id())->get();
        return view('pages.dashboard.berita.index', compact('berita'));
    }

    public function create() {
        return view('pages.dashboard.berita.create');
    }

    public function edit($id) {
        $berita = Berita::findOrFail($id);
        return view('pages.dashboard.berita.edit', compact('berita'));
    }

    public function delete($id)
    {
        $berita = Berita::findOrFail($id);
    
        // Hapus gambar jika ada
        if ($berita->image && Storage::exists('public/' . $berita->image)) {
            Storage::delete('public/' . $berita->image);
        }
    
        // Hapus data berita
        $berita->delete();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
    


    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required',
            'date' => 'required|date',
            'content' => 'required',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Berita::create([
            'title' => $request->title,
            'author' => $request->author,
            'date' => $request->date,
            'content' => $request->content,
            'image' => $path,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    //Update
    public function update(Request $request, $id)
{
    $berita = Berita::findOrFail($id);

    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'date' => 'required|date',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Update data berita
    $berita->title = $request->title;
    $berita->author = $request->author;
    $berita->date = $request->date;
    $berita->content = $request->content;

    // Jika ada gambar baru, simpan dan update
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($berita->image && Storage::exists('public/' . $berita->image)) {
            Storage::delete('public/' . $berita->image);
        }

        // Simpan gambar baru di folder `images` dalam disk `public`
        $imagePath = $request->file('image')->store('images', 'public');
        $berita->image = $imagePath; // Simpan path relatif file
    }

    // Simpan perubahan
    $berita->save();

    return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil diperbarui.');
}
}