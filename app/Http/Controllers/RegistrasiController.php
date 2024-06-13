<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
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
        return redirect('/login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    public function register()
    {
        return view('registrasi');
    }

}