<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    // Menampilkan daftar pengguna
    
    public function index(){
    return view('pages.dashboard.user.index', [
        'users' => User::paginate(10) 
    ]);
    }

    public function edit($id){
    $user = User::findOrFail($id); 
    return view('pages.dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, $id){
    $request->validate([
        'roles' => 'required|string',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $user = User::findOrFail($id);
    $user->update($request->all());

    return redirect()->route('dashboard.user.index')->with('success', 'User updated successfully');
    }
    

    public function create() {
        return view('pages.dashboard.user.create');
    }

    public function delete($id)
    {
    // Cari user berdasarkan ID yang diberikan
    $user = User::findOrFail($id);
    
    // Hapus data user
    $user->delete();
    
    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('dashboard.user.index')->with('success', 'User berhasil dihapus.');
    }


    public function store(Request $request)
    {
    // Validasi data yang diterima
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed', // Pastikan password sesuai dan terkonfirmasi
        'role' => 'required|in:admin,user',
    ]);


    // Buat pengguna baru
    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']), // Enkripsi password
        'role' => $validated['role'],
    ]);

    return redirect()->route('dashboard.user.index')->with('success', 'Pengguna berhasil dibuat.');
}




}


