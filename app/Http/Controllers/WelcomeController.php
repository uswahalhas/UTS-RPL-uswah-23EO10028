<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Tampilkan halaman welcome dengan daftar lapangan.
     */
    public function index()
    {
        // Ambil semua data lapangan dari database
        $lapangan = Lapangan::all();

        // Kirim data lapangan ke view welcome
        return view('welcome', compact('lapangan'));
    }
}
