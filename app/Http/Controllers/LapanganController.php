<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    /**
     * Tampilkan daftar semua lapangan.
     */
    public function index()
    {
        // Ambil semua data lapangan dari database
        $lapangan = Lapangan::all();

        return view('lapangan.index', compact('lapangan'));
    }

    /**
     * Tampilkan detail lapangan berdasarkan ID.
     */
    public function show($id)
    {
        // Ambil data lapangan berdasarkan ID
        $lapangan = Lapangan::findOrFail($id);

        return view('lapangan.show', compact('lapangan'));
    }
}
