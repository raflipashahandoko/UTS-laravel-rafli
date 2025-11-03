<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisProduk;

class JenisProdukSeeder extends Seeder
{
    public function run(): void
    {
        $data = ['Alat tulis', 'Elektronik', 'Sembako', 'Pakaian'];

        foreach ($data as $item) {
            JenisProduk::create(['nama_jenis' => $item]);
        }
    }
}
