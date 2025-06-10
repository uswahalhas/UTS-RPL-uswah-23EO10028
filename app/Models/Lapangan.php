<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    /**
     * Kolom-kolom yang bisa diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nama', 'gambar'];

    /**
     * Accessor untuk mendapatkan URL gambar lapangan.
     *
     * Contoh penggunaan: $lapangan->gambar_url
     *
     * @return string
     */
    public function getGambarUrlAttribute()
    {
        return asset('images/lapangan/' . $this->gambar);
    }
}
