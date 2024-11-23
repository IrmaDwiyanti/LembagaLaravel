<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class BeritaController extends Controller
{
    public function index() {
        $berita = Berita::where('user_id', Auth::id())->get();
        return view('pages.dashboard.berita.index', compact('berita'));
    }

    public function create() {
        return view('pages.dashboard.berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'date' => 'required|date',
            'content' => 'required',
        ]);

        Berita::create([
            'title' => $request->title,
            'author' => $request->author,
            'date' => $request->date,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}


