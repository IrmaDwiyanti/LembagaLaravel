<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    public function index() {
        // Jika pengguna adalah admin, ambil semua berita
        if (Auth::user()->roles == 'admin') {
            $berita = Berita::paginate(5); // Admin melihat semua berita
        } else {
            $berita = Berita::where('user_id', Auth::id())->paginate(5); // Author hanya melihat berita miliknya
        }
        //$berita_terbaru = Berita::orderBy('date', 'desc')->take(4)->get();
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
    
    public function show($id){
    $berita = Berita::findOrFail($id); 
    return view('pages.dashboard.berita.detail', compact('berita'));
    }

    //Menamilkan berita ke halaman home
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


    // Menyimpan berita baru
    public function store(Request $request){
    $request->validate([
        'title' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'author' => 'required',
        'date' => 'required|date',
        'content' => 'required',
        'status' => 'required|in:"0","1"',
 
    ]);
    $status = $request->input('status', '0');
    $path = $request->file('image')->store('images', 'public');

    Berita::create([
        'title' => $request->title,
        'author' => $request->author,
        'date' => $request->date,
        'content' => $request->content,
        'image' => $path,
        'status' => $status,  
        'user_id' => Auth::id(),
    ]);

    return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    //Update
    public function update(Request $request, $id) {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required|string',
            'status' => 'required|in:"0","1"',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $status = $request->input('status', '0');


        $berita->title = $request->title;
        $berita->author = $request->author;
        $berita->date = $request->date;
        $berita->content = $request->content;
        $berita->status = $request->status;
        

        if ($request->hasFile('image')) {
            if ($berita->image && Storage::exists('public/' . $berita->image)) {
                Storage::delete('public/' . $berita->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $berita->image = $imagePath;
        }
        $berita->save();

        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }
}