<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function index()
    {
        $komentar = Komentar::get(); 
        return view('komentar.index', ['komentar' => $komentar]);

    }

    public function create($id)
    {
        $history = History::findOrFail($id);
        return view('komentar.create', ['history' => $history]);
    }
    
    public function store(Request $request)
    {
        // Lakukan validasi data
        $validatedData = $request->validate([
            'isi_komentar' => 'required',
            'id_histories' => 'required',
            'id_user' => 'required'
        ]);
    
        // Simpan data ke dalam database
        $komentar = new Komentar();
        $komentar->isi_komentar = $validatedData['isi_komentar'];
        $komentar->id_histories = $validatedData['id_histories'];
        $komentar->id_user = $validatedData['id_user'];
        $komentar->save();
    
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        $komentar = Komentar::findOrFail($id);
        $history = $komentar->history;
        return view('komentar.edit', ['komentar' => $komentar, 'history' => $history]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'isi_komentar' => 'required'
        ]);

        $komentar = Komentar::findOrFail($id);
        $komentar->update([
            'isi_komentar' => $request->isi_komentar
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $comment = Komentar::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Komentar berhasil dihapus.');
    }
}
