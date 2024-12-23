<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan daftar pengguna
    public function index()
    {
        return view('pages.dashboard.user.index', [
            'users' => User::paginate(10)
        ]);
    }

    // Menampilkan form edit pengguna
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.dashboard.user.edit', compact('user'));
    }

    // Memproses pembaruan data pengguna
    public function update(Request $request, $id)
    {
        $request->validate([
            'roles' => 'required|integer|in:1,2', 
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'roles' => $request->roles, 
        ]);

        return redirect()->route('dashboard.user.index')->with('success', 'User berhasil diperbarui.');
    }

    // Menampilkan form tambah pengguna
    public function create()
    {
        return view('pages.dashboard.user.create');
    }

    // Memproses penghapusan pengguna
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.user.index')->with('success', 'User berhasil dihapus.');
    }

    // Memproses penyimpanan pengguna baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', 
            'roles' => 'required|integer|in:1,2', 
        ]);

        // Buat pengguna baru
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), 
            'roles' => $validated['roles'], 
        ]);

        return redirect()->route('dashboard.user.index')->with('success', 'Pengguna berhasil dibuat.');
    }
}
