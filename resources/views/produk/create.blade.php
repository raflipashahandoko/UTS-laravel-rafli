@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Form Tambah Produk</h2>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Kode Produk</label>
                <input type="text" name="kode_produk" class="form-control" placeholder="Input Kode Produk" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="Input Nama Produk" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Jenis Produk</label>
                <select name="jenis_produk_id" class="form-select" required>
                    <option value="" disabled selected>Pilih Produk</option>
                    @foreach ($jenis as $j)
                    <option value="{{ $j->id }}">{{ $j->nama_jenis }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Input Harga" required>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection