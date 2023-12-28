@extends('layouts.layout')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Edit Barang</h1>
            <form method="post" action="/admin/barang/{{ $barang->barang_id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Masukkan barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                    @error('nama_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <in
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan harga barang" name="harga" value="{{ $barang->harga }}">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stok Barang</label>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Masukkan stok barang" name="stock" value="{{ $barang->stock }}">
                    @error('stock')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi barang" name="deskripsi" value="{{ $barang->deskripsi }}">
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection
