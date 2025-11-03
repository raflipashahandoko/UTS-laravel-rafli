@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold m-0">Halaman Produk</h2>
        <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
    </div>


    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
            <tr>
                <td>{{ $produk->kode_produk }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->jenis->nama_jenis }}</td>
                <td>{{ number_format($produk->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection