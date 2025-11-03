<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::create([
            'kode_produk' => 'BRG001',
            'nama_produk' => 'Pena',
            'jenis_produk_id' => 1,
            'harga' => 20000,
        ]);

        Produk::create([
            'kode_produk' => 'BRG002',
            'nama_produk' => 'Buku',
            'jenis_produk_id' => 1,
            'harga' => 15000,
        ]);
    }
}
