<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaUserController extends Controller
{
    // Menampilkan berita berdasarkan user yang login
    public function index() {
        $berita = Berita::where('user_id', Auth::id())->paginate(10); 
        return view('pages copy.dashboard.berita.index', compact('berita'));
    }

    // Menampilkan form tambah berita
    public function create() {
        return view('pages copy.dashboard.berita.create');
    }

    // Menampilkan form edit berita
    public function edit($id) {
        $berita = Berita::where('user_id', Auth::id())->findOrFail($id); 
        return view('pages copy.dashboard.berita.edit', compact('berita'));
    }

    // Menyimpan berita baru
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required',
            'date' => 'required|date',
            'content' => 'required',
            /* 'status' => 'required|in:0,1', */
        ]);

       /*  $status = $request->input('status', '0'); */
        $path = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Berita::create([
            'title' => $request->title,
            'author' => $request->author,
            'date' => $request->date,
            'content' => $request->content,
            'image' => $path,
            /* 'status' => $status,  */ 
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('pages copy.dashboard.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Mengupdate berita
    public function update(Request $request, $id) {
        $berita = Berita::where('user_id', Auth::id())->findOrFail($id); 

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required|string',
            /* 'status' => 'required|in:0,1', */
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        /* $status = $request->input('status', '0'); */

        $berita->title = $request->title;
        $berita->author = $request->author;
        $berita->date = $request->date;
        $berita->content = $request->content;
       /*  $berita->status = $request->status; */

        if ($request->hasFile('image')) {
            if ($berita->image && Storage::exists('public/' . $berita->image)) {
                Storage::delete('public/' . $berita->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $berita->image = $imagePath;
        }

        $berita->save();

        return redirect()->route('pages copy.dashboard.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Menampilkan detail berita
    public function show($id) {
        $berita = Berita::findOrFail($id);
        return view('pages copy.dashboard.berita.detail', compact('berita'));
    }

    // Menghapus berita
    public function delete($id)
    {
        $berita = Berita::where('user_id', Auth::id())->findOrFail($id);

        // Hapus gambar jika ada
        if ($berita->image && Storage::exists('public/' . $berita->image)) {
            Storage::delete('public/' . $berita->image);
        }

        // Hapus berita
        $berita->delete();

        return redirect()->route('pages copy.dashboard.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    // Menampilkan berita terbaru di halaman home
    public function home()
    {
        $berita_terbaru = Berita::where('status', '1') 
            ->orderBy('date', 'desc') 
            ->take(4) 
            ->get();

        return view('home', compact('berita_terbaru'));
    }

    public function slideBerita()
    {
        $berita_terbaru = Berita::where('status', '1') 
            ->orderBy('date', 'desc') 
            ->paginate(4);

        return view('beritaslide', compact('berita_terbaru'));
    }

    public function contentberita($id)
    {
        $berita = Berita::findOrFail($id);
        $berita_terbaru = Berita::where('status', '1')->orderBy('date', 'desc')->take(4)->get();

        return view('contentberita', compact('berita', 'berita_terbaru'));
    }
}
