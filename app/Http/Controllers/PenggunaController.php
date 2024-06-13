<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Komentar;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::get();
        return view('pengguna.index', ['pengguna' => $pengguna]);

    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password), // Encrypt password
            'level' => 'pengguna', // Atur level pengguna
        ]);

        // Redirect pengguna ke halaman login setelah berhasil mendaftar
        return redirect('/pengguna')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        // Temukan pengguna yang akan dihapus
        $pengguna = User::findOrFail($id);
    
        // Temukan semua komentar yang terkait dengan pengguna yang akan dihapus
        $komentar = Komentar::where('id_user', $id)->get();
    
        // Hapus semua komentar yang terkait dengan pengguna
        foreach ($komentar as $komen) {
            $komen->delete();
        }
    
        // Hapus pengguna
        $pengguna->delete();
    
        return redirect()->back()->with('success', 'Pengguna dan komentar yang terkait berhasil dihapus.');
    }
    
    public function edit($id)
    {
        $pengguna = User::findOrFail($id);
        return view('pengguna.edit', ['pengguna' => $pengguna]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
        ]);
    
        $pengguna = User::findOrFail($id);
        $pengguna->name = $request->name;
        $pengguna->username = $request->username;
        if ($request->filled('password')) {
            $pengguna->password = Hash::make($request->password);
        }
        if ($request->filled('level')) {
            $pengguna->level = $request->level;
        }
        $pengguna->save();
    
        return redirect()->back()->with('success', 'Pengguna berhasil diperbarui.');
    }
}