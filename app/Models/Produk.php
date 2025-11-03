<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'jenis_produk_id',
        'harga',
    ];
    public function jenis()
    {
        return $this->belongsTo(JenisProduk::class, 'jenis_produk_id');
    }
}
