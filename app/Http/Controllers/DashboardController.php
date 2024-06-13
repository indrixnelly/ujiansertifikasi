<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\History;
use App\Models\Komentar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total pengguna yang bukan admin
        $totalUsers = User::where('level', '!=', 'admin')->count();
    
        // Menghitung jumlah riwayat proyek keseluruhan
        $totalHistories = History::count();
    
        // Menghitung total komentar
        $totalComments = Komentar::count();
    
        return view('dashboard', compact('totalUsers', 'totalHistories', 'totalComments'));
    }
}
