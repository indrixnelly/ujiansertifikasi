<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Komentar;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::orderBy('tanggal', 'desc')->get();
        return view('history.index', ['histories' => $histories]);

    }

    public function create()
    {
        return view('history.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'nama_anggaran.*' => 'string',
            // 'anggaran.*' => 'numeric',
        ]);

        if (auth()->check()) {
            $validatedData['user_id'] = auth()->user()->id;
        } else {
            return redirect('/')->with('error', 'Mohon Login Untuk Menambahkan Data Riwayat Proyek');
        }

        // Gabungkan anggaran menjadi satu string dipisahkan koma
        // $anggaranString = implode(',', $validatedData['nama_anggaran']);
        // $validatedData['nama_anggaran'] = $anggaranString;

        // Gabungkan anggaran menjadi satu string dipisahkan koma
        // $nama_anggaranString = implode(',', $validatedData['anggaran']);
        // $validatedData['anggaran'] = $nama_anggaranString;

        // Gambar
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('gambar/', $request->file('foto')->getClientOriginalName());
            $validatedData['foto'] = $request->file('foto')->getClientOriginalName();
        }

        History::create($validatedData);
        return redirect('/history')->with('success', 'Data History Project Baru Berhasil Ditambahkan');
    }

    public function show()
    {
        $histories = History::get();
        return view('welcome', ['histories' => $histories]);
    }

    public function showDetail($id)
    {
        $history = History::findOrFail($id);
        
        // Memisahkan string anggaran menjadi array
        $nama_anggaranArray = explode(',', $history->nama_anggaran);
        $anggaranArray = explode(',', $history->anggaran);
        
        $comments = Komentar::where('id_histories', $id)->get();
        
        // Mengirimkan data history, anggaran array, dan komentar ke tampilan
        return view('detail', [
            "history" => $history,
            // 'nama_anggaranArray' => $nama_anggaranArray,
            // 'anggaranArray' => $anggaranArray,
            'comments' => $comments
        ]);
    }    

    public function detail($id)
    {
        $history = History::findOrFail($id);
        $comments = Komentar::where('id_histories', $id)->get();
        return view('komentar.index', ["history" => $history, 'comments' => $comments]);
    }
    public function edit(History $history)
    {
        // Ambil nilai anggaran dari kolom dalam tabel history
        // $anggaranData = explode(',', $history->anggaran);
        // $namaAnggaranData = explode(',', $history->nama_anggaran);
        
        // Kembalikan view edit dengan data history dan anggaran
        return view('history.edit', [
            'history' => $history,
            // 'anggaranData' => $anggaranData,
            // 'namaAnggaranData' => $namaAnggaranData,
        ]);
    }

    public function update(Request $request, History $history)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            // 'nama_anggaran.*' => 'string',
            // 'anggaran.*' => 'numeric',
        ]);
    
        // Gabungkan anggaran menjadi satu string dipisahkan koma
        // $anggaranString = implode(',', $validatedData['nama_anggaran']);
        // $validatedData['nama_anggaran'] = $anggaranString;

        // Gabungkan anggaran menjadi satu string dipisahkan koma
        // $nama_anggaranString = implode(',', $validatedData['anggaran']);
        // $validatedData['anggaran'] = $nama_anggaranString;
    
        // Gambar
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('gambar/', $request->file('foto')->getClientOriginalName());
            $validatedData['foto'] = $request->file('foto')->getClientOriginalName();
        }
    
        // Update data sebelumnya dengan data baru
        $history->update($validatedData);

        return redirect()->back()->with('success', 'Riwayat Proyek Berhasil Diperbarui.');
    }    
    
    public function destroy(History $history)
    {
        History::destroy($history->id);
        return redirect('/history')->with('success', 'Data Riwayat Proyek Berhasil Dihapus');
    }
}