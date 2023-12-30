@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Tambah Data Barang</h1>
            <form action="/admin/barang" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Masukkan barang" name="nama_barang" value="{{ old('nama_barang') }}">
                    @error('nama_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori Barang</label>
                    <select class="form-select @error('kategori_id') is-invalid @enderror" aria-label="Default select example" name="kategori_id">
                        <option selected>Pilih Kategori Barang</option>
                        @foreach( $kategoris as $kategori )
                        <option value="{{ $kategori->kategori_id }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan harga barang" name="harga" value="{{ old('harga') }}">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stok Barang</label>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Masukkan stok barang" name="stock" value="{{ old('stock') }}">
                    @error('stock')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi barang" name="deskripsi" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="supplier_id" class="form-label">Nama Supplier</label>
                    <select class="form-select @error('supplier_id') is-invalid @enderror" aria-label="Default select example" name="supplier_id">
                        <option selected>Pilih Nama Supplier</option>
                        @foreach( $suppliers as $supplier )
                        <option value="{{ $supplier->supplier_id }}">{{ $supplier->nama_supplier }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" placeholder="Masukkan tanggal masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
                    @error('tanggal_masuk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="karyawan_id">Nama Karyawan yang Bertugas</label>
                    <select class="form-select @error('karyawan_id') is-invalid @enderror" aria-label="Default select example" name="karyawan_id">
                        <option selected>Pilih Nama Karyawan</option>
                        @foreach( $karyawans as $karyawan )
                        <option value="{{ $karyawan->karyawan_id }}">{{ $karyawan->nama_karyawan }}</option>
                        @endforeach
                    </select>
                    @error('karyawan_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
