<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LapanganSeeder extends Seeder
{
    public function run()
    {
        DB::table('lapangans')->insert([
            [
                'nama' => 'Lapangan Badminton',
                'gambar' => 'badminton.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Lapangan Basket',
                'gambar' => 'basket.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Lapangan Futsal',
                'gambar' => 'futsal.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Lapangan Voli',
                'gambar' => 'voli.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
